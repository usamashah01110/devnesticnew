@extends('layouts.main')
@section('title', 'Services')
@section('content')

    <!-- Alt Services Section -->
    <section id="alt-services" class="alt-services section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4">
                <div class="col-lg-6 col-xl-3">
                    <div
                        class="service-card"
                        data-aos="zoom-in"
                        data-aos-delay="100"
                    >
                        <div class="card-header">
                            <div class="icon-box">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h4>Consectetur adipiscing</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore.
                            </p>
                            <div class="feature-image">
                                <img
                                    src="{{asset('assets/img/services/services-1.webp')}}"
                                    alt="Security Services"
                                    class="img-fluid"
                                />
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn-explore">
                                Explore Service
                                <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Service Card -->

                <div class="col-lg-6 col-xl-3">
                    <div
                        class="service-card featured"
                        data-aos="zoom-in"
                        data-aos-delay="200"
                    >
                        <div class="card-header">
                            <div class="icon-box">
                                <i class="bi bi-cpu"></i>
                            </div>
                            <h4>Sed do eiusmod</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex
                                ea commodo.
                            </p>
                            <div class="feature-image">
                                <img
                                    src="{{asset('assets/img/services/services-2.webp')}}"
                                    alt="Technology Solutions"
                                    class="img-fluid"
                                />
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn-explore">
                                Explore Service
                                <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Service Card -->

                <div class="col-lg-6 col-xl-3">
                    <div
                        class="service-card"
                        data-aos="zoom-in"
                        data-aos-delay="300"
                    >
                        <div class="card-header">
                            <div class="icon-box">
                                <i class="bi bi-rocket-takeoff"></i>
                            </div>
                            <h4>Tempor incididunt</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur.
                            </p>
                            <div class="feature-image">
                                <img
                                    src="{{asset('assets/img/services/services-3.webp')}}"
                                    alt="Innovation Services"
                                    class="img-fluid"
                                />
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn-explore">
                                Explore Service
                                <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Service Card -->

                <div class="col-lg-6 col-xl-3">
                    <div
                        class="service-card"
                        data-aos="zoom-in"
                        data-aos-delay="400"
                    >
                        <div class="card-header">
                            <div class="icon-box">
                                <i class="bi bi-puzzle"></i>
                            </div>
                            <h4>Ut labore dolore</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                Excepteur sint occaecat cupidatat non proident,
                                sunt in culpa qui officia deserunt mollit anim.
                            </p>
                            <div class="feature-image">
                                <img
                                    src="{{asset('assets/img/services/services-4.webp')}}"
                                    alt="Strategic Planning"
                                    class="img-fluid"
                                />
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn-explore">
                                Explore Service
                                <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Service Card -->
            </div>
        </div>
    </section>
    <!-- /Alt Services Section -->

@endsection