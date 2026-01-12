/* =====================================================
   GUI LOG TRANSPORTES - JAVASCRIPT
   ===================================================== */

document.addEventListener("DOMContentLoaded", () => {
  // -----------------------------------------------------
  // -----------------------------------------------------
  const themeToggle = document.getElementById("themeToggle");
  const themeToggleMobile = document.getElementById("themeToggleMobile");
  const html = document.documentElement;

  // Função para atualizar o texto do botão mobile
  function updateMobileThemeText() {
    const themeText = themeToggleMobile?.querySelector(".theme-toggle-text");
    if (themeText) {
      const currentTheme = html.getAttribute("data-theme");
      themeText.textContent =
        currentTheme === "dark" ? "Tema Claro" : "Tema Escuro";
    }
  }

  // Função para alternar o tema
  function toggleTheme() {
    const currentTheme = html.getAttribute("data-theme");
    const newTheme = currentTheme === "dark" ? "light" : "dark";

    html.setAttribute("data-theme", newTheme);
    localStorage.setItem("guilog-theme", newTheme);

    // Atualizar meta theme-color
    const metaThemeColor = document.querySelector('meta[name="theme-color"]');
    if (metaThemeColor) {
      metaThemeColor.setAttribute(
        "content",
        newTheme === "dark" ? "#0f1729" : "#f8fafc"
      );
    }

    updateMobileThemeText();
  }

  // Carregar tema salvo ou detectar preferência do sistema
  function loadSavedTheme() {
    const savedTheme = localStorage.getItem("guilog-theme");

    if (savedTheme) {
      html.setAttribute("data-theme", savedTheme);
    } else {
      // Detectar preferência do sistema
      const prefersDark = window.matchMedia(
        "(prefers-color-scheme: dark)"
      ).matches;
      html.setAttribute("data-theme", prefersDark ? "dark" : "light");
    }

    updateMobileThemeText();
  }

  // Inicializar tema
  loadSavedTheme();

  // Event listeners para os botões de tema
  if (themeToggle) {
    themeToggle.addEventListener("click", toggleTheme);
  }

  if (themeToggleMobile) {
    themeToggleMobile.addEventListener("click", toggleTheme);
  }

  // Escutar mudanças na preferência do sistema
  window
    .matchMedia("(prefers-color-scheme: dark)")
    .addEventListener("change", (e) => {
      if (!localStorage.getItem("guilog-theme")) {
        html.setAttribute("data-theme", e.matches ? "dark" : "light");
        updateMobileThemeText();
      }
    });

  // -----------------------------------------------------
  // MOBILE MENU TOGGLE
  // -----------------------------------------------------
  const mobileMenuBtn = document.getElementById("mobileMenuBtn");
  const mobileNav = document.getElementById("mobileNav");
  const menuIcon = mobileMenuBtn?.querySelector(".menu-icon");
  const closeIcon = mobileMenuBtn?.querySelector(".close-icon");

  if (mobileMenuBtn && mobileNav) {
    mobileMenuBtn.addEventListener("click", () => {
      const isOpen = !mobileNav.classList.contains("hidden");

      if (isOpen) {
        mobileNav.classList.add("hidden");
        menuIcon?.classList.remove("hidden");
        closeIcon?.classList.add("hidden");
      } else {
        mobileNav.classList.remove("hidden");
        menuIcon?.classList.add("hidden");
        closeIcon?.classList.remove("hidden");
      }
    });

    // Close mobile menu when clicking on a link
    const mobileNavLinks = mobileNav.querySelectorAll("a");
    mobileNavLinks.forEach((link) => {
      link.addEventListener("click", () => {
        mobileNav.classList.add("hidden");
        menuIcon?.classList.remove("hidden");
        closeIcon?.classList.add("hidden");
      });
    });
  }

  // -----------------------------------------------------
  // HEADER SCROLL EFFECT
  // -----------------------------------------------------
  const header = document.getElementById("header");
  let lastScrollY = window.scrollY;

  window.addEventListener("scroll", () => {
    const currentScrollY = window.scrollY;

    if (currentScrollY > 100) {
      header.style.backgroundColor = "var(--header-bg-scroll)";
    } else {
      header.style.backgroundColor = "var(--header-bg)";
    }

    lastScrollY = currentScrollY;
  });

  // -----------------------------------------------------
  // FAQ ACCORDION
  // -----------------------------------------------------
  const faqItems = document.querySelectorAll(".faq-item");

  faqItems.forEach((item) => {
    const question = item.querySelector(".faq-question");

    question?.addEventListener("click", () => {
      // Check if this item is already active
      const isActive = item.classList.contains("active");

      // Close all items
      faqItems.forEach((otherItem) => {
        otherItem.classList.remove("active");
      });

      // If the clicked item wasn't active, open it
      if (!isActive) {
        item.classList.add("active");
      }
    });
  });

  // -----------------------------------------------------
  // SMOOTH SCROLL FOR ANCHOR LINKS
  // -----------------------------------------------------
  const anchorLinks = document.querySelectorAll('a[href^="#"]');

  anchorLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      const href = this.getAttribute("href");

      // Skip if it's just "#"
      if (href === "#") return;

      const target = document.querySelector(href);

      if (target) {
        e.preventDefault();

        const headerHeight = header?.offsetHeight || 64;
        const targetPosition =
          target.getBoundingClientRect().top + window.scrollY - headerHeight;

        window.scrollTo({
          top: targetPosition,
          behavior: "smooth",
        });
      }
    });
  });

  // -----------------------------------------------------
  // CONTACT FORM HANDLING
  // -----------------------------------------------------
  const contactForm = document.getElementById("contactForm");

  if (contactForm) {
    contactForm.addEventListener("submit", (e) => {
      e.preventDefault();

      // Get form data
      const formData = new FormData(contactForm);
      const data = {
        name: formData.get("name"),
        email: formData.get("email"),
        phone: formData.get("phone"),
        company: formData.get("company"),
        message: formData.get("message"),
      };

      // Here you would typically send the data to a server
      console.log("Form submitted:", data);

      // Show success message
      alert(
        "Obrigado! Sua mensagem foi enviada com sucesso. Retornaremos em até 2 horas."
      );

      // Reset form
      contactForm.reset();
    });
  }

  // -----------------------------------------------------
  // PHONE INPUT MASK
  // -----------------------------------------------------
  const phoneInput = document.getElementById("phone");

  if (phoneInput) {
    phoneInput.addEventListener("input", (e) => {
      let value = e.target.value.replace(/\D/g, "");

      if (value.length <= 11) {
        if (value.length <= 2) {
          value = value.replace(/(\d{0,2})/, "($1");
        } else if (value.length <= 7) {
          value = value.replace(/(\d{2})(\d{0,5})/, "($1) $2");
        } else {
          value = value.replace(/(\d{2})(\d{5})(\d{0,4})/, "($1) $2-$3");
        }
      }

      e.target.value = value;
    });
  }

  // -----------------------------------------------------
  // INTERSECTION OBSERVER FOR ANIMATIONS
  // -----------------------------------------------------
  const observerOptions = {
    root: null,
    rootMargin: "0px",
    threshold: 0.1,
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("animate-in");
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // Observe elements that should animate on scroll
  const animateElements = document.querySelectorAll(
    ".stat-card, .service-card, .process-step, .testimonial-card, .region-card, .faq-item"
  );

  animateElements.forEach((element) => {
    element.style.opacity = "0";
    element.style.transform = "translateY(20px)";
    element.style.transition = "opacity 0.5s ease, transform 0.5s ease";
    observer.observe(element);
  });

  // Add CSS for animate-in class
  const style = document.createElement("style");
  style.textContent = `
    .animate-in {
      opacity: 1 !important;
      transform: translateY(0) !important;
    }
  `;
  document.head.appendChild(style);

  // -----------------------------------------------------
  // COUNTER ANIMATION FOR STATS
  // -----------------------------------------------------
  function animateCounter(element, target, suffix = "") {
    const duration = 2000;
    const start = 0;
    const startTime = performance.now();

    function update(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);

      // Easing function
      const easeOutQuart = 1 - Math.pow(1 - progress, 4);
      const current = Math.floor(easeOutQuart * target);

      element.textContent = current.toLocaleString("pt-BR") + suffix;

      if (progress < 1) {
        requestAnimationFrame(update);
      } else {
        element.textContent = target.toLocaleString("pt-BR") + suffix;
      }
    }

    requestAnimationFrame(update);
  }

  // Observe stat values for counter animation
  const statValues = document.querySelectorAll(".stat-value");
  const statsObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const element = entry.target;
          const text = element.textContent;

          // Parse the number and suffix
          const match = text.match(/^([\d.,]+)(\+|%)?$/);
          if (match) {
            const number = Number.parseInt(match[1].replace(/\D/g, ""));
            const suffix = match[2] || "";
            animateCounter(element, number, suffix);
          }

          statsObserver.unobserve(element);
        }
      });
    },
    { threshold: 0.5 }
  );

  statValues.forEach((stat) => {
    statsObserver.observe(stat);
  });

  // -----------------------------------------------------
  // PARALLAX EFFECT FOR HERO BACKGROUND
  // -----------------------------------------------------
  const heroBg = document.querySelector(".hero-bg img");

  if (heroBg) {
    window.addEventListener("scroll", () => {
      const scrollY = window.scrollY;
      const heroSection = document.querySelector(".hero");
      const heroHeight = heroSection?.offsetHeight || 0;

      if (scrollY < heroHeight) {
        const parallaxValue = scrollY * 0.3;
        heroBg.style.transform = `translateY(${parallaxValue}px)`;
      }
    });
  }

  // -----------------------------------------------------
  // LAZY LOADING FOR IMAGES
  // -----------------------------------------------------
  const lazyImages = document.querySelectorAll('img[src*="placeholder"]');

  const imageObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.style.opacity = "1";
          imageObserver.unobserve(img);
        }
      });
    },
    { rootMargin: "50px" }
  );

  lazyImages.forEach((img) => {
    img.style.opacity = "0.5";
    img.style.transition = "opacity 0.3s ease";
    imageObserver.observe(img);
  });

  // -----------------------------------------------------
  // FLOATING CARDS ANIMATION
  // -----------------------------------------------------
  const floatingCards = document.querySelectorAll(
    ".floating-card, .features-floating-card, .coverage-stat"
  );

  floatingCards.forEach((card, index) => {
    const delay = index * 0.2;
    card.style.animation = `float 3s ease-in-out ${delay}s infinite`;
  });

  // Add float animation
  const floatStyle = document.createElement("style");
  floatStyle.textContent = `
    @keyframes float {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-10px);
      }
    }
  `;
  document.head.appendChild(floatStyle);

  // -----------------------------------------------------
  // BUTTON HOVER EFFECTS (disabled on touch devices)
  // -----------------------------------------------------
  const isTouchDevice =
    "ontouchstart" in window || navigator.maxTouchPoints > 0;

  if (!isTouchDevice) {
    const buttons = document.querySelectorAll(".btn");

    buttons.forEach((btn) => {
      btn.addEventListener("mouseenter", function () {
        this.style.transform = "translateY(-2px)";
      });

      btn.addEventListener("mouseleave", function () {
        this.style.transform = "translateY(0)";
      });
    });
  }

  // -----------------------------------------------------
  // SCROLL TO TOP FUNCTIONALITY
  // -----------------------------------------------------
  const scrollTopBtn = document.createElement("button");
  scrollTopBtn.innerHTML = `
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="m18 15-6-6-6 6"/>
    </svg>
  `;
  scrollTopBtn.className = "scroll-top-btn";
  scrollTopBtn.setAttribute("aria-label", "Voltar ao topo");
  document.body.appendChild(scrollTopBtn);

  // Add styles for scroll to top button
  const scrollTopStyle = document.createElement("style");
  scrollTopStyle.textContent = `
    .scroll-top-btn {
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background-color: var(--primary);
      color: var(--primary-foreground);
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      z-index: 100;
      box-shadow: 0 4px 12px rgba(249, 115, 22, 0.3);
      border: none;
    }
    
    @media (min-width: 768px) {
      .scroll-top-btn {
        bottom: 24px;
        right: 24px;
      }
    }
    
    .scroll-top-btn:hover {
      transform: translateY(-4px);
      box-shadow: 0 6px 16px rgba(249, 115, 22, 0.4);
    }
    
    .scroll-top-btn.visible {
      opacity: 1;
      visibility: visible;
    }
  `;
  document.head.appendChild(scrollTopStyle);

  // Show/hide scroll to top button
  window.addEventListener("scroll", () => {
    if (window.scrollY > 500) {
      scrollTopBtn.classList.add("visible");
    } else {
      scrollTopBtn.classList.remove("visible");
    }
  });

  // Scroll to top on click
  scrollTopBtn.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });

  // -----------------------------------------------------
  // -----------------------------------------------------
  window.addEventListener("resize", () => {
    if (
      window.innerWidth >= 768 &&
      mobileNav &&
      !mobileNav.classList.contains("hidden")
    ) {
      mobileNav.classList.add("hidden");
      menuIcon?.classList.remove("hidden");
      closeIcon?.classList.add("hidden");
    }
  });

  console.log("Gui Log Transportes - Site carregado com sucesso!");
});
