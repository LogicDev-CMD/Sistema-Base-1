@extends('layouts.app')

@section('title', 'Gui Log Transportes')

@section('content')
    <main>
        <!-- Hero Section -->
        <section id="inicio" class="hero">
            <div class="hero-bg">
                <img src="{{ asset('assets/img/banner.jpg') }}" alt="Frota Gui Log Transportes" />
                <div class="hero-overlay"></div>
                <div class="hero-overlay-bottom"></div>
            </div>

            <!-- Animated elements -->
            <div class="hero-glow">
                <div class="glow-1"></div>
                <div class="glow-2"></div>
            </div>

            <div class="container">
                <div class="hero-grid">
                    <div class="hero-content">
                        <!-- Rating Badge -->
                        <div class="rating-badge">
                            <div class="stars">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                </svg>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                </svg>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                </svg>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                </svg>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <polygon
                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                </svg>
                            </div>
                            <span>4.9/5 - Avaliado por mais de 500 clientes</span>
                        </div>

                        <!-- Headline -->
                        <h1 class="hero-title">
                            Sua carga em
                            <span class="text-primary underline-animated">movimento</span>,
                            seu negócio em <span class="text-primary">crescimento</span>
                        </h1>

                        <!-- Subheadline -->
                        <p class="hero-subtitle">
                            Soluções completas em transporte e logística com
                            <strong>segurança garantida</strong>
                            e entregas pontuais para todo o Brasil. Confie em quem tem
                            <strong>+15 anos de experiência</strong>.
                        </p>

                        <!-- CTA Buttons -->
                        <div class="hero-buttons">
                            <a href="#contato" class="btn btn-primary btn-lg">
                                Solicitar Cotação Grátis
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                </svg>
                            </a>
                            <a href="#processo" class="btn btn-outline btn-lg">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="6 3 20 12 6 21 6 3" />
                                </svg>
                                Ver Como Funciona
                            </a>
                        </div>

                        <!-- Trust Badges -->
                        <div class="trust-badges">
                            <div class="trust-badge">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                                <span>Cobertura Nacional</span>
                            </div>
                            <div class="trust-badge">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <polyline points="12 6 12 12 16 14" />
                                </svg>
                                <span>Entregas Expressas</span>
                            </div>
                            <div class="trust-badge">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                </svg>
                                <span>100% Segurado</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scroll indicator -->
            <div class="scroll-indicator">
                <span>Scroll</span>
                <div class="scroll-mouse">
                    <div class="scroll-dot"></div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="stats">
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon blue">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m22 2-7 20-4-9-9-4Z" />
                                <path d="M22 2 11 13" />
                            </svg>
                        </div>
                        <div class="stat-value">15+</div>
                        <div class="stat-label">Anos de Experiência</div>
                        <div class="stat-description">
                            Consolidados no mercado de transportes
                        </div>
                        <div class="stat-corner"></div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon primary">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2" />
                                <path d="M15 18H9" />
                                <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14" />
                                <circle cx="17" cy="18" r="2" />
                                <circle cx="7" cy="18" r="2" />
                            </svg>
                        </div>
                        <div class="stat-value">50.000+</div>
                        <div class="stat-label">Entregas Realizadas</div>
                        <div class="stat-description">
                            Com sucesso e segurança garantida
                        </div>
                        <div class="stat-corner"></div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon green">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <div class="stat-value">2.500+</div>
                        <div class="stat-label">Clientes Satisfeitos</div>
                        <div class="stat-description">Em todo o território nacional</div>
                        <div class="stat-corner"></div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon purple">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6" />
                                <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18" />
                                <path d="M4 22h16" />
                                <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22" />
                                <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22" />
                                <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z" />
                            </svg>
                        </div>
                        <div class="stat-value">98%</div>
                        <div class="stat-label">Taxa de Satisfação</div>
                        <div class="stat-description">
                            Avaliação média dos nossos clientes
                        </div>
                        <div class="stat-corner"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="servicos" class="services">
            <div class="container">
                <!-- Section Header -->
                <div class="section-header section-header-split">
                    <div class="section-header-content">
                        <span class="section-badge">Nossos Serviços</span>
                        <h2 class="section-title">
                            Soluções completas em logística para seu negócio
                        </h2>
                        <p class="section-subtitle">
                            Oferecemos uma gama completa de serviços para atender todas as
                            necessidades de transporte e logística da sua empresa.
                        </p>
                    </div>
                    <a href="#" class="btn btn-outline">
                        Ver Todos os Serviços
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <!-- Services Grid -->
                <div class="services-grid">
                    <!-- Service 1 -->
                    <div class="service-card highlighted">
                        <span class="popular-badge">Popular</span>
                        <div class="service-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2" />
                                <path d="M15 18H9" />
                                <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14" />
                                <circle cx="17" cy="18" r="2" />
                                <circle cx="7" cy="18" r="2" />
                            </svg>
                        </div>
                        <h3 class="service-title">Transporte Rodoviário</h3>
                        <p class="service-description">
                            Frota moderna com mais de 100 veículos rastreados via GPS.
                            Entregas em todo o território nacional com segurança e
                            pontualidade garantidas.
                        </p>
                        <ul class="service-features">
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                </svg>
                                Frota própria rastreada
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                </svg>
                                Cobertura nacional
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                </svg>
                                Motoristas treinados
                            </li>
                        </ul>
                        <a href="#" class="service-link">
                            Saiba mais
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    <!-- Service 2 -->
                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m7.5 4.27 9 5.15" />
                                <path
                                    d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z" />
                                <path d="m3.3 7 8.7 5 8.7-5" />
                                <path d="M12 22V12" />
                            </svg>
                        </div>
                        <h3 class="service-title">Carga Fracionada</h3>
                        <p class="service-description">
                            Ideal para volumes menores. Consolidamos sua carga com outras
                            para reduzir custos sem comprometer a qualidade do serviço.
                        </p>
                        <ul class="service-features">
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                </svg>
                                Economia de custos
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                </svg>
                                Coleta programada
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                </svg>
                                Rastreamento incluso
                            </li>
                        </ul>
                        <a href="#" class="service-link">
                            Saiba mais
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    <!-- Service 3 -->
                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M22 8.35V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8.35A2 2 0 0 1 3.26 6.5l8-3.2a2 2 0 0 1 1.48 0l8 3.2A2 2 0 0 1 22 8.35Z" />
                                <path d="M6 18h12" />
                                <path d="M6 14h12" />
                                <rect width="12" height="12" x="6" y="10" />
                            </svg>
                        </div>
                        <h3 class="service-title">Armazenagem e Fulfillment</h3>
                        <p class="service-description">
                            Centros de distribuição estratégicos com 50.000m² de área.
                            Gestão completa de estoque com sistema WMS integrado.
                        </p>
                        <ul class="service-features">
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                </svg>
                                Sistema WMS
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                </svg>
                                Cross-docking
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                </svg>
                                Gestão de estoque
                            </li>
                        </ul>
                        <a href="#" class="service-link">
                            Saiba mais
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    <!-- Service 4 -->
                    <div class="service-card highlighted">
                        <span class="popular-badge">Popular</span>
                        <div class="service-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z" />
                            </svg>
                        </div>
                        <h3 class="service-title">Entrega Expressa</h3>
                        <p class="service-description">
                            Serviço dedicado para cargas urgentes. Coleta em até 2 horas e
                            entrega no mesmo dia ou no dia seguinte.
                        </p>
                        <ul class="service-features">
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                </svg>
                                Coleta em 2h
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                </svg>
                                Entrega same-day
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                </svg>
                                Prioridade máxima
                            </li>
                        </ul>
                        <a href="#" class="service-link">
                            Saiba mais
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    <!-- Service 6 -->
                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 3v18h18" />
                                <path d="m19 9-5 5-4-4-3 3" />
                            </svg>
                        </div>
                        <h3 class="service-title">Logística Integrada</h3>
                        <p class="service-description">
                            Soluções personalizadas de supply chain. Análise de dados e
                            relatórios para otimizar toda sua operação logística.
                        </p>
                        <ul class="service-features">
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                </svg>
                                Consultoria
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                </svg>
                                Relatórios BI
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                </svg>
                                Integração API
                            </li>
                        </ul>
                        <a href="#" class="service-link">
                            Saiba mais
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section id="processo" class="process">
            <div class="container">
                <!-- Section Header -->
                <div class="section-header section-header-center">
                    <span class="section-badge">Como Funciona</span>
                    <h2 class="section-title">Simples, rápido e sem complicação</h2>
                    <p class="section-subtitle">
                        Enviar sua carga com a Gui Log é fácil. Veja como funciona nosso
                        processo em 4 passos simples.
                    </p>
                </div>

                <!-- Steps -->
                <div class="process-grid">
                    <div class="process-step">
                        <div class="process-step-card">
                            <span class="step-number">01</span>
                            <div class="step-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                </svg>
                            </div>
                            <h3 class="step-title">Solicite uma Cotação</h3>
                            <p class="step-description">
                                Entre em contato pelo site, WhatsApp ou telefone. Informe
                                origem, destino e tipo de carga.
                            </p>
                        </div>
                        <div class="step-connector"></div>
                    </div>

                    <div class="process-step">
                        <div class="process-step-card">
                            <span class="step-number">02</span>
                            <div class="step-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                    <path d="M10 9H8" />
                                    <path d="M16 13H8" />
                                    <path d="M16 17H8" />
                                </svg>
                            </div>
                            <h3 class="step-title">Receba sua Proposta</h3>
                            <p class="step-description">
                                Em até 2 horas você recebe uma proposta detalhada com prazo,
                                valor e condições de pagamento.
                            </p>
                        </div>
                        <div class="step-connector"></div>
                    </div>

                    <div class="process-step">
                        <div class="process-step-card">
                            <span class="step-number">03</span>
                            <div class="step-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2" />
                                    <path d="M15 18H9" />
                                    <path
                                        d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14" />
                                    <circle cx="17" cy="18" r="2" />
                                    <circle cx="7" cy="18" r="2" />
                                </svg>
                            </div>
                            <h3 class="step-title">Coletamos sua Carga</h3>
                            <p class="step-description">
                                Agendamos a coleta no local e horário que for melhor para
                                você. Emitimos CT-e e NFS-e.
                            </p>
                        </div>
                        <div class="step-connector"></div>
                    </div>

                    <div class="process-step">
                        <div class="process-step-card">
                            <span class="step-number">04</span>
                            <div class="step-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                    <polyline points="22 4 12 14.01 9 11.01" />
                                </svg>
                            </div>
                            <h3 class="step-title">Entrega Garantida</h3>
                            <p class="step-description">
                                Acompanhe em tempo real e receba notificações. Confirmação de
                                entrega com foto e assinatura.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="sobre" class="features">
            <div class="container">
                <div class="features-grid">
                    <!-- Content -->
                    <div class="features-content">
                        <span class="section-badge">Por Que Nos Escolher</span>
                        <h2 class="section-title">
                            Experiência e confiança em cada entrega
                        </h2>
                        <p class="features-text">
                            Com mais de <strong>15 anos no mercado</strong>, a Gui Log
                            Transportes construiu uma reputação sólida baseada em
                            compromisso, pontualidade e atendimento de excelência.
                            Investimos constantemente em
                            <strong>tecnologia de ponta</strong> e capacitação para oferecer
                            o melhor serviço de transporte e logística do Brasil.
                        </p>

                        <div class="features-list">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z" />
                                    </svg>
                                </div>
                                <span>Frota própria e rastreada via GPS 24h</span>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect width="18" height="11" x="3" y="11" rx="2"
                                            ry="2" />
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                    </svg>
                                </div>
                                <span>Seguro de carga incluso em todas as operações</span>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M3 11h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5Zm0 0a9 9 0 1 1 18 0m0 0v5a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3Z" />
                                    </svg>
                                </div>
                                <span>Atendimento personalizado e dedicado</span>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6" />
                                        <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18" />
                                        <path d="M4 22h16" />
                                        <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22" />
                                        <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22" />
                                        <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z" />
                                    </svg>
                                </div>
                                <span>Prazos garantidos por contrato</span>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m22 2-7 20-4-9-9-4Z" />
                                        <path d="M22 2 11 13" />
                                    </svg>
                                </div>
                                <span>Sistema de cotação online instantânea</span>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                        <polyline points="22 4 12 14.01 9 11.01" />
                                    </svg>
                                </div>
                                <span>Relatórios de performance e KPIs</span>
                            </div>
                        </div>

                        <!-- Certifications -->
                        <div class="certifications">
                            <p class="certifications-label">Certificações e Credenciais:</p>
                            <div class="certifications-list">
                                <span class="certification-badge">ISO 9001:2015</span>
                                <span class="certification-badge">SASSMAQ</span>
                                <span class="certification-badge">OEA - Operador Econômico Autorizado</span>
                                <span class="certification-badge">Licença ANTT</span>
                            </div>
                        </div>
                    </div>

                    <!-- Visual -->
                    <div class="features-visual">
                        <div class="features-image">
                            <img src="{{ asset('assets/img/professional.jpg') }}" alt="Equipe Gui Log Transportes" />
                        </div>

                        <!-- Floating Cards -->
                        <div class="features-floating-card features-floating-top">
                            <div class="floating-icon success">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                    <polyline points="22 4 12 14.01 9 11.01" />
                                </svg>
                            </div>
                            <div>
                                <div class="floating-value">50.000+</div>
                                <div class="floating-label">Entregas realizadas</div>
                            </div>
                        </div>

                        <div class="features-floating-card features-floating-bottom">
                            <div class="floating-icon primary">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6" />
                                    <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18" />
                                    <path d="M4 22h16" />
                                    <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22" />
                                    <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22" />
                                    <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z" />
                                </svg>
                            </div>
                            <div>
                                <div class="floating-value">15+</div>
                                <div class="floating-label">Anos de mercado</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Coverage Section -->
        <section class="coverage">
            <div class="container">
                <div class="coverage-grid">
                    <!-- Map Visual -->
                    <div class="coverage-map">
                        <div class="coverage-image">
                            <img src="{{ asset('assets/img/mapa-rota.jpeg') }}" alt="Mapa de cobertura Gui Log" />
                        </div>
                        <div class="coverage-stat coverage-stat-top">
                            <div class="coverage-stat-value text-primary">5.500+</div>
                            <div class="coverage-stat-label">Cidades atendidas</div>
                        </div>
                        <div class="coverage-stat coverage-stat-bottom">
                            <div class="coverage-stat-value">27</div>
                            <div class="coverage-stat-label">Estados cobertos</div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="coverage-content">
                        <span class="section-badge">Nossa Cobertura</span>
                        <h2 class="section-title">Presentes em todo o Brasil</h2>
                        <p class="coverage-text">
                            Com uma rede logística que cobre
                            <strong>todos os 27 estados brasileiros</strong>, garantimos que
                            sua carga chegue a qualquer destino com a mesma qualidade e
                            eficiência.
                        </p>

                        <!-- Regions -->
                        <div class="regions-list">
                            <div class="region-card">
                                <div class="region-header">
                                    <div class="region-name">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                            <circle cx="12" cy="10" r="3" />
                                        </svg>
                                        <span>Sudeste</span>
                                    </div>
                                    <span class="region-percentage">45%</span>
                                </div>
                                <div class="region-states">
                                    <span>São Paulo</span>
                                    <span>Rio de Janeiro</span>
                                    <span>Minas Gerais</span>
                                    <span>Espírito Santo</span>
                                </div>
                            </div>

                            <div class="region-card">
                                <div class="region-header">
                                    <div class="region-name">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                            <circle cx="12" cy="10" r="3" />
                                        </svg>
                                        <span>Sul</span>
                                    </div>
                                    <span class="region-percentage">25%</span>
                                </div>
                                <div class="region-states">
                                    <span>Paraná</span>
                                    <span>Santa Catarina</span>
                                    <span>Rio Grande do Sul</span>
                                </div>
                            </div>

                            <div class="region-card">
                                <div class="region-header">
                                    <div class="region-name">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                            <circle cx="12" cy="10" r="3" />
                                        </svg>
                                        <span>Nordeste</span>
                                    </div>
                                    <span class="region-percentage">15%</span>
                                </div>
                                <div class="region-states">
                                    <span>Bahia</span>
                                    <span>Pernambuco</span>
                                    <span>Ceará</span>
                                    <span>e mais 6 estados</span>
                                </div>
                            </div>

                            <div class="region-card">
                                <div class="region-header">
                                    <div class="region-name">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                            <circle cx="12" cy="10" r="3" />
                                        </svg>
                                        <span>Centro-Oeste</span>
                                    </div>
                                    <span class="region-percentage">10%</span>
                                </div>
                                <div class="region-states">
                                    <span>Goiás</span>
                                    <span>Mato Grosso</span>
                                    <span>Mato Grosso do Sul</span>
                                    <span>DF</span>
                                </div>
                            </div>

                            <div class="region-card">
                                <div class="region-header">
                                    <div class="region-name">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                            <circle cx="12" cy="10" r="3" />
                                        </svg>
                                        <span>Norte</span>
                                    </div>
                                    <span class="region-percentage">5%</span>
                                </div>
                                <div class="region-states">
                                    <span>Amazonas</span>
                                    <span>Pará</span>
                                    <span>e mais 5 estados</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials">
            <div class="container">
                <!-- Section Header -->
                <div class="section-header section-header-center">
                    <span class="section-badge">Depoimentos</span>
                    <h2 class="section-title">O que nossos clientes dizem</h2>
                    <p class="section-subtitle">
                        Mais de 2.500 empresas confiam na Gui Log para suas operações
                        logísticas. Veja o que elas têm a dizer.
                    </p>
                </div>

                <!-- Testimonials Grid -->
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <div class="quote-icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V21c0 1 0 1 1 1z" />
                                <path
                                    d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z" />
                            </svg>
                        </div>
                        <div class="testimonial-stars">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                        </div>
                        <p class="testimonial-text">
                            "A Gui Log transformou nossa logística. Reduzimos em 30% os
                            custos de transporte e melhoramos significativamente o nível de
                            serviço aos nossos clientes. A equipe da Gui Log foi muito profissional e
                            atenta aos detalhes. Recomendamos fortemente!"
                        </p>
                        <div class="testimonial-author">
                            <img src="{{ asset('assets/img/carlos-eduardo.jpg') }}" alt="Carlos Eduardo"
                                class="author-image" />
                            <div class="author-info">
                                <div class="author-name">Carlos Eduardo</div>
                                <div class="author-role">Diretor de Operações</div>
                                <div class="author-company">Tech Solutions Brasil</div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="quote-icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V21c0 1 0 1 1 1z" />
                                <path
                                    d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z" />
                            </svg>
                        </div>
                        <div class="testimonial-stars">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                        </div>
                        <p class="testimonial-text">
                            "Trabalhamos com a Gui Log há mais de 5 anos. A pontualidade e o
                            cuidado com nossa carga são impecáveis. O atendimento
                            personalizado faz toda a diferença no nosso dia a dia."
                        </p>
                        <div class="testimonial-author">
                            <img src="{{ asset('assets/img/fernanda-lima.png') }}" alt="Fernanda Lima"
                                class="author-image" />
                            <div class="author-info">
                                <div class="author-name">Fernanda Lima</div>
                                <div class="author-role">Gerente de Supply Chain</div>
                                <div class="author-company">Indústria Metalmax</div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="quote-icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V21c0 1 0 1 1 1z" />
                                <path
                                    d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z" />
                            </svg>
                        </div>
                        <div class="testimonial-stars">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                        </div>
                        <p class="testimonial-text">
                            "Para um e-commerce, logística é tudo. A Gui Log nos ajudou a
                            crescer 150% no último ano com entregas rápidas e seguras.
                            Recomendo fortemente para qualquer empresa que valorize
                            qualidade."
                        </p>
                        <div class="testimonial-author">
                            <img src="{{ asset('assets/img/roberto-santos.jpg') }}" alt="Roberto Santos"
                                class="author-image" />
                            <div class="author-info">
                                <div class="author-name">Roberto Santos</div>
                                <div class="author-role">CEO</div>
                                <div class="author-company">E-commerce Express</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partners Section -->
        <section class="partners">
            <div class="container">
                <div class="partners-card">
                    <div class="partners-decoration-1"></div>
                    <div class="partners-decoration-2"></div>
                    <div class="partners-content">
                        <div class="partners-header">
                            <div class="partners-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m11 17 2 2a1 1 0 1 0 3-3" />
                                    <path
                                        d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4" />
                                    <path d="M21 3 1 11h-2" />
                                    <path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3" />
                                    <path d="M3 4h8" />
                                </svg>
                            </div>
                            <span class="section-badge">Programa de Parceiros</span>
                        </div>

                        <h2 class="partners-title">Seja um Parceiro Gui Log</h2>
                        <p class="partners-text">
                            Junte-se a mais de 150 parceiros em todo o Brasil. Ofereça
                            soluções logísticas de qualidade para seus clientes e aumente
                            sua receita com comissões atrativas.
                        </p>

                        <div class="partners-benefits">
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m22 2-7 20-4-9-9-4Z" />
                                        <path d="M22 2 11 13" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="benefit-title">Aumente seus Lucros</div>
                                    <div class="benefit-description">
                                        Comissões atrativas e recorrentes
                                    </div>
                                </div>
                            </div>
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="benefit-title">Suporte Dedicado</div>
                                    <div class="benefit-description">
                                        Equipe exclusiva para parceiros
                                    </div>
                                </div>
                            </div>
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6" />
                                        <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18" />
                                        <path d="M4 22h16" />
                                        <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22" />
                                        <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22" />
                                        <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="benefit-title">Treinamentos</div>
                                    <div class="benefit-description">
                                        Capacitação contínua da sua equipe
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="partners-buttons">
                            <a href="#contato" class="btn btn-primary">Quero ser Parceiro</a>
                            <a href="#" class="btn btn-outline">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq">
            <div class="container">
                <div class="faq-grid">
                    <!-- Header -->
                    <div class="faq-header">
                        <span class="section-badge">Dúvidas Frequentes</span>
                        <h2 class="section-title">
                            Perguntas que recebemos com frequência
                        </h2>
                        <p class="faq-text">
                            Não encontrou o que procurava? Nossa equipe está pronta para
                            ajudar você com qualquer dúvida.
                        </p>
                        <a href="#contato" class="btn btn-primary btn-lg">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                            </svg>
                            Falar com Suporte
                        </a>
                    </div>

                    <!-- FAQ Items -->
                    <div class="faq-list">
                        <div class="faq-item active">
                            <button class="faq-question">
                                <span>Como solicitar uma cotação de frete?</span>
                                <svg class="faq-chevron" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </button>
                            <div class="faq-answer">
                                <p>
                                    Você pode solicitar uma cotação através do nosso site,
                                    WhatsApp ou telefone. Basta informar origem, destino, tipo
                                    de carga e peso. Em até 2 horas nossa equipe retorna com uma
                                    proposta detalhada sem compromisso.
                                </p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question">
                                <span>Qual a área de cobertura da Gui Log?</span>
                                <svg class="faq-chevron" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </button>
                            <div class="faq-answer">
                                <p>
                                    Atendemos todo o território nacional, cobrindo os 27 estados
                                    brasileiros e mais de 5.500 cidades. Temos bases
                                    operacionais estratégicas em São Paulo, Rio de Janeiro, Belo
                                    Horizonte, Curitiba, Porto Alegre e Recife.
                                </p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question">
                                <span>Quais tipos de carga vocês transportam?</span>
                                <svg class="faq-chevron" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </button>
                            <div class="faq-answer">
                                <p>
                                    Transportamos cargas secas em geral, incluindo mercadorias
                                    fracionadas e lotação completa. Atendemos diversos segmentos
                                    como e-commerce, indústria, varejo e distribuição. Para
                                    cargas especiais, entre em contato para avaliação.
                                </p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question">
                                <span>As cargas são seguradas?</span>
                                <svg class="faq-chevron" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </button>
                            <div class="faq-answer">
                                <p>
                                    Sim! Todas as cargas transportadas pela Gui Log contam com
                                    seguro incluso. Trabalhamos com seguradoras renomadas para
                                    garantir a proteção total da sua mercadoria durante todo o
                                    trajeto.
                                </p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question">
                                <span>Qual o prazo médio de entrega?</span>
                                <svg class="faq-chevron" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </button>
                            <div class="faq-answer">
                                <p>
                                    Os prazos variam conforme origem e destino. Para capitais do
                                    Sudeste, geralmente de 1 a 3 dias úteis. Para outras
                                    regiões, de 3 a 7 dias úteis. Oferecemos também serviço
                                    expresso com entrega no mesmo dia ou próximo dia útil.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contato" class="contact">
            <div class="container">
                <div class="contact-grid">
                    <!-- Contact Info -->
                    <div class="contact-info">
                        <span class="section-badge">Entre em Contato</span>
                        <h2 class="section-title">
                            Vamos conversar sobre sua logística?
                        </h2>
                        <p class="contact-text">
                            Nossa equipe comercial está pronta para entender suas
                            necessidades e apresentar a melhor solução logística para o seu
                            negócio. Entre em contato agora mesmo!
                        </p>

                        <div class="contact-items">
                            <a href="tel:+551130000000" class="contact-item">
                                <div class="contact-item-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="contact-item-label">Telefone</div>
                                    <div class="contact-item-value">(11) 3000-0000</div>
                                </div>
                            </a>

                            <a href="https://wa.me/5511999999999" class="contact-item" target="_blank" rel="noopener">
                                <div class="contact-item-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="contact-item-label">WhatsApp</div>
                                    <div class="contact-item-value">(11) 99999-9999</div>
                                </div>
                            </a>

                            <a href="mailto:contato@guilog.com.br" class="contact-item">
                                <div class="contact-item-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect width="20" height="16" x="2" y="4" rx="2" />
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="contact-item-label">E-mail</div>
                                    <div class="contact-item-value">contato@guilog.com.br</div>
                                </div>
                            </a>

                            <div class="contact-item">
                                <div class="contact-item-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                        <circle cx="12" cy="10" r="3" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="contact-item-label">Endereço</div>
                                    <div class="contact-item-value">
                                        Av. Paulista, 1000 - São Paulo, SP
                                    </div>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-item-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10" />
                                        <polyline points="12 6 12 12 16 14" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="contact-item-label">Horário</div>
                                    <div class="contact-item-value">Seg-Sex: 8h às 18h</div>
                                </div>
                            </div>
                        </div>

                        <!-- Map Preview -->
                        <div class="contact-map">
                            <img src="{{ asset('assets/img/google-maps-sao-paulo.jpg') }}" alt="Localização Gui Log" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta">
            <div class="cta-bg">
                <img src="/placeholder.svg?height=600&width=1920" alt="Background" />
                <div class="cta-overlay"></div>
            </div>

            <div class="container">
                <div class="cta-content">
                    <div class="cta-badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z" />
                        </svg>
                        <span>Resposta em até 2 horas</span>
                    </div>

                    <h2 class="cta-title">
                        Pronto para otimizar sua logística e
                        <span class="text-primary">reduzir custos?</span>
                    </h2>

                    <p class="cta-text">
                        Junte-se a mais de 2.500 empresas que confiam na Gui Log para suas
                        operações logísticas. Solicite uma cotação grátis e sem
                        compromisso.
                    </p>

                    <div class="cta-buttons">
                        <a href="#contato" class="btn btn-primary btn-xl">
                            Solicitar Cotação Grátis
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                            </svg>
                        </a>
                        <a href="tel:+551130000000" class="btn btn-glass btn-xl">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                            (11) 3000-0000
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
