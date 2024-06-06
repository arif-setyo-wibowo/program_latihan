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
