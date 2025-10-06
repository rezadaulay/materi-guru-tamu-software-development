<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mie Jagoan - Self Order</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container">
      <a class="navbar-brand fw-bold" href="{{ route('pelanggan.index') }}">MIE JAGOAN</a>
      <span class="small text-muted">Self Order System</span>
    </div>
  </nav>

  <div class="container py-5">
    @yield('content')
  </div>

  <footer class="text-center text-muted py-3 small border-top">
    &copy; 2025 Mie Jagoan Self Order
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
