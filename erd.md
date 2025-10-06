## 🧩 ERD (Entity Relationship Diagram) Aplikasi Web Self Order

### Tujuan

ERD ini dibuat sesederhana mungkin agar mudah dipahami oleh siswa SMK. Berdasarkan alur dari sisi **pembeli** dan **restoran**, sistem dibagi menjadi beberapa entitas utama berikut.

---

### 🏠 Entitas Utama

#### 1. **Menu**

| Field     | Tipe Data | Keterangan                  |
| --------- | --------- | --------------------------- |
| id_menu   | INT (PK)  | ID unik untuk setiap menu   |
| nama_menu | VARCHAR   | Nama makanan/minuman        |
| harga     | DECIMAL   | Harga menu                  |

---

#### 2. **Pesanan**

| Field          | Tipe Data                                   | Keterangan             |
| -------------- | ------------------------------------------- | ---------------------- |
| id_pesanan     | INT (PK)                                    | ID unik pesanan        |
| nama_pelanggan | VARCHAR                                     | Nama pembeli           |
| nomor_meja     | VARCHAR                                     | Nomor meja pelanggan   |
| total_harga    | DECIMAL                                     | Total harga semua item |
| status         | ENUM('baru','diproses','selesai','diantar') | Status proses pesanan  |
| tanggal_pesan  | DATETIME                                    | Waktu pesanan dibuat   |

---

#### 3. **Detail Pesanan**

| Field      | Tipe Data | Keterangan                            |
| ---------- | --------- | ------------------------------------- |
| id_detail  | INT (PK)  | ID unik untuk detail item pesanan     |
| id_pesanan | INT (FK)  | Relasi ke tabel `Pesanan`             |
| id_menu    | INT (FK)  | Relasi ke tabel `Menu`                |
| jumlah     | INT       | Jumlah item yang dipesan              |
| subtotal   | DECIMAL   | Total harga per item (harga * jumlah) |

---

#### 4. **Pembayaran**

| Field         | Tipe Data                          | Keterangan                            |
| ------------- | ---------------------------------- | ------------------------------------- |
| id_pembayaran | INT (PK)                           | ID unik pembayaran                    |
| id_pesanan    | INT (FK)                           | Relasi ke tabel `Pesanan`             |
| metode        | ENUM('transfer','e-wallet','qris') | Jenis pembayaran                      |
| status_bayar  | ENUM('belum','sudah')              | Status pembayaran                     |

---

#### 5. **User (Dapur/Waitress)** *(opsional)*

| Field    | Tipe Data                        | Keterangan                |
| -------- | -------------------------------- | ------------------------- |
| id_user  | INT (PK)                         | ID unik pengguna restoran |
| username | VARCHAR                          | Nama pengguna             |
| password | VARCHAR                          | Password login            |
| role     | ENUM('dapur','waitress')         | Jenis peran user          |

---

### 🔗 Hubungan Antar Entitas

* **Pesanan** memiliki banyak **Detail Pesanan** → (*1 ke banyak*)
* **Menu** dapat muncul di banyak **Detail Pesanan** → (*1 ke banyak*)
* **Pesanan** memiliki satu **Pembayaran** → (*1 ke 1*)
* **User Resto** dapat mengelola banyak **Pesanan** → (*1 ke banyak*)

---

### 📘 Ringkasan Sederhana Relasi

```
Menu (1)───<(Detail Pesanan)>───(1) Pesanan ───(1) Pembayaran
                                            
Pesanan (N)───< User Resto
```

---

### 🧠 Catatan untuk Siswa

1. ERD ini bisa dibuat ulang di **draw.io**, **Diagrams.net**, atau kertas.
2. Gunakan **garis 1 ke banyak (1---<)** untuk menggambarkan relasi utama.
3. Setiap tabel minimal punya **Primary Key (PK)** dan **Foreign Key (FK)** yang menghubungkan antar tabel.