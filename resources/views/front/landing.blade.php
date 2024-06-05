<!doctype html>

<html
    lang="en"
    class="light-style layout-navbar-fixed layout-wide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{ asset('asset') }}/"
    data-template="front-pages">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Landing Page - Front Pages | Materialize - Material Design HTML Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('asset') }}/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('asset') }}/vendor/fonts/materialdesignicons.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{ asset('asset') }}/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('asset') }}/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('asset') }}/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('asset') }}/css/demo.css" />
    <link rel="stylesheet" href="{{ asset('asset') }}/vendor/css/pages/front-page.css" />
    <!-- Vendors CSS -->

    <link rel="stylesheet" href="{{ asset('asset') }}/vendor/libs/nouislider/nouislider.css" />
    <link rel="stylesheet" href="{{ asset('asset') }}/vendor/libs/swiper/swiper.css" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="{{ asset('asset') }}/vendor/css/pages/front-page-landing.css" />

    <!-- Helpers -->
    <script src="{{ asset('asset') }}/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('asset') }}/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('asset') }}/js/front-config.js"></script>
</head>

<body>
<script src="{{ asset('asset') }}/vendor/js/dropdown-hover.js"></script>
<script src="{{ asset('asset') }}/vendor/js/mega-dropdown.js"></script>

<!-- Navbar: Start -->
<nav class="layout-navbar container shadow-none py-0">
    <div class="navbar navbar-expand-lg landing-navbar border-top-0 px-3 px-md-4">
        <!-- Menu logo wrapper: Start -->
        <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-4">
            <!-- Mobile menu toggle: Start-->
            <button
                class="navbar-toggler border-0 px-0 me-2"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="tf-icons mdi mdi-menu mdi-24px align-middle"></i>
            </button>
            <!-- Mobile menu toggle: End-->
            <a href="landing-page.html" class="app-brand-link">
            <span class="app-brand-logo demo">
              <span style="color: #666cff">
                <svg width="268" height="150" viewBox="0 0 38 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                      d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z"
                      fill="currentColor" />
                  <path
                      d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z"
                      fill="url(#paint0_linear_2989_100980)"
                      fill-opacity="0.4" />
                  <path
                      d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z"
                      fill="currentColor" />
                  <path
                      d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                      fill="currentColor" />
                  <path
                      d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                      fill="url(#paint1_linear_2989_100980)"
                      fill-opacity="0.4" />
                  <path
                      d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z"
                      fill="currentColor" />
                  <defs>
                    <linearGradient
                        id="paint0_linear_2989_100980"
                        x1="5.36642"
                        y1="0.849138"
                        x2="10.532"
                        y2="24.104"
                        gradientUnits="userSpaceOnUse">
                      <stop offset="0" stop-opacity="1" />
                      <stop offset="1" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient
                        id="paint1_linear_2989_100980"
                        x1="5.19475"
                        y1="0.849139"
                        x2="10.3357"
                        y2="24.1155"
                        gradientUnits="userSpaceOnUse">
                      <stop offset="0" stop-opacity="1" />
                      <stop offset="1" stop-opacity="0" />
                    </linearGradient>
                  </defs>
                </svg>
              </span>
            </span>
                <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">Materialize</span>
            </a>
        </div>
        <!-- Menu logo wrapper: End -->
        <!-- Menu wrapper: Start -->
        <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
            <button
                class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="tf-icons mdi mdi-close"></i>
            </button>
        </div>
        <div class="landing-menu-overlay d-lg-none"></div>
        <!-- Menu wrapper: End -->
        <!-- Toolbar: Start -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Style Switcher -->
            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="mdi mdi-24px"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                            <span class="align-middle"><i class="mdi mdi-weather-sunny me-2"></i>Light</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                            <span class="align-middle"><i class="mdi mdi-weather-night me-2"></i>Dark</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                            <span class="align-middle"><i class="mdi mdi-monitor me-2"></i>System</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- / Style Switcher-->

            <!-- navbar button: Start -->
            <li>
                <a
                    href="../vertical-menu-template/auth-login-cover.html"
                    class="btn btn-primary px-2 px-sm-4 px-lg-2 px-xl-4"
                    target="_blank"
                ><span class="tf-icons mdi mdi-account me-md-1"></span
                    ><span class="d-none d-md-block">Login</span></a
                >
            </li>
            <!-- navbar button: End -->
        </ul>
        <!-- Toolbar: End -->
    </div>
