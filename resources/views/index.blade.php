@extends('includes.main')
@section('mainContent')
    <!-- Hero Section -->
    <style>
        /* Hero section fills full screen */
        #hero {
            position: relative;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            margin-top: -90px; /* adjust based on navbar height */
        }

        /* Video fills hero but stays inside */
        #hero video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        /* Center content both vertically and horizontally */
        #hero .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            text-align: center;
            color: white;
        }

        /* Heading styling */
        #hero .content h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        /* Buttons container */
        #hero .content .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        /* Button styling */
        #hero .content .hero-buttons a {
            display: inline-block;
            padding: 12px 30px;
            border: 2px solid white;
            color: white;
            text-decoration: none;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        /* Hover effects */
        #hero .content .hero-buttons a:hover {
            background: white;
            color: black;
        }
    </style>

    <section id="hero" class="hero section">
        <video autoplay muted loop playsinline>
            <source src="{{ asset('assets/intro.mp4') }}" type="video/mp4">
        </video>

        <div class="content">
            <h1>Hello, I'm Devnestic Solutions</h1>
            <div class="hero-buttons">
                <a href="#">View My Work</a>
                <a href="#">Contact Me</a>
            </div>
        </div>
    </section>


    <!-- Partners Section -->
    <section id="partners">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="section-title text-center mb-5">
                <h2 class="text-white">Our Trusted Partners</h2>
                <p class="text-secondary">We proudly collaborate with industry-leading brands and organizations
                    worldwide.</p>
            </div>

            <div class="logo-scroll-container d-flex align-items-center justify-content-center" data-aos="zoom-in"
                 data-aos-delay="200">
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
                    <p class="text-uppercase small text-primary fw-bold mb-2" style="color: #f4a31d !important;">Our
                        Model</p>
                    <h2 class="text-white fw-bold mb-3">How we do</h2>
                    <p class="text-secondary mb-4">Save time and money with our powerful and transparent development
                        method designed to deliver consistent results.</p>
                    <a href="#" class="btn px-4 py-2 rounded-pill" style="background: #f4a31d !important; color:white">Learn
                        More</a>
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
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis
                unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4 skills-animation">

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="skill-box">
                        <h3>HTML</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                        <span class="text-end d-block">90%</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="skill-box">
                        <h3>CSS</h3>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
                        <span class="text-end d-block">90%</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="skill-box">
                        <h3>JavaScript</h3>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor.</p>
                        <span class="text-end d-block">80%</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="skill-box">
                        <h3>Photoshop</h3>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate.</p>
                        <span class="text-end d-block">55%</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                 aria-valuemax="100">
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
                        <img src="assets/img/person/person-m-2.webp" alt="Avatar 1" class="rounded-circle"
                             loading="lazy">
                        <img src="assets/img/person/person-m-3.webp" alt="Avatar 2" class="rounded-circle"
                             loading="lazy">
                        <img src="assets/img/person/person-f-5.webp" alt="Avatar 3" class="rounded-circle"
                             loading="lazy">
                        <img src="assets/img/person/person-m-5.webp" alt="Avatar 4" class="rounded-circle"
                             loading="lazy">
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row counters">
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <h2><span data-purecounter-start="0" data-purecounter-end="185"
                                      data-purecounter-duration="1" class="purecounter"></span>+</h2>
                            <p>Nemo enim ipsam</p>
                        </div>

                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                            <h2><span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                      class="purecounter"></span>K</h2>
                            <p>Voluptatem sequi</p>
                        </div>

                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                            <h2><span data-purecounter-start="0" data-purecounter-end="128"
                                      data-purecounter-duration="1" class="purecounter"></span>+</h2>
                            <p>Dolor sit consectetur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis
                unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row justify-content-center g-5">

                <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="bi bi-code-slash"></i>
                        </div>
                        <div class="service-content">
                            <h3>Custom Web Development</h3>
                            <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla quis lorem ut
                                libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis. Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="service-details.html" class="service-link">
                                <span>Learn More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="bi bi-phone-fill"></i>
                        </div>
                        <div class="service-content">
                            <h3>Mobile App Solutions</h3>
                            <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna
                                justo, lacinia eget consectetur sed. Quisque velit nisi, pretium ut lacinia in,
                                elementum id enim. Donec rutrum congue leo eget malesuada.</p>
                            <a href="service-details.html" class="service-link">
                                <span>Learn More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="bi bi-palette2"></i>
                        </div>
                        <div class="service-content">
                            <h3>UI/UX Design</h3>
                            <p>Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Vivamus suscipit
                                tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula
                                elementum sed sit amet dui.</p>
                            <a href="service-details.html" class="service-link">
                                <span>Learn More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>
                        <div class="service-content">
                            <h3>Digital Marketing</h3>
                            <p>Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh
                                pulvinar a. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere
                                blandit.</p>
                            <a href="service-details.html" class="service-link">
                                <span>Learn More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-right" data-aos-delay="300">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="bi bi-cloud-check"></i>
                        </div>
                        <div class="service-content">
                            <h3>Cloud Computing</h3>
                            <p>Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Vivamus magna
                                justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero
                                malesuada feugiat.</p>
                            <a href="service-details.html" class="service-link">
                                <span>Learn More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        <div class="service-content">
                            <h3>Cybersecurity Solutions</h3>
                            <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin
                                molestie malesuada. Curabitur arcu erat, accumsan id imperdiet et. Proin eget tortor
                                risus.</p>
                            <a href="service-details.html" class="service-link">
                                <span>Learn More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

@endsection
