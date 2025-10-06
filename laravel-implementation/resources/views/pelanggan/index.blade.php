@extends('layouts.app')

@section('content')
<div class="text-center mb-4">
    <h2>Selamat Datang</h2>
    <p class="text-muted">Aplikasi self order, mesan gak lagi ribet.</p>
</div>

<div class="d-flex flex-column align-items-center gap-3">
    <a href="{{ route('pelanggan.menu') }}" class="btn btn-dark w-50">Mulai Pesan</a>
    <a href="{{ route('pelanggan.status') }}" class="btn btn-outline-dark w-50">Cek Status Pesanan</a>
</div>
@endsection