</nav>
<!-- Navbar: End -->

<!-- Sections:Start -->

<div data-bs-spy="scroll" class="scrollspy-example">
    <!-- Hero: Start -->
    <section id="landingHero" class="section-py landing-hero position-relative">
        <img
            src="{{ asset('asset') }}/img/front-pages/backgrounds/hero-bg-light.png"
            alt="hero background"
            class="position-absolute top-0 start-0 w-100 h-100 z-n1"
            data-speed="1"
            data-app-light-img="front-pages/backgrounds/hero-bg-light.png"
            data-app-dark-img="front-pages/backgrounds/hero-bg-dark.png" />
        <div class="container">
            <div class="hero-text-box text-center">
                <h1 class="text-primary hero-title">Semua Cabang Olahraga Dalam Satu Tempat.</h1>
                <h2 class="h6 mb-4 pb-1 lh-lg">
                    Tingkatkan keterampilan anda dengan program latihan terpercaya dalam berbagai cabang olahraga.
                </h2>
                <a href="#landingPricing" class="btn btn-primary">Mulai Berlangganan</a>
            </div>
            <div class="position-relative hero-animation-img">
                <a href="../vertical-menu-template/app-ecommerce-dashboard.html" target="_blank">
                    <div class="hero-dashboard-img text-center">
                        <img
                            src="{{ asset('asset') }}/img/front-pages/landing-page/hero-dashboard-light.png"
                            alt="hero dashboard"
                            class="animation-img"
                            data-speed="2"
                            data-app-light-img="front-pages/landing-page/hero-dashboard-light.png"
                            data-app-dark-img="front-pages/landing-page/hero-dashboard-dark.png" />
                    </div>
                    <div class="position-absolute hero-elements-img">
                        <img
                            src="{{ asset('asset') }}/img/front-pages/landing-page/hero-elements-light.png"
                            alt="hero elements"
                            class="animation-img"
                            data-speed="4"
                            data-app-light-img="front-pages/landing-page/hero-elements-light.png"
                            data-app-dark-img="front-pages/landing-page/hero-elements-dark.png" />
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- Hero: End -->

    <!-- Useful features: Start -->
    <section id="landingFeatures" class="section-py landing-features">
        <div class="container">
            <h6 class="text-center fw-semibold d-flex justify-content-center align-items-center mb-4">
                <img
                    src="{{ asset('asset') }}/img/front-pages/icons/section-tilte-icon.png"
                    alt="section title icon"
                    class="me-2" />
                <span class="text-uppercase">Useful features</span>
            </h6>
            <h3 class="text-center mb-2"><span class="fw-bold">Everything you need</span> to start your next project</h3>
            <p class="text-center fw-medium mb-3 mb-md-5 pb-3">
                Not just a set of tools, the package includes ready-to-deploy conceptual application.
            </p>
            <div class="features-icon-wrapper row gx-0 gy-4 g-sm-5">
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="features-icon mb-3">
                        <img src="{{ asset('asset') }}/img/front-pages/icons/laptop-charging.png" alt="laptop charging" />
                    </div>
                    <h5 class="mb-2">Quality Code</h5>
                    <p class="features-icon-description">
                        Code structure that all developers will easily understand and fall in love with.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="features-icon mb-3">
                        <img src="{{ asset('asset') }}/img/front-pages/icons/transition-up.png" alt="transition up" />
                    </div>
                    <h5 class="mb-2">Continuous Updates</h5>
                    <p class="features-icon-description">
                        Free updates for the next 12 months, including new demos and features.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="features-icon mb-3">
                        <img src="{{ asset('asset') }}/img/front-pages/icons/edit.png" alt="edit" />
                    </div>
                    <h5 class="mb-2">Stater-Kit</h5>
                    <p class="features-icon-description">
                        Start your project quickly without having to remove unnecessary features.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="features-icon mb-3">
                        <img src="{{ asset('asset') }}/img/front-pages/icons/3d-select-solid.png" alt="3d select solid" />
                    </div>
                    <h5 class="mb-2">API Ready</h5>
                    <p class="features-icon-description">
                        Just change the endpoint and see your own data loaded within seconds.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="features-icon mb-3">
                        <img src="{{ asset('asset') }}/img/front-pages/icons/lifebelt.png" alt="lifebelt" />
                    </div>
                    <h5 class="mb-2">Excellent Support</h5>
                    <p class="features-icon-description">An easy-to-follow doc with lots of references and code examples.</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="features-icon mb-3">
                        <img src="{{ asset('asset') }}/img/front-pages/icons/google-docs.png" alt="google docs" />
                    </div>
                    <h5 class="mb-2">Well Documented</h5>
                    <p class="features-icon-description">An easy-to-follow doc with lots of references and code examples.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Useful features: End -->

    <!-- Pricing plans: Start -->
    <section id="landingPricing" class="section-py bg-body landing-pricing">
        <div class="container bg-icon-left position-relative">
            <img
                src="{{ asset('asset') }}/img/front-pages/icons/bg-left-icon-light.png"
                alt="section icon"
                class="position-absolute top-0 start-0"
                data-speed="1"
                data-app-light-img="front-pages/icons/bg-left-icon-light.png"
                data-app-dark-img="front-pages/icons/bg-left-icon-dark.png" />
            <h6 class="text-center fw-semibold d-flex justify-content-center align-items-center mb-4">
                <img
                    src="{{ asset('asset') }}/img/front-pages/icons/section-tilte-icon.png"
                    alt="section title icon"
                    class="me-2" />
                <span class="text-uppercase">skema langganan</span>
            </h6>
            <h3 class="text-center mb-2"><span class="fw-bold">Skema berlangganan</span> disesuaikan untuk anda</h3>
            <p class="text-center fw-medium mb-3 pt-3 pb-lg-5">
                Dengan berlangganan pada skema apapun, anda dapat menikmati semua program latihan dari berbagai cabang olahraga.
            </p>
            <div class="row gy-4 pt-lg-3">
                <!-- Favourite Plan: Start -->
                @for($i=0; $i<=5; $i++)
                    <div class="col-xl-4 col-lg-6">
                        <div class="card shadow-none">
                            <div class="card-header border-0">
                                <h3 class="mb-2 pb-1">Basic Plan</h3>
                                <div class="d-flex align-items-center">
                                    <h5 class="d-flex mb-0"><sup class="h5 mt-3">Rp.</sup><span class="display-3 fw-bold">20.000</span></h5>
                                    <div class="ms-2 ps-1">
                                        <h6 class="mb-1">Per month</h6>
                                        <p class="small mb-0">10% off for yearly subscription</p>
                                    </div>
                                </div>
                                <img src="{{ asset('asset') }}/img/front-pages/icons/smiling-icon.png" alt="smiling icon" />
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li>
                                        <h5>
                                            <img
                                                src="{{ asset('asset') }}/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon"
                                                class="me-2 pe-1 scaleX-n1-rtl" />
                                            Timeline
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <img
                                                src="{{ asset('asset') }}/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon"
                                                class="me-2 pe-1 scaleX-n1-rtl" />
                                            Basic search
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <img
                                                src="{{ asset('asset') }}/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon"
                                                class="me-2 pe-1 scaleX-n1-rtl" />
                                            Live chat widget
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <img
                                                src="{{ asset('asset') }}/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon"
                                                class="me-2 pe-1 scaleX-n1-rtl" />
                                            Email marketing
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <img
                                                src="{{ asset('asset') }}/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon"
                                                class="me-2 pe-1 scaleX-n1-rtl" />
                                            Custom Forms
                                        </h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <img
                                                src="{{ asset('asset') }}/img/front-pages/icons/list-arrow-icon.png"
                                                alt="list arrow icon"
                                                class="me-2 pe-1 scaleX-n1-rtl" />
                                            Traffic analytics
                                        </h5>
                                    </li>
                                </ul>
                                <hr />
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="me-1">
                                        <h6 class="mb-1">Basic Support</h6>
                                        <p class="small mb-0">Only Email</p>
                                    </div>
                                    <span class="badge bg-label-primary rounded-pill">AVG. Time: 24h</span>
                                </div>
                                <div class="text-center mt-4 pt-2">
                                    <a href="payment-page.html" class="btn btn-outline-primary w-100">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
                <!-- Favourite Plan: End -->
            </div>
        </div>
    </section>
    <!-- Pricing plans: End -->

    <!-- Fun facts: Start -->
    <section id="landingFunFacts" class="section-py landing-fun-facts">
        <div class="container">
            <div class="row gx-0 gy-5 gx-sm-5">
                <div class="col-md-4 col-sm-6 text-center">
              <span class="badge badge-center rounded-pill bg-label-hover-primary fun-facts-icon mb-4"
              ><i class="tf-icons mdi mdi-soccer mdi-36px"></i
                  ></span>
                    <h2 class="fw-bold mb-1">137+</h2>
                    <p class="fw-medium mb-0">Total Program</p>
                </div>
                <div class="col-md-4 col-sm-6 text-center">
              <span class="badge badge-center rounded-pill bg-label-hover-warning fun-facts-icon mb-4"
              ><i class="tf-icons mdi mdi-account-tie mdi-36px"></i
                  ></span>
                    <h2 class="fw-bold mb-1">137+</h2>
                    <p class="fw-medium mb-0">Total Pelatih</p>
                </div>
                <div class="col-md-4 col-sm-12 text-center">
              <span class="badge badge-center rounded-pill bg-label-hover-success fun-facts-icon mb-4"
              ><i class="tf-icons mdi mdi-account-multiple-outline mdi-36px"></i
                  ></span>
                    <h2 class="fw-bold mb-1">1,100+</h2>
                    <p class="fw-medium mb-0">Pengguna Aktif</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Fun facts: End -->

    <!-- FAQ: Start -->
    <section id="landingFAQ" class="section-py bg-body landing-faq">
        <div class="container bg-icon-right">
            <img
                src="{{ asset('asset') }}/img/front-pages/icons/bg-right-icon-light.png"
                alt="section icon"
                class="position-absolute top-0 end-0"
                data-speed="1"
                data-app-light-img="front-pages/icons/bg-right-icon-light.png"
                data-app-dark-img="front-pages/icons/bg-right-icon-dark.png" />
            <h6 class="text-center fw-semibold d-flex justify-content-center align-items-center mb-4">
                <img
                    src="{{ asset('asset') }}/img/front-pages/icons/section-tilte-icon.png"
                    alt="section title icon"
                    class="me-2" />
                <span class="text-uppercase">faq</span>
            </h6>
            <h3 class="text-center mb-2">Frequently asked<span class="fw-bold"> questions</span></h3>
            <p class="text-center fw-medium mb-3 mb-md-5 pb-3">
                Browse through these FAQs to find answers to commonly asked questions.
            </p>
            <div class="row gy-5">
                <div class="col-lg-5">
                    <div class="text-center">
                        <img
                            src="{{ asset('asset') }}/img/front-pages/landing-page/sitting-girl-with-laptop.png
          "
                            alt="sitting girl with laptop"
                            class="faq-image" />
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="accordion" id="accordionFront">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="head-One">
                                <button
                                    type="button"
                                    class="accordion-button collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordionOne"
                                    aria-expanded="true"
                                    aria-controls="accordionOne">
                                    Do you charge for each upgrade?
                                </button>
                            </h2>

                            <div
                                id="accordionOne"
                                class="accordion-collapse collapse"
                                data-bs-parent="#accordionFront"
                                aria-labelledby="accordionOne">
                                <div class="accordion-body">
                                    Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing
                                    marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping
                                    soufflé. Wafer gummi bears marshmallow pastry pie.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="head-Two">
                                <button
                                    type="button"
                                    class="accordion-button collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordionTwo"
                                    aria-expanded="false"
                                    aria-controls="accordionTwo">
                                    Do I need to purchase a license for each website?
                                </button>
                            </h2>
                            <div
                                id="accordionTwo"
                                class="accordion-collapse collapse"
                                aria-labelledby="accordionTwo"
                                data-bs-parent="#accordionFront">
                                <div class="accordion-body">
                                    Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake
                                    dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly
                                    beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item active">
                            <h2 class="accordion-header" id="head-Three">
                                <button
                                    type="button"
                                    class="accordion-button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordionThree"
                                    aria-expanded="true"
                                    aria-controls="accordionThree">
                                    What is regular license?
                                </button>
                            </h2>
                            <div
                                id="accordionThree"
                                class="accordion-collapse collapse show"
                                aria-labelledby="accordionThree"
                                data-bs-parent="#accordionFront">
                                <div class="accordion-body">
                                    Regular license can be used for end products that do not charge users for access or service(access
                                    is free and there will be no monthly subscription fee). Single regular license can be used for
                                    single end product and end product can be used by you or your client. If you want to sell end
                                    product to multiple clients then you will need to purchase separate license for each client. The
                                    same rule applies if you want to use the same end product on multiple domains(unique setup). For
                                    more info on regular license you can check official description.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="head-Four">
                                <button
                                    type="button"
                                    class="accordion-button collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordionFour"
                                    aria-expanded="false"
                                    aria-controls="accordionFour">
                                    What is extended license?
                                </button>
                            </h2>
                            <div
                                id="accordionFour"
                                class="accordion-collapse collapse"
                                aria-labelledby="accordionFour"
                                data-bs-parent="#accordionFront">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis et aliquid quaerat possimus maxime!
                                    Mollitia reprehenderit neque repellat deleniti delectus architecto dolorum maxime, blanditiis
                                    earum ea, incidunt quam possimus cumque.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="head-Five">
                                <button
                                    type="button"
                                    class="accordion-button collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordionFive"
                                    aria-expanded="false"
                                    aria-controls="accordionFive">
                                    Which license is applicable for SASS application?
                                </button>
                            </h2>
                            <div
                                id="accordionFive"
                                class="accordion-collapse collapse"
                                aria-labelledby="accordionFive"
                                data-bs-parent="#accordionFront">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi molestias exercitationem ab cum
                                    nemo facere voluptates veritatis quia, eveniet veniam at et repudiandae mollitia ipsam quasi
                                    labore enim architecto non!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ: End -->
