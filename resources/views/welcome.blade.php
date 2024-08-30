<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Laravel</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body class="d-flex flex-column min-vh-100">

    <div class="container my-auto text-center">
        <h1 class="mb-4">Selamat Datang di Aplikasi CRUD</h1>

        <div>
            <a href="{{ route('siswa.tampil') }}" class="btn btn-primary">Kelola Siswa</a>
        </div>
    </div>

</body>
</html>
