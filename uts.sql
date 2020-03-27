-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Mar 2020 pada 11.41
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus`
--

CREATE TABLE `pengurus` (
  `NO` int(6) UNSIGNED NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `ANGKATAN` varchar(10) NOT NULL,
  `DEPARTEMEN` varchar(50) NOT NULL,
  `JABATAN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengurus`
--

INSERT INTO `pengurus` (`NO`, `NAMA`, `ANGKATAN`, `DEPARTEMEN`, `JABATAN`) VALUES
(1, 'Talytakum Naibaho', '2017', 'BPH', 'Ketua Himpunan'),
(2, 'M Nurfian T', '2017', 'BPH', 'Wakil Ketua Himpunan'),
(3, 'Indira Setia A', '2018', 'BPH', 'Sekretaris 1'),
(4, 'Bias Firmansyah', '2019', 'BPH', 'Sekretaris 2'),
(5, 'Clariza Risanti', '2018', 'BPH', 'Bendahara'),
(6, 'Mochamad Suhri A R', '2019', 'Advokasi', 'Kepala Departemen'),
(7, 'Putu Kumara D', '2019', 'Advokasi', 'Sekretaris Departemen'),
(8, 'Talenta Ekklesia', '2019', 'Advokasi', 'Anggota Departemen'),
(9, 'Ferry Kurniawan', '2019', 'Advokasi', 'Anggota Departemen'),
(10, 'Primandika Hakiki', '2018', 'Dalam Negeri', 'Kepala Departemen'),
(11, 'Inas Syarifah A', '2019', 'Dalam Negeri', 'Sekretaris Departemen'),
(12, 'Asri Kinanti F', '2019', 'Dalam Negeri', 'Anggota Departemen'),
(13, 'Siti Lailatul Z', '2019', 'Dalam Negeri', 'Anggota Departemen'),
(14, 'Brian Soebari', '2019', 'Dalam Negeri', 'Anggota Departemen'),
(15, 'Cready Gildbrandsen', '2018', 'Kaderisasi', 'Kepala Departemen'),
(16, 'Anisa Rahma S', '2019', 'Kaderisasi', 'Sekretaris Departemen'),
(17, 'Muhammad Alroy', '2019', 'Kaderisasi', 'Anggota Departemen'),
(18, 'Faras Ardian', '2019', 'Kaderisasi', 'Anggota Departemen'),
(19, 'Nurisa R Shantika', '2018', 'Kewirausahaan', 'Kepala Departemen'),
(20, 'Alfiarto Randi', '2019', 'Kewirausahaan', 'Sekretaris Departemen'),
(21, 'Abiela Titan S', '2019', 'Kewirausahaan', 'Anggota Departemen'),
(22, 'Ainun Rizkyani F', '2019', 'Kewirausahaan', 'Anggota Departemen'),
(23, 'Pratama Puji A', '2018', 'Kominfo', 'Kepala Departemen'),
(24, 'Indah Maharani', '2019', 'Kominfo', 'Sekretaris Departemen'),
(25, 'Harun A R', '2019', 'Kominfo', 'Anggota Departemen'),
(26, 'Ruben Coda S I', '2019', 'Kominfo', 'Anggota Departemen'),
(27, 'Tiara K Miranti', '2018', 'Litbang', 'Kepala Departemen'),
(28, 'Tamariska Laras S', '2019', 'Litbang', 'Sekretaris Departemen'),
(29, 'Hastri Cantya', '2019', 'Litbang', 'Anggota Departemen'),
(30, 'Nurrachman Budi M', '2019', 'Litbang', 'Anggota Departemen'),
(31, 'Rifat Hafiz', '2019', 'Litbang', 'Anggota Departemen'),
(32, 'Zabrina Tuzzahra', '2018', 'Luar Negeri', 'Kepala Departemen'),
(33, 'Ully Laili M', '2019', 'Luar Negeri', 'Sekretaris Departemen'),
(34, 'Bagus Rizky P', '2019', 'Luar Negeri', 'Anggota Departemen'),
(35, 'Alif Fajar B A', '2019', 'Luar Negeri', 'Anggota Departemen');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`NO`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `NO` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
