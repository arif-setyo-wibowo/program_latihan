@extends('template.front-base')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('asset') }}/vendor/css/pages/app-academy-details.css" />
@endsection

@section('content')
    <div class="card g-3 mt-5">
        <div class="card-body row g-3">
            <div class="col-lg-8">
                <div class="d-flex justify-content-between align-items-center flex-wrap mb-2 gap-1">
                    <div class="me-1">
                        <h5 class="mb-1">{{ $materi_now->judul }}</h5>
                        <p class="mb-1">{{ $materi_now->petugas->nama }}</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <a
                            class="w-100 btn btn-outline-primary d-flex align-items-center"
                            href="{{ route('home') }}">
                            <span class="me-1">Kembali</span><i class="mdi mdi-arrow-left lh-1 scaleX-n1-rtl"></i>
                        </a>
                    </div>
                </div>
                <div class="card academy-content shadow-none border">
                    <div class="p-2">
                        @if($materi_now->link == "-")
                            <img class="w-100 rounded" src="{{ asset('uploads/'.$materi_now->foto) }}" alt="">
                        @else
                            <div class="cursor-pointer">
                                @php
                                $video_id = '';
                                $is_youtube = false;
                                $is_google_drive = false;

                                // Check if link is from YouTube
                                if (strpos($materi->link, 'youtu.be') !== false) {
                                    // Short format YouTube link
                                    $video_id = basename(parse_url($materi->link, PHP_URL_PATH));
                                    $is_youtube = true;
                                } elseif (strpos($materi->link, 'youtube.com') !== false) {
                                    // Full format YouTube link
                                    parse_str(parse_url($materi->link, PHP_URL_QUERY), $video_params);
                                    if (isset($video_params['v'])) {
                                        $video_id = $video_params['v'];
                                        $is_youtube = true;
                                    }
                                } elseif (strpos($materi->link, 'drive.google.com') !== false) {
                                    // Google Drive link
                                    $path_parts = explode('/', parse_url($materi->link, PHP_URL_PATH));
                                    if (in_array('file', $path_parts) && in_array('d', $path_parts)) {
                                        $video_id = $path_parts[array_search('d', $path_parts) + 1];
                                        $is_google_drive = true;
                                    }
                                }
                            @endphp

                            @if($is_youtube)
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $video_id }}" frameborder="0" allowfullscreen></iframe>
                            @elseif($is_google_drive)
                                <iframe src="https://drive.google.com/file/d/{{ $video_id }}/preview" width="640" height="480" allow="autoplay"></iframe>
                            @else
                                <p>Video tidak ditemukan atau format link tidak didukung.</p>
                            @endif
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <h5>Informasi</h5>
                        <div class="d-flex flex-wrap">
                            <div class="me-5">
                                <p class="text-nowrap">
                                    <i class="mdi mdi-shape mdi-24px me-2"></i>Cabang Olahraga: {{ $materi_now->cabor->nama_cabor }}
                                </p>
                                <p class="text-nowrap">
                                    <i class="mdi mdi-account mdi-24px me-2"></i>Penulis Materi: {{ $materi_now->petugas->nama }}
                                </p>
                                <p class="text-nowrap"><i class="mdi mdi-dumbbell mdi-24px me-2"></i>Kategori: {{ $materi_now->kategori->nama_kategori }}</p>
                            </div>
                        </div>
                        <hr class="mb-4 mt-2" />
                        <h5>Materi</h5>
                            {!! $materi_now->isi !!}
                        @if($materi_now->link != "-")
                            <hr class="my-4" />
                            <h5>Foto</h5>
                            <div>
                                <img class="w-100 rounded" src="{{ asset('uploads/'.$materi_now->foto) }}" alt="">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="accordion stick-top" id="courseContent">


                    @foreach($kategori as $k)
                        <div class="accordion-item shadow-none border border-bottom-0 active my-0 overflow-hidden">
                            <div class="accordion-header border-0" id="headingOne">
                                <button
                                    type="button"
                                    class="accordion-button bg-lighter rounded-0"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#{{ $k->nama_kategori }}"
                                    aria-expanded="true"
                                    aria-controls="{{ $k->nama_kategori }}">
                            <span class="d-flex flex-column">
                              <span class="h5 mb-1">{{ $k->nama_kategori }}</span>
                                @php
                                   $t = 0;
                                   foreach ($materi as $mt) :
                                       if ($mt->idkategori == $k->id){
                                           $t+=1;
                                       }
                                   endforeach
                                @endphp
                              <span class="text-body fw-normal">{{ $t }} Materi</span>
                            </span>
                                </button>
                            </div>
                            <div id="{{ $k->nama_kategori }}" class="accordion-collapse collapse show" data-bs-parent="#courseContent">
                                <div class="accordion-body py-3 border-top">

                                    @foreach($materi as $m)
                                        @if($m->idkategori == $k->id)
                                            <a href="{{ $m->id }}">
                                                <div class="form-check d-flex align-items-center mb-3">
                                                    <label for="defaultCheck1" class="form-check-label ms-n4">
                                                        <span class="mb-0 h6">{{ $m->judul }}</span>
                                                        <span class="text-body d-block">27 Maret 2024</span>
                                                    </label>
                                                </div>
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-script')
    <script src="{{ asset('asset') }}/js/app-academy-course-details.js"></script>
@endsection
