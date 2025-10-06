@extends('layouts.app')

@section('content')
  <h4 class="mb-4">Pilih Metode Pembayaran</h4>

  <form method="POST" action="{{ route('pelanggan.payment.store', $pesanan->id_pesanan) }}">
    @csrf

    <div class="card shadow-sm mb-3">
      <div class="card-body">
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="metode" id="payBank" value="transfer" checked>
          <label class="form-check-label" for="payBank">Transfer Bank</label>
        </div>

        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="metode" id="payEwallet" value="e-wallet">
          <label class="form-check-label" for="payEwallet">E-Wallet</label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="metode" id="payQris" value="qris">
          <label class="form-check-label" for="payQris">QRIS</label>
        </div>
      </div>
    </div>

    {{-- Info pembayaran sederhana (statis sesuai pilihan default) --}}

    <div id="payDetail" class="alert alert-secondary small text-center">
        No Rek: 123-456-789 (BCA)
      </div>

      <div id="qrisImageContainer" class="text-center d-none">
        <img src="{{url('qris.jpg')}}" alt="QRIS Code" class="img-fluid rounded shadow-sm" style="max-width:250px;">
        <!-- <p class="small text-muted mt-2">Tunjukkan QRIS ini kepada kasir untuk melakukan pembayaran.</p> -->
      </div>

    <div class="row g-3 mt-4">
      <div class="col-md-6">
        <a href="{{ route('pelanggan.review', $pesanan->id_pesanan) }}" class="btn btn-outline-dark w-100">Batal</a>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-dark w-100">Sudah Bayar</button>
      </div>
    </div>
  </form>


  <script>
    const radios = document.querySelectorAll('input[name="metode"]');
    const payDetail = document.getElementById('payDetail');
    const qrisImageContainer = document.getElementById('qrisImageContainer');

    radios.forEach(radio => {
      radio.addEventListener('change', (e) => {
        qrisImageContainer.classList.add('d-none');
        if (e.target.value === 'transfer') payDetail.textContent = 'No Rek: 123-456-789 (BCA)';
        if (e.target.value === 'e-wallet') payDetail.textContent = 'E-Wallet: 0821-1111-1111';
        if (e.target.value === 'qris') {
          payDetail.textContent = 'Silakan scan QRIS berikut:';
          qrisImageContainer.classList.remove('d-none');
        }
      });
    });
  </script>
@endsection
