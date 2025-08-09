<section id="team" class="team section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
            @foreach ($sectionFive as $sec)

            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="team-card">
                    <div class="profile-image">
                        <img src="{{ asset('storage/'. $sec->image) }}" class="img-fluid" alt="" loading="lazy">
                        <div class="role-badge">{{ $sec->role }}</div>
                        <div class="social-icons">
                            <a href="{{ $sec->linkedin }}"><i class="bi bi-linkedin"></i></a>
                            <a href="{{ $sec->twitter }}"><i class="bi bi-twitter-x"></i></a>
                            <a href="{{ $sec->instagram }}"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>{{ $sec->name }}</h4>
                        <p>{{ $sec->description }}</p>
                    </div>
                </div><!-- End Team Card -->
            </div>
            @endforeach


        </div>

    </div>

</section><!-- /Team Section -->