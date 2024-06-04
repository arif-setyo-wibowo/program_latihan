@extends('./layout.layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Program /</span> Kategori Latihan</h4>

    <div class="card mb-4">
        <div class="card-header p-0">
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
                <form action="{{ route('kategori.update',$kategori->id)}}" method="POST" >
                    @csrf
                    @method('PUT')
                    <div class="form-floating form-floating-outline mb-4">
                        <select class="selectpicker w-100" data-style="btn-default" name="idcabor" data-live-search="true" required>
                            <option selected disabled value="">Pilih Olahraga</option>
                            @foreach ($olahraga as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $kategori->idcabor ? 'selected' : '' }}>{{ $data->nama_cabor }} </option>
                            @endforeach
                        </select>
                        <label for="selectpickerLiveSearch">Jenis Olahraga</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="hidden" name="id" value="{{ $kategori->id }}" hidden>
                        <input type="text" class="form-control" id="basic-default-fullname" name="nama_kategori" placeholder="Kategori Olahraga" value="{{ $kategori->nama_kategori}}" required/>
                        <label for="basic-default-fullname">Kategori Olahraga</label>
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

