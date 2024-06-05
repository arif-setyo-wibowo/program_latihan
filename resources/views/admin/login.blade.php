<!doctype html>

<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('asset/')}}/"
  data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login Basic | Program Atlet</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('asset/')}}/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('asset/')}}/vendor/fonts/materialdesignicons.css" />
    <link rel="stylesheet" href="{{ asset('asset/')}}/vendor/fonts/flag-icons.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{ asset('asset/')}}/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('asset/')}}/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('asset/')}}/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('asset/')}}/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('asset/')}}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('asset/')}}/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('asset/')}}/vendor/libs/@form-validation/form-validation.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('asset/')}}/vendor/css/pages/page-auth.css" />

    <!-- Helpers -->
    <script src="{{ asset('asset/')}}/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('asset/')}}/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('asset/')}}/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="position-relative">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Login -->
          <div class="card p-2">
            <!-- Logo -->
            <div class="app-brand justify-content-center mt-5">
              <a href="#" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                </span>
                <span class="app-brand-text demo text-heading fw-bold">Program Atlet</span>
              </a>
            </div>
            <!-- /Logo -->

            <div class="card-body mt-2">

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error)
                            <i class="bi bi-exclamation-octagon me-1"> {{ $error }} </i><br>
                        @endforeach
                    </div>
                @endif
              <p class="mb-4">Please sign-in to your account</p>

              <form class="mb-3"  method="POST" action="{{ url()->current()}}">
                @csrf
                <div class="form-floating form-floating-outline mb-3">
                  <input
                    type="text"
                    class="form-control"
                    name="username"
                    placeholder="Enter your username"
                    autofocus />
                  <label for="email">Username</label>
                </div>
                <div class="mb-3">
                  <div class="form-password-toggle">
                    <div class="input-group input-group-merge">
                      <div class="form-floating form-floating-outline">
                        <input
                          type="password"
                          class="form-control"
                          name="password"
                          required
                          placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                          aria-describedby="password" />
                        <label for="password">Password</label>
                      </div>
                      <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                    </div>
                  </div>
                </div>
                <div class="mb-3 d-flex justify-content-between">

                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
              </form>


              </div>
            </div>
          </div>
          <!-- /Login -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('asset/')}}/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('asset/')}}/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('asset/')}}/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('asset/')}}/vendor/libs/node-waves/node-waves.js"></script>
    <script src="{{ asset('asset/')}}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('asset/')}}/vendor/libs/hammer/hammer.js"></script>
    <script src="{{ asset('asset/')}}/vendor/libs/i18n/i18n.js"></script>
    <script src="{{ asset('asset/')}}/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="{{ asset('asset/')}}/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('asset/')}}/vendor/libs/@form-validation/popular.js"></script>
    <script src="{{ asset('asset/')}}/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="{{ asset('asset/')}}/vendor/libs/@form-validation/auto-focus.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('asset/')}}/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{ asset('asset/')}}/js/pages-auth.js"></script>
  </body>
</html>
