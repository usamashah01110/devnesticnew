@extends('layouts.main')
@section('title', 'Clients')
@section('content')
    <!-- Clients Section -->
    <section id="clients" class="clients section">
        <div data-aos="fade-up" data-aos-delay="100">
            <div class="clients-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 6000,
                        "autoplay": {
                            "delay": 1,
                            "disableOnInteraction": false
                        },
                        "centeredSlides": true,
                        "slideToClickedSlide": true,
                        "slidesPerView": "auto",
                        "spaceBetween": 40,
                        "breakpoints": {
                            "320": {
                                "slidesPerView": 2,
                                "spaceBetween": 20
                            },
                            "640": {
                                "slidesPerView": 3,
                                "spaceBetween": 20
                            },
                            "992": {
                                "slidesPerView": 4,
                                "spaceBetween": 30
                            },
                            "1200": {
                                "slidesPerView": 6,
                                "spaceBetween": 40
                            }
                        }
                    }
                </script>

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="client-logo">
                            <img
                                src="{{asset('assets/img/clients/clients-1.webp')}}"
                                class="img-fluid"
                                alt=""
                            />
                        </div>
                    </div>
                    <!-- End Client Item -->

                    <div class="swiper-slide">
                        <div class="client-logo">
                            <img
                                src="{{asset('assets/img/clients/clients-2.webp')}}"
                                class="img-fluid"
                                alt=""
                            />
                        </div>
                    </div>
                    <!-- End Client Item -->

                    <div class="swiper-slide">
                        <div class="client-logo">
                            <img
                                src="assets/img/clients/clients-3.webp"
                                class="img-fluid"
                                alt=""
                            />
                        </div>
                    </div>
                    <!-- End Client Item -->

                    <div class="swiper-slide">
                        <div class="client-logo">
                            <img
                                src="{{asset('assets/img/clients/clients-4.webp')}}"
                                class="img-fluid"
                                alt=""
                            />
                        </div>
                    </div>
                    <!-- End Client Item -->

                    <div class="swiper-slide">
                        <div class="client-logo">
                            <img
                                src="{{asset('assets/img/clients/clients-5.webp')}}"
                                class="img-fluid"
                                alt=""
                            />
                        </div>
                    </div>
                    <!-- End Client Item -->

                    <div class="swiper-slide">
                        <div class="client-logo">
                            <img
                                src="{{asset('assets/img/clients/clients-6.webp')}}"
                                class="img-fluid"
                                alt=""
                            />
                        </div>
                    </div>
                    <!-- End Client Item -->

                    <div class="swiper-slide">
                        <div class="client-logo">
                            <img
                                src="{{asset('assets/img/clients/clients-1.webp')}}"
                                class="img-fluid"
                                alt=""
                            />
                        </div>
                    </div>
                    <!-- End Client Item -->

                    <div class="swiper-slide">
                        <div class="client-logo">
                            <img
                                src="{{asset('assets/img/clients/clients-2.webp')}}"
                                class="img-fluid"
                                alt=""
                            />
                        </div>
                    </div>
                    <!-- End Client Item -->

                    <div class="swiper-slide">
                        <div class="client-logo">
                            <img
                                src="{{asset('assets/img/clients/clients-3.webp')}}"
                                class="img-fluid"
                                alt=""
                            />
                        </div>
                    </div>
                    <!-- End Client Item -->

                    <div class="swiper-slide">
                        <div class="client-logo">
                            <img
                                src="{{asset('assets/img/clients/clients-4.webp')}}"
                                class="img-fluid"
                                alt=""
                            />
                        </div>
                    </div>
                    <!-- End Client Item -->

                    <div class="swiper-slide">
                        <div class="client-logo">
                            <img
                                src="{{asset('assets/img/clients/clients-5.webp')}}"
                                class="img-fluid"
                                alt=""
                            />
                        </div>
                    </div>
                    <!-- End Client Item -->

                    <div class="swiper-slide">
                        <div class="client-logo">
                            <img
                                src="{{asset('assets/img/clients/clients-6.webp')}}"
                                class="img-fluid"
                                alt=""
                            />
                        </div>
                    </div>
                    <!-- End Client Item -->
                </div>
            </div>
        </div>
    </section>
    <!-- /Clients Section -->


@endsection