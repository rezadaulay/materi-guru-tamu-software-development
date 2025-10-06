CREATE TABLE menu (
    id_menu INT PRIMARY KEY AUTO_INCREMENT,
    nama_menu VARCHAR(255),
    harga DECIMAL(10,2)
);

CREATE TABLE pesanan (
    id_pesanan INT PRIMARY KEY AUTO_INCREMENT,
    nama_pelanggan VARCHAR(255),
    nomor_meja VARCHAR(50),
    total_harga DECIMAL(10,2),
    status ENUM('baru','diproses','selesai','diantar'),
    tanggal_pesan DATETIME
);

CREATE TABLE detail_pesanan (
    id_detail INT PRIMARY KEY AUTO_INCREMENT,
    id_pesanan INT,
    id_menu INT,
    jumlah INT,
    subtotal DECIMAL(10,2),
    FOREIGN KEY (id_pesanan) REFERENCES pesanan(id_pesanan),
    FOREIGN KEY (id_menu) REFERENCES menu(id_menu)
);

CREATE TABLE pembayaran (
    id_pembayaran INT PRIMARY KEY AUTO_INCREMENT,
    id_pesanan INT,
    metode ENUM('transfer','e-wallet','qris'),
    status_bayar ENUM('belum','sudah'),
    FOREIGN KEY (id_pesanan) REFERENCES pesanan(id_pesanan)
);

CREATE TABLE user (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255),
    password VARCHAR(255),
    role ENUM('dapur','waitress')
);