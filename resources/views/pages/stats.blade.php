@extends('layouts.main')
@section('title', 'Stats')
@section('content')
    <!-- Stats Section -->
    <section id="stats" class="stats section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="stats-hero row align-items-center mb-5">
                <div
                    class="col-lg-7 mb-4 mb-lg-0"
                    data-aos="fade-right"
                    data-aos-delay="200"
                >
                    <h3 class="headline mb-3">
                        Transforming Data Into Impactful Insights
                    </h3>
                    <p class="lead">
                        Nunc euismod, tortor nec facilisis egestas, ligula
                        turpis cursus odio, a lobortis sapien ipsum et dolor.
                        Morbi dignissim cursus massa non lobortis.
                    </p>
                </div>
                <div
                    class="col-lg-5 text-lg-end text-center"
                    data-aos="zoom-in"
                    data-aos-delay="300"
                >
                    <div
                        class="stats-rating d-inline-flex align-items-center py-3 px-4 shadow-sm"
                    >
                        <img
                            src="assets/img/about/about-1.webp"
                            class="img-fluid stats-rating-img me-3"
                            alt="User Group"
                            width="64"
                            height="48"
                        />
                        <div>
                            <div
                                class="rating-score d-flex align-items-center mb-1"
                            >
                                <span class="fs-5 fw-semibold me-2">4.8/5</span>
                                <span class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </span>
                            </div>
                            <div class="user-feedback small">
                                Based on 70+ unique user reviews
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="stats-counters row gy-4 justify-content-center">
                <div
                    class="col-6 col-md-3"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <article class="stats-counter-card">
                        <div class="counter-value mb-1">
                            <span
                                data-purecounter-start="0"
                                data-purecounter-end="120"
                                data-purecounter-duration="1.5"
                                class="purecounter"
                            ></span
                            >K+
                        </div>
                        <small class="label">Active Clients</small>
                    </article>
                </div>
                <div
                    class="col-6 col-md-3"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    <article class="stats-counter-card">
                        <div class="counter-value mb-1">
                            <span
                                data-purecounter-start="0"
                                data-purecounter-end="34"
                                data-purecounter-duration="1.5"
                                class="purecounter"
                            ></span
                            >K+
                        </div>
                        <small class="label">Analytics Projects</small>
                    </article>
                </div>
                <div
                    class="col-6 col-md-3"
                    data-aos="fade-up"
                    data-aos-delay="300"
                >
                    <article class="stats-counter-card">
                        <div class="counter-value mb-1">
                            <span
                                data-purecounter-start="0"
                                data-purecounter-end="97"
                                data-purecounter-duration="1.5"
                                class="purecounter"
                            ></span
                            >%
                        </div>
                        <small class="label">Automation Success</small>
                    </article>
                </div>
                <div
                    class="col-6 col-md-3"
                    data-aos="fade-up"
                    data-aos-delay="400"
                >
                    <article class="stats-counter-card">
                        <div class="counter-value mb-1">
                            <span
                                data-purecounter-start="0"
                                data-purecounter-end="99.96"
                                data-purecounter-duration="1.5"
                                class="purecounter"
                            ></span
                            >%
                        </div>
                        <small class="label">Cloud Reliability</small>
                    </article>
                </div>
            </div>
            <!-- End stats counters -->
        </div>
    </section>
    <!-- /Stats Section -->

@endsection