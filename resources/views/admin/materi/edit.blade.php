@extends('./layout.layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Program /</span> Materi Latihan</h4>

    <div class="card mb-4">
        <div class="card-header p-0">
            <?php if (session()->has('msg')):?>
            <div id="toast-container" class="toast-top-right">
              <div class="toast toast-success" aria-live="polite" style="display: block;">
                <div class="toast-message">{{ session('msg') }}</div>
              </div>
            </div>
          <?php endif ?>
          @if (session()->has('error'))
            <div id="toast-container" class="toast-top-right">
                <div class="toast toast-error" aria-live="assertive" style="display: block;">
                <div class="toast-message">
                        {{ session('error') }}
                </div>
                </div>
            </div>
            @endif


          @if ($errors->any())
            <div id="toast-container" class="toast-top-right">
              <div class="toast toast-error" aria-live="assertive" style="display: block;">
                <div class="toast-message">
                      @foreach ($errors->all() as $error)
                      {{ $error }} </i><br>
                  @endforeach
                </div>
              </div>
            </div>
          @endif
          <div class="nav-align-top">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link waves-effect active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="true">
                        Edit Data
                    </button>
                </li>
            <span class="tab-slider" style="left: 91.1528px; width: 107.111px; bottom: 0px;"></span></ul>
          </div>
        </div>
        <div class="card-body">
          <div class="tab-content p-0">
            <div class="tab-pane fade active show" id="navs-top-profile" role="tabpanel">
                <form action="{{ route("materi.update", $materi->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="hidden" name="id" value="{{$materi->id}}">
                        <input type="text" class="form-control" id="basic-default-fullname" name="judul" placeholder="Judul Latihan" value="{{ $materi->judul}}"/>
                        <label for="basic-default-fullname">Judul Latihan</label>
                    </div>

                    <div class="form-floating form-floating-outline mb-4">
                        <select id="selectCabor" class="selectpicker w-100" data-style="btn-default" name="idcabor" onchange="loadSelectKategori()" data-live-search="true">
                            <option selected disabled value="">Pilih Olahraga</option>
                            @foreach ($olahraga as $data)
                                <option value="{{ $data->id }}"  data-cabor="{{ $data->id }}" {{ $data->id == $materi->idcabor ? 'selected' : '' }}>{{ $data->nama_cabor }}</option>
                            @endforeach
                        </select>
                        <label>Jenis Olahraga</label>
                    </div>

                    <div class="form-floating form-floating-outline mb-4">
                        <select id="selectKategori" class="selectpicker w-100" data-style="btn-default" name="idkategori" data-live-search="true" name="idkategori">
                            <option value="">Pilih Kategori Latihan</option>
                        </select>
                        <label>Kategori Latihan</label>
                    </div>



                    <div class="form-floating form-floating-outline mb-4">
                        <input type="hidden" id="snow-editor-content" name="isi" value="{{ $materi->isi}}">

                        <div id="snow-editor" ><div class="form-floating form-floating-outline mb-4">
                            <input type="hidden" id="snow-editor-content" name="isi" value="{{ $materi->isi}}">

                            <div id="snow-editor">{!! $materi->isi !!}
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" id="basic-default-fullname" name="link" placeholder="Link Video" value="{{ $materi->link}}" />
                        <label for="basic-default-fullname">Link Video</label>
                    </div>

                    <div class="mb-4">
                        <label for="basic-default-fullname">Foto Latihan</label>
                        <input type="file" class="form-control" id="basic-default-fullname" name="foto" placeholder="Judul Latihan" />
                        <input type="hidden" class="form-control" id="basic-default-fullname" name="fotoawal" value="{{ $materi->foto}}"/>

                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
          </div>
        </div>
      </div>


</div>
  <!-- / Content -->
@endsection

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
@section('js')
<script>
    $(document).ready(function() {
        // Memuat kategori saat halaman dimuat (jika olahraga dipilih sebelumnya)
        loadSelectKategori();

        // Memanggil fungsi loadSelectKategori saat olahraga dipilih
        $('#selectCabor').change(function() {
            loadSelectKategori();
        });
    });

    function loadSelectKategori() {
    var idsubkategoria = $("#selectCabor").val();
    if (idsubkategoria !== "") {
        $.ajax({
            url: "/admin/kategorites/" + idsubkategoria,
            type: "GET",
            dataType: "json",
            success: function(data) {
                var $selectKategori = $("#selectKategori");
                $selectKategori.empty(); // Clear the existing options
                var options = '<option selected disabled value="">Pilih Kategori Latihan</option>';
                $.each(data, function(index, item) {
                    // Tambahkan logika JavaScript untuk menentukan apakah opsi dipilih atau tidak
                    var selected = '';
                    if (item.id == "{{ $materi->idkategori }}") {
                        selected = 'selected';
                    }
                    options += '<option value="' + item.id + '" ' + selected + '>' + item.nama_kategori + '</option>';
                });
                $selectKategori.html(options).prop("disabled", false);

                // Destroy and re-initialize the selectpicker
                $selectKategori.selectpicker('destroy').selectpicker();
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error: ", status, error);
            }
        });
    } else {
        var $selectKategori = $("#selectKategori");
        $selectKategori.empty().html('<option selected disabled value="">Pilih Kategori Latihan</option>').prop("disabled", true);

            // Destroy and re-initialize the selectpicker
            $selectKategori.selectpicker('destroy').selectpicker();
        }
    }

</script>



@endsection
