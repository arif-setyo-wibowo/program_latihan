@extends('./layout.layout')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Program /</span> Langganan</h4>
    <div class="card">
      <h5 class="card-header">Detail langganan</h5>
      <div class="table-responsive text-nowrap">
        <table class="table table-sm">
          <thead>
            <tr>
              <th>Kolom</th>
              <th>Data</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
                <td style="width:30%">Nama Langganan</td>
                <td > {{ $langganan->nama_langganan}}</td>
            </tr>
            <tr>
                <td style="width:30%">Lama Langganan</td>
                <td > {{ $langganan->lama_langganan}}</td>
            </tr>
            <tr>
                <td style="width:30%">Harga Langganan</td>
                <td > {{ $langganan->harga}}</td>
            </tr>
            <tr>
                <td style="width:30%">Keuntungan 1</td>
                <td > {{ $langganan->keuntungan_1}}</td>
            </tr>
            <tr>
                <td style="width:30%">Keuntungan 2</td>
                <td > {{ $langganan->keuntungan_2}}</td>
            </tr>
            <tr>
                <td style="width:30%">Keuntungan 3</td>
                <td > {{ $langganan->keuntungan_3}}</td>
            </tr>
            <tr>
                <td style="width:30%">Keuntungan 4</td>
                <td > {{ $langganan->keuntungan_4}}</td>
            </tr>
            <tr>
                <td style="width:30%">Keuntungan 5</td>
                <td > {{ $langganan->keuntungan_5}}</td>
            </tr>
          </tbody>
        </table>

        <a href="{{ route('langganan.index')}}" class="btn btn-warning" style="margin:15px;">Kembali</a>
      </div>
    </div>
  </div>
  <!-- / Content -->
@endsection
