<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mie Jagoan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="text-center mt-5"> {{-- div ini anggap sebagai suatu kotak penampung judul web--}}
        <h2>Selamat Datang</h2>
        <p>Aplikasi self order, mesan gak lagi ribet.</p>
    </div>
    <div class="text-center"> {{--- kotak penampung baru ---}}
        <a href="menu" class="btn btn-success">Pesan</a>
        <a href="status" class="btn btn-primary">Status</a>
    </div>
</body>
</html>










{{-- @extends('layouts.app')


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@section('content')
<div class="text-center mb-4">
    <h2>Selamat Datang</h2>
    <p class="text-muted">Aplikasi self order, mesan gak lagi ribet.</p>
</div>

<div class="d-flex flex-column align-items-center gap-3">
    <a href="{{ url('/menu') }}" class="btn btn-dark w-50">Mulai Pesan</a>
    <a href="{{ url('/status') }}" class="btn btn-outline-dark w-50">Cek Status Pesanan</a>
</div>
@endsection --}}
