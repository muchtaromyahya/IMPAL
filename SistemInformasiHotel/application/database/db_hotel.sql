-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 08:02 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `name`) VALUES
('admin1', 'admin123', 'Admin 1'),
('admin10', 'admin123', 'Admin 10'),
('admin2', 'admin123', 'Admin 2'),
('admin3', 'admin123', 'Admin 3'),
('admin4', 'admin123', 'Admin 4'),
('admin5', 'admin123', 'Admin 5'),
('admin6', 'admin123', 'Admin 6'),
('admin7', 'admin123', 'Admin 7'),
('admin8', 'admin123', 'Admin 8'),
('admin9', 'admin123', 'Admin 9');

-- --------------------------------------------------------

--
-- Table structure for table `check_in`
--

CREATE TABLE `check_in` (
  `id` varchar(128) NOT NULL,
  `id_fasilitas` varchar(5) NOT NULL,
  `no_kamar` int(3) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `is_checkout` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_in`
--

INSERT INTO `check_in` (`id`, `id_fasilitas`, `no_kamar`, `nik`, `admin`, `tanggal`, `is_checkout`) VALUES
('11', 'A1', 101, '1452151235', 'admin1', '2019-11-30', 0),
('fe653e30-1402-11ea-acbb-2cfda181e8aa', 'A1', 102, '12314215125', 'admin1', '2019-12-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `check_out`
--

CREATE TABLE `check_out` (
  `id` varchar(128) NOT NULL,
  `id_fasilitas` varchar(5) NOT NULL,
  `no_kamar` int(3) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `nik` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`nik`, `nama`) VALUES
('12314215125', 'Hafizh wibu'),
('1452151235', 'Arbi Nourman Baruni');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` varchar(5) NOT NULL,
  `harga` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `harga`) VALUES
('A1', 0),
('A2', 50000),
('A3', 70000),
('A4', 100000),
('A5', 30000),
('B1', 0),
('B2', 0),
('B3', 700000),
('B4', 0),
('B5', 1000000),
('C1', 100000),
('C2', 0),
('C3', 50000),
('C4', 150000),
('C5', 20000),
('D1', 20000),
('D2', 0),
('D3', 90000),
('D4', 140000),
('D5', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `no_kamar` int(3) NOT NULL,
  `harga` int(16) NOT NULL,
  `terisi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`no_kamar`, `harga`, `terisi`) VALUES
(101, 300000, 1),
(102, 300000, 1),
(103, 300000, 0),
(104, 300000, 0),
(105, 300000, 0),
(201, 500000, 0),
(202, 500000, 0),
(203, 500000, 0),
(204, 500000, 0),
(205, 500000, 0),
(301, 1000000, 0),
(302, 1000000, 0),
(303, 1000000, 0),
(304, 1000000, 0),
(305, 1000000, 0),
(401, 1500000, 0),
(402, 1500000, 0),
(403, 1500000, 0),
(501, 1500000, 0),
(502, 1500000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kwitansi`
--

CREATE TABLE `kwitansi` (
  `id` int(255) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `tanggal_checkin` date NOT NULL,
  `tanggal_checkout` date NOT NULL,
  `total_biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `check_in`
--
ALTER TABLE `check_in`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fasilitas` (`id_fasilitas`),
  ADD KEY `admin` (`admin`),
  ADD KEY `nik` (`nik`),
  ADD KEY `no_kamar` (`no_kamar`);

--
-- Indexes for table `check_out`
--
ALTER TABLE `check_out`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fasilitas` (`id_fasilitas`),
  ADD KEY `admin` (`admin`),
  ADD KEY `nik` (`nik`),
  ADD KEY `no_kamar` (`no_kamar`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`no_kamar`);

--
-- Indexes for table `kwitansi`
--
ALTER TABLE `kwitansi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`nik`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `check_in`
--
ALTER TABLE `check_in`
  ADD CONSTRAINT `check_in_ibfk_1` FOREIGN KEY (`id_fasilitas`) REFERENCES `fasilitas` (`id_fasilitas`),
  ADD CONSTRAINT `check_in_ibfk_2` FOREIGN KEY (`admin`) REFERENCES `admin` (`username`),
  ADD CONSTRAINT `check_in_ibfk_3` FOREIGN KEY (`nik`) REFERENCES `customer` (`nik`),
  ADD CONSTRAINT `check_in_ibfk_4` FOREIGN KEY (`no_kamar`) REFERENCES `kamar` (`no_kamar`);

--
-- Constraints for table `check_out`
--
ALTER TABLE `check_out`
  ADD CONSTRAINT `check_out_ibfk_1` FOREIGN KEY (`id_fasilitas`) REFERENCES `fasilitas` (`id_fasilitas`),
  ADD CONSTRAINT `check_out_ibfk_2` FOREIGN KEY (`admin`) REFERENCES `admin` (`username`),
  ADD CONSTRAINT `check_out_ibfk_3` FOREIGN KEY (`nik`) REFERENCES `customer` (`nik`),
  ADD CONSTRAINT `check_out_ibfk_4` FOREIGN KEY (`no_kamar`) REFERENCES `kamar` (`no_kamar`);

--
-- Constraints for table `kwitansi`
--
ALTER TABLE `kwitansi`
  ADD CONSTRAINT `kwitansi_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `customer` (`nik`),
  ADD CONSTRAINT `kwitansi_ibfk_2` FOREIGN KEY (`nik`) REFERENCES `customer` (`nik`),
  ADD CONSTRAINT `kwitansi_ibfk_3` FOREIGN KEY (`nik`) REFERENCES `customer` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
