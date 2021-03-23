-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Mar 2021 pada 10.06
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uprak1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `databarang1`
--

CREATE TABLE `databarang1` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `databarang1`
--

INSERT INTO `databarang1` (`id_barang`, `nama_barang`, `harga_barang`, `gambar`, `deskripsi_barang`) VALUES
(1, 'Asus ROG GL552 ', 21000000, 'http://review-laptop.com/wp-content/uploads/2020/03/ROG-GL552VX-.png', 'Sisi harga ROG GL552VW-CN656 ini mengalami peningkatan yang cukup signifikan, maka dari itu jika user ingin menegtahui kemana harga ROG GL552VW-CN656 yang user bayarkan tersebut tentunya sangat masuk akal sekali.'),
(2, 'Asus ROG G531GT', 16500000, 'https://cdn.shopify.com/s/files/1/0228/7629/1136/products/ROGStrixSCAR15_3_2000x.png?v=1586805946', 'ASUS ROG Strix G531GT adalah laptop gaming berlayar Full HD 15.6 inci yang ditenagai prosesor Intel Core i7-9750H generasi ke 9, dengan SSD 512GB, dilengkapi Windows 10 Home.'),
(4, 'Lenovo Legion Y720 ', 12000000, 'https://www.lenovo.com/medias/lenovo-laptop-legion-y720-15-hero.png?context=bWFzdGVyfGltYWdlc3w3NTY3MnxpbWFnZS9wbmd8aW1hZ2VzL2g1ZC9oMmEvOTQxMjY3NTczMTQ4Ni5wbmd8NjQ4YzUwOGM0ZGY4MmViMDA1YWI3MjFkZjAwZTNiOTA0M2U1MzhlMGRkMzVjODUxNjYyODQ5MjFhODViMGQ4Yg', 'Laptop memiliki resolusi yang menakjubkan hingga Ultra High Definition, dengan suara yang sangat sesuai. Didukung oleh Intel 7th Gen & reg; Inti ™ Prosesor dan grafis diskrit NVIDIA® GeForce® GTX 1060, binatang buas ini bisa menangani permainan apa pun ya'),
(5, 'Lenovo Legion Y7000', 13032000, 'https://www.lenovo.com/medias/lenovo-laptop-legion-y7000-front.png?context=bWFzdGVyfHJvb3R8MzQzMzF8aW1hZ2UvcG5nfGhjYi9oOWMvOTk5OTQzMTUzMjU3NC5wbmd8YmM3ZDRkMTA2MmVjMDQyYzBiYzU2ODY0MGI5Y2JjNjc0MzFlM2U5ZWQ3Y2QyNTA3M2I1ODBkMmU0OGY3YWUzNg', 'Laptop 15,6 inci ini memberi Anda apa yang Anda butuhkan untuk pengalaman bermain game yang mendorong kinerja dan portabilitas lebih jauh. Intel Generasi ke-9®Core™ prosesor menghadirkan kinerja seperti desktop. Grafis, memori, dan penyimpanan generasi te'),
(6, 'Lenovo Legion Slim 7I', 28000000, 'https://www.lenovo.com/medias/lenovo-laptop-legion-slim-7i-gallery-7.png?context=bWFzdGVyfHJvb3R8Mjk3MjMxfGltYWdlL3BuZ3xoMjgvaGFiLzExMDAzNTcxNzMyNTEwLnBuZ3xmMzYxNjVmODUzOTc2NmFiMmI5NDViODk0ZDgzMGVmZGJlNjFmZDJiYTBlMThhYWJiYTZiZTg3Zjk1MmRhMWU2', 'Legion Slim 7i juga terbilang ringkas dengan ketebalan 17,9 mm, panjang 356 mm, dan lebar 250 mm. Layar laptop ini memiliki resolusi Full HD (1.920 x 1.080 piksel), refresh rate 144Hz, dan tingkat kecerahan 300 nits.'),
(7, 'HP Pavilion Gaming 15-dk1064tx', 15722385, 'https://id-media.apjonlinecdn.com/catalog/product/cache/b3b166914d87ce343d4dc5ec5117b502/1/g/1g7s2pa.png', 'Processor : 10th Generation Intel i5-10300H Processor (2.50 GHz, up to 4.50 GHz with Turbo Boost, 4 Cores, 8 Thread Display : 15.6\" FHD Anti Glare 144hz IPS anti-glare micro-edge WLED- backlit (1920 x 1080) Memory : 8 GB DDR4-3200 SDRAM Storage : 512GB PC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `databarang1`
--
ALTER TABLE `databarang1`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `databarang1`
--
ALTER TABLE `databarang1`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
