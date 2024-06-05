@extends('./layout.layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Program /</span> Langganan</h4>

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
                <form action="{{ route('langganan.update',$langganan->id)}}" method="POST" >
                    @csrf
                    @method('PUT')
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="hidden" name="id" value="{{ $langganan->id }}" hidden>
                        <input type="text" class="form-control" id="basic-default-fullname" name="nama_langganan" placeholder="" value="{{ $langganan->nama_langganan}}" required/>
                        <label for="basic-default-fullname">Nama Langganan</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" id="basic-default-fullname" name="lama_langganan" placeholder="" value="{{ $langganan->lama_langganan}}" readonly/>
                        <label for="basic-default-fullname">Lama Langganan</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="harga" class="form-control" id="basic-default-fullname" name="harga" placeholder="" value="{{ $langganan->harga }}" required/>
                        <label for="basic-default-fullname">Harga Langganan</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" id="basic-default-fullname" name="keu_1" placeholder="" value="{{ $langganan->keuntungan_1}}" required/>
                        <label for="basic-default-fullname">Keuntungan 1</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" id="basic-default-fullname" name="keu_2" placeholder="" value="{{ $langganan->keuntungan_2}}" required/>
                        <label for="basic-default-fullname">Keuntungan 2</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" id="basic-default-fullname" name="keu_3" placeholder="" value="{{ $langganan->keuntungan_3}}" required/>
                        <label for="basic-default-fullname">Keuntungan 3</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" id="basic-default-fullname" name="keu_4" placeholder="" value="{{ $langganan->keuntungan_4}}" required/>
                        <label for="basic-default-fullname">Keuntungan 4</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" id="basic-default-fullname" name="keu_5" placeholder="" value="{{ $langganan->keuntungan_5}}" required/>
                        <label for="basic-default-fullname">Keuntungan 5</label>
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

