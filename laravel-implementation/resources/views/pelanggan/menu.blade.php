@extends('layouts.app')

@section('content')
<h4 class="mb-3">Pilih Pesanan</h4>
<div class="row g-4">
  {{-- Bagian kiri: daftar menu --}}
  <div class="col-md-7">
    <form method="POST" action="{{ route('pelanggan.store') }}">
      @csrf
      <div class="list-group">
        @foreach($menu as $m)
        <div class="list-group-item d-flex justify-content-between align-items-center">
          <div>
            <strong>{{ $m->nama_menu }}</strong><br>
            <span class="text-muted small">Rp {{ number_format($m->harga,0,',','.') }}</span>
          </div>
          <input type="number" name="jumlah[{{ $m->id_menu }}]" value="0" min="0" class="form-control form-control-sm" style="width: 80px;">
        </div>
        @endforeach
      </div>
    </div>

      {{-- Bagian kanan: form identitas + tombol --}}
      <div class="col-md-5 mt-4">
        <div class="card shadow-sm">
          <div class="card-body">
            {{-- <h5 class="card-title">Keranjang</h5> --}}
            <div class="small text-muted mb-3">Silakan isi nama dan nomor meja Anda.</div>

            <div class="mb-2">
              <label class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama_pelanggan" placeholder="Masukkan nama" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Nomor Meja</label>
              <input type="text" class="form-control" name="nomor_meja" placeholder="Contoh: 5" required>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-dark">Lanjut</button>
            </div>
          </div>
        </div>
      </div>
    </form>
</div>
@endsection
