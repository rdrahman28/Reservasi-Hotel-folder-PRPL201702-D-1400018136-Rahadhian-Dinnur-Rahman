-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31 Mei 2018 pada 10.08
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gladehotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `kode` varchar(10) NOT NULL,
  `id_kamar` varchar(30) NOT NULL,
  `nama_kamar` varchar(30) NOT NULL,
  `id_customer` varchar(30) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `tgl_booking` datetime NOT NULL,
  `tgl_batas` datetime NOT NULL,
  `tgl_checkin` date NOT NULL,
  `tgl_checkout` date NOT NULL,
  `lama` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`kode`, `id_kamar`, `nama_kamar`, `id_customer`, `nama`, `email`, `tgl_booking`, `tgl_batas`, `tgl_checkin`, `tgl_checkout`, `lama`, `Status`, `total`) VALUES
('GA2FZ', '1 Arjuna W', '', '3318183182293199', 'Ahmad', 'ahmad@gmail.com', '2018-05-20 13:11:52', '2018-05-20 16:11:52', '2018-05-20', '2018-05-21', 2, 'Belum dibayar', 600000),
('NXBVW', '2 Arjuna W', '', '3374718818294938', 'Muhammad', 'muhammad@gmail.com', '2018-05-20 13:13:02', '2018-05-20 16:13:02', '2018-05-20', '2018-05-24', 2, 'Belum dibayar', 640000),
('SZVD8', '01 Arjuna', '', '12412342342342', 'Ari', 'ari88@gmail.com', '2018-05-22 19:52:10', '2018-05-22 22:52:10', '2018-05-22', '2018-05-22', 1, 'Belum dibayar', 320000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id_cus` varchar(20) NOT NULL,
  `nama_cus` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(7) NOT NULL,
  `alamat_cus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_cus`, `nama_cus`, `no_telp`, `jenis_kelamin`, `alamat_cus`) VALUES
('5353535', 'Rahman', '089799699', 'Pria', 'Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_booking`
--

CREATE TABLE IF NOT EXISTS `laporan_booking` (
  `kode` varchar(10) NOT NULL,
  `id_kamar` varchar(15) NOT NULL,
  `id_customer` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `tgl_booking` datetime NOT NULL,
  `tgl_batas` datetime NOT NULL,
  `tgl_checkin` date NOT NULL,
  `tgl_checkout` date NOT NULL,
  `lama` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan_booking`
--

INSERT INTO `laporan_booking` (`kode`, `id_kamar`, `id_customer`, `nama`, `email`, `tgl_booking`, `tgl_batas`, `tgl_checkin`, `tgl_checkout`, `lama`, `status`, `total`) VALUES
('1VPFX', '07 Bagong ', '327317231891889', 'Sony', 'sonyamin@gmail.com', '2018-05-20 18:49:01', '2018-05-20 21:49:01', '2018-05-20', '2018-05-21', 2, 'Belum dibayar', 700000),
('3OJGB', '2 Arjuna W', '1400018136', 'Ikhlasul Amal', 'iamal@gmail.com', '2018-05-01 09:18:41', '2018-05-01 12:18:41', '2018-05-01', '2018-05-02', 2, 'Belum dibayar', 640000),
('57K3Z', '1 Arjuna W', '12394029401', 'Sony', 'sony@gmail.com', '2018-04-25 17:54:33', '2018-04-25 20:54:33', '2018-04-25', '2018-04-26', 2, 'Belum dibayar', 600000),
('7BXKQ', '02 Petruk', '32123123080192002', 'Ridho', 'rido@gmail.com', '2018-05-20 18:42:22', '2018-05-20 21:42:22', '2018-05-20', '2018-05-21', 2, 'Belum dibayar', 800000),
('JS327', '1 Arjuna W', '12386162379', 'Panji', 'panji@gmail.com', '2018-05-08 09:25:50', '2018-05-08 12:25:50', '2018-05-08', '2018-05-08', 1, 'Belum dibayar', 300000),
('PN8LU', '05 Arjuna', '32123128321821118', 'Zaqy', 'zaki11@gmail.com', '2018-05-20 18:43:09', '2018-05-20 21:43:09', '2018-05-20', '2018-05-20', 1, 'Belum dibayar', 320000),
('VEBZ2', '2 Arjuna W', '819284012840810', 'Rahadhian Dinnur Rahman', 'rdrahman96@gmail.com', '2018-04-25 18:08:27', '2018-04-25 21:08:27', '2018-04-25', '2018-04-27', 3, 'Belum dibayar', 960000),
('VSRKF', '1 Arjuna W', '32122805960002', 'Rahadhian Dinnur Rahman', 'rdrahman96@gmail.com', '2018-05-19 14:06:16', '2018-05-19 17:06:16', '2018-05-19', '2018-05-19', 1, 'Belum dibayar', 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE IF NOT EXISTS `pengunjung` (
  `ip` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE IF NOT EXISTS `tb_berita` (
  `id_berita` varchar(5) NOT NULL,
  `gambar` text NOT NULL,
  `judul_berita` varchar(30) NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `gambar`, `judul_berita`, `isi_berita`, `tanggal`) VALUES
('001', 'poster-acara-tahun-baru-2018-dengan-tema-bed-time-story-di-novotel-hotel_20171206_215115.jpg', 'Bed Story', 'Apakah Anda pernah ketiduran ketika malam tahun baru ?\r\nHal seperti itu tentunya cukup menjengkelkan, di mana kita sudah mempersiapkan acara namun malah ketiduran.\r\nUntuk pergantian tahun 2017 ke 2018 Anda tentu tidak akan ketiduran lagi kan?\r\nJika benar begitu, datang saja ke acara perayaan tahun baru dengan tema "Bed Time Story", yang diselenggarakan oleh Hotel Novotel.\r\nAcara ini akan membuat mata Anda melek semalaman karena dirangkai dengan konsep yang menarik.\r\nGeneral Manager Novotel, Intan Pujawati mengatakan tema "Bed Time Story" artinya cerita menjelang tidur.\r\nTema ini akan merepresentasikan momen terindah yang tak terlupakan untuk perayaan malam pergantian tahun 2018.', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kamar`
--

CREATE TABLE IF NOT EXISTS `tb_kamar` (
  `id_kamar` varchar(13) NOT NULL,
  `gambar` text NOT NULL,
  `nama_kamar` varchar(15) NOT NULL,
  `fasilitas` text NOT NULL,
  `harga` int(11) NOT NULL,
  `jenis_kamar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kamar`
--

INSERT INTO `tb_kamar` (`id_kamar`, `gambar`, `nama_kamar`, `fasilitas`, `harga`, `jenis_kamar`) VALUES
('01 Arjuna', 'images (6).jpg', 'Arjuna 1', 'Kasur Besar Ac TV Free Wifi Include Breakfast', 320000, 'deluxe'),
('02 Petruk', 'images (1).jpg', 'Petruk 2', 'Kasur Besar\r\nAc\r\nInclude Breakfast', 400000, 'standard'),
('03 Petruk', 'images (2).jpg', 'Petruk 3', 'Kasur besar\r\nAc\r\nRuang Tamu\r\nFree Wifi\r\nLive view', 500000, 'faimily'),
('04 Gareng', 'images (3).jpg', 'Gareng 4', 'Kasur besar\r\nTv\r\nAc\r\nRuang tamu', 420000, 'standard'),
('05 Arjuna', 'images (9).jpg', 'Arjuna 5', 'Kasur Besar Ac TV Free Wifi Include Breakfast', 320000, 'deluxe'),
('06 Bagong', 'images (4).jpg', 'Bagong 6', 'Kasur Besar\r\nAc\r\nTV\r\nFree Wifi\r\nInclude Breakfast', 350000, 'standard'),
('07 Bagong ', 'images (5).jpg', 'Bagong 7', 'Kasur Besar Ac TV Free Wifi Include Breakfast', 350000, 'standard'),
('07 Semar', 'images (7).jpg', 'Semar 7', ' 2 Kasur Besar Ac TV Free Wifi Include Breakfast', 600000, 'family'),
('08 Semar', 'images (8).jpg', 'Semar 8', '2 Kasur Besar Ac TV Free Wifi Include Breakfast', 600000, 'family');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE IF NOT EXISTS `tb_pegawai` (
  `id_pegawai` varchar(13) NOT NULL,
  `gambar` text NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `gambar`, `nama_pegawai`, `jabatan`) VALUES
('12100001011', 'download (1).jpg', 'Bambang hartanto', 'General Manager'),
('12100001012', 'images (12).jpg', 'Bambang Pamungkas', 'Customer service'),
('12100001013', 'hqdefault.jpg', 'Yani', 'Sekertaris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
('12345', 'hotel', 'hotel123', 'rahman', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`id_cus`);

--
-- Indexes for table `laporan_booking`
--
ALTER TABLE `laporan_booking`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
 ADD PRIMARY KEY (`ip`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
 ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
 ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
 ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
