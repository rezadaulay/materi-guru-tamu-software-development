<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mie Jagoan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="text-center mt-5">
        <h2>Detail Pesanan ID: {{ $pesanan->id_pesanan }}</h2>
    </div>
    <div class="mt-5">
      <ul class="list-group">
        <li class="list-group-item">Nama Pelanggan: {{ $pesanan->nama_pelanggan }}</li>
        <li class="list-group-item">Nomor Meja: {{ $pesanan->nomor_meja }}</li>
        <li class="list-group-item">Tanggal: {{ $pesanan->tanggal_pesan }}</li>
        <li class="list-group-item">Total Harga: Rp{{ number_format($pesanan->total_harga, 0, ',', '.') }}</li>
        <li class="list-group-item">Status: {{ $pesanan->status }}</li>
      </ul>
      <div class="mt-5">
        <table class="table border">
          <thead>
            <tr>
              <th scope="col">Menu</th>
              <th scope="col" class="text-center">Jumlah</th>
              <th scope="col" class="text-end">Subtotal</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pesanan->detail as $item)
              <tr>
                <th scope="row">{{ $item->menu->nama_menu }}</th>
                <td class="text-center">{{ $item->jumlah }}</td>
                <td class="text-end">Rp{{ number_format($item->subtotal, 0, ',', '.') }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="text-center mt-5">
      <a href="/dapur/proses-order/{{ $pesanan->id_pesanan }}" class="btn btn-info">Proses</a>
      <a href="/dapur/selesai-order/{{ $pesanan->id_pesanan }}" class="btn btn-success">Selesai</a>
    </div>
</body>
</html>