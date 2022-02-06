-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jan 2022 pada 01.22
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_1904030060`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(15) NOT NULL,
  `nm_anggota` varchar(25) NOT NULL,
  `jenkel` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nm_anggota`, `jenkel`, `alamat`, `no_telp`, `status`) VALUES
(1, 'Eriko Novianto', 'Laki-Laki', 'Pasir Jaya', '08954367899', 'Pelajar'),
(2, 'Fanny Debby', 'Perempuan', 'Cikupa', '089912670034', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(15) NOT NULL,
  `nm_buku` varchar(50) NOT NULL,
  `pengarang` varchar(25) NOT NULL,
  `penerbit` varchar(15) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `jumlah` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `nm_buku`, `pengarang`, `penerbit`, `tahun`, `jumlah`) VALUES
(1, 'Kesehjateraan Sosial', 'Isbandi Rukminto Adi', 'Rajagrafindo Pe', '2015', '2'),
(2, 'Buku Ajar Tumbuh Kembang Remaja & Permasalahanya', 'Soetjiningsih', 'Sagung Seto', '2004', '2'),
(3, 'DESAIN PEMBELAJARAN BERBASIS PENDIDIKAN KARAKTER', 'Asmaun Sahlan & Angga Teg', 'Ar- Ruzz Media', '2016', '3'),
(4, 'Fiqh Ekonomi Syariah (Fiqh Muamalah)', 'DR. Mardani', 'Kencana', '2013', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
