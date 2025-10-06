@extends('layouts.app')

@section('content')
  <h4 class="mb-4">Status Pesanan</h4>

  @php
    $percent = 0;
    $message = 'Pesanan diterima.';
    if($pesanan->status == 'baru') { $percent = 25; $message = 'Pesanan baru dibuat.'; }
    elseif($pesanan->status == 'diproses') { $percent = 50; $message = '🔄 Pesanan sedang diproses.'; }
    elseif($pesanan->status == 'selesai') { $percent = 75; $message = '✅ Pesanan selesai dimasak.'; }
    elseif($pesanan->status == 'diantar') { $percent = 100; $message = '🎉 Pesanan sudah diantar ke meja.'; }
  @endphp

  @if($percent < 100)
    <div class="alert alert-info small">
      <div class="mb-2">{{ $message }}</div>
      <div class="progress" style="height: 8px;">
        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: {{ $percent }}%"></div>
      </div>
      <div class="mt-2 text-end small">
        Langkah {{ $percent/25 }} dari 4
      </div>
    </div>
  @else
    <div class="alert alert-success small">
      🎉 Pesanan telah selesai dan siap disajikan. Terima kasih!
    </div>
  @endif

  <div class="text-center mt-4">
    <a href="{{ route('pelanggan.index') }}" class="btn btn-outline-dark">Kembali ke Beranda</a>
  </div>
@endsection
