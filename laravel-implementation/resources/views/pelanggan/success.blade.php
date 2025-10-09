<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mie Jagoan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="text-center mt-5 p-5">
    <div class="alert alert-success">
      <div class="fw-bold mb-3">✅ Pesanan Diterima!</div>
      <div>Terima kasih, pesanan Anda akan segera diproses oleh dapur kami.</div>
      <div>
        Nomor Meja Anda: {{ $pesanan->nomor_meja }}
      </div>
    </div>

    <div class="text-center">
      <a href="menu" class="btn btn-primary">Pesan Lagi</a>
      <a href="status" class="btn btn-dark">Cek Status Pesanan</a>
    </div>
  </div>
</body>
</html>