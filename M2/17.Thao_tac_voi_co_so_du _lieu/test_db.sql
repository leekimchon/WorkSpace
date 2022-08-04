-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 11:38 AM
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
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `SOHOADON` int(11) DEFAULT NULL,
  `MAHANG` int(11) DEFAULT NULL,
  `GIABAN` double DEFAULT NULL,
  `SOLUONG` int(11) DEFAULT NULL,
  `MUCGIAMGIA` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietdathang`
--

INSERT INTO `chitietdathang` (`SOHOADON`, `MAHANG`, `GIABAN`, `SOLUONG`, `MUCGIAMGIA`) VALUES
(1, 84, 373420, 2, 4582),
(19, 29, 201314, 2, 1006),
(25, 11, 358396, 2, 3014),
(31, 43, 496123, 1, 3021),
(23, 32, 315231, 1, 4436),
(17, 11, 219700, 2, 2422),
(12, 60, 372221, 1, 1505),
(8, 77, 396657, 2, 4663),
(10, 18, 229141, 3, 1553),
(43, 74, 281813, 3, 2711),
(35, 44, 129789, 2, 1577),
(1, 6, 255097, 1, 3269),
(48, 25, 442098, 3, 2676),
(13, 52, 176522, 2, 2866),
(23, 36, 115955, 1, 4801),
(1, 35, 325129, 1, 4998),
(30, 54, 293118, 1, 3037),
(2, 74, 445037, 1, 1449),
(50, 5, 471113, 3, 2842),
(10, 55, 307910, 2, 4489),
(32, 41, 393164, 3, 1681),
(7, 82, 311113, 2, 3584),
(37, 79, 348991, 1, 3325),
(42, 35, 278492, 3, 4213),
(47, 26, 400095, 2, 2771),
(9, 34, 269352, 2, 1867),
(32, 4, 432797, 3, 2260),
(4, 6, 216738, 1, 1395),
(42, 67, 496978, 2, 1808),
(29, 23, 187696, 3, 4394),
(3, 77, 265903, 3, 3369),
(24, 67, 250041, 3, 4164),
(45, 29, 251732, 3, 3686),
(35, 46, 328251, 3, 4918),
(11, 66, 343572, 3, 1007),
(46, 41, 315231, 2, 3797),
(18, 17, 469653, 1, 2499),
(31, 69, 205107, 1, 3045),
(28, 8, 178316, 1, 3404),
(44, 5, 294180, 3, 4950),
(20, 89, 203992, 3, 4208),
(21, 63, 267466, 2, 4854),
(1, 90, 209539, 1, 3296),
(2, 81, 112105, 1, 1774),
(38, 86, 338009, 1, 3577),
(26, 82, 249312, 1, 3807),
(32, 25, 392373, 1, 4383),
(18, 15, 154399, 3, 2930),
(8, 81, 183260, 3, 1367),
(23, 77, 333064, 1, 4566);

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE `dondathang` (
  `SOHOADON` int(10) UNSIGNED NOT NULL,
  `MAKHACHHANG` int(11) DEFAULT NULL,
  `MANHANVIEN` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NGAYDATHANG` date DEFAULT NULL,
  `NGAYGIAOHANG` date DEFAULT NULL,
  `NGAYCHUYENHANG` date DEFAULT NULL,
  `NOIGIAOHANG` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dondathang`
--

INSERT INTO `dondathang` (`SOHOADON`, `MAKHACHHANG`, `MANHANVIEN`, `NGAYDATHANG`, `NGAYGIAOHANG`, `NGAYCHUYENHANG`, `NOIGIAOHANG`) VALUES
(1, 6, '33', '1999-01-30', '2002-05-24', '2000-09-17', '2002-11-11'),
(2, 9, '48', '2001-07-29', '2001-02-06', '2001-11-03', '2000-06-15'),
(3, 1, '14', '2000-09-24', '1999-09-16', '1999-12-08', '2003-02-06'),
(4, 3, '25', '2003-04-30', '1999-12-20', '2003-08-03', '2002-04-11'),
(5, 12, '22', '2002-08-04', '2002-11-08', '2001-06-23', '2003-12-01'),
(6, 1, '18', '1999-05-01', '2003-05-30', '1999-01-22', '2000-02-05'),
(7, 11, '24', '2002-03-28', '1999-01-13', '2002-10-24', '2000-10-10'),
(8, 4, '19', '1999-12-29', '2000-12-28', '2002-01-24', '2003-03-04'),
(9, 10, '25', '2000-02-06', '2003-01-26', '2003-11-19', '2000-05-04'),
(10, 12, '37', '2001-03-17', '2002-07-14', '2000-05-16', '2002-03-11'),
(11, 12, '7', '2000-03-31', '2002-04-02', '2001-02-18', '2000-07-13'),
(12, 11, '48', '2001-04-01', '1999-12-29', '1999-04-15', '2002-02-15'),
(13, 4, '28', '2000-12-26', '1999-12-21', '2001-11-29', '2002-05-17'),
(14, 7, '39', '2000-07-02', '1999-09-22', '2003-03-02', '2002-07-15'),
(15, 10, '42', '2002-12-27', '2002-03-01', '2002-02-10', '2002-09-29'),
(16, 4, '19', '2002-07-12', '2000-06-19', '2003-07-19', '2001-04-14'),
(17, 1, '4', '2000-07-08', '2001-12-03', '2003-01-09', '2000-10-29'),
(18, 8, '46', '1999-12-10', '2000-10-27', '2002-02-15', '1999-01-10'),
(19, 9, '49', '2002-12-21', '1999-09-22', '2003-10-10', '1999-09-29'),
(20, 13, '21', '2003-11-30', '2003-09-30', '2000-12-23', '2003-07-05'),
(21, 10, '19', '2003-07-08', '2002-07-30', '2002-04-24', '1999-08-02'),
(22, 1, '36', '2002-09-25', '2002-11-12', '2002-06-07', '2001-06-19'),
(23, 2, '50', '2000-06-27', '2001-10-16', '2003-07-05', '2000-01-24'),
(24, 3, '20', '2002-03-09', '2002-06-17', '2000-03-07', '2002-10-12'),
(25, 11, '36', '2000-03-31', '2001-01-24', '1999-12-01', '2002-07-22'),
(26, 5, '40', '2002-06-18', '1999-04-14', '2002-07-16', '2002-09-08'),
(27, 5, '22', '2001-02-10', '2003-02-04', '1998-12-27', '2002-06-28'),
(28, 13, '42', '1999-06-13', '2002-09-11', '2000-09-01', '2003-02-02'),
(29, 4, '28', '2000-01-08', '2002-12-11', '2000-07-13', '2002-04-27'),
(30, 1, '23', '1999-06-10', '2001-02-11', '2003-07-12', '1999-12-03'),
(31, 10, '28', '1999-01-22', '2001-05-11', '2000-09-07', '2003-01-04'),
(32, 9, '48', '1999-11-28', '2000-01-19', '1999-11-12', '2003-11-30'),
(33, 5, '39', '2002-01-17', '1999-01-25', '1999-03-29', '2001-08-26'),
(34, 5, '44', '2000-11-16', '2002-10-20', '2003-07-25', '2002-05-23'),
(35, 8, '22', '2003-10-21', '2000-12-12', '2000-09-12', '2002-03-16'),
(36, 6, '11', '1999-06-04', '2000-08-21', '2002-12-17', '2003-10-13'),
(37, 7, '50', '2003-03-31', '2003-03-17', '2003-09-11', '2001-03-25'),
(38, 7, '6', '2003-02-04', '1999-12-08', '2003-08-03', '2000-09-15'),
(39, 5, '43', '2002-08-08', '2000-01-15', '2003-03-21', '2003-11-13'),
(40, 10, '18', '2001-01-05', '2002-05-18', '2000-12-17', '2000-03-18'),
(41, 2, '9', '2000-07-05', '2000-07-28', '2001-08-05', '2003-09-09'),
(42, 13, '30', '2003-09-23', '2002-08-12', '1999-10-28', '2003-03-17'),
(43, 9, '41', '2003-12-20', '2003-08-07', '2000-06-30', '2002-09-25'),
(44, 14, '29', '2002-12-09', '2002-08-27', '2002-02-10', '2002-12-14'),
(45, 13, '48', '2003-12-21', '2002-02-19', '2003-12-06', '2003-11-06'),
(46, 11, '50', '2002-01-26', '2002-02-01', '1999-05-03', '2001-03-06'),
(47, 2, '38', '2001-12-25', '2000-07-04', '2001-01-09', '2002-05-27'),
(48, 14, '25', '2003-05-21', '2001-03-13', '1999-08-19', '2002-10-05'),
(49, 3, '6', '2002-08-11', '1999-03-15', '2000-03-07', '1998-12-31'),
(50, 13, '30', '2003-04-05', '2001-07-16', '2001-09-20', '2001-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKHACHHANG` int(10) UNSIGNED NOT NULL,
  `TENCONGTY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TENGIAODICH` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DIACHI` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EMAIL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DIENTHOAI` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FAX` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MAKHACHHANG`, `TENCONGTY`, `TENGIAODICH`, `DIACHI`, `EMAIL`, `DIENTHOAI`, `FAX`) VALUES
