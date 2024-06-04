@extends('./layout.layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Program /</span> Materi Latihan</h4>

    <div class="card g-3 mt-5">
      <div class="card-body row g-3">
          <div class="d-flex justify-content-between align-items-center flex-wrap mb-2 gap-1">
            <div class="me-1">
              <h5 class="mb-1">{{ $materi->judul}}</h5>
            </div>
          </div>
          <div class="card academy-content shadow-none border">
            <div class="p-2">
              <div class="cursor-pointer">

                <!-- resources/views/video.blade.php -->

               <!-- resources/views/video.blade.php -->

                @php
                // Extract video ID for YouTube
                $video_id = '';
                // Check if link is from YouTube in short format
                if (strpos($materi->link, 'youtu.be') !== false) {
                    $video_id = basename(parse_url($materi->link, PHP_URL_PATH));
                } else {
                    // Check if link is from YouTube in full format
                    parse_str(parse_url($materi->link, PHP_URL_QUERY), $video_params);
                    if (isset($video_params['v'])) {
                        $video_id = $video_params['v'];
                    } else {
                        $video_id = basename(parse_url($materi->link, PHP_URL_PATH));
                    }
                }
                @endphp

                @if(!empty($video_id))
                <iframe class="w-100" id="plyr-video-player" playsinline controls height="650" src="https://www.youtube.com/embed/{{ $video_id }}"></iframe>
                @else
                <p>Link yang diberikan bukan dari YouTube.</p>
                @endif


              </div>
            </div>
            <div class="card-body">
                <hr class="mb-4 mt-2" />
                <h5>Judul</h5>
                <p class="mb-4">
                    <h5 class="mb-1">{{ $materi->judul}}</h5>
                </p>
              <hr class="mb-4 mt-2" />
              <h5>Deskripsi</h5>
              <p class="mb-4">
                {!! $materi->isi !!}
              </p>
              <hr class="my-4" />
              <h5>Pelatih</h5>
              <div class="d-flex justify-content-start align-items-center user-name">
                <div class="avatar-wrapper">
                </div>
                <div class="d-flex flex-column">
                  <h6 class="mb-0">{{ $materi->petugas->nama}}</h6>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  @section('js')
  @endsection
