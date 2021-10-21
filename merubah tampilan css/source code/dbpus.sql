-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Waktu pembuatan: 20 Okt 2021 pada 09.17
-- Versi server: 10.3.15-MariaDB-1:10.3.15+maria~bionic
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbanggota`
--

CREATE TABLE `tbanggota` (
  `idanggota` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbanggota`
--

INSERT INTO `tbanggota` (`idanggota`, `nama`, `jeniskelamin`, `alamat`, `status`) VALUES
('AG001', 'Riki Subekti', 'Pria', 'Jl.Semangka No 3', 'Sedang Meminjam'),
('AG002', 'Aini Rahmawati', 'Wanita', 'Jl.Anggrek No 45', 'Sedang Meminjam'),
('AG003', 'Rudi Hartono', 'Pria', 'Jl.Manggis 98', 'Sedang Meminjam'),
('AG004', 'Dino Riano', 'Pria', 'Jl.Melon No 33', 'Sedang Meminjam'),
('AG005', 'Agus Wardoyo', 'Pria', 'Jl.Cempedak No 88', 'Tidak Meminjam'),
('AG006', 'Shinta Riani', 'Wanita', 'JL.Jeruk No 1', 'Sedang Meminjam'),
('AG007', 'Irwan Hakim', 'Pria', 'Jl.Salak No 34', 'Tidak Meminjam'),
('AG008', 'Indah Dian', 'Wanita', 'Jl.Semangka No 23', 'Sedang Meminjam'),
('AG009', 'Rina Auliah coba 2', 'Wanita', 'Jl.Merpati No 445', 'Tidak Meminjam'),
('AG010', '', '', '', 'Tidak Meminjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbuku`
--

CREATE TABLE `tbbuku` (
  `idbuku` varchar(5) NOT NULL,
  `judulbuku` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `pengarang` varchar(40) NOT NULL,
  `penerbit` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbbuku`
--

INSERT INTO `tbbuku` (`idbuku`, `judulbuku`, `kategori`, `pengarang`, `penerbit`, `status`) VALUES
('BK001', 'Belajar PHP', 'Ilmu Komputer', 'Candra', 'Media Baca', 'Dipinjam'),
('BK002', 'Belajar HTML', 'Ilmu Komputer', 'Rahmat Hakim', 'Media Baca', 'Dipinjam'),
('BK003', 'Kumpulan Puisi', 'Karya Sastra', 'Bejo', 'Media Kita', 'Tersedia'),
('BK004', 'Sejarah Islam', 'Ilmu Agama', 'Sutejo', 'Media Kita', 'Dipinjam'),
('BK005', 'Pintar CSS', 'Ilmu Komputer', 'Anton', 'Graha Buku', 'Tersedia'),
('BK006', 'Kumpulan Cerpen', 'Karya Sastra', 'Rudi', 'Media Aksara', 'Dipinjam'),
('BK007', 'Keamanan Data', 'Ilmu Komputer', 'Nusron', 'Media Cipta', 'Dipinjam'),
('BK008', 'Dasar-Dasar Database', 'Ilmu Komputer', 'Andi', 'Graha Media', 'Dipinjam'),
('BK009', 'Kumpulan Cerpen 2', 'Karya Sastra', 'Sutejo', 'Media Cipta', 'Tersedia'),
('BK010', 'Peradaban Islam', 'Ilmu Agama', 'Aminnudin', 'Media Baca', 'Tersedia'),
('BK011', 'Kumpulan Cerpen 3', 'Karya Sastra', 'Rudi', 'Media Baca', 'Tersedia'),
('BK012', 'Teknologi Informasi', 'Ilmu Komputer', 'Andi A', 'Media Baca', 'Dipinjam'),
('BK013', 'Dermaga Biru', 'Karya Sastra', 'Sutejo', 'Media Cipta', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtransaksi`
--

CREATE TABLE `tbtransaksi` (
  `idtransaksi` varchar(5) NOT NULL,
  `idanggota` varchar(5) NOT NULL,
  `idbuku` varchar(5) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglkembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbtransaksi`
--

INSERT INTO `tbtransaksi` (`idtransaksi`, `idanggota`, `idbuku`, `tglpinjam`, `tglkembali`) VALUES
('TR001', 'AG002', 'BK002', '2016-11-03', '0000-00-00'),
('TR002', 'AG003', 'BK003', '2016-11-04', '2016-11-04'),
('TR003', 'AG001', 'BK001', '2016-11-04', '2021-02-23'),
('TR004', 'AG003', 'BK003', '2016-11-04', '2016-11-04'),
('TR005', 'AG006', 'BK004', '2016-11-04', '2021-02-23'),
('TR006', 'AG003', 'BK005', '2016-11-05', '2016-11-05'),
('TR007', 'AG008', 'BK013', '2016-11-05', '2021-02-23'),
('TR031', 'AG010', 'BK003', '2017-01-22', '2021-02-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `iduser` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`iduser`, `nama`, `alamat`, `password`) VALUES
(1, 'admin', 'jakarta', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbanggota`
--
ALTER TABLE `tbanggota`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indeks untuk tabel `tbbuku`
--
ALTER TABLE `tbbuku`
  ADD PRIMARY KEY (`idbuku`);

--
-- Indeks untuk tabel `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- Indeks untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `iduser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