</div>

<!-- / Sections:End -->

<!-- Footer: Start -->
<footer class="landing-footer">
    <div class="footer-top position-relative overflow-hidden">
        <img
            src="{{ asset('asset') }}/img/front-pages/backgrounds/footer-bg.png"
            alt="footer bg"
            class="footer-bg banner-bg-img" />
        <div class="container position-relative">
            <div class="row gx-0 gy-4 g-md-5">
                <div class="col-lg-5">
                    <a href="landing-page.html" class="app-brand-link mb-4">
                <span class="app-brand-logo demo me-2">
                  <span style="color: #666cff">
                    <svg width="268" height="150" viewBox="0 0 38 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z"
                          fill="currentColor" />
                      <path
                          d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z"
                          fill="url(#paint0_linear_2989_100980)"
                          fill-opacity="0.4" />
                      <path
                          d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z"
                          fill="currentColor" />
                      <path
                          d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                          fill="currentColor" />
                      <path
                          d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                          fill="url(#paint1_linear_2989_100980)"
                          fill-opacity="0.4" />
                      <path
                          d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z"
                          fill="currentColor" />
                      <defs>
                        <linearGradient
                            id="paint0_linear_2989_100980"
                            x1="5.36642"
                            y1="0.849138"
                            x2="10.532"
                            y2="24.104"
                            gradientUnits="userSpaceOnUse">
                          <stop offset="0" stop-opacity="1" />
                          <stop offset="1" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient
                            id="paint1_linear_2989_100980"
                            x1="5.19475"
                            y1="0.849139"
                            x2="10.3357"
                            y2="24.1155"
                            gradientUnits="userSpaceOnUse">
                          <stop offset="0" stop-opacity="1" />
                          <stop offset="1" stop-opacity="0" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </span>
                </span>
                        <span class="app-brand-text demo footer-link fw-bold">Materialize</span>
                    </a>
                    <p class="footer-text footer-logo-description mb-4">
                        Most Powerful & Comprehensive 🤩 React NextJS Admin Template with Elegant Material Design & Unique
                        Layouts.
                    </p>
                    <form>
                        <div class="d-flex mt-2 gap-3">
                            <div class="form-floating form-floating-outline w-px-250">
                                <input
                                    type="text"
                                    class="form-control bg-transparent text-white"
                                    id="newsletter-1"
                                    placeholder="Your email" />
                                <label for="newsletter-1">Subscribe to newsletter</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <h6 class="footer-title mb-4">Demos</h6>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3">
                            <a href="../vertical-menu-template/" target="_blank" class="footer-link">Vertical Layout</a>
                        </li>
                        <li class="mb-3">
                            <a href="../horizontal-menu-template/" target="_blank" class="footer-link">Horizontal Layout</a>
                        </li>
                        <li class="mb-3">
                            <a href="../vertical-menu-template-bordered/" target="_blank" class="footer-link">Bordered Layout</a>
                        </li>
                        <li class="mb-3">
                            <a href="../vertical-menu-template-semi-dark/" target="_blank" class="footer-link"
                            >Semi Dark Layout</a
                            >
                        </li>
                        <li>
                            <a href="../vertical-menu-template-dark/" target="_blank" class="footer-link">Dark Layout</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <h6 class="footer-title mb-4">Pages</h6>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3">
                            <a href="pricing-page.html" class="footer-link">Pricing</a>
                        </li>
                        <li class="mb-3">
                            <a href="payment-page.html" class="footer-link"
                            >Payment<span class="badge rounded-pill bg-primary ms-2">New</span></a
                            >
                        </li>
                        <li class="mb-3">
                            <a href="checkout-page.html" class="footer-link">Checkout</a>
                        </li>
                        <li class="mb-3">
                            <a href="help-center-landing.html" class="footer-link">Help Center</a>
                        </li>
                        <li>
                            <a href="../vertical-menu-template/auth-login-cover.html" target="_blank" class="footer-link"
                            >Login/Register</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h6 class="footer-title mb-4">Download our app</h6>
                    <a href="javascript:void(0);" class="d-block footer-link mb-3 pb-2"
                    ><img src="{{ asset('asset') }}/img/front-pages/landing-page/apple-icon.png" alt="apple icon"
                        /></a>
                    <a href="javascript:void(0);" class="d-block footer-link"
                    ><img src="{{ asset('asset') }}/img/front-pages/landing-page/google-play-icon.png" alt="google play icon"
                        /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom py-3">
        <div
            class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
            <div class="mb-2 mb-md-0">
            <span class="footer-text"
            >©
              <script>
                document.write(new Date().getFullYear());
              </script>
              , Made with <i class="tf-icons mdi mdi-heart text-danger"></i> by
            </span>
                <a href="https://pixinvent.com" target="_blank" class="footer-link fw-medium footer-theme-link"
                >Pixinvent</a
                >
            </div>
            <div>
                <a href="https://github.com/pixinvent" class="footer-link me-2" target="_blank"
                ><i class="mdi mdi-github"></i
                    ></a>
                <a href="https://www.facebook.com/pixinvents/" class="footer-link me-2" target="_blank"
                ><i class="mdi mdi-facebook"></i
                    ></a>
                <a href="https://twitter.com/pixinvents" class="footer-link me-2" target="_blank"
                ><i class="mdi mdi-twitter"></i
                    ></a>
                <a href="https://www.instagram.com/pixinvents/" class="footer-link" target="_blank"
                ><i class="mdi mdi-instagram"></i
                    ></a>
            </div>
        </div>
    </div>
</footer>
<!-- Footer: End -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('asset') }}/vendor/libs/popper/popper.js"></script>
<script src="{{ asset('asset') }}/vendor/js/bootstrap.js"></script>
<script src="{{ asset('asset') }}/vendor/libs/node-waves/node-waves.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('asset') }}/vendor/libs/nouislider/nouislider.js"></script>
<script src="{{ asset('asset') }}/vendor/libs/swiper/swiper.js"></script>

<!-- Main JS -->
<script src="{{ asset('asset') }}/js/front-main.js"></script>

<!-- Page JS -->
<script src="{{ asset('asset') }}/js/front-page-landing.js"></script>
</body>
</html>