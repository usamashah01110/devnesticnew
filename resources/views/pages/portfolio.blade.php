<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>
            Explore our portfolio to see a showcase of innovative projects and creative solutions we’ve delivered. Each piece reflects our commitment to quality, design, and functionality. Let our work speak for itself.
        </p>
    </div>
    <!-- End Section Title -->

    <div class="container">
        <div
            class="isotope-layout"
            data-default-filter="*"
            data-layout="masonry"
            data-sort="original-order">
            <ul
                class="portfolio-filters isotope-filters"
                data-aos="fade-up"
                data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-product">Product</li>
                <li data-filter=".filter-branding">Branding</li>
                <li data-filter=".filter-books">Books</li>
            </ul>
            <!-- End Portfolio Filters -->

            @foreach ($sectionFour as $sec)
            <div
                class="row gy-4 isotope-container"
                data-aos="fade-up"
                data-aos-delay="200">
                <div
                    class="col-lg-4 col-md-6 portfolio-item isotope-item {{ $sec->type }}">
                    <div class="portfolio-content h-100">
                        <a
                            href="{{ asset('storage/'. $sec->image) }}"
                            data-gallery="portfolio-gallery-app"
                            class="glightbox"><img
                                src="{{ asset('storage/'. $sec->image) }}"
                                class="img-fluid"
                                alt="" /></a>
                        <div class="portfolio-info">
                            <h4>
                                <a
                                    href="portfolio-details.html"
                                    title="More Details">{{ $sec->name }}</a>
                            </h4>
                            <p>{{ $sec->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- End Portfolio Container -->
        </div>
    </div>
</section>