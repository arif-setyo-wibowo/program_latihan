@extends('./layout.layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Program /</span> Langganan</h4>
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
                     Langganan
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
                            <th>Nama Langganan</th>
                            <th>Harga Langganan</th>
                            <th>Lama Langganan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($langganan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_langganan }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>{{ $item->lama_langganan }}</td>
                            <td>
                                <a href="{{ route('langganan.show',$item->id)}}" class="btn btn-success btn-sm">
                                    <span class="mdi mdi-information-slab-circle-outline"></span> Detail
                                  </a>
                                  <a href="{{ route('langganan.edit',$item->id)}}" class="btn btn-info btn-sm">
                                    <span class="mdi mdi-pencil-outline"></span> Edit
                                  </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
</div>
  <!-- / Content -->
@endsection
