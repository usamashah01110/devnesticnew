<!-- Services Section -->
<section id="services" class="services section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>
            Our services are crafted to bring your digital ideas to life with precision and innovation. From web development to tech solutions, we deliver results that drive growth and impact.Do you like this personality?
        </p>
    </div>
    <!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-center">
            @foreach ($sectionThree as $sec)
            <div
                class="col-lg-4 col-md-6"
                data-aos="fade-up"
                data-aos-delay="100">
                <article class="service-item">
                    <span class="service-icon rounded-circle ">
                        <img src=" {{ asset('storage/'. $sec->logo) }}" alt="service logo" height="60px" class="rounded-circle">
                    </span>
                    <h3>
                        <a href="service-details.html">
                            {{ $sec->title }}
                        </a>
                    </h3>
                    <p>
                        {{ $sec->description }}
                    </p>
                    <a
                        href="{{ $sec->link }}"
                        class="card-action rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </article>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</section>
<!-- /Services Section -->