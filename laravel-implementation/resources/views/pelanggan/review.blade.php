@extends('layouts.app')

@section('content')
  <h4 class="mb-4">Review Pesanan Anda</h4>

  <div class="card shadow-sm mb-3">
    <div class="card-body">
      <div class="small">
        @foreach($pesanan->detail as $d)
          <div>{{ $d->menu->nama_menu }} — {{ $d->qty }} x Rp {{ number_format($d->menu->harga,0,',','.') }} = Rp {{ number_format($d->subtotal,0,',','.') }}</div>
        @endforeach
      </div>
      <div class="mt-3 fw-bold">
        Total: Rp {{ number_format($pesanan->total_harga,0,',','.') }}
      </div>
    </div>
  </div>

  <div class="row g-3">
    <div class="col-md-6">
      <a href="{{ route('pelanggan.menu') }}" class="btn btn-outline-dark w-100">Batal</a>
    </div>
    <div class="col-md-6">
      <a href="{{ route('pelanggan.payment', $pesanan->id_pesanan) }}" class="btn btn-dark w-100">Lanjut ke Pembayaran</a>
    </div>
  </div>
@endsection
