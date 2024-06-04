@extends('template.front-base')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('asset') }}/vendor/css/pages/app-academy.css" />
@endsection

@section('content')
    <div class="app-academy">
        <div class="card p-0 mb-4">
            <div class="card-body d-flex flex-column flex-md-row justify-content-between p-0 pt-4">
                <div class="app-academy-md-25 card-body py-0">
                    <img
                        src="{{ asset('asset') }}/img/illustrations/bulb-light.png"
                        class="img-fluid app-academy-img-height scaleX-n1-rtl"
                        alt="Bulb in hand"
                        data-app-light-img="illustrations/bulb-light.png"
                        data-app-dark-img="illustrations/bulb-dark.png"
                        height="90" />
                </div>
                <div
                    class="app-academy-md-50 card-body d-flex align-items-md-center flex-column text-md-center mb-4">
                      <span class="card-title mb-3 lh-lg px-md-5 display-6 text-heading">
                        Semua Cabang Olahraga
                        <span class="text-primary text-nowrap">Dalam Satu Tempat</span>.
                      </span>
                    <p class="mb-3 px-2">
                        Tingkatkan keterampilan anda dengan program latihan terpercaya dalam berbagai cabang olahraga.
                    </p>
                    <div class="d-flex align-items-center justify-content-between app-academy-md-80">
                        <input type="search" placeholder="Cari cabang olahraga" class="form-control me-2" />
                        <button type="submit" class="btn btn-primary btn-icon"><i class="mdi mdi-magnify"></i></button>
                    </div>
                </div>
                <div class="app-academy-md-25 d-flex align-items-end justify-content-end">
                    <img
                        src="{{ asset('asset') }}/img/illustrations/pencil-rocket.png"
                        alt="pencil rocket"
                        height="188"
                        class="scaleX-n1-rtl" />
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header d-flex flex-wrap justify-content-between gap-3">
                <div class="card-title mb-0 me-1">
                    <h5 class="mb-1">Semua Program Latihan</h5>
                </div>
                <div class="d-flex justify-content-md-end align-items-center gap-3 flex-wrap">
                    <select id="select2_course_select" class="select2 form-select" data-placeholder="Cabor">
                        <option value="">Semua Cabang Olahraga</option>
                        <option value="all courses">Sepak Bola</option>
                    </select>
                </div>
            </div>
            <div class="card-body">
                <div class="row gy-4 mb-4">
                    @for($i = 0; $i < 12; $i++)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card p-2 shadow-none border">
                                <div class="rounded-2 text-center mb-3">
                                    <a href="{{ url('course') }}"
                                    ><img
                                            class="img-fluid"
                                            src="{{ asset('asset') }}/img/pages/app-academy-tutor-1.png"
                                            alt="tutor image 1"
                                        /></a>
                                </div>
                                <div class="card-body p-3 pt-2">
                                    <a href="{{ url('course') }}" class="h5">Sepak Bola</a>
                                    <p class="mt-2">Optimalkan keterampilan sepak bola anda dengan program latihan intensif.</p>
                                    <p class="d-flex align-items-center">
                                        <i class="mdi mdi-page-layout-sidebar-right me-2"></i>4 program
                                    </p>
                                    <div
                                        class="d-flex flex-column flex-md-row gap-3 text-nowrap flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                        <a
                                            class="w-100 btn btn-outline-primary d-flex align-items-center"
                                            href="{{ url('course') }}">
                                            <span class="me-1">Lihat</span><i class="mdi mdi-arrow-right lh-1 scaleX-n1-rtl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <nav aria-label="Page navigation" class="d-flex align-items-center justify-content-center">
                    <ul class="pagination">
                        <li class="page-item prev">
                            <a class="page-link" href="javascript:void(0);"
                            ><i class="tf-icon mdi mdi-chevron-left"></i
                                ></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0);">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0);">5</a>
                        </li>
                        <li class="page-item next">
                            <a class="page-link" href="javascript:void(0);"
                            ><i class="tf-icon mdi mdi-chevron-right"></i
                                ></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('page-script')
    <script src="{{ asset('asset') }}/js/app-academy-course.js"></script>
@endsection
