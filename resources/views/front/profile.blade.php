@extends('template.front-base')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('asset') }}/vendor/css/pages/page-profile.css" />
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-7 col-lg-6">
            <a
                class="w-100 btn btn-outline-primary d-flex align-items-center mb-3"
                href="{{ url('home') }}">
                <span class="me-1">Kembali</span><i class="mdi mdi-arrow-left lh-1 scaleX-n1-rtl"></i>
            </a>
            <div class="card mb-4">
                <div class="user-profile-header-banner">
                    <img src="{{ asset('asset') }}/img/pages/profile-banner.png" alt="Banner image" class="rounded-top" />
                </div>
                <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                        <img
                            src="{{ asset('asset') }}/img/avatars/1.png"
                            alt="user image"
                            class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" />
                    </div>
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div
                            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                            <div class="user-profile-info">
                                <h4>{{ $atlet[0]->nama}}</h4>
                                {{-- <ul
                                    class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                    <li class="list-inline-item">
                                        <i class="mdi mdi-calendar-blank-outline me-1 mdi-20px"></i
                                        ><span class="fw-medium"> Bergabung pada April 2021</span>
                                    </li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5 col-lg-6">
            <!-- About User -->
            <div class="card mb-4">
                <div class="card-body">
                    <small class="card-text text-uppercase">Profil</small>
                    <ul class="list-unstyled my-3 py-1">
                        <li class="d-flex align-items-center mb-3">
                            <i class="mdi mdi-account-outline mdi-24px"></i
                            ><span class="fw-medium mx-2">Nama Lengkap:</span> <span>{{ $atlet[0]->nama}}</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="mdi mdi-email-outline mdi-24px"></i><span class="fw-medium mx-2">Email:</span>
                            <span>{{ $atlet[0]->email}}</span>
                        </li>
                    </ul>
                    <small class="card-text text-uppercase">Langganan</small>
                    <ul class="list-unstyled mb-0 mt-3 pt-1">
                        <li class="d-flex align-items-center mb-3">
                            <i class="mdi mdi-check mdi-24px"></i><span class="fw-medium mx-2">Status Langganan:</span>
                            <span>Aktif</span>
                        </li>
                        {{-- <li class="d-flex align-items-center mb-3">
                            <i class="mdi mdi-clock-start mdi-24px"></i><span class="fw-medium mx-2">Mulai Langganan:</span>
                            <span>24/10/2023</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="mdi mdi-clock-end mdi-24px"></i><span class="fw-medium mx-2">Sisa Langganan:</span>
                            <span>2 Bulan 14 Hari (14/05/2024)</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="mdi mdi-flag-outline mdi-24px"></i><span class="fw-medium mx-2">Kategori Langganan:</span>
                            <span>6 Bulan</span>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <!--/ About User -->
        </div>
    </div>
@endsection

@section('page-script')
    <script src="{{ asset('asset') }}/js/app-user-view-account.js"></script>
@endsection
