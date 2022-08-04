-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 02:08 PM
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
-- Database: `shop_may_tinh`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `display`) VALUES
(1, 'Macbook pro', 1),
(2, 'Acer', 1),
(3, 'Thinkpad', 1),
(4, 'Macbook Air', 1),
(5, 'Dell', 1),
(6, 'hd', 0),
(7, 'Samsung', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `node` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `total_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia_goc` float DEFAULT NULL,
  `gia_ban` float DEFAULT NULL,
  `bao_hanh_xuat_xu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_tao` datetime DEFAULT current_timestamp(),
  `ngay_sua` datetime DEFAULT current_timestamp(),
  `display` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `gia_goc`, `gia_ban`, `bao_hanh_xuat_xu`, `anh`, `ngay_tao`, `ngay_sua`, `display`) VALUES
(2, 1, 'Macbook pro 2022', 45, 5, '12nam', 'dfhs', '2022-06-10 09:48:49', '2022-06-10 09:48:49', 1),
(3, 3, 'Thinkpad X1 Carbon Gen 6', 53, 34, 'ư', 'fg', '2022-06-10 10:30:25', '2022-06-10 10:30:25', 1),
(4, 3, 'Thinkpad xx', 1, 2, 'dsdg', '89', '2022-06-10 13:39:42', '2022-06-12 09:19:53', 1),
(5, 1, 'Macbook Air 2022', 57.23, 67, 'yiuo', 'tyiui', '2022-06-10 13:44:49', '2022-06-12 09:23:16', 0),
(6, 4, 'Macbook Air 20222', 234, 34, 'yiuo', 'tyiui', '2022-06-10 14:15:13', '2022-06-12 09:23:02', 1),
(8, 4, 'Macbook Air 2022', 0, 0, 'yiuo', 'tyiui', '2022-06-12 10:18:18', '2022-06-12 10:18:18', 1),
(9, 5, 'tweyt', 0, 0, 'yiuo', 'tyiui', '2022-06-12 10:21:02', '2022-06-12 10:21:02', 1),
(10, 2, 'Macbook Air 2022s', 0, 0, 'yiuo', 'tyiui', '2022-06-12 10:21:16', '2022-06-12 10:21:16', 1),
(11, 2, 'Macbook Air 2022ss', 0, 0, 'yiuo', 'tyiui', '2022-06-12 10:21:29', '2022-06-12 10:21:29', 1),
(12, 1, 'tweyts', 0, 0, 'yiuo', 'tyiui', '2022-06-12 10:21:38', '2022-06-12 10:21:38', 1),
(13, 2, 'zqs', 0, 0, 'yiuo', 'tyiui', '2022-06-12 10:21:50', '2022-06-12 10:21:50', 1),
(14, 5, 'Macbook Air 2022q', 0, 0, 'yiuo', 'tyiui', '2022-06-12 10:22:07', '2022-06-12 10:22:07', 1),
(15, 5, 'tweytfd', 0, 0, 'yiuo', 'tyiui', '2022-06-12 10:22:20', '2022-06-12 10:22:20', 1),
(16, 2, 'Macbook Air 2022sfgd', 0, 0, 'yiuo', 'tyiui', '2022-06-12 10:22:31', '2022-06-12 10:22:31', 1),
(17, 5, 'dell 11', 45, 5, 'sd', 'asd', '2022-06-12 20:47:51', '2022-06-12 20:47:51', 0),
(18, 5, 'dell 12', 45, 5, 'sd', 'asd', '2022-06-12 20:48:35', '2022-06-12 20:48:35', 0),
(19, 4, 'Macbook Air 2020', 0, 0, 'yiuo', 'tyiui', '2022-06-12 20:51:16', '2022-06-12 20:51:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display`) VALUES
(1, 'Tổng giám đốc', 1),
(2, 'Quản lý', 1),
(3, 'Nhân viên', 1),
(4, 'Người dùng', 1),
(5, 'Sale', 1),
(7, 'Chủ tịch', 1),
(8, 'ceo', 1),
(9, 'Kế toán', 1),
(10, 'Trợ lý', 1),
(11, 'Leader', 1),
(12, 'Manager', 1),
(13, 'Trưởng phòng Marketing', 0),
(14, 'Phó giám đốc', 1),
(15, 'Chi dc', 0),
(18, 'dfgh', 0),
(19, 'bla', 0),
(20, 'bs', 0),
(21, 'gh', 0),
(22, 'Sales', 0),
(23, 's', 0),
(24, 'rty', 0),
(25, 'reyt', 0),
(26, 'vbc', 0),
(27, 'tew', 0),
(28, 'iu', 0),
(29, 'jh', 0),
(30, 'ẻt', 0),
(31, 'fsd', 0),
(32, 'cvvb', 0),
(33, 'gfh', 0),
(34, 'qa', 0),
(35, 'dsa', 0),
(36, 'ưqe', 0),
(37, 'trư', 0),
(38, 'nbv', 0),
(39, 'nmv', 0),
(40, 'fg', 0),
(41, 'hfg', 0),
(42, 'nn', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `display` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `phone_number`, `address`, `password`, `role_id`, `display`) VALUES
(9, 'Lê Chơn', 'adm@gmail.c', '567', '3457', '$2y$10$usjsBoA7X4rZPT9WtpYUJu6mW1ngVsHKRU/gyVQNX.WFE/UNzaZAq', 9, 1),
(10, 'Lê Chơn', 'kimchon01@gmai.com', '55687', '35467', '$2y$10$6kLWRJGg2ZujukpJrhaAyuctjOijgZOKxEfOwRUILRImvQUSPzKqm', 9, 0),
(11, 'alo', 'adm@gmailv.comewrt', '3652', 'etw', '$2y$10$XuyIk08zGlYu16JRk6Au2enLl4OwjyQi9RBfvVOZLbOxlZTePsEZ.', 10, 1),
(12, 'ưẻq', '3345dm@gmail.com', '5324', 'ưt', '$2y$10$N3BgETTiKwsYXoi8M3pNq.NjB1J9ncCiJUTF9m6v2A4I2rSfiyDGe', 11, 1),
(13, 'sdfa', 'adm@gmail.xn--comg-xu5a', '3245', '345', '$2y$10$mZWrsVsjujGDkE15OSUtYelajDXxIdBbGR.FiFAiEXq4nL9.HJhom', 4, 1),
(17, 'rw', 'admw@gmail.com', '324', '24', '$2y$10$1YgoYRp.XKUWrc5gPFX0w.v4xmIVXXw6xnPweqd4VFe4fCLtI1fCi', 4, 1),
(18, 'sdfa', 'adm@gm23ail.com', '23', '232', '$2y$10$mBKkFaVN8K5fbbncAhqaxudNdrBMbnwdpyqEdqhnHfHuJd9oogZRm', 4, 1),
(19, 'ưẻq', 'a43dm@gmail.com', '23', '23', '$2y$10$tpFci1mgxnHmuOTVoGdwVe3/bYPZjLy3QOIGsUuGh5JEyVomN0lK.', 9, 1),
(20, 'gg', 'a32dm@gmail.com', '42', '34', '$2y$10$x70dJat5O.JyaKgXyeQwduF/U3lQWyrY6tkybH4R35DBFMrpWESGm', 4, 1),
(21, '2', 'adm@gmailert.gdf', '42', 'Hải Hưng- Hải Lăng-Quảng Trị', '$2y$10$yrAjgsbnoWSfzNZ6oFYIL.eb60dxHFNlORJjYKrEnOtDJPymdDVhC', 14, 1),
(22, '1', 'adm@gmailert.com', '3425', 'Hải Hưng- Hải Lăng-Quảng Trị', '$2y$10$ApV6L81KIMl7CboLGR6vS.4LReJgIHwM2ojvAHw0uIiJ0Wnbt4CG2', 7, 1),
(23, 'toancute', 'toancute@gmail.com', '1234567654', 'Hải Hưng- Hải Lăng-Quảng Trị', '$2y$10$Pzbc8iHlD5MkQwc5VqUiyepoedxRVZJC5Du2EgH0rdR9eBhfWZzFi', 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
