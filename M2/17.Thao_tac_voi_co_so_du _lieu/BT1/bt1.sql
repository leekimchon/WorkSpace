-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 07:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bt1`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `MA_SACH` int(11) NOT NULL,
  `TEN_SACH` varchar(255) DEFAULT NULL,
  `NHA_XUAT_BAN` varchar(255) DEFAULT NULL,
  `TAC_GIA` varchar(255) DEFAULT NULL,
  `NAM_SAN_XUAT` int(11) DEFAULT NULL,
  `SO_LAN_XUAT_BAN` int(11) DEFAULT NULL,
  `GIA` float DEFAULT NULL,
  `ANH` varchar(255) DEFAULT NULL,
  `LOAI_SACH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`MA_SACH`, `TEN_SACH`, `NHA_XUAT_BAN`, `TAC_GIA`, `NAM_SAN_XUAT`, `SO_LAN_XUAT_BAN`, `GIA`, `ANH`, `LOAI_SACH`) VALUES
(4, 'Tren_Duong_Bang', 'abc', 'Tony_Buoi_Sang', 1900, 3, 100000, 'anh1', 8),
(5, 'Toan_Lop_1', 'fds', 'NGuyen_Van_A', 1900, 6, 200000, 'anh1', 2),
(6, 'Van_Lop_1', 'fds', 'NGuyen_Van_B', 1900, 6, 200000, 'anh1', 7),
(7, 'Su_Lop_1', 'fds', 'NGuyen_Van_C', 1900, 6, 200000, 'anh1', 6),
(8, 'Ly_Lop_1', 'fds', 'NGuyen_Van_D', 1900, 6, 200000, 'anh1', 4);

-- --------------------------------------------------------

--
-- Table structure for table `loai_sach`
--

CREATE TABLE `loai_sach` (
  `MA_LOAI_SACH` int(11) NOT NULL,
  `LOAI_SACH` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loai_sach`
--

INSERT INTO `loai_sach` (`MA_LOAI_SACH`, `LOAI_SACH`) VALUES
(1, 'Tin_Hoc'),
(2, 'Toan_Hoc'),
(3, 'Hoa_Hoc'),
(4, 'Ly_Hoc'),
(5, 'Dia_Hoc'),
(6, 'Su_Hoc'),
(7, 'Van_Hoc'),
(8, 'Sach_Khac');

-- --------------------------------------------------------

--
-- Table structure for table `phieu_muon_sach`
--

CREATE TABLE `phieu_muon_sach` (
  `MA_PHIEU` int(11) NOT NULL,
  `MA_THE` int(11) DEFAULT NULL,
  `MA_SACH` int(11) DEFAULT NULL,
  `NGAY_MUON` date DEFAULT NULL,
  `NGAY_TRA` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phieu_muon_sach`
--

INSERT INTO `phieu_muon_sach` (`MA_PHIEU`, `MA_THE`, `MA_SACH`, `NGAY_MUON`, `NGAY_TRA`) VALUES
(2, 2, 4, '2022-05-06', '2022-06-06'),
(3, 1, 5, '2022-04-06', '2022-04-06'),
(4, 2, 7, '2022-03-04', '2022-04-04'),
(5, 5, 8, '2022-05-06', '2022-06-06'),
(6, 3, 4, '2022-05-06', '2022-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `the_sinh_vien`
--

CREATE TABLE `the_sinh_vien` (
  `MA_THE` int(11) NOT NULL,
  `TEN_SV` varchar(255) DEFAULT NULL,
  `NGAY_SINH` date DEFAULT NULL,
  `DIA_CHI` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `SO_DIEN_THOAI` char(255) DEFAULT NULL,
  `ANH` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `the_sinh_vien`
--

INSERT INTO `the_sinh_vien` (`MA_THE`, `TEN_SV`, `NGAY_SINH`, `DIA_CHI`, `EMAIL`, `SO_DIEN_THOAI`, `ANH`) VALUES
(1, 'Le_Van_A', '0000-00-00', 'sjfdl', 'asfkj@gmail.com', '2578237523', 'anh'),
(2, 'Le_Van_B', '2002-11-12', 'sjfdl', 'asfkj@gmail.com', '2578237523', 'anh'),
(3, 'Le_Van_C', '2001-01-12', 'sjfdl', 'asfkj@gmail.com', '2578237523', 'anh'),
(4, 'Le_Van_D', '0000-00-00', 'sjfdl', 'asfkj@gmail.com', '2578237523', 'anh'),
(5, 'Le_Van_E', '2004-01-30', 'sjfdl', 'asfkj@gmail.com', '2578237523', 'anh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`MA_SACH`,`LOAI_SACH`),
  ADD KEY `LOAI_SACH` (`LOAI_SACH`);

--
-- Indexes for table `loai_sach`
--
ALTER TABLE `loai_sach`
  ADD PRIMARY KEY (`MA_LOAI_SACH`);

--
-- Indexes for table `phieu_muon_sach`
--
ALTER TABLE `phieu_muon_sach`
  ADD PRIMARY KEY (`MA_PHIEU`),
  ADD KEY `MA_THE` (`MA_THE`),
  ADD KEY `MA_SACH` (`MA_SACH`);

--
-- Indexes for table `the_sinh_vien`
--
ALTER TABLE `the_sinh_vien`
  ADD PRIMARY KEY (`MA_THE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `MA_SACH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `loai_sach`
--
ALTER TABLE `loai_sach`
  MODIFY `MA_LOAI_SACH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `phieu_muon_sach`
--
ALTER TABLE `phieu_muon_sach`
  MODIFY `MA_PHIEU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `the_sinh_vien`
--
ALTER TABLE `the_sinh_vien`
  MODIFY `MA_THE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`LOAI_SACH`) REFERENCES `loai_sach` (`MA_LOAI_SACH`);

--
-- Constraints for table `phieu_muon_sach`
--
ALTER TABLE `phieu_muon_sach`
  ADD CONSTRAINT `phieu_muon_sach_ibfk_1` FOREIGN KEY (`MA_THE`) REFERENCES `the_sinh_vien` (`MA_THE`),
  ADD CONSTRAINT `phieu_muon_sach_ibfk_2` FOREIGN KEY (`MA_SACH`) REFERENCES `books` (`MA_SACH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