(1, 'Công ty Đặng Vân', 'Mr Đặng Vân', 'Ha Tinh', 'dang-van_1640439024@gmail.com', '08122325253', '08181213570'),
(2, 'Công ty Phan Hiền', 'Mr Phan Hiền', 'Ha Noi', 'phan-hien_1640439024@gmail.com', '08144786017', '08150216800'),
(3, 'Công ty Ngô Phương', 'Mr Ngô Phương', 'Ha Tinh', 'ngo-phuong_1640439024@gmail.com', '08146502330', '08136873281'),
(4, 'Công ty Dương Anh', 'Mr Dương Anh', 'Quang Tri', 'duong-anh_1640439024@gmail.com', '08185776843', '09091423866'),
(5, 'Công ty Phạm Nga', 'Mr Phạm Nga', 'Quang Tri', 'pham-nga_1640439024@gmail.com', '08161028688', '08148210337'),
(6, 'Công ty Hoàng Nga', 'Mr Hoàng Nga', 'Quang Binh', 'hoang-nga_1640439024@gmail.com', '08171470358', '08191128807'),
(7, 'Công ty Hồ Nhung', 'Mr Hồ Nhung', 'Thanh Hoa', 'ho-nhung_1640439024@gmail.com', '09087383803', '09084717731'),
(8, 'Công ty Đặng Nga', 'Mr Đặng Nga', 'Ha Noi', 'dang-nga_1640439024@gmail.com', '08198334683', '08147833001'),
(9, 'Công ty Đặng Thảo', 'Mr Đặng Thảo', 'Nghe An', 'dang-thao_1640439024@gmail.com', '08150058530', '09096430561'),
(10, 'Công ty Ngô Thảo', 'Mr Ngô Thảo', 'Da Nang', 'ngo-thao_1640439024@gmail.com', '08130087180', '09084028813'),
(11, 'Công ty Lê Phương', 'Mr Lê Phương', 'Thanh Hoa', 'le-phuong_1640439024@gmail.com', '09080455862', '08187226561'),
(12, 'Công ty Ngô Huyền', 'Mr Ngô Huyền', 'Ha Noi', 'ngo-huyen_1640439024@gmail.com', '09090504587', '08150042424'),
(13, 'Công ty Trần Huyền', 'Mr Trần Huyền', 'Quang Binh', 'tran-huyen_1640439024@gmail.com', '08152578514', '08173011857'),
(14, 'Công ty Lê Hương', 'Mr Lê Hương', 'Ha Noi', 'le-huong_1640439024@gmail.com', '08184327744', '08144824323');

