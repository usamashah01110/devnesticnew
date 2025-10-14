<style>
    /* Container for horizontal scrolling */
    .logo-scroll-container {
        overflow-x: auto;
        -ms-overflow-style: none; /* IE and Edge */
        scrollbar-width: none; /* Firefox */
        padding-bottom: 20px;
    }

    /* Hide scrollbar for Chrome, Safari, and Opera */
    .logo-scroll-container::-webkit-scrollbar {
        display: none;
    }

    /* Prevent wrapping and add spacing */
    .logo-list {
        min-width: fit-content;
        padding: 0 5%;
    }

    /* Each logo box */
    .logo-box {
        width: 140px;
        height: 100px;
        margin-right: 20px;
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }

    /* Hover effect for a subtle lift */
    .logo-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
    }

    /* Style for logo images */
    .logo-box img {
        max-height: 50px;
        max-width: 80%;
        width: auto;
        height: auto;
        filter: grayscale(100%);
        opacity: 0.8;
        transition: all 0.3s ease;
    }

    /* Restore color on hover */
    .logo-box:hover img {
        filter: grayscale(0%);
        opacity: 1;
    }

    /* Optional: make logos scroll automatically (infinite effect) */
    @keyframes scroll-logos {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }

    .auto-scroll {
        display: flex;
        width: max-content;
        animation: scroll-logos 25s linear infinite;
    }
</style>

<section id="partners" class="py-5" style="background-color: #f7f9fb;">
    <div class="container-fluid">
        <div class="text-center mb-5 mt-5">
            <h2 class="h1 fw-normal" style="color: #333; font-size: 2.25rem;">
                The world's leading brands are powered by <strong>Your Company Name</strong>
            </h2>
        </div>

        <div class="logo-scroll-container">
            <div class="d-flex flex-nowrap align-items-center justify-content-start logo-list auto-scroll">
                <div class="logo-box">
                    <img src="{{ asset('logo_1.png') }}" alt="Yamaha Logo">
                </div>
                <div class="logo-box">
                    <img src="{{ asset('logo_1.png') }}" alt="Mercedes Logo">
                </div>
                <div class="logo-box">
                    <img src="{{ asset('logo_1.png') }}" alt="Close Brothers Logo">
                </div>
                <div class="logo-box">
                    <img src="{{ asset('logo_1.png') }}" alt="Nissan Logo">
                </div>
                <div class="logo-box">
                    <img src="{{ asset('logo_1.png') }}" alt="Mini Logo">
                </div>
                <div class="logo-box">
                    <img src="{{ asset('logo_1.png') }}" alt="BMW Logo">
                </div>
                <div class="logo-box">
                    <img src="{{ asset('logo_1.png') }}" alt="BYD Logo">
                </div>

                <!-- Duplicate logos for seamless looping -->
                <div class="logo-box">
                    <img src="{{ asset('logo_1.png') }}" alt="Yamaha Logo">
                </div>
                <div class="logo-box">
                    <img src="{{ asset('logo_1.png') }}" alt="Mercedes Logo">
                </div>
                <div class="logo-box">
                    <img src="{{ asset('logo_1.png') }}" alt="Close Brothers Logo">
                </div>
            </div>
        </div>
    </div>
</section>
