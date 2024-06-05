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

    <title>Payment Page - Front Pages | Materialize - Material Design HTML Admin Template</title>

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

    <!-- Page CSS -->

    <link rel="stylesheet" href="{{ asset('asset') }}/vendor/css/pages/front-page-payment.css" />

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
        </ul>
        <!-- Toolbar: End -->
    </div>
</nav>
<!-- Navbar: End -->

<!-- Sections:Start -->

<section class="section-py bg-body first-section-pt">
    <div class="container">
        <div class="card px-3">
            <div class="row">
                <div class="col-lg-7 card-body border-end">
                    <h4 class="mb-2">Pembayaran</h4>
                    <p class="mb-4">
                        Transfer sejumlah uang ke salah satu rekening dibawah, kemudian unggah bukti transfer pada kolom yang disediakan:
                    </p>
                    <div id="form-credit-card">
                        <form>
                            <div class="row g-4">
                                <div class="col-6">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input readonly
                                                type="text"
                                                id="billings-card-num"
                                                class="form-control billing-card-mask"
                                                value="4541 2541 2547 2577"
                                                aria-describedby="paymentCard"/>
                                            <label for="billings-card-num">Nomor Rekening</label>
                                        </div>
                                        <span class="input-group-text cursor-pointer p-1" id="paymentCard"
                                        ><span class="card-type w-px-50"></span
                                            ></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input readonly
                                                   type="text"
                                                   id="billings-card-num"
                                                   class="form-control billing-card-mask"
                                                   value="4541 2541 2547 2577"
                                                   aria-describedby="paymentCard"/>
                                            <label for="billings-card-num">Nomor Rekening</label>
                                        </div>
                                        <span class="input-group-text cursor-pointer p-1" id="paymentCard"
                                        ><span class="card-type w-px-50"></span
                                            ></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input readonly
                                                   type="text"
                                                   id="billings-card-num"
                                                   class="form-control billing-card-mask"
                                                   value="4541 2541 2547 2577"
                                                   aria-describedby="paymentCard"/>
                                            <label for="billings-card-num">Nomor Rekening</label>
                                        </div>
                                        <span class="input-group-text cursor-pointer p-1" id="paymentCard"
                                        ><span class="card-type w-px-50"></span
                                            ></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input readonly
                                                   type="text"
                                                   id="billings-card-num"
                                                   class="form-control billing-card-mask"
                                                   value="4541 2541 2547 2577"
                                                   aria-describedby="paymentCard"/>
                                            <label for="billings-card-num">Nomor Rekening</label>
                                        </div>
                                        <span class="input-group-text cursor-pointer p-1" id="paymentCard"
                                        ><span class="card-type w-px-50"></span
                                            ></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <h4 class="mt-4 mb-4">Informasi Pengguna</h4>
                    <form>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control" id="billings-name" placeholder="John Doe" />
                                    <label for="billings-name">Nama Lengkap</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control" id="billings-email" placeholder="john.doe@gmail.com" />
                                    <label for="billings-email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control" id="billings-address" placeholder="Jl. Purorekso" />
                                    <label for="billings-address">Alamat</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control" id="billings-telp" placeholder="082143123221" />
                                    <label for="billings-telp">Nomor Telepon</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="file" class="form-control" id="billings-bukti" />
                                    <label for="billings-bukti">Bukti Transfer</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 card-body">
                    <h4 class="mb-2">Ringkasan</h4>
                    <div class="bg-lighter p-4 rounded mt-4">
                        <p>A simple start for everyone</p>
                        <div class="d-flex align-items-center">
                            <h1 class="text-heading display-3">$59.99</h1>
                            <sub>/month</sub>
                        </div>
                        <div class="d-grid">
                            <a href="{{ url('landing') }}" data-bs-target="#pricingModal" class="btn btn-outline-primary text-primary"
                            >Ubah Skema</a
                            >
                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <p class="mb-0">Subtotal</p>
                            <h6 class="mb-0">$85.99</h6>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <p class="mb-0">Tax</p>
                            <h6 class="mb-0">$4.99</h6>
                        </div>
                        <hr />
                        <div class="d-flex justify-content-between align-items-center mt-3 pb-1">
                            <p class="mb-0">Total</p>
                            <h6 class="mb-0">$90.98</h6>
                        </div>
                        <div class="d-grid mt-3">
                            <button class="btn btn-success">
                                <span class="me-2">Saya telah membayar</span>
                                <i class="mdi mdi-arrow-right scaleX-n1-rtl"></i>
                            </button>
                        </div>

                        <p class="mt-4 pt-2">
                            Setelah anda selesai membayar sejumlah total tagihan, tim kami akan melakukan verifikasi, mohon cek berkala email anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
<script src="{{ asset('asset') }}/vendor/libs/cleavejs/cleave.js"></script>

<!-- Main JS -->
<script src="{{ asset('asset') }}/js/front-main.js"></script>

<!-- Page JS -->
<script src="{{ asset('asset') }}/js/pages-pricing.js"></script>
<script src="{{ asset('asset') }}/js/front-page-payment.js"></script>
</body>
</html>