-- --------------------------------------------------------

--
-- Table structure for table `loaihang`
--

CREATE TABLE `loaihang` (
  `MALOAIHANG` int(10) UNSIGNED NOT NULL,
  `TENLOAIHANG` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaihang`
--

INSERT INTO `loaihang` (`MALOAIHANG`, `TENLOAIHANG`) VALUES
(1, 'thực phẩm'),
(2, 'hải sản'),
(3, 'giải khát'),
(4, 'quần áo'),
(5, 'y tế'),
(6, 'điện thoại'),
(7, 'máy tính');

-- --------------------------------------------------------

--
-- Table structure for table `mathang`
--

CREATE TABLE `mathang` (
  `MAHANG` int(10) UNSIGNED NOT NULL,
  `TENHANG` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MACONGTY` int(11) DEFAULT NULL,
  `MALOAIHANG` int(11) DEFAULT NULL,
  `SOLUONG` int(11) DEFAULT NULL,
  `DONVITINH` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GIAHANG` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mathang`
--

INSERT INTO `mathang` (`MAHANG`, `TENHANG`, `MACONGTY`, `MALOAIHANG`, `SOLUONG`, `DONVITINH`, `GIAHANG`) VALUES
(1, 'y tế loại 167', 3, 5, 77, 'cai', 361305),
(2, 'y tế loại 180', 4, 3, 33, 'cai', 219428),
(3, 'quần áo loại 84', 3, 6, 35, 'cai', 224753),
(4, 'giải khát loại 93', 4, 5, 92, 'cai', 487073),
(5, 'máy tính loại 82', 2, 5, 23, 'cai', 298558),
(6, 'máy tính loại 100', 2, 7, 33, 'cai', 102772),
(7, 'y tế loại 121', 2, 4, 15, 'cai', 409071),
(8, 'máy tính loại 147', 3, 1, 23, 'cai', 497125),
(9, 'điện thoại loại 64', 2, 5, 5, 'cai', 327775),
(10, 'thực phẩm loại 165', 2, 3, 19, 'cai', 299607),
(11, 'thực phẩm loại 161', 3, 6, 49, 'cai', 200397),
(12, 'y tế loại 78', 1, 6, 52, 'cai', 174153),
(13, 'máy tính loại 200', 3, 4, 48, 'cai', 185643),
(14, 'giải khát loại 78', 4, 2, 96, 'cai', 198424),
(15, 'quần áo loại 162', 2, 5, 6, 'cai', 395880),
(16, 'y tế loại 198', 4, 1, 72, 'cai', 240789),
(17, 'quần áo loại 88', 3, 6, 1, 'cai', 331108),
(18, 'máy tính loại 59', 4, 1, 52, 'cai', 142598),
(19, 'giải khát loại 84', 3, 4, 63, 'cai', 321441),
(20, 'điện thoại loại 187', 3, 4, 1, 'cai', 318127),
(21, 'y tế loại 159', 4, 5, 70, 'cai', 139767),
(22, 'quần áo loại 40', 1, 1, 33, 'cai', 298325),
(23, 'quần áo loại 20', 3, 5, 33, 'cai', 208731),
(24, 'máy tính loại 170', 4, 6, 40, 'cai', 123765),
(25, 'giải khát loại 101', 4, 1, 78, 'cai', 184705),
(26, 'điện thoại loại 125', 4, 2, 97, 'cai', 336961),
(27, 'điện thoại loại 139', 4, 6, 32, 'cai', 350645),
(28, 'máy tính loại 94', 2, 5, 99, 'cai', 436029),
(29, 'y tế loại 64', 2, 6, 32, 'cai', 431247),
(30, 'quần áo loại 140', 1, 4, 75, 'cai', 148557),
(31, 'điện thoại loại 171', 3, 1, 100, 'cai', 451219),
(32, 'giải khát loại 185', 3, 7, 46, 'cai', 447327),
(33, 'điện thoại loại 35', 3, 5, 93, 'cai', 244606),
(34, 'điện thoại loại 135', 1, 1, 10, 'cai', 443732),
(35, 'y tế loại 110', 2, 5, 94, 'cai', 345465),
(36, 'hải sản loại 171', 3, 6, 7, 'cai', 130832),
(37, 'giải khát loại 28', 4, 2, 46, 'cai', 405070),
(38, 'điện thoại loại 1', 1, 7, 37, 'cai', 257157),
(39, 'quần áo loại 19', 4, 1, 86, 'cai', 262028),
(40, 'thực phẩm loại 33', 4, 2, 76, 'cai', 220927),
(41, 'điện thoại loại 95', 1, 2, 22, 'cai', 223485),
(42, 'giải khát loại 10', 3, 4, 13, 'cai', 316913),
(43, 'giải khát loại 132', 4, 2, 87, 'cai', 422080),
(44, 'y tế loại 23', 4, 1, 9, 'cai', 423544),
(45, 'giải khát loại 176', 2, 2, 1, 'cai', 449465),
(46, 'thực phẩm loại 196', 2, 3, 94, 'cai', 305351),
(47, 'quần áo loại 167', 4, 3, 58, 'cai', 343818),
(48, 'hải sản loại 33', 3, 3, 8, 'cai', 254541),
(49, 'giải khát loại 96', 2, 4, 100, 'cai', 290732),
(50, 'máy tính loại 190', 1, 2, 16, 'cai', 457415),
(51, 'quần áo loại 162', 2, 5, 99, 'cai', 227918),
(52, 'thực phẩm loại 107', 2, 7, 2, 'cai', 397026),
(53, 'máy tính loại 49', 4, 3, 21, 'cai', 225028),
(54, 'máy tính loại 117', 4, 6, 8, 'cai', 371012),
(55, 'điện thoại loại 72', 3, 5, 79, 'cai', 170753),
(56, 'giải khát loại 33', 1, 2, 46, 'cai', 250334),
(57, 'y tế loại 101', 4, 4, 4, 'cai', 188342),
(58, 'y tế loại 92', 1, 7, 3, 'cai', 368735),
(59, 'máy tính loại 107', 3, 2, 15, 'cai', 357438),
(60, 'điện thoại loại 4', 1, 7, 83, 'cai', 336018),
(61, 'hải sản loại 10', 2, 2, 90, 'cai', 341310),
(62, 'y tế loại 38', 2, 3, 58, 'cai', 265678),
(63, 'quần áo loại 17', 4, 4, 9, 'cai', 332177),
(64, 'y tế loại 101', 4, 3, 29, 'cai', 482530),
(65, 'thực phẩm loại 190', 2, 5, 20, 'cai', 120151),
(66, 'máy tính loại 81', 3, 3, 69, 'cai', 370307),
(67, 'quần áo loại 33', 3, 4, 10, 'cai', 269278),
(68, 'điện thoại loại 32', 1, 4, 79, 'cai', 364101),
(69, 'máy tính loại 72', 4, 1, 80, 'cai', 164284),
(70, 'máy tính loại 9', 3, 2, 47, 'cai', 392062),
(71, 'máy tính loại 152', 3, 2, 92, 'cai', 246494),
(72, 'giải khát loại 26', 2, 5, 3, 'cai', 225951),
(73, 'thực phẩm loại 60', 1, 6, 59, 'cai', 211133),
(74, 'thực phẩm loại 197', 3, 7, 99, 'cai', 102102),
(75, 'thực phẩm loại 43', 2, 5, 79, 'cai', 124890),
(76, 'máy tính loại 12', 1, 7, 81, 'cai', 193212),
(77, 'thực phẩm loại 189', 2, 1, 7, 'cai', 484809),
(78, 'quần áo loại 75', 3, 1, 97, 'cai', 214277),
(79, 'máy tính loại 5', 3, 1, 25, 'cai', 463993),
(80, 'giải khát loại 127', 3, 1, 26, 'cai', 130180),
(81, 'hải sản loại 162', 3, 5, 33, 'cai', 223437),
(82, 'thực phẩm loại 7', 1, 1, 16, 'cai', 193958),
(83, 'giải khát loại 54', 3, 5, 53, 'cai', 286450),
(84, 'thực phẩm loại 161', 2, 3, 87, 'cai', 153602),
(85, 'thực phẩm loại 44', 2, 2, 98, 'cai', 401461),
(86, 'máy tính loại 176', 3, 4, 2, 'cai', 107270),
(87, 'quần áo loại 121', 4, 1, 93, 'cai', 274102),
(88, 'điện thoại loại 34', 4, 4, 83, 'cai', 176035),
(89, 'thực phẩm loại 88', 1, 4, 7, 'cai', 170431),
(90, 'y tế loại 162', 2, 7, 29, 'cai', 357481),
(91, 'máy tính loại 166', 4, 7, 100, 'cai', 495012),
(92, 'y tế loại 152', 1, 3, 13, 'cai', 482177),
(93, 'giải khát loại 79', 3, 5, 32, 'cai', 144483),
(94, 'y tế loại 21', 3, 2, 23, 'cai', 267775),
(95, 'y tế loại 13', 4, 6, 92, 'cai', 472085),
(96, 'hải sản loại 63', 2, 4, 51, 'cai', 130021),
(97, 'hải sản loại 129', 3, 3, 64, 'cai', 207755),
(98, 'y tế loại 26', 1, 6, 42, 'cai', 315587),
(99, 'hải sản loại 84', 1, 2, 62, 'cai', 291453),
(100, 'hải sản loại 198', 1, 6, 23, 'cai', 394260),
(101, 'new', 1, 1, 1, 'cai', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `MACONGTY` int(10) UNSIGNED NOT NULL,
  `TENCONGTY` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TENGIAODICH` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DIACHI` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DIENTHOAI` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FAX` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EMAIL` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`MACONGTY`, `TENCONGTY`, `TENGIAODICH`, `DIACHI`, `DIENTHOAI`, `FAX`, `EMAIL`) VALUES
(1, 'Việt Tiến', 'Việt Tiến', 'Ha Tinh', '08144737125', '08150465452', 'viet-tien@gmail.com'),
(2, 'VINAMILK', 'VINAMILK', 'Quang Tri', '08131331518', '08130828717', 'vinamilk@gmail.com'),
(3, 'NIKE', 'NIKE', 'Hue', '08163373358', '09080737488', 'nike@gmail.com'),
(4, 'ADIDAS', 'ADIDAS', 'Quang Tri', '08146158866', '08124431624', 'adidas@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MANHANVIEN` int(10) UNSIGNED NOT NULL,
  `HO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TEN` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NGAYSINH` date DEFAULT NULL,
  `NGAYLAMVIEC` date DEFAULT NULL,
  `DIACHI` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DIENTHOAI` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LUONGCOBAN` double DEFAULT NULL,
  `PHUCAP` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MANHANVIEN`, `HO`, `TEN`, `NGAYSINH`, `NGAYLAMVIEC`, `DIACHI`, `DIENTHOAI`, `LUONGCOBAN`, `PHUCAP`) VALUES
(1, 'Đặng', 'Nga', '1979-10-18', '1972-01-03', 'Nghe An', '08168632508', 5, 7),
(2, 'Lý', 'Vân', '1979-10-18', '1972-01-03', 'Thanh Hoa', '08155630578', 12116915, 742333),
(3, 'Đỗ', 'Yến', '1974-05-16', '1973-11-23', 'Thanh Hoa', '09087315072', 8080572, 636811),
(4, 'Ngô', 'Hiền', '1974-05-16', '1977-04-30', 'Ha Tinh', '08174085408', 10267768, 798191),
(5, 'Đặng', 'Hà', '1973-09-04', '1972-01-03', 'Ha Noi', '08165176320', 12902131, 482805),
(6, 'Ngô', 'Linh', '1976-01-20', '1976-09-27', 'Nghe An', '08128405867', 11648135, 595193),
(7, 'Lý', 'Huyền', '1973-11-11', '1980-12-21', 'Ha Tinh', '09098604134', 7912358, 520306),
(8, 'Phạm', 'Phương', '1979-03-31', '1978-08-31', 'Quang Binh', '08165513553', 10812386, 848669),
(9, 'Lý', 'Phương', '1980-07-26', '1975-08-02', 'Da Nang', '08122063050', 9405498, 437218),
(10, 'Phan', 'Thảo', '1972-10-14', '1981-01-22', 'Da Nang', '09082740337', 13088092, 850829),
(11, 'Dương', 'Anh', '1975-12-20', '1976-05-03', 'Nghe An', '08137581263', 9749958, 639932),
(12, 'Bùi', 'Hương', '1974-10-15', '1979-12-14', 'Ha Tinh', '09095735733', 14984684, 614567),
(13, 'Dương', 'Ngọc', '1979-01-24', '1977-02-25', 'Ha Noi', '08127612201', 11813879, 636462),
(14, 'Võ', 'Huyền', '1974-01-26', '1978-01-20', 'Ha Noi', '08178865208', 8943892, 815095),
(15, 'Ngô', 'Trang', '1979-08-08', '1977-12-09', 'Quang Binh', '08172145261', 12505003, 420900),
(16, 'Võ', 'Vân', '1971-12-29', '1973-09-28', 'Ha Tinh', '08172022043', 8657828, 947477),
(17, 'Võ', 'Thu', '1974-12-04', '1976-01-16', 'Ha Noi', '08177872780', 8636791, 573364),
(18, 'Bùi', 'Thu', '1973-07-09', '1980-05-26', 'Quang Tri', '09093277727', 11937800, 450441),
(19, 'Đặng', 'Hằng', '1979-09-22', '1978-03-28', 'Ha Noi', '08123366750', 13508379, 829764),
(20, 'Lý', 'Ngọc', '1974-08-31', '1973-08-14', 'Ha Noi', '08142756754', 13911020, 415177),
(21, 'Đặng', 'Hà', '1976-11-20', '1979-11-04', 'Quang Binh', '08180066264', 7227042, 497042),
(22, 'Dương', 'Huyền', '1980-12-24', '1980-03-26', 'Ha Noi', '08192742087', 12583542, 409983),
(23, 'Lê', 'Anh', '1975-03-13', '1976-07-02', 'Da Nang', '09084525588', 12033125, 913430),
(24, 'Đặng', 'Yến', '1973-10-25', '1979-12-15', 'Ha Tinh', '09081842235', 12104293, 523162),
(25, 'Phạm', 'Anh', '1978-06-16', '1977-02-17', 'Ha Tinh', '09097366388', 7712097, 913378),
(26, 'Phạm', 'Vân', '1973-02-08', '1977-08-05', 'Thanh Hoa', '09091084424', 10601860, 577805),
(27, 'Nguyễn', 'Thu', '1978-03-14', '1977-02-05', 'Quang Binh', '09083138747', 11545390, 672845),
(28, 'Hoàng', 'Hoa', '1981-02-12', '1980-10-26', 'Thanh Hoa', '08162687276', 9252627, 409572),
(29, 'Lê', 'Giang', '1979-12-04', '1978-12-19', 'Nghe An', '08156153037', 11945361, 812857),
(30, 'Hoàng', 'Yến', '1972-04-10', '1979-12-12', 'Quang Binh', '09081870154', 10520906, 454668),
(31, 'Phạm', 'Hạnh', '1978-10-12', '1977-07-12', 'Quang Tri', '09091835416', 11817841, 803730),
(32, 'Lê', 'Nhung', '1972-09-14', '1975-08-01', 'Nghe An', '08172363883', 12529476, 638763),
(33, 'Dương', 'Hương', '1981-09-05', '1975-10-20', 'Quang Binh', '08188002148', 9409110, 525123),
(34, 'Võ', 'Nga', '1972-02-15', '1972-06-18', 'Ha Tinh', '08142634480', 8401440, 865093),
(35, 'Trần', 'Hiền', '1973-02-05', '1972-09-07', 'Quang Tri', '08125308367', 9076512, 557320),
(36, 'Ngô', 'Mai', '1973-03-08', '1980-12-13', 'Quang Tri', '08137268003', 9808674, 746380),
(37, 'Nguyễn', 'Hoa', '1979-10-26', '1973-01-11', 'Hue', '08124255804', 9116931, 811170),
(38, 'Phạm', 'Thu', '1979-10-15', '1974-06-06', 'Nghe An', '08126243634', 9696802, 955981),
(39, 'Lý', 'Mai', '1981-05-08', '1975-04-30', 'Da Nang', '08136485763', 10925846, 912326),
(40, 'Nguyễn', 'Hoa', '1972-02-17', '1980-12-07', 'Ha Noi', '08176884141', 10454742, 748646),
(41, 'Đỗ', 'Hằng', '1972-04-22', '1975-04-30', 'Ha Noi', '09090402825', 10336462, 685290),
(42, 'Võ', 'Nhung', '1973-10-05', '1975-02-20', 'Thanh Hoa', '08155010387', 8340939, 805085),
(43, 'Ngô', 'Huyền', '1978-02-06', '1981-01-18', 'Da Nang', '08192427178', 8545224, 506302),
(44, 'Bùi', 'Mai', '1976-09-14', '1976-06-18', 'Thanh Hoa', '08142818673', 8802683, 954956),
(45, 'Đặng', 'Thảo', '1981-11-10', '1979-03-26', 'Quang Binh', '08146425681', 8813895, 959849),
(46, 'Nguyễn', 'Thảo', '1977-09-21', '1973-09-08', 'Ha Noi', '08171671231', 10608289, 577657),
(47, 'Nguyễn', 'Thảo', '1981-08-06', '1977-07-18', 'Hue', '08174583456', 14001114, 765889),
(48, 'Dương', 'Mai', '1979-03-08', '1972-11-06', 'Da Nang', '08175567625', 12494674, 942614),
(49, 'Nguyễn', 'Ngọc', '1975-10-02', '1981-05-18', 'Thanh Hoa', '09096661386', 11129103, 780839),
(50, 'Ngô', 'Nhung', '1973-03-16', '1972-11-11', 'Nghe An', '08180886011', 13694561, 539769);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`SOHOADON`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MAKHACHHANG`),
  ADD UNIQUE KEY `khachhang_email_unique` (`EMAIL`);

--
-- Indexes for table `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`MALOAIHANG`);

--
-- Indexes for table `mathang`
--
ALTER TABLE `mathang`
  ADD PRIMARY KEY (`MAHANG`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MACONGTY`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MANHANVIEN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `SOHOADON` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MAKHACHHANG` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `MALOAIHANG` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mathang`
--
ALTER TABLE `mathang`
  MODIFY `MAHANG` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `MACONGTY` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MANHANVIEN` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
