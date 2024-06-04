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
                    <button type="button" class="nav-link waves-effect active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="false" tabindex="-1">
                     Materi Latihan
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link waves-effect" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="true">
                      Tambah Data
                    </button>
                  </li>
            <span class="tab-slider" style="left: 91.1528px; width: 107.111px; bottom: 0px;"></span></ul>
          </div>
        </div>
        <div class="card-body">
          <div class="tab-content p-0">
            <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                <table id="example1" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Materi</th>
                            <th>Jenis Olahrga</th>
                            <th>Kategori Latihan</th>
                            <th>Video Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materi as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->judul}}</td>
                            <td>{{ $item->cabor->nama_cabor}}</td>
                            <td>{{ $item->kategori->nama_kategori}}</td>
                            @if ($item->judul == null)
                                <td>-</td>
                            @else
                                <td>{{ $item->link}}</td>
                            @endif
                            <td>
                                <a href="{{ route('materi.show',$item->id)}}" class="btn btn-success btn-sm">
                                  <span class="mdi mdi-information-slab-circle-outline"></span> Detail
                                </a>
                                <a href="{{ route('materi.edit',$item->id)}}" class="btn btn-info btn-sm">
                                  <span class="mdi mdi-pencil-outline"></span> Edit
                                </a>
                                <form action="{{ route('materi.destroy',$item->id)}}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Gambar?')">
                                      <span class="mdi mdi-delete-outline"></span> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade " id="navs-top-profile" role="tabpanel">
                <form action="{{ route("materi.store")}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" id="basic-default-fullname" name="judul" placeholder="Judul Latihan" />
                        <label for="basic-default-fullname">Judul Latihan</label>
                    </div>

                    <div class="form-floating form-floating-outline mb-4">
                        <select id="selectCabor" class="selectpicker w-100" data-style="btn-default" name="idcabor" onchange="loadSelectKategori()" data-live-search="true">
                            <option selected disabled value="">Pilih Olahraga</option>
                            @foreach ($olahraga as $data)
                                <option value="{{ $data->id }}" data-cabor="{{ $data->id }}">{{ $data->nama_cabor }}</option>
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
                        <input type="hidden" id="snow-editor-content" name="isi">


                        <div id="snow-editor">
                        </div>
                    </div>

                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" id="basic-default-fullname" name="link" placeholder="Link Video" />
                        <label for="basic-default-fullname">Link Video</label>
                    </div>

                    <div class="mb-4">
                        <label for="basic-default-fullname">Foto Latihan</label>
                        <input type="file" class="form-control" id="basic-default-fullname" name="foto" placeholder="Judul Latihan" />

                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
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
                    options += '<option value="' + item.id + '">' + item.nama_kategori + '</option>';
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
