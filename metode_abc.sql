-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2023 pada 17.27
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metode_abc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `analisis_abc`
--

CREATE TABLE `analisis_abc` (
  `id_analisis` int(11) NOT NULL,
  `unit_produksi` int(11) NOT NULL,
  `jam_tkl` int(11) NOT NULL,
  `jam_km` int(11) NOT NULL,
  `tot_harga_bb` varchar(15) NOT NULL,
  `upah_tenaga_kerja` varchar(15) NOT NULL,
  `listrik` varchar(15) NOT NULL,
  `biaya_mesin` varchar(15) NOT NULL,
  `hasil` varchar(15) NOT NULL,
  `tgl_proses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `analisis_abc`
--

INSERT INTO `analisis_abc` (`id_analisis`, `unit_produksi`, `jam_tkl`, `jam_km`, `tot_harga_bb`, `upah_tenaga_kerja`, `listrik`, `biaya_mesin`, `hasil`, `tgl_proses`) VALUES
(2, 220, 8, 8, '35000', '27000', '350000', '500000', '65863.6', '2023-05-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bb` int(11) NOT NULL,
  `nama_bb` varchar(125) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `unit_perproduksi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bb`, `nama_bb`, `keterangan`, `unit_perproduksi`) VALUES
(1, 'Bawang Merah', 'kg', '30'),
(3, 'Minyak', 'liter', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga_bb_perperiode`
--

CREATE TABLE `harga_bb_perperiode` (
  `id_harga` int(11) NOT NULL,
  `id_bb` int(11) NOT NULL,
  `id_analisis` int(11) NOT NULL,
  `periode` varchar(20) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `harga_bb_perperiode`
--

INSERT INTO `harga_bb_perperiode` (`id_harga`, `id_bb`, `id_analisis`, `periode`, `harga`, `time`) VALUES
(1, 1, 2, '2023-05-10', '10000', '2023-05-12 14:58:33'),
(3, 3, 2, '2023-05-10', '25000', '2023-05-12 14:58:33'),
(4, 1, 0, '2023-05-12', '12000', '2023-05-12 14:44:57'),
(5, 3, 0, '2023-05-12', '11000', '2023-05-12 14:45:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `no_hp`, `username`, `password`, `level_user`) VALUES
(1, 'Admin', '089877656787', 'admin', 'admin', 1),
(3, 'Pimpinan', '089877656543', 'pimpinan', 'pimpinan', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `analisis_abc`
--
ALTER TABLE `analisis_abc`
  ADD PRIMARY KEY (`id_analisis`);

--
-- Indeks untuk tabel `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bb`);

--
-- Indeks untuk tabel `harga_bb_perperiode`
--
ALTER TABLE `harga_bb_perperiode`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `analisis_abc`
--
ALTER TABLE `analisis_abc`
  MODIFY `id_analisis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `bahan_baku`
--
ALTER TABLE `bahan_baku`
  MODIFY `id_bb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `harga_bb_perperiode`
--
ALTER TABLE `harga_bb_perperiode`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
