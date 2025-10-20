<header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

        <!-- ===== Logo Section ===== -->
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('landingpage/assets/img/logo.png') }}" alt="Company Logo" class="img-fluid"
                 style="height: 80px;">
            <!-- Optional: Text beside logo -->
            <!-- <h1 class="sitename ms-2">Devnestic</h1> -->
        </a>

        <!-- ===== Navigation Menu ===== -->
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="" class="active">Home</a></li>
                <li><a href="{{route('blog')}}">Blogs</a></li>

                <li class="dropdown">
                    <a href="#services"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Website Development</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                        <li><a href="#">Mobile App Development</a></li>
                        <li><a href="#">Social Media Marketing</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#"><span>Company</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Culture</a></li>
                    </ul>
                </li>

                <li><a href="">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <!-- ===== Social Icons ===== -->
        <div class="header-social-links d-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

    </div>
</header>
