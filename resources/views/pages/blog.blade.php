<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Index - FolioOne Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('landingpage/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('landingpage/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
        <link href="{{ asset('landingpage/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/assets/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        <link href="{{ asset('landingpage/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('blogAssets/vendors/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('blogAssets/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('blogAssets/vendors/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('blogAssets/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('blogAssets/vendors/owl-carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('blogAssets/vendors/owl-carousel/owl.carousel.min.css') }}">


    <link rel="stylesheet" href="{{asset('blogAssets/css/style.css')}}">
    <!-- Main CSS File -->
    <link href="{{ asset('landingpage/assets/css/main.css') }}" rel="stylesheet">
    <style>
        .custom-btn {
            background-color: transparent; /* No background */
            color:#f4a31d; /* Yellow text color */
            border: 2px solid #f4a31d; /* Yellow border */
            font-weight: 600;
            padding: 10px 0;
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
        }

        .custom-btn:hover {
            background-color: #f4a31d; /* Yellow background on hover */
            color: #000; /* Black text on hover for contrast */
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(255, 215, 0, 0.3);
        }
    </style>
</head>


<body class="index-page">
@include('includes.navbar')
<main class="main">
    <h1 class="text-center mt-2">Blogs</h1>
        <section class="blog-post-area section-margin mt-4">
            <div class="container">
                <div class="row">
                    <!-- Main Blog Area -->
                    <div class="col-lg-8">
                        <div class="single-recent-blog-post card border-0 rounded-4 overflow-hidden mb-5 bg-transparent shadow-sm">
                            <div class="thumb position-relative">
                                <img class="img-fluid w-100"
                                     src="{{ asset('blogAssets/img/blog/blog1.png') }}"
                                     alt="Blog Image"
                                     style="height: 280px; object-fit: cover; border-radius: 0.75rem;">

                                <!-- Info bar at bottom of image -->
                                <ul class="thumb-info list-unstyled d-flex flex-wrap gap-3 position-absolute bottom-0 start-0 m-3 px-3 py-2 bg-dark bg-opacity-50 rounded-3 shadow-sm">
                                    <li><a href="#" class="text-warning text-decoration-none small"><i class="ti-user me-1"></i>Admin</a></li>
                                    <li><a href="#" class="text-warning text-decoration-none small"><i class="ti-notepad me-1"></i>January 12, 2019</a></li>
                                    <li><a href="#" class="text-warning text-decoration-none small"><i class="ti-themify-favicon me-1"></i>2 Comments</a></li>
                                </ul>
                            </div>

                            <!-- Blog details -->
                            <div class="details mt-4">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="fw-bold text-light mb-3" style="transition: color 0.3s;">
                                        Woman claims husband wants to name baby girl after his ex-lover sparking.
                                    </h3>
                                </a>

                                <!-- Tags -->
                                <p class="tag-list-inline mb-3 text-light small fw-semibold">
                                    <span class="me-2 text-secondary">Tags:</span>
                                    <a href="#"
                                       class="px-2 py-1 rounded text-warning text-decoration-none border border-warning border-opacity-50"
                                       style="background-color: rgba(255, 193, 7, 0.1); transition: all 0.3s; margin-right: 6px;">
                                        travel
                                    </a>
                                    <a href="#"
                                       class="px-2 py-1 rounded text-warning text-decoration-none border border-warning border-opacity-50"
                                       style="background-color: rgba(255, 193, 7, 0.1); transition: all 0.3s; margin-right: 6px;">
                                        lifestyle
                                    </a>
                                    <a href="#"
                                       class="px-2 py-1 rounded text-warning text-decoration-none border border-warning border-opacity-50"
                                       style="background-color: rgba(255, 193, 7, 0.1); transition: all 0.3s; margin-right: 6px;">
                                        technology
                                    </a>
                                    <a href="#"
                                       class="px-2 py-1 rounded text-warning text-decoration-none border border-warning border-opacity-50"
                                       style="background-color: rgba(255, 193, 7, 0.1); transition: all 0.3s;">
                                        fashion
                                    </a>
                                </p>

                                <!-- Description -->
                                <p class="text-secondary" style="font-size: 0.95rem; line-height: 1.7;">
                                    Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights.
                                    Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second.
                                    Air created seed heaven sixth created living.
                                </p>

                                <!-- Button -->
                                <a class="btn btn-outline-warning mt-3 fw-semibold rounded-pill px-4 py-2"
                                   href="#" style="transition: all 0.3s;">
                                    Read More <i class="ti-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                        <div class="single-recent-blog-post card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
                            <div class="thumb position-relative">
                                <img class="img-fluid w-100" src="{{ asset('blogAssets/img/blog/blog1.png') }}" alt="" style="height: 280px; object-fit: cover;">

                                <ul class="thumb-info list-unstyled d-flex flex-wrap gap-3 position-absolute bottom-0 start-0 m-2 p-2 bg-light bg-opacity-75 rounded-3 shadow-sm">
                                    <li><a href="#" class="text-dark text-decoration-none small"><i class="ti-user me-1 text-warning"></i>Admin</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none small"><i class="ti-notepad me-1 text-warning"></i>January 12, 2019</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none small"><i class="ti-themify-favicon me-1 text-warning"></i>2 Comments</a></li>
                                </ul>
                            </div>

                            <div class="details p-4">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="fw-bold text-dark mb-3 hover-warning" style="transition: color 0.3s;">Tourist deaths in Costa Rica jeopardize safe destination reputation all time.</h3>
                                </a>
                                <p class="tag-list-inline mb-2 text-muted small">
                                    Tags: <a href="#" class="text-decoration-none text-warning">travel</a>,
                                    <a href="#" class="text-decoration-none text-warning">life style</a>,
                                    <a href="#" class="text-decoration-none text-warning">technology</a>,
                                    <a href="#" class="text-decoration-none text-warning">fashion</a>
                                </p>
                                <p class="text-secondary" style="font-size: 0.95rem; line-height: 1.6;">
                                    Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights.
                                    Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second.
                                    Air created seed heaven sixth created living.
                                </p>
                                <a class="btn btn-outline-warning mt-3 fw-semibold" href="#">
                                    Read More <i class="ti-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-lg-12">
                                <nav class="blog-pagination justify-content-center d-flex">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a href="#" class="page-link" aria-label="Previous">
                                                <span aria-hidden="true"><i class="ti-angle-left"></i></span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                                        <li class="page-item">
                                            <a href="#" class="page-link" aria-label="Next">
                                                <span aria-hidden="true"><i class="ti-angle-right"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-4 sidebar-widgets">
                        <div class="widget-wrap">
                            <!-- Newsletter -->
                            <div class="single-sidebar-widget newsletter-widget">
                                <h4 class="single-sidebar-widget__title">Newsletter</h4>
                                <div class="form-group mt-30">
                                    <div class="col-autos">
                                        <input type="text" class="form-control" id="inlineFormInputGroup"
                                               placeholder="Enter email" onfocus="this.placeholder = ''"
                                               onblur="this.placeholder = 'Enter email'">
                                    </div>
                                </div>
                                <button class="btn d-block mt-20 w-100 custom-btn mb-2">Subscribe</button>
                            </div>

                            <!-- Categories -->
                            <div class="single-sidebar-widget post-category-widget">
                                <h4
                                    class="single-sidebar-widget__title position-relative d-inline-block border-bottom border-warning pb-2"
                                    style="border-bottom-width: 3px;"
                                >
                                    Category
                                </h4>
                                <ul class="cat-list mt-4 list-unstyled">
                                    <li class="mb-2">
                                        <a href="#" class="d-flex justify-content-between align-items-center px-3 py-2 rounded bg-secondary bg-opacity-10 text-light text-decoration-none small fw-semibold"
                                           style="transition: all 0.3s;">
                                            <span>Technology</span>
                                            <span>(03)</span>
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#" class="d-flex justify-content-between align-items-center px-3 py-2 rounded bg-secondary bg-opacity-10 text-light text-decoration-none small fw-semibold"
                                           style="transition: all 0.3s;">
                                            <span>Software</span>
                                            <span>(09)</span>
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#" class="d-flex justify-content-between align-items-center px-3 py-2 rounded bg-secondary bg-opacity-10 text-light text-decoration-none small fw-semibold"
                                           style="transition: all 0.3s;">
                                            <span>Lifestyle</span>
                                            <span>(12)</span>
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#" class="d-flex justify-content-between align-items-center px-3 py-2 rounded bg-secondary bg-opacity-10 text-light text-decoration-none small fw-semibold"
                                           style="transition: all 0.3s;">
                                            <span>Shopping</span>
                                            <span>(02)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between align-items-center px-3 py-2 rounded bg-secondary bg-opacity-10 text-light text-decoration-none small fw-semibold"
                                           style="transition: all 0.3s;">
                                            <span>Food</span>
                                            <span>(10)</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Popular Posts -->
                            <div class="single-sidebar-widget popular-post-widget">
                                <h4 class="single-sidebar-widget__title">Popular Posts</h4>
                                <div class="popular-post-list">
                                    <div class="single-post-list">
                                        <div class="thumb">
                                            <img class="card-img rounded-0" src="{{ asset('blogAssets/img/blog/thumb/thumb1.png') }}" alt="">
                                            <ul class="thumb-info">
                                                <li><a href="#">Adam Colinge</a></li>
                                                <li><a href="#">Dec 15</a></li>
                                            </ul>
                                        </div>
                                        <div class="details mt-20">
                                            <a href="#"><h6>Accused of assaulting flight attendant mistake always</h6></a>
                                        </div>
                                    </div>
                                    <div class="single-post-list">
                                        <div class="thumb">
                                            <img class="card-img rounded-0" src="{{ asset('blogAssets/img/blog/thumb/thumb2.png') }}" alt="">
                                            <ul class="thumb-info">
                                                <li><a href="#">Adam Colinge</a></li>
                                                <li><a href="#">Dec 15</a></li>
                                            </ul>
                                        </div>
                                        <div class="details mt-20">
                                            <a href="#"><h6>Tennessee outback steakhouse worker diagnosed</h6></a>
                                        </div>
                                    </div>
                                    <div class="single-post-list">
                                        <div class="thumb">
                                            <img class="card-img rounded-0" src="{{ asset('blogAssets/img/blog/thumb/thumb3.png') }}" alt="">
                                            <ul class="thumb-info">
                                                <li><a href="#">Adam Colinge</a></li>
                                                <li><a href="#">Dec 15</a></li>
                                            </ul>
                                        </div>
                                        <div class="details mt-20">
                                            <a href="#"><h6>Tennessee outback steakhouse worker diagnosed</h6></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tags -->
                            <div class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="single-sidebar-widget__title">Tags</h4>
                                <h4
                                    class="single-sidebar-widget__title position-relative d-inline-block border-bottom border-warning pb-2 mb-3"
                                    style="border-bottom-width: 3px;"
                                >
                                    Tags
                                </h4>

                                <div class="d-flex flex-wrap gap-2">
                                    <a href="#"
                                       class="px-3 py-2 rounded text-decoration-none small fw-semibold text-warning border border-warning border-opacity-50"
                                       style="background-color: rgba(255, 193, 7, 0.1); transition: all 0.3s;">
                                        Technology
                                    </a>

                                    <a href="#"
                                       class="px-3 py-2 rounded text-decoration-none small fw-semibold text-warning border border-warning border-opacity-50"
                                       style="background-color: rgba(255, 193, 7, 0.1); transition: all 0.3s;">
                                        Software
                                    </a>

                                    <a href="#"
                                       class="px-3 py-2 rounded text-decoration-none small fw-semibold text-warning border border-warning border-opacity-50"
                                       style="background-color: rgba(255, 193, 7, 0.1); transition: all 0.3s;">
                                        Lifestyle
                                    </a>

                                    <a href="#"
                                       class="px-3 py-2 rounded text-decoration-none small fw-semibold text-warning border border-warning border-opacity-50"
                                       style="background-color: rgba(255, 193, 7, 0.1); transition: all 0.3s;">
                                        Shopping
                                    </a>

                                    <a href="#"
                                       class="px-3 py-2 rounded text-decoration-none small fw-semibold text-warning border border-warning border-opacity-50"
                                       style="background-color: rgba(255, 193, 7, 0.1); transition: all 0.3s;">
                                        Food
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Blog Area =================-->
</main>

@include('includes.footer')
<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('landingpage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('landingpage/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('landingpage/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('landingpage/assets/vendor/typed.js/typed.umd.js') }}"></script>
<script src="{{ asset('landingpage/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('landingpage/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('landingpage/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('landingpage/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('landingpage/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('landingpage/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('landingpage/assets/js/main.js') }}"></script>


</body>

</html>
