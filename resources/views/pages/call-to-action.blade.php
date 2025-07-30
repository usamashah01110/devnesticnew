@extends('layouts.main');
@section('title', 'Call to Action')
@section('content')
<section id="call-to-action" class="call-to-action section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="cta-wrapper">
            <div class="background-pattern">
                <div class="wave"></div>
                <div class="geometric-shape shape-1"></div>
                <div class="geometric-shape shape-2"></div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div
                        class="image-section"
                        data-aos="fade-left"
                        data-aos-delay="200">
                        <div class="main-image-wrapper">
                            <img
                                src="{{asset('assets/img/cta/cta-4.webp')}}"
                                alt="CTA Image"
                                class="img-fluid main-img" />
                            <div class="overlay-circle circle-1"></div>
                            <div class="overlay-circle circle-2"></div>
                        </div>

                        <div
                            class="stats-card card-1"
                            data-aos="zoom-in"
                            data-aos-delay="400">
                            <div class="stat-icon">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <div class="stat-content">
                                <h6>95%</h6>
                                <span>Success Rate</span>
                            </div>
                        </div>

                        <div
                            class="stats-card card-2"
                            data-aos="zoom-in"
                            data-aos-delay="500">
                            <div class="stat-icon">
                                <i class="bi bi-trophy-fill"></i>
                            </div>
                            <div class="stat-content">
                                <h6>50K+</h6>
                                <span>Happy Clients</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 order-lg-1">
                    <div
                        class="content-section"
                        data-aos="fade-right"
                        data-aos-delay="300">
                        <div
                            class="label-badge"
                            data-aos="fade-up"
                            data-aos-delay="400">
                            <i class="bi bi-rocket-takeoff"></i>
                            <span>Launch Today</span>
                        </div>

                        <h2 data-aos="fade-up" data-aos-delay="450">
                            Ready to Take Your Business to the Next Level?
                        </h2>
                        <p data-aos="fade-up" data-aos-delay="500">
                            Quis autem vel eum iure reprehenderit qui in ea
                            voluptate velit esse quam nihil molestiae
                            consequatur, vel illum qui dolorem eum fugiat
                            quo voluptas.
                        </p>

                        <div
                            class="features-grid"
                            data-aos="fade-up"
                            data-aos-delay="550">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                                <span>24/7 Expert Support</span>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                                <span>Advanced Analytics</span>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                                <span>Seamless Integration</span>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                                <span>Custom Solutions</span>
                            </div>
                        </div>

                        <div
                            class="cta-actions"
                            data-aos="fade-up"
                            data-aos-delay="600">
                            <a href="#" class="btn btn-cta-primary">Get Started Free</a>
                            <div class="secondary-action">
                                <a
                                    href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                    class="btn btn-cta-secondary glightbox">
                                    <i class="bi bi-play-circle"></i>
                                    Watch Demo
                                </a>
                                <span class="note">No credit card required</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Call To Action Section -->
@endsection