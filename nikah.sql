-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2019 at 04:50 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nikah`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `id_calonpria` int(11) NOT NULL,
  `id_calonistri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deadlk`
--

CREATE TABLE `deadlk` (
  `id` int(11) NOT NULL,
  `nama_exlk` varchar(255) NOT NULL,
  `bin` varchar(255) NOT NULL,
  `ttl_exlk` varchar(255) NOT NULL,
  `warga_exlk` varchar(255) NOT NULL,
  `agama_exlk` varchar(255) NOT NULL,
  `kerjaakhir_lk` varchar(255) NOT NULL,
  `tinggalakhir_lk` varchar(255) NOT NULL,
  `tgldead_lk` varchar(255) NOT NULL,
  `tmpdead_lk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deadlk`
--

INSERT INTO `deadlk` (`id`, `nama_exlk`, `bin`, `ttl_exlk`, `warga_exlk`, `agama_exlk`, `kerjaakhir_lk`, `tinggalakhir_lk`, `tgldead_lk`, `tmpdead_lk`) VALUES
(2, 'Harry Potter', 'James Potter', 'Jakarta, 05 Agustus 1980', 'Indonesia', 'Islam', 'Manager', 'Citraland, Surabaya', '20 Desember 2014', 'Keputih, Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `deadpr`
--

CREATE TABLE `deadpr` (
  `id` int(11) NOT NULL,
  `nama_expr` varchar(255) NOT NULL,
  `binti` varchar(255) NOT NULL,
  `ttl_expr` varchar(255) NOT NULL,
  `warga_expr` varchar(255) NOT NULL,
  `agama_expr` varchar(255) NOT NULL,
  `kerjaakhir_pr` varchar(255) NOT NULL,
  `tinggalakhir_pr` varchar(255) NOT NULL,
  `tgldead_pr` varchar(255) NOT NULL,
  `tmpdead_pr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deadpr`
--

INSERT INTO `deadpr` (`id`, `nama_expr`, `binti`, `ttl_expr`, `warga_expr`, `agama_expr`, `kerjaakhir_pr`, `tinggalakhir_pr`, `tgldead_pr`, `tmpdead_pr`) VALUES
(2, 'Astoria Grengress', 'George Grengress', 'Paris, 17 Desember 1980', 'Inggris', 'Kristeni', 'Ibu Rumah Tangga', 'London', '7 April 2015', 'London');

-- --------------------------------------------------------

--
-- Table structure for table `laki`
--

CREATE TABLE `laki` (
  `id` int(11) NOT NULL,
  `namalk` varchar(255) NOT NULL,
  `jenislk` varchar(255) NOT NULL,
  `ttl_lk` varchar(255) NOT NULL,
  `wargalk` varchar(255) NOT NULL,
  `agamalk` varchar(255) NOT NULL,
  `kerjalk` varchar(255) NOT NULL,
  `tinggallk` varchar(255) NOT NULL,
  `statuslk` varchar(255) NOT NULL,
  `istrilk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laki`
--

INSERT INTO `laki` (`id`, `namalk`, `jenislk`, `ttl_lk`, `wargalk`, `agamalk`, `kerjalk`, `tinggallk`, `statuslk`, `istrilk`) VALUES
(2, 'Draco Malfoy', 'Lelaki', 'London, 4 Agustus 1980', 'Inggris', 'Islam', 'Direktur ', 'London', 'Duda', 'Astoria Grengress');

-- --------------------------------------------------------

--
-- Table structure for table `ortufem`
--

CREATE TABLE `ortufem` (
  `id` int(11) NOT NULL,
  `nama_ofem` varchar(255) NOT NULL,
  `ttl_ofem` varchar(255) NOT NULL,
  `warga_ofem` varchar(255) NOT NULL,
  `agama_ofem` varchar(255) NOT NULL,
  `kerja_ofem` varchar(255) NOT NULL,
  `tinggal_ofem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ortufem`
--

INSERT INTO `ortufem` (`id`, `nama_ofem`, `ttl_ofem`, `warga_ofem`, `agama_ofem`, `kerja_ofem`, `tinggal_ofem`) VALUES
(2, 'Arthur Weasley', 'Surabaya, 09 Januari 1974', 'Indonesia', 'Islam', 'Pegawai Swasta', 'Waru, Sidoarjo');

-- --------------------------------------------------------

--
-- Table structure for table `ortuman`
--

CREATE TABLE `ortuman` (
  `id` int(11) NOT NULL,
  `nama_oman` varchar(255) NOT NULL,
  `ttl_oman` varchar(255) NOT NULL,
  `warga_oman` varchar(255) NOT NULL,
  `agama_oman` varchar(255) NOT NULL,
  `kerja_oman` varchar(255) NOT NULL,
  `tinggal_oman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ortuman`
--

INSERT INTO `ortuman` (`id`, `nama_oman`, `ttl_oman`, `warga_oman`, `agama_oman`, `kerja_oman`, `tinggal_oman`) VALUES
(2, 'Lucius Malfoy', 'London, 17 Maret 1945', 'Inggris', 'Kristiani', 'Menteri', 'London');

-- --------------------------------------------------------

--
-- Table structure for table `ortuman_pr`
--

CREATE TABLE `ortuman_pr` (
  `id` int(11) NOT NULL,
  `nama_omanpr` varchar(255) NOT NULL,
  `ttl_omanpr` varchar(255) NOT NULL,
  `warga_omanpr` varchar(255) NOT NULL,
  `agama_omanpr` varchar(255) NOT NULL,
  `kerja_omanpr` varchar(255) NOT NULL,
  `tinggal_omanpr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ortuman_pr`
--

INSERT INTO `ortuman_pr` (`id`, `nama_omanpr`, `ttl_omanpr`, `warga_omanpr`, `agama_omanpr`, `kerja_omanpr`, `tinggal_omanpr`) VALUES
(2, 'Narcissa Malfoy', 'Meksiko, 18 April 1950', 'Inggris', 'Kristeni', 'Ibu Rumah Tangga', 'London');

-- --------------------------------------------------------

--
-- Table structure for table `ortuofem_pr`
--

CREATE TABLE `ortuofem_pr` (
  `id` int(11) NOT NULL,
  `nama_ofempr` varchar(255) NOT NULL,
  `ttl_ofempr` varchar(255) NOT NULL,
  `warga_ofempr` varchar(255) NOT NULL,
  `agama_ofempr` varchar(255) NOT NULL,
  `kerja_ofempr` varchar(255) NOT NULL,
  `tinggal_ofempr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ortuofem_pr`
--

INSERT INTO `ortuofem_pr` (`id`, `nama_ofempr`, `ttl_ofempr`, `warga_ofempr`, `agama_ofempr`, `kerja_ofempr`, `tinggal_ofempr`) VALUES
(2, 'Molly Weasley', 'Surabaya, 13 Maret 1976', 'Indonesia', 'Islam', 'Ibu Rumah Tangga', 'Waru, Sidoarjo');

-- --------------------------------------------------------

--
-- Table structure for table `perem`
--

CREATE TABLE `perem` (
  `id` int(11) NOT NULL,
  `namapr` varchar(255) NOT NULL,
  `jenispr` varchar(255) NOT NULL,
  `ttl_pr` varchar(255) NOT NULL,
  `wargapr` varchar(255) NOT NULL,
  `agamapr` varchar(255) NOT NULL,
  `kerjapr` varchar(255) NOT NULL,
  `tinggalpr` varchar(255) NOT NULL,
  `statuspr` varchar(255) NOT NULL,
  `suamilama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perem`
--

INSERT INTO `perem` (`id`, `namapr`, `jenispr`, `ttl_pr`, `wargapr`, `agamapr`, `kerjapr`, `tinggalpr`, `statuspr`, `suamilama`) VALUES
(2, 'Ginny Weasley', 'Perempuan', 'Madiun, 08 April 1985', 'Indonesia', 'Islam', 'Manager', 'Waru, Sidoarjo', 'Janda', 'Harry Potter');

-- --------------------------------------------------------

--
-- Table structure for table `verif1`
--

CREATE TABLE `verif1` (
  `id` int(11) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verif1`
--

INSERT INTO `verif1` (`id`, `kelurahan`, `kecamatan`, `kota`) VALUES
(2, 'Tambak Sumur', 'Waru', 'Sidoarjo');

-- --------------------------------------------------------

--
-- Table structure for table `verif2`
--

CREATE TABLE `verif2` (
  `id` int(11) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `maskawin` varchar(255) NOT NULL,
  `dibayar` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verif2`
--

INSERT INTO `verif2` (`id`, `hari`, `tgl`, `jam`, `maskawin`, `dibayar`, `lokasi`) VALUES
(2, 'Sabtu', '07 Juni 2018', '09.00 WIB', 'Sebongkah emas dan berlian', 'Tunai', 'Pondok Candra Indah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_calonpria` (`id_calonpria`),
  ADD KEY `id_calonistri` (`id_calonistri`);

--
-- Indexes for table `deadlk`
--
ALTER TABLE `deadlk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deadpr`
--
ALTER TABLE `deadpr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laki`
--
ALTER TABLE `laki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ortufem`
--
ALTER TABLE `ortufem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ortuman`
--
ALTER TABLE `ortuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ortuman_pr`
--
ALTER TABLE `ortuman_pr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ortuofem_pr`
--
ALTER TABLE `ortuofem_pr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perem`
--
ALTER TABLE `perem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verif1`
--
ALTER TABLE `verif1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verif2`
--
ALTER TABLE `verif2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deadlk`
--
ALTER TABLE `deadlk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deadpr`
--
ALTER TABLE `deadpr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laki`
--
ALTER TABLE `laki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ortufem`
--
ALTER TABLE `ortufem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ortuman`
--
ALTER TABLE `ortuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ortuman_pr`
--
ALTER TABLE `ortuman_pr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ortuofem_pr`
--
ALTER TABLE `ortuofem_pr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `perem`
--
ALTER TABLE `perem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `verif1`
--
ALTER TABLE `verif1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `verif2`
--
ALTER TABLE `verif2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biodata`
--
ALTER TABLE `biodata`
  ADD CONSTRAINT `biodata_ibfk_2` FOREIGN KEY (`id_calonpria`) REFERENCES `laki` (`id`),
  ADD CONSTRAINT `biodata_ibfk_3` FOREIGN KEY (`id_calonistri`) REFERENCES `perem` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
