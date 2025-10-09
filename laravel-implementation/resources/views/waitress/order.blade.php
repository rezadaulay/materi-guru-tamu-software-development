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
        <h2>Daftar Pesanan Siap Diantar</h2>
    </div>
    <div class="mt-5">
      <table class="table border">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">Nomor Meja</th>
            <th scope="col">Waktu</th>
            <th scope="col">Total</th>
            <th scope="col" class="text-center">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pesananMasuk as $pesanan)
            <tr>
              <th scope="row">{{ $pesanan->id_pesanan }}</th>
              <td>{{ $pesanan->nama_pelanggan }}</td>
              <td>{{ $pesanan->nomor_meja }}</td>
              <td>{{ $pesanan->tanggal_pesan }}</td>
              <td>Rp{{ number_format($pesanan->total_harga, 0, ',', '.') }}</td>
              <td class="text-center"><span class="badge text-bg-primary">{{ $pesanan->status }}</span></td>
              <td>
                <a href="/waitress/detail-order/{{ $pesanan->id_pesanan }}">Lihat</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</body>
</html>