@extends('template.front-auth')
@section('content')
    <div class="card-body mt-2">
        <div class="alert alert-solid-primary d-flex align-items-center" role="alert">
            <i class="mdi mdi-alert-circle-check-outline me-2"></i>
            Tautan dikirim! Silahkan cek email anda!
        </div>
        <h4 class="mb-2">Lupa Password? 🔒</h4>
        <p class="mb-4">Masukkan email anda dan kami akan mengirimkan tautan untuk mengganti password</p>
        <form id="formAuthentication" class="mb-3" action="auth-reset-password-basic.html" method="GET">
            <div class="form-floating form-floating-outline mb-3">
                <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Masukkan email anda"
                    autofocus />
                <label>Email</label>
            </div>
            <button class="btn btn-primary d-grid w-100">Kirim Tautan</button>
        </form>
        <div class="text-center">
            <a href="{{ url('login') }}" class="d-flex align-items-center justify-content-center">
                <i class="mdi mdi-chevron-left scaleX-n1-rtl mdi-24px"></i>
                Kembali ke Login
            </a>
        </div>
    </div>
@endsection
