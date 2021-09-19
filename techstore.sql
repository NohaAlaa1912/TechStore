-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 07:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`, `email`, `is_super`, `created_at`) VALUES
(0, 'Noha Alaa', '$2y$10$4Cj8rbL3JDoNOre06veZQ./TtPMc8AxEnuVDrMV/Ap1CHCFeF3gvq', 'noha123@gmail.com', 'no', '2021-05-06 01:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `name`, `created_at`) VALUES
(1, 'Laptops', '2021-05-06 01:31:06'),
(2, 'PCs', '2021-05-06 01:31:06'),
(3, 'Mobiles', '2021-05-06 01:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('pending','approved','canceled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `status`, `created_at`) VALUES
(4, 'Noha alaa', 'nohaalaas12@test.com', '012345533688', NULL, 'approved', '2021-09-06 16:55:57'),
(5, 'sahar mohsen', 'sa7er@admin.com', '01900038888', NULL, 'pending', '2021-09-06 17:05:47'),
(6, 'Noha alaa 2', 'noha@admin.com', '012305533688', NULL, 'pending', '2021-09-06 17:13:54'),
(7, 'MOHAMED', 'mohammed12@gmail.com', '010298766365', NULL, 'pending', '2021-09-06 19:13:32'),
(10, 'osama', 'osama@admin.com', '01544468890', ' 20 st noras-Maadi ', 'canceled', '2021-09-08 14:14:59'),
(11, '3maar', '3maar@admin.com', '011227774940', NULL, 'pending', '2021-09-08 14:42:22'),
(12, 'sohaila', NULL, '0100000110', NULL, 'approved', '2021-09-08 15:24:09'),
(16, 'Ahmed ', NULL, '010298766365', NULL, 'pending', '2021-09-15 19:35:50');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `qty`) VALUES
(39, 4, 6, 1),
(40, 4, 1, 2),
(41, 5, 3, 1),
(42, 6, 4, 1),
(43, 7, 3, 2),
(44, 7, 1, 2),
(45, 7, 9, 1),
(46, 7, 8, 1),
(47, 10, 4, 1),
(48, 11, 3, 1),
(49, 11, 1, 3),
(50, 11, 10, 2),
(51, 12, 5, 2),
(52, 12, 7, 1),
(53, NULL, NULL, 1),
(54, NULL, 3, 2),
(55, NULL, 8, 1),
(56, NULL, 4, 1),
(57, 16, 6, 2),
(58, 16, 7, 2),
(59, 16, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `pieces_no` smallint(6) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `pieces_no`, `img`, `cat_id`, `created_at`) VALUES
(1, 'lenovo ideapad', 'this is dummy description for product', '15000.00', 10, '1.jpg', 1, '2021-05-06 01:31:06'),
(2, 'dell laptop', 'this is dummy description for product', '10000.00', 10, '2.jpg', 1, '2021-05-06 01:31:06'),
(3, 'hp laptop', 'this is dummy description for product', '8000.00', 8, '3.jpg', 1, '2021-05-06 01:31:06'),
(4, 'lenovo thinkpad', 'this is dummy description for product', '13000.00', 5, '4.jpg', 1, '2021-05-06 01:31:06'),
(5, 'pc 123', 'this is dummy description for product', '5000.00', 3, '5.jpg', 2, '2021-05-06 01:31:06'),
(6, 'pc456', 'this is dummy description for product', '6000.00', 4, '6.jpg', 2, '2021-05-06 01:31:06'),
(7, 'pc 789', 'this is dummy description for product', '7000.00', 2, '7.jpg', 2, '2021-05-06 01:31:06'),
(8, 'samsung ay 7aga', 'this is dummy description for product', '5000.00', 100, '8.jpg', 3, '2021-05-06 01:31:06'),
(9, 'oppo ay 7aga', 'this is dummy description for product', '5500.00', 50, '9.jpg', 3, '2021-05-06 01:31:06'),
(10, 'hawaei ay 7aga', 'this is dummy description for product', '5200.00', 30, '10.jpg', 3, '2021-05-06 01:31:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `cats` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
