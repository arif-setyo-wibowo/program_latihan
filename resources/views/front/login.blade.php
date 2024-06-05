@extends('template.front-auth')
@section('content')
    <div class="card-body mt-2">
        <h4 class="mb-2">Selamat Datang! 👋</h4>
        <p class="mb-4">Login untuk memulai berlatih dengan program kami</p>

        <form id="formAuthentication" class="mb-3" action="index.html" method="GET">
            <div class="form-floating form-floating-outline mb-3">
                <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email-username"
                    placeholder="Masukkan email atau username"
                    autofocus />
                <label for="email">Email atau Username</label>
            </div>
            <div class="mb-3">
                <div class="form-password-toggle">
                    <div class="input-group input-group-merge">
                        <div class="form-floating form-floating-outline">
                            <input
                                type="password"
                                id="password"
                                class="form-control"
                                name="password"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password" />
                            <label for="password">Password</label>
                        </div>
                        <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                    </div>
                </div>
            </div>
            <div class="mb-3 text-end">
                <a href="{{ url('forgot') }}">
                    <span>Lupa Password?</span>
                </a>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
            </div>
        </form>

        <p class="text-center">
            <span>Belum punya akun?</span>
            <a href="auth-register-basic.html">
                <span>Berlangganan!</span>
            </a>
        </p>
    </div>
@endsection
