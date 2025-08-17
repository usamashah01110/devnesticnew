@if($sectionTwo)
<section id="about" class="about section light-background">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>
            {{ $sectionTwo->short_about_us }}
        </p>
    </div>
    <!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 align-items-center justify-content-between">
            <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                <span class="about-meta">MORE ABOUT US</span>
                <h2 class="about-title">
                    {{ $sectionTwo->heading_one }}
                </h2>
                <p class="about-description">
                    {{ $sectionTwo->paragraph }}
                </p>

                <div class="row feature-list-wrapper">
                    <div class="col-md-6">
                        <ul class="feature-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Consectetur adipiscing elit
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i> Sed
                                do eiusmod tempor
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="feature-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Incididunt ut labore et
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Dolore magna aliqua
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i> Ut
                                enim ad minim veniam
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="info-wrapper">
                    <div class="row gy-4">
                        <div class="col-lg-5">
                            <div
                                class="profile d-flex align-items-center gap-3"
                            >
                                <img
                                    src="{{ asset('storage/'. $sectionTwo->ceo_founder_img) }}"
                                    alt="CEO Profile"
                                    class="profile-image"
                                />
                                <div>
                                    <h4 class="profile-name">
                                        {{ $sectionTwo->ceo_founder_name }}
                                    </h4>
                                    <p class="profile-position">
                                        CEO &amp; Founder
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div
                                class="contact-info d-flex align-items-center gap-2"
                            >
                                <i class="bi bi-telephone-fill"></i>
                                <div>
                                    <p class="contact-label">
                                        Call us anytime
                                    </p>
                                    <p class="contact-number">
                                        {{ $sectionTwo->contact }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                <div class="image-wrapper">
                    <div
                        class="images position-relative"
                        data-aos="zoom-out"
                        data-aos-delay="400"
                    >
                        <img
                            src="{{ asset('storage/'. $sectionTwo->large_img) }}"
                            alt="Business Meeting"
                            class="img-fluid main-image rounded-4"
                        />
                        <img
                            src="{{ asset('storage/'. $sectionTwo->small_img) }}"
                            alt="Team Discussion"
                            class="img-fluid small-image rounded-4"
                        />
                    </div>
                    <div class="experience-badge floating">
                        <h3>{{ $sectionTwo->experiance }}+ <span>Years</span></h3>
                        <p>Of experience in business service</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
