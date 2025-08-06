<!-- Clients Section -->
<section id="hero" class="hero section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content" data-aos="fade-up" data-aos-delay="200">

                    @if($sectionOne)
                        <h2>{{ $sectionOne->heading_one }}</h2>

                        <p>{{ $sectionOne->paragraph }}</p>
                        <div class="hero-btns">
                            <a href="#contact" class="btn btn-primary">{{ $sectionOne->btn_one_text }}</a>
                            <a href="#services" class="btn btn-outline">Our Services</a>
                        </div>
                        <div class="hero-stats">
                            <div class="stat-item">
                                <h3><span data-purecounter-start="0" data-purecounter-end="{{ $sectionOne->years }}"
                                          data-purecounter-duration="1"
                                          class="purecounter"></span>+</h3>
                                <p>Years Experience</p>
                            </div>
                            <div class="stat-item">
                                <h3><span data-purecounter-start="0" data-purecounter-end="{{ $sectionOne->clients }}"
                                          data-purecounter-duration="1"
                                          class="purecounter"></span>+</h3>
                                <p>Clients Worldwide</p>
                            </div>
                            <div class="stat-item">
                                <h3><span data-purecounter-start="0" data-purecounter-end="{{ $sectionOne->success_rate }}"
                                          data-purecounter-duration="1"
                                          class="purecounter"></span>%</h3>
                                <p>Success Rate</p>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                    <img src="{{ asset('storage/' . $sectionOne->image_path) }}" alt="Consulting Services"
                         class="img-fluid">
                    @endif
                </div>
            </div>
        </div>
    </div>
</section><!-- /Hero Section -->
