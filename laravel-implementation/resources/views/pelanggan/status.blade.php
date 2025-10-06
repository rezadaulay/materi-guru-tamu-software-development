@extends('layouts.app')

@section('content')
  <h4 class="mb-4">Cek Status Pesanan</h4>

  <div class="card shadow-sm mb-4">
    <div class="card-body">
      <form method="POST" action="{{ route('pelanggan.status.check') }}">
        @csrf
        <label for="nomor_meja" class="form-label">Nomor Meja</label>
        <input type="text" id="nomor_meja" name="nomor_meja" class="form-control mb-3" placeholder="Masukkan nomor meja (contoh: 5)" required>
        <div class="d-grid">
          <button type="submit" class="btn btn-dark">Cari</button>
        </div>
      </form>
    </div>
  </div>

  @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
  @endif

  <div class="text-center mt-4">
    <a href="{{ route('pelanggan.index') }}" class="btn btn-outline-dark">Kembali ke Beranda</a>
  </div>
@endsection
