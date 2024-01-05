-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2020 pada 08.40
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klikcov`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pdp`
--

CREATE TABLE `data_pdp` (
  `pdp_id` int(30) NOT NULL,
  `no_pasien` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `pneumonia` varchar(225) NOT NULL,
  `sc_pneumonia` int(11) NOT NULL,
  `contact_covid` varchar(225) NOT NULL,
  `sc_contact` int(11) NOT NULL,
  `fever` varchar(225) NOT NULL,
  `sc_fever` int(11) NOT NULL,
  `age` varchar(225) NOT NULL,
  `sc_age` int(11) NOT NULL,
  `sex` varchar(225) NOT NULL,
  `sc_sex` int(11) NOT NULL,
  `tmax` varchar(225) NOT NULL,
  `sc_tmax` int(11) NOT NULL,
  `mrs` varchar(225) NOT NULL,
  `sc_mrs` int(11) NOT NULL,
  `nlr` varchar(225) NOT NULL,
  `sc_nlr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pdp`
--

INSERT INTO `data_pdp` (`pdp_id`, `no_pasien`, `name`, `pneumonia`, `sc_pneumonia`, `contact_covid`, `sc_contact`, `fever`, `sc_fever`, `age`, `sc_age`, `sex`, `sc_sex`, `tmax`, `sc_tmax`, `mrs`, `sc_mrs`, `nlr`, `sc_nlr`) VALUES
(1, '', 'sinta sylfia', 'yes', 5, 'yes', 3, 'yes', 2, '35 years old', 1, 'female', 1, '37.9 c', 1, '1 sympotom', 1, '5.7', 1),
(2, '', 'adi nugraha', 'yes', 1, 'yes', 3, 'no', 0, '40 years old', 1, 'male', 1, '36 c', 1, '1 sympotom', 1, '2.1', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `nama`, `email`, `no_telp`, `jenis_kelamin`, `status`, `alamat`, `password`) VALUES
(1, 'ella', 'Ella@gmail.com', '2147483647', '', 'dokter', 'jl.Raya xxx', 'ellaella'),
(2, 'dakhola', 'dakhola@gmail.com', '08122xxxx', '', 'Keluarga ', 'jl. raden', 'ef3230b35578224b15ae40e7432517'),
(3, 'Tes', 'tes@gmail.com', '08977xxx', '', 'perawat', 'jl tes', '6e7906b7fb3f8e1c6366c0910050e5'),
(4, 'tes1', 'tes1@gmail.com', '08977xxx', 'perawat', 'laki-laki', 'jl. cita', '57184d98ebdf95bdc356456166bcb5'),
(5, 'ella dakhola', 'elladakhola@gmail.com', '082267xxxx', 'dokter', 'perempuan', 'jl. bukit ciremai', '8ecd22d996e7d5cec55b2c58e70e70'),
(6, 'ella dakhola', 'e_dakhola@gmail.com', '082267xxxx', 'dokter', 'perempuan', 'jl. bukit ciremai', '8ecd22d996e7d5cec55b2c58e70e70'),
(7, 'kanza', 'kanza@gmail.com', '08977xxx', 'perempuan', 'Keluarga', 'jl. bakti husada', '817a0e898163391d5c76342f0f13ac');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pdp`
--
ALTER TABLE `data_pdp`
  ADD PRIMARY KEY (`pdp_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_pdp`
--
ALTER TABLE `data_pdp`
  MODIFY `pdp_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
