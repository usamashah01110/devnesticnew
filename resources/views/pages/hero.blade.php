<!-- Hero Section -->
<section id="hero" class="hero section position-relative overflow-hidden">
    <!-- Background Video -->
    <video autoplay muted loop playsinline class="position-absolute w-100 h-100 object-fit-cover" style="top: 0; left: 0; z-index: 0;">
        <source src="{{ asset('assets/intro.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Overlay (Optional dark tint for readability) -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

    <!-- Hero Content -->
    <div class="container hero-content position-relative text-center text-white py-5" style="z-index: 2;" data-aos="fade-up" data-aos-delay="100">
        @if($sectionOne)
            <h2 class="display-4 fw-bold mb-3">{{ $sectionOne->heading_one }}</h2>
            <p class="lead mb-4">{{ $sectionOne->paragraph }}</p>

            <div class="hero-btns d-flex justify-content-center gap-4 mb-4">
                <a href="#contact" class="btn btn-primary btn-lg px-5 py-3">
                    Why Devnestic <i class="bi bi-arrow-right ms-2"></i>
                </a>
                <a href="#services" class="btn btn-outline-light btn-lg px-5 py-3">
                    Let's Talk <i class="bi bi-chat-dots ms-2"></i>
                </a>
            </div>
        @endif
    </div>
</section>
<!-- /Hero Section -->
