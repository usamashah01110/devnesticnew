<!-- Services Section -->
<style>

    .container {
        max-width: 1200px;
        margin: auto;
    }

    /* Card grid */
    .services-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
    }

    /* Fixed-size card */
    .service-card {
        position: relative;
        width: 260px; /* Fixed width */
        height: 350px; /* Fixed height */
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        cursor: pointer;
        background: #fff;
        flex-shrink: 0;
    }

    .service-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .service-card::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.85), rgba(0,0,0,0.15));
        transition: all 0.4s ease;
        opacity: 0.9;
    }

    .service-card:hover::after {
        background: linear-gradient(to top, rgba(0,0,0,0.9), rgba(0,0,0,0.05));
    }

    .service-card:hover img {
        transform: scale(1.08);
    }

    .card-content {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 25px 20px;
        z-index: 2;
        color: #fff;
        width: 100%;
        transition: all 0.4s ease;
    }

    .card-title {
        font-size: 1.4rem;
        font-weight: 600;
        letter-spacing: 0.8px;
        text-shadow: 0 3px 8px rgba(0, 0, 0, 0.5);
    }

    .service-card:hover .card-title {
        transform: translateY(-5px);
        color: #E89922;
    }

    @media (max-width: 992px) {
        .service-card {
            width: 45%;
        }
    }

    @media (max-width: 576px) {
        .service-card {
            width: 100%;
        }
    }
</style>

<section id="services" class="services section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>
            Our services are crafted to bring your digital ideas to life with precision and innovation. From web
            development to tech solutions, we deliver results that drive growth and impact.Do you like this personality?
        </p>
    </div>
    <div class="container">
        <div class="services-grid">
            <!-- Card 1 -->
            @foreach ($sectionThree as $sec)
                <div class="service-card">
{{--                    <img src=" {{ asset('storage/'. $sec->logo) }}" alt="Service Image"/>--}}
                    <img src=" {{ asset('storage/'. $sec->logo) }}" alt="Service Image"/>
                    <div class="card-content">
                        <h3 class="card-title">{{ $sec->title }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- /Services Section -->
