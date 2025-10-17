@extends('includes.main')
@section('mainContent')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="hero-content">
                        <h1 data-aos="fade-up" data-aos-delay="200">Hello, I'm <span class="highlight">Devnestic Solutions</span></h1>
                        <h2 data-aos="fade-up" data-aos-delay="300">Creative <span class="typed" data-typed-items="UI/UX Designer, Web Developer, Digital Artist, Brand Strategist"></span></h2>
                        <p data-aos="fade-up" data-aos-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="hero-actions" data-aos="fade-up" data-aos-delay="500">
                            <a href="portfolio.html" class="btn btn-primary">View My Work</a>
                            <a href="contact.html" class="btn btn-outline">Get In Touch</a>
                        </div>
                        <div class="social-links" data-aos="fade-up" data-aos-delay="600">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                            <a href="#"><i class="bi bi-github"></i></a>
                            <a href="#"><i class="bi bi-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="hero-image" data-aos="zoom-in" data-aos-delay="300">
                        <div class="image-wrapper">
                            <img src="{{ asset('landingpage/assets/img/profile/profile-square-11.webp') }}" alt="Sarah Mitchell" class="img-fluid">
                            <div class="floating-elements">
                                <div class="floating-card design" data-aos="fade-left" data-aos-delay="700">
                                    <i class="bi bi-palette"></i>
                                    <span>Design</span>
                                </div>
                                <div class="floating-card code" data-aos="fade-right" data-aos-delay="800">
                                    <i class="bi bi-code-slash"></i>
                                    <span>Code</span>
                                </div>
                                <div class="floating-card creativity" data-aos="fade-up" data-aos-delay="900">
                                    <i class="bi bi-lightbulb"></i>
                                    <span>Ideas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Hero Section -->


    <!-- Partners Section -->
    <section id="partners">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="section-title text-center mb-5">
                <h2 class="text-white">Our Trusted Partners</h2>
                <p class="text-secondary">We proudly collaborate with industry-leading brands and organizations worldwide.</p>
            </div>

            <div class="logo-scroll-container d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
                <div class="logo-track d-flex align-items-center">
                    <!-- Partner Logos -->
                    <img src="" alt="Partner 1" class="partner-logo mx-4" loading="lazy">
                    <img src="" alt="Partner 2" class="partner-logo mx-4" loading="lazy">
                    <img src="" alt="Partner 3" class="partner-logo mx-4" loading="lazy">
                    <img src="" alt="Partner 4" class="partner-logo mx-4" loading="lazy">
                    <img src="" alt="Partner 5" class="partner-logo mx-4" loading="lazy">
                    <img src="" alt="Partner 6" class="partner-logo mx-4" loading="lazy">
                    <!-- Repeat for seamless loop -->
                    <img src="" alt="Partner 1" class="partner-logo mx-4" loading="lazy">
                    <img src="" alt="Partner 2" class="partner-logo mx-4" loading="lazy">
                    <img src="" alt="Partner 3" class="partner-logo mx-4" loading="lazy">
                </div>
            </div>

        </div>
    </section>
    <!-- /Partners Section -->


    <!-- How We Do Section -->
    <section id="our-model">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-center">
                <!-- Left Side Content -->
                <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-right" data-aos-delay="100">
                    <p class="text-uppercase small text-primary fw-bold mb-2" style="color: #f4a31d !important;">Our Model</p>
                    <h2 class="text-white fw-bold mb-3">How we do</h2>
                    <p class="text-secondary mb-4">Save time and money with our powerful and transparent development method designed to deliver consistent results.</p>
                    <a href="#" class="btn px-4 py-2 rounded-pill" style="background: #f4a31d !important; color:white">Learn More</a>
                </div>

                <!-- Right Side Process Flow -->
                <div class="col-lg-8" data-aos="fade-left" data-aos-delay="200">
                    <div class="process-flow">

                        <div class="process-item">
                            <div class="process-card">
                                <i class="bi bi-file-earmark-text"></i>
                                <h5>Requirements Gathering</h5>
                            </div>
                            <span class="connector"></span>
                        </div>

                        <div class="process-item">
                            <div class="process-card">
                                <i class="bi bi-lightbulb"></i>
                                <h5>Brainstorming Ideas</h5>
                            </div>
                            <span class="connector"></span>
                        </div>

                        <div class="process-item">
                            <div class="process-card">
                                <i class="bi bi-list-check"></i>
                                <h5>Locking Scope of Work</h5>
                            </div>
                            <span class="connector"></span>
                        </div>

                        <div class="process-item">
                            <div class="process-card">
                                <i class="bi bi-map"></i>
                                <h5>Creating WBS and Roadmap</h5>
                            </div>
                            <span class="connector"></span>
                        </div>

                        <div class="process-item">
                            <div class="process-card">
                                <i class="bi bi-kanban"></i>
                                <h5>Real-Time Updates through Jira</h5>
                            </div>
                            <span class="connector"></span>
                        </div>

                        <div class="process-item">
                            <div class="process-card">
                                <i class="bi bi-clipboard-check"></i>
                                <h5>Testing</h5>
                            </div>
                            <span class="connector"></span>
                        </div>

                        <div class="process-item">
                            <div class="process-card">
                                <i class="bi bi-cloud-upload"></i>
                                <h5>Deployments</h5>
                            </div>
                            <span class="connector"></span>
                        </div>

                        <div class="process-item">
                            <div class="process-card">
                                <i class="bi bi-cloud-upload"></i>
                                <h5>Support & Training</h5>
                                <span class="connector"></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Skills Section -->
    <section id="skills" class="skills section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Skills</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4 skills-animation">

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="skill-box">
                        <h3>HTML</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                        <span class="text-end d-block">90%</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="skill-box">
                        <h3>CSS</h3>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
                        <span class="text-end d-block">90%</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="skill-box">
                        <h3>JavaScript</h3>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor.</p>
                        <span class="text-end d-block">80%</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="skill-box">
                        <h3>Photoshop</h3>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate.</p>
                        <span class="text-end d-block">55%</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Skills Section -->


    <!-- Stats Section -->
    <section id="stats" class="stats section dark-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="avatars d-flex align-items-center">
                        <img src="assets/img/person/person-m-2.webp" alt="Avatar 1" class="rounded-circle" loading="lazy">
                        <img src="assets/img/person/person-m-3.webp" alt="Avatar 2" class="rounded-circle" loading="lazy">
                        <img src="assets/img/person/person-f-5.webp" alt="Avatar 3" class="rounded-circle" loading="lazy">
                        <img src="assets/img/person/person-m-5.webp" alt="Avatar 4" class="rounded-circle" loading="lazy">
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row counters">
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <h2><span data-purecounter-start="0" data-purecounter-end="185" data-purecounter-duration="1" class="purecounter"></span>+</h2>
                            <p>Nemo enim ipsam</p>
                        </div>

                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                            <h2><span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>K</h2>
                            <p>Voluptatem sequi</p>
                        </div>

                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                            <h2><span data-purecounter-start="0" data-purecounter-end="128" data-purecounter-duration="1" class="purecounter"></span>+</h2>
                            <p>Dolor sit consectetur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
