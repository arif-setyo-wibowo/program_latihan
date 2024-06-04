@extends('template.front-auth')
@section('content')
    <div class="card-body">
        <h4 class="mb-2">Ganti Password 🔒</h4>
        <p class="mb-4">Silahkan masukkan password baru anda</p>
        <form id="formAuthentication" class="mb-3" action="auth-login-basic.html" method="GET">
            <div class="mb-3 form-password-toggle">
                <div class="input-group input-group-merge">
                    <div class="form-floating form-floating-outline">
                        <input
                            type="password"
                            id="password"
                            class="form-control"
                            name="password"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="password" />
                        <label for="password">Password baru</label>
                    </div>
                    <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                </div>
            </div>
            <button class="btn btn-primary d-grid w-100 mb-3">Ganti Password</button>
            <div class="text-center">
                <a href="{{ url('login') }}" class="d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-chevron-left scaleX-n1-rtl mdi-24px"></i>
                    Kembali ke login
                </a>
            </div>
        </form>
    </div>
@endsection
