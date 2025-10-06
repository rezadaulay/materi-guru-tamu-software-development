# 🍜 Aplikasi Self Order - MIE JAGOAN

Proyek ini merupakan **template aplikasi web Self Order** yang dikembangkan sebagai bahan pembelajaran untuk jurusan **Rekayasa Perangkat Lunak (RPL) SMKN 9 Medan**. Aplikasi ini mensimulasikan sistem pemesanan makanan modern di restoran, di mana pelanggan dapat melakukan pemesanan secara mandiri tanpa pelayan.

---

## 📁 Struktur Folder

```
template-bootstrap/
├── index.html               → Halaman utama pelanggan (landing page)
├── menu.html                → Daftar menu & keranjang
├── review.html              → Review pesanan sebelum pembayaran
├── payment.html             → Pilihan metode pembayaran (Bank / E-wallet / QRIS)
├── success.html             → Konfirmasi pesanan diterima
├── status.html              → Cek status pesanan pelanggan
│
├── dapur/                   → Sisi dapur (kitchen staff)
│   ├── dapur-list.html      → Daftar pesanan masuk
│   ├── dapur-detail.html    → Detail & update status pesanan
│   ├── dapur-history.html   → Riwayat pesanan selesai
│   └── index.html           → Login dapur
│
├── waitress/                → Sisi waitress (pengantar pesanan)
│   ├── waitress-list.html   → Daftar pesanan siap antar
│   ├── waitress-detail.html → Detail pengantaran ke meja
│   ├── waitress-history.html→ Riwayat pengantaran
│   └── index.html           → Login waitress
│
└── qris.jpg                 → Gambar contoh QRIS

template-wireframe/          → Versi wireframe (low fidelity)
```

---

## 💡 Tujuan Pembelajaran

Proyek ini bertujuan untuk memberikan pemahaman kepada siswa RPL mengenai:

1. **Arsitektur Multi-Role Web App** — perbedaan fitur dan UI untuk pelanggan, dapur, dan waitress.
2. **Pemecahan Single Page App (SPA)** menjadi **multi-page modular** menggunakan **Bootstrap 5**.
3. **Implementasi alur sistem restoran digital**, mulai dari pemesanan hingga pengantaran.
4. **Interaksi antar role** melalui simulasi status pesanan.

---

## 🧩 Teknologi yang Digunakan

* **HTML5 + CSS3 (Bootstrap 5.3)** – desain responsif dan cepat.
* **JavaScript (murni)** – logika sederhana untuk navigasi, status, dan penyimpanan data sementara.
* **No Database** – disederhanakan untuk kebutuhan pembelajaran (dapat diintegrasikan dengan PHP di tahap lanjutan).

---

## 🧠 Skenario Aplikasi

1. **Pelanggan** melakukan pemesanan melalui halaman utama (`index.html`).
2. **Dapur** melihat pesanan baru di `dapur-list.html`, lalu memperbarui status menjadi *Diproses* atau *Selesai*.
3. **Waitress** melihat pesanan *Selesai* untuk diantar ke meja.
4. Setelah pesanan diantar, **status berubah menjadi selesai di sistem waitress**.

---

## 🧑‍🏫 Catatan untuk Guru Tamu

Materi ini cocok untuk:

* Praktik **pengenalan arsitektur sistem multi-user berbasis web**.
* Latihan **pemodelan UI/UX** dan **flow sistem restoran digital**.
* Diskusi lanjutan untuk mengintegrasikan API, database, atau autentikasi.

---

## 🚀 Rencana Pengembangan (Opsional untuk Proyek Lanjutan)

* Integrasi **Laravel & MySQL**.
* Pembuatan **panel admin** untuk manajemen menu dan laporan.

---

## 👨‍💻 Kontributor

Proyek ini dikembangkan untuk kebutuhan pembelajaran di **SMKN 9** dalam kegiatan **Guru Tamu RPL**.

> Dibuat untuk mempermudah siswa memahami alur kerja aplikasi restoran digital dengan pendekatan modern dan terstruktur.
