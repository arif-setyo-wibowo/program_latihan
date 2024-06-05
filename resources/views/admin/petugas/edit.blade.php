@extends('./layout.layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Program /</span> Jenis Olahraga</h4>

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
                      Jenis Olahraga
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
                <form action="{{ route('petugas.update',$petugas->id)}}" method="POST">
                    @csrf
                    @method('put')
                      <div class="form-floating form-floating-outline mb-4">
                        <input type="hidden" class="form-control" id="basic-default-fullname" name="id" placeholder="Nama" required value="{{ $petugas->id}}"/>
                          <input type="text" class="form-control" id="basic-default-fullname" name="nama" placeholder="Nama" required value="{{ $petugas->nama}}"/>
                          <label for="basic-default-fullname">Nama</label>
                      </div>
                      <div class="form-floating form-floating-outline mb-4">
                          <input type="text" class="form-control" id="basic-default-fullname" name="username" placeholder="Username" required value="{{ $petugas->username }}"/>
                          <label for="basic-default-fullname">Username</label>
                      </div>
                      <div class="form-floating form-floating-outline mb-4">
                        <input type="hidden" name="password_lama" value="{{ $petugas->password }}">
                          <input type="password" class="form-control" id="basic-default-fullname" name="password" placeholder="Olahraga" />
                          <span>*Kosongkan jika tidak ingin mengubah password</span>
                          <label for="basic-default-fullname">Password</label>
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

@section('js')
<script>
  $(document).ready(function() {
    // Tampilkan toast
    $('#toast-container').show();

    // Atur timeout untuk menutup toast setelah 2 detik (2000 ms)
    setTimeout(function() {
      $('#toast-container').fadeOut('slow', function() {
        $(this).remove();
      });
    }, 2000);
  });
</script>

@endsection
