@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
  <div class="alert alert-success p-4 shadow-sm">
    <h3 class="fw-bold mb-3">✅ Pesanan Diterima!</h3>
    <p class="text-muted mb-4">Terima kasih, pesanan Anda akan segera diproses oleh dapur kami.</p>
    <p class="fw-semibold">
      Nomor Pesanan: <span class="text-primary">Order-{{ $pesanan->id_pesanan }}</span>
    </p>
  </div>

  <div class="d-flex flex-column flex-md-row justify-content-center gap-3 mt-4">
    <a href="{{ route('pelanggan.menu') }}" class="btn btn-outline-dark px-4">Pesan Lagi</a>
    <a href="{{ route('pelanggan.status') }}" class="btn btn-dark px-4">Cek Status Pesanan</a>
  </div>
</div>
@endsection
