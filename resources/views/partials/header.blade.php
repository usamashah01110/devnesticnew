<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="{{ route('index') }}" class="logo d-flex align-items-center me-auto">
                 <img src="assets/img/logo.webp" alt="">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#developer">Our Developer</a></li>
                <!-- <li><a href="#team">Team</a></li> -->
                <li><a href="#faq">FAQs</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        @auth
        <a class="btn-getstarted" href="{{ route('dashboard.index') }}">Dashboard</a>
        @endauth

    </div>
</header>
