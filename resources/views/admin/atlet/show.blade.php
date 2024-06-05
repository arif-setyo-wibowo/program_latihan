@extends('./layout.layout')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Program /</span> Atlet</h4>
    <div class="card">
      <h5 class="card-header">Detail Atlet</h5>
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
                <td style="width:30%">Nama</td>
                <td > {{ $atlet->nama}}</td>
            </tr>
            <tr>
                <td style="width:30%">Alamat</td>
                <td > {{ $atlet->alamat}}</td>
            </tr>
            <tr>
                <td style="width:30%">Email</td>
                <td > {{ $atlet->email}}</td>
            </tr>
            <tr>
                <td style="width:30%">Langganan</td>
                <td > {{ $atlet->langganan->nama_langganan}}</td>
            </tr>
            <tr>
                <td style="width:30%">Harga Langganan</td>
                <td >Rp. {{ number_format($atlet->langganan->harga,0, ',', '.')  }}</td>
            </tr>
            <tr>
                <td style="width:30%">Telp</td>
                <td > {{ $atlet->no_telp}}</td>
            </tr>
            <tr>
                <td style="width:30%">Harga Langganan</td>
                <td >Rp. {{ number_format($atlet->langganan->harga * 1.11,0, ',', '.')  }}</td>
            </tr>
            <tr>
                <td style="width:30%">Bukti Transfer</td>
                <td> <img src="{{ asset('uploads/' . $atlet->bukti_tf) }}"  style="width:480px; height:480px;" alt=""></td>
            </tr>
          </tbody>
        </table>

        <a href="{{ route('atlet.index')}}" class="btn btn-warning" style="margin:15px;">Kembali</a>
        <a href="{{ route('atlet.update.custom', ['atlet' => $atlet->id, 'action' => 'terima']) }}" class="btn btn-success" style="margin:15px;">Terima Pembayaran</a>
        <a href="{{ route('atlet.update.custom', ['atlet' => $atlet->id, 'action' => 'tolak']) }}" class="btn btn-danger" style="margin:15px;">Tolak Pembayaran</a>

      </div>
    </div>
  </div>
  <!-- / Content -->
@endsection
