<section id="faq" class="faq section">

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="content px-xl-5">
                    <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                    </p>
                </div>
            </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                <div class="faq-container">
                    @foreach ($sectionSix as $sec)
                    <div class="faq-item">
                        <h3><span class="num">{{$sec->id}}.</span> <span>{{ $sec->question }}</span></h3>
                        <div class="faq-content">
                            <p>{{ $sec->answer }}</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->
                    @endforeach


                </div>

            </div>
        </div>

    </div>

</section>
