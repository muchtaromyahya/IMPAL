-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 08:22 AM
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
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin1', 'admin123'),
('admin10', 'admin123'),
('admin2', 'admin123'),
('admin3', 'admin123'),
('admin4', 'admin123'),
('admin5', 'admin123'),
('admin6', 'admin123'),
('admin7', 'admin123'),
('admin8', 'admin123'),
('admin9', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `check_in`
--

CREATE TABLE `check_in` (
  `id` int(255) NOT NULL,
  `id_fasilitas` varchar(5) NOT NULL,
  `no_kamar` int(3) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_in`
--

INSERT INTO `check_in` (`id`, `id_fasilitas`, `no_kamar`, `nik`, `admin`, `tanggal`) VALUES
(1, 'A2', 101, '1050241708900001', 'admin1', '2019-01-01'),
(2, 'C1', 102, '1150242110910001', 'admin3', '2019-05-02'),
(3, 'B2', 104, '1250241708900002', 'admin2', '2019-01-11'),
(4, 'D5', 202, '1350242804900001', 'admin5', '2019-01-01'),
(5, 'B5', 401, '1450241109900001', 'admin8', '2019-02-21'),
(6, 'B3', 501, '1550241708900003', 'admin6', '2019-01-01'),
(7, 'C2', 301, '1550241708900005', 'admin10', '2019-03-11'),
(8, 'D2', 303, '1450241109900002', 'admin4', '2019-03-22'),
(9, 'C5', 204, '1650241708900006', 'admin5', '2019-02-15'),
(10, 'D3', 304, '1350242804900004', 'admin8', '2019-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `check_out`
--

CREATE TABLE `check_out` (
  `id` int(255) NOT NULL,
  `id_fasilitas` varchar(5) NOT NULL,
  `no_kamar` int(3) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_out`
--

INSERT INTO `check_out` (`id`, `id_fasilitas`, `no_kamar`, `nik`, `admin`, `tanggal`) VALUES
(1, 'A2', 101, '1050241708900001', 'admin1', '2019-01-05'),
(2, 'C1', 102, '1150242110910001', 'admin3', '2019-05-06'),
(3, 'B2', 104, '1250241708900002', 'admin2', '2019-01-15'),
(4, 'D5', 202, '1350242804900001', 'admin5', '2019-01-03'),
(5, 'B5', 401, '1450241109900001', 'admin8', '2019-02-22'),
(6, 'B3', 501, '1550241708900003', 'admin6', '2019-01-04'),
(7, 'C2', 301, '1550241708900005', 'admin10', '2019-03-16'),
(8, 'D2', 303, '1450241109900002', 'admin4', '2019-03-25'),
(9, 'C5', 204, '1650241708900006', 'admin5', '2019-02-18'),
(10, 'D3', 304, '1350242804900004', 'admin8', '2019-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `nik` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`nik`, `nama`, `status`) VALUES
('1050241708900001', 'Adams', 'Kawin'),
('1150242110910001', 'Baker', 'Kawin'),
('1150242110910002', 'Klein', 'Kawin'),
('1150242110910003', 'Lopez', 'Kawin'),
('1150242110910004', 'Reily', 'Belum Kawin'),
('1150242110910005', 'Smith', 'Belum Kawin'),
('1250241708900002', 'Clark', 'Belum Kawin'),
('1350242804900001', 'Davis', 'Kawin'),
('1350242804900002', 'Hills', 'Belum Kawin'),
('1350242804900003', 'Irwin', 'Belum Kawin'),
('1350242804900004', 'Sam', 'Kawin'),
('1350242804900005', 'Jones', 'Kawin'),
('1450241109900001', 'Evans', 'Belum Kawin'),
('1450241109900002', 'Ochoa', 'Belum Kawin'),
('1450241109900003', 'Patel', 'Kawin'),
('1550241109900004', 'Quinn', 'Belum Kawin'),
('1550241708900003', 'Frank', 'Kawin'),
('1550241708900005', 'Mason', 'Belum Kawin'),
('1650241708900004', 'Ghosh', 'Kawin'),
('1650241708900006', 'Nalty', 'Kawin');

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
  `harga` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`no_kamar`, `harga`) VALUES
(101, 300000),
(102, 300000),
(103, 300000),
(104, 300000),
(105, 300000),
(201, 500000),
(202, 500000),
(203, 500000),
(204, 500000),
(205, 500000),
(301, 1000000),
(302, 1000000),
(303, 1000000),
(304, 1000000),
(305, 1000000),
(401, 1500000),
(402, 1500000),
(403, 1500000),
(501, 1500000),
(502, 1500000);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check_in`
--
ALTER TABLE `check_in`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `check_out`
--
ALTER TABLE `check_out`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
