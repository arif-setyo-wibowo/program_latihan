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

    <title>Halaman Pembayaran</title>

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
                <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">Program Atlet</span>
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
            <?php if (session()->has('msg')):?>
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="autoDismissAlert" style="margin:5px;">
                {{ session('msg') }}
            </div>
            <?php endif ?>

            @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert" id="autoDismissAlert"style="margin:5px;">
                    {{ Session::get('error') }}
                </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert" id="autoDismissAlert"style="margin:5px;">
                @foreach ($errors->all() as $error)
                {{ $error }} </i><br>
            @endforeach
            </div>
          @endif
            <div class="row">



                <div class="col-lg-7 card-body border-end">
                    <h4 class="mb-2">Pembayaran</h4>
                    <p class="mb-4">
                        Transfer sejumlah uang ke salah satu rekening dibawah, kemudian unggah bukti transfer pada kolom yang disediakan:
                    </p>
                    <div id="form-credit-card">

                            <div class="row g-4">
                                <div class="col-6">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input readonly
                                                type="text"
                                                class="form-control"
                                                value="643501015308531"/>
                                            <label for="billings-card-num">Nomor Rekening</label>
                                        </div>
                                        <span class="input-group-text cursor-pointer p-1"
                                        ><span class="w-px-50"><b>BRI</b></span
                                            ></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input readonly
                                                type="text"
                                                class="form-control"
                                                value="IMELDA ZASKIA MAWARNI"/>
                                            <label for="billings-card-num">Nama Pemilik</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>

                    <form action="{{ route('payment.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <h4 class="mt-4 mb-4">Informasi Pengguna</h4>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control" id="billings-name" name="nama" placeholder="Nama Lengkap" />
                                    <label for="billings-name">Nama Lengkap</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control" id="billings-email" name="email" placeholder="Email" />
                                    <label for="billings-email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control" id="billings-address" name="alamat" placeholder="Jl. Purorekso" />
                                    <label for="billings-address">Alamat</label>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" class="form-control" id="billings-telp" name="telp" placeholder="082143123221" />
                                    <label for="billings-telp">Nomor Telepon</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="basic-default-fullname">Bukti Transfer</label>
                                <input type="file" class="form-control" id="basic-default-fullname" name="bukti_tf" />
                            </div>
                        </div>

                </div>
                <div class="col-lg-5 card-body">
                    <h4 class="mb-2">Ringkasan</h4>
                    <div class="bg-lighter p-4 rounded mt-4">
                        <div class="d-flex align-items-center">

                            <input type="hidden" class="form-control" name="langganan" value="{{ $langganan->id}}"/>
                            <h1 class="text-heading display-3">Rp. {{ number_format($langganan->harga, 0, ',', '.') }}</h1>
                            <sub>/ {{ $langganan->lama_langganan}}</sub>
                        </div>
                        <div class="d-grid">
                            <a href="{{ route('landing') }}" data-bs-target="#pricingModal" class="btn btn-outline-primary text-primary"
                            >Ubah Skema</a
                            >
                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <p class="mb-0">Subtotal</p>
                            <h6 class="mb-0">Rp. {{ number_format($langganan->harga, 0, ',', '.') }}</h6>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <p class="mb-0">Tax</p>
                            <h6 class="mb-0">Rp. {{ number_format($langganan->harga * 0.11, 0, ',', '.') }}</h6>
                        </div>
                        <hr />
                        <div class="d-flex justify-content-between align-items-center mt-3 pb-1">
                            <p class="mb-0">Total</p>
                            <h6 class="mb-0">Rp. {{ number_format($total,0, ',', '.') }}</h6>
                        </div>
                        <div class="d-grid mt-3">
                            @if (session()->has('success'))
                                <a href="{{ route('landing') }}" class="btn btn-success">
                                    <span class="me-2">Kembali</span>
                                    <i class="mdi mdi-arrow-right scaleX-n1-rtl"></i>
                                </a>
                            @else
                                <button type="submit" class="btn btn-success">
                                    <span class="me-2">Saya telah membayar</span>
                                    <i class="mdi mdi-arrow-right scaleX-n1-rtl"></i>
                                </button>
                                <a href="{{ route('landing') }}" class="btn btn-info mt-3">
                                    <span class="me-2">Kembali</span>
                                    <i class="mdi mdi-arrow-right scaleX-n1-rtl"></i>
                                </a>
                            @endif

                        </div>

                        <p class="mt-4 pt-2">
                            Setelah anda selesai membayar sejumlah total tagihan, tim kami akan melakukan verifikasi, mohon cek berkala email anda.
                        </p>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- / Sections:End -->

<!-- Footer: Start -->
<footer class="landing-footer">
    <div class="footer-bottom py-3">
        <div
            class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
            <div class="mb-2 mb-md-0">
            <span class="footer-text"
            >©
              <script>
                document.write(new Date().getFullYear());
              </script>
              , Made with <i class="tf-icons mdi mdi-heart text-danger"></i>
            </span>
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
