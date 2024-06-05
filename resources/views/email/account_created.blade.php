<!DOCTYPE html>
<html>
<head>
    <title>Akun Baru Telah Dibuat</title>
</head>
<body>
    <p>Selamat, akun Anda telah berhasil dibuat.</p>
    <p>Berikut adalah informasi akun Anda:</p>
    <ul>
        <li>Email: {{ $email }}</li>
        <li>Password: {{ $password }}</li>
        <p>Silahkan login menggunakan informasi di atas melalui <a href="{{ $url }}">halaman login</a>.</p>
    </ul>
</body>
</html>
