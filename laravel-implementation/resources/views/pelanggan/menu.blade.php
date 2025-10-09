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
        <h2>Menu</h2>
        <p>Silahkan dipilih menunya yeacchhh.</p>
    </div>
    <form action="pesanan" method="POST">
      <div class="row">


        <div class="col-7">
          <div class="text-center">
              
              <ul class="list-group">
                @foreach($menu as $item) <!-- buka perintah looping foreach -->
                  <li class="list-group-item">
                    <div class="fw-bold fs-5">
                      <input type="checkbox" name="id_menu[]" value="{{ $item->id_menu }}">
                      {{ $item->nama_menu }}
                    </div>
                    <div>Rp{{ number_format($item->harga, 0, ',', '.') }}</div>
                  </li>
                @endforeach <!-- tutup perintah looping foreach -->
              </ul>
              
          </div>
        </div>


        <div class="col-5">

          <div class="mb-3">
            <label for="formNama" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" id="formNama" name="nama_pelanggan" placeholder="Isi nama anda">
          </div>
          <div class="mb-3">
            <label for="formNomorMeja" class="form-label">Nomor meja</label>
            <input type="number" name="nomor_meja" class="form-control" id="formNomorMeja" placeholder="Isi nomor meja anda">
          </div>

            <div class="text-center mt-2">
              <button type="submit" class="btn btn-primary">Buat Pesanan</button>
            </div>
        </div>
        
      </div>

      
    </form>
</body>
</html>


{{-- @extends('layouts.app')

@section('content')
<h4 class="mb-3">Pilih Pesanan</h4>
<div class="row g-4">
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

      <div class="col-md-5 mt-4">
        <div class="card shadow-sm">
          <div class="card-body">
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
@endsection --}}
