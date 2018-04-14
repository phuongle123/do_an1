-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2018 at 09:55 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
create database do_an;
use do_an;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `do_an`
--

-- --------------------------------------------------------

--
-- Table structure for table `can_bo`
--

CREATE TABLE `can_bo` (
  `ma_cb` varchar(5) NOT NULL,
  `ten_cb` varchar(50) NOT NULL,
  `gioi_tinh` bit(1) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `que_quan` varchar(100) NOT NULL,
  `ma_cv` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `can_bo`
--

INSERT INTO `can_bo` (`ma_cb`, `ten_cb`, `gioi_tinh`, `ngay_sinh`, `que_quan`, `ma_cv`) VALUES
('CB001', 'Lê Hạo Nam', b'1', '1982-01-02', 'Hậu Giang', 'CV001'),
('CB002', 'Đặng Nhựt Nam', b'1', '1990-02-08', 'An Giang', 'CV002'),
('CB003', 'Lê Đức Minh', b'1', '1990-01-10', 'An Giang', ''),
('CB004', 'Lê Tường Vy', b'0', '1989-01-11', 'Kiên Giang', ''),
('CB005', 'Lê Minh Mẫn', b'1', '1985-01-02', 'An Giang', '');

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_lich_thi`
--

CREATE TABLE `chi_tiet_lich_thi` (
  `ma_chi_tiet` varchar(5) NOT NULL,
  `gio_thi` time NOT NULL,
  `ma_lich_thi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chi_tiet_lich_thi`
--

INSERT INTO `chi_tiet_lich_thi` (`ma_chi_tiet`, `gio_thi`, `ma_lich_thi`) VALUES
('01', '07:00:00', 'LT01'),
('02', '13:00:00', 'LT02');

-- --------------------------------------------------------

--
-- Table structure for table `chuc_vu`
--

CREATE TABLE `chuc_vu` (
  `ma_cv` varchar(5) NOT NULL,
  `ten_cv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chuc_vu`
--

INSERT INTO `chuc_vu` (`ma_cv`, `ten_cv`) VALUES
('CV001', 'Chủ tịch hội đồng coi thi'),
('CV002', 'Thư Ký');

-- --------------------------------------------------------

--
-- Table structure for table `hoc_vien`
--

CREATE TABLE `hoc_vien` (
  `ma_hv` varchar(5) NOT NULL,
  `ten_hv` varchar(50) NOT NULL,
  `gioi_tinh` bit(1) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `que_quan` varchar(100) NOT NULL,
  `ma_chi_tiet` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoc_vien`
--

INSERT INTO `hoc_vien` (`ma_hv`, `ten_hv`, `gioi_tinh`, `ngay_sinh`, `que_quan`, `ma_chi_tiet`) VALUES
('HV001', 'Lê Văn Luân', b'1', '1997-03-08', 'An Giang', '01'),
('HV002', 'Huỳnh Minh Thư', b'0', '1997-01-10', 'An Giang', '01'),
('HV003', 'Hồ Minh Minh', b'0', '1996-01-01', 'Kiên Giang', '01'),
('HV004', 'Lê Diễm My', b'0', '1997-02-02', 'Cần Thơ', '01'),
('HV005', 'Đặng Trí Tính', b'1', '1995-02-28', 'Cần Thơ', '02'),
('HV006', 'Lê Tường Vy', b'0', '1995-01-09', 'An Giang', '02'),
('HV007', 'Phan Thiện Nhân', b'1', '1996-01-02', 'Bạc Liêu', '02');

-- --------------------------------------------------------

--
-- Table structure for table `khoa_hoc`
--

CREATE TABLE `khoa_hoc` (
  `ma_khoa` varchar(10) NOT NULL,
  `ten_khoa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khoa_hoc`
--

INSERT INTO `khoa_hoc` (`ma_khoa`, `ten_khoa`) VALUES
('UDTHCB', 'Ứng dụng tin học cơ bản'),
('UDTHNC', 'Ứng dụng tin học nâng cao');

-- --------------------------------------------------------

--
-- Table structure for table `lich_thi`
--

CREATE TABLE `lich_thi` (
  `ma_lich_thi` varchar(5) NOT NULL,
  `ngay_thi` date NOT NULL,
  `ma_khoa` varchar(10) NOT NULL,
  `ma_phong` varchar(5) NOT NULL,
  `ma_cb` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lich_thi`
--

INSERT INTO `lich_thi` (`ma_lich_thi`, `ngay_thi`, `ma_khoa`, `ma_phong`, `ma_cb`) VALUES
('LT01', '2018-01-25', 'UDTHCB', 'PM1', 'CB003'),
('LT02', '2018-01-25', 'UDTHNC', 'PM2', 'CB004');

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `ma_phong` varchar(5) NOT NULL,
  `ten_phong` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`ma_phong`, `ten_phong`) VALUES
('PM1', 'Phòng máy 1'),
('PM2', 'Phòng máy 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `can_bo`
--
ALTER TABLE `can_bo`
  ADD PRIMARY KEY (`ma_cb`),
  ADD KEY `ma_cv` (`ma_cv`);

--
-- Indexes for table `chi_tiet_lich_thi`
--
ALTER TABLE `chi_tiet_lich_thi`
  ADD PRIMARY KEY (`ma_chi_tiet`),
  ADD KEY `ma_lich_thi` (`ma_lich_thi`);

--
-- Indexes for table `chuc_vu`
--
ALTER TABLE `chuc_vu`
  ADD PRIMARY KEY (`ma_cv`);

--
-- Indexes for table `hoc_vien`
--
ALTER TABLE `hoc_vien`
  ADD PRIMARY KEY (`ma_hv`),
  ADD KEY `ma_chi_tiet` (`ma_chi_tiet`);

--
-- Indexes for table `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  ADD PRIMARY KEY (`ma_khoa`);

--
-- Indexes for table `lich_thi`
--
ALTER TABLE `lich_thi`
  ADD PRIMARY KEY (`ma_lich_thi`),
  ADD KEY `ma_khoa` (`ma_khoa`),
  ADD KEY `ma_phong` (`ma_phong`),
  ADD KEY `ma_cb` (`ma_cb`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`ma_phong`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chi_tiet_lich_thi`
--
ALTER TABLE `chi_tiet_lich_thi`
  ADD CONSTRAINT `chi_tiet_lich_thi_ibfk_1` FOREIGN KEY (`ma_lich_thi`) REFERENCES `lich_thi` (`ma_lich_thi`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `chuc_vu`
--
ALTER TABLE `chuc_vu`
  ADD CONSTRAINT `chuc_vu_ibfk_1` FOREIGN KEY (`ma_cv`) REFERENCES `can_bo` (`ma_cv`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `hoc_vien`
--
ALTER TABLE `hoc_vien`
  ADD CONSTRAINT `hoc_vien_ibfk_1` FOREIGN KEY (`ma_chi_tiet`) REFERENCES `chi_tiet_lich_thi` (`ma_chi_tiet`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `lich_thi`
--
ALTER TABLE `lich_thi`
  ADD CONSTRAINT `lich_thi_ibfk_1` FOREIGN KEY (`ma_cb`) REFERENCES `can_bo` (`ma_cb`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `lich_thi_ibfk_2` FOREIGN KEY (`ma_khoa`) REFERENCES `khoa_hoc` (`ma_khoa`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `lich_thi_ibfk_3` FOREIGN KEY (`ma_phong`) REFERENCES `phong` (`ma_phong`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
