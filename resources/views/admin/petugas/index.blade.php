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
                <table id="example1" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>User</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($petugas as $item)
                      <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $item->nama}}</td>
                        <td>{{ $item->username}}</td>
                        <td>
                            <a href="{{ route('petugas.edit',$item->id)}}" class="btn btn-info btn-sm">
                              <span class="mdi mdi-pencil-outline"></span>
                                Edit
                            </a>
                            <form action="{{ route('petugas.destroy',$item->id)}}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')">
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
                <form action="{{ route('petugas.store')}}" method="POST">
                  @csrf
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" id="basic-default-fullname" name="nama" placeholder="Nama" required/>
                        <label for="basic-default-fullname">Nama</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" id="basic-default-fullname" name="username" placeholder="Username" required/>
                        <label for="basic-default-fullname">Username</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="password" class="form-control" id="basic-default-fullname" name="password" placeholder="Olahraga" required/>
                        <label for="basic-default-fullname">Password</label>
                    </div>
                    <div class="form-floating form-floating-outline form-floating-bootstrap-select">
                        <div class="dropdown bootstrap-select w-100 dropup">
                        <select id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default" tabindex="null" name="role" required>
                            <option selected value="" disabled>Pilih Role</option>
                            <option value="0">Admin</option>
                            <option value="1">Pelatih</option>
                        </select>
                       </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Tambah</button>
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
