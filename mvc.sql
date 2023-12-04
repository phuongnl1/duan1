-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2023 at 08:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `position` int(3) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updation_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `position`, `parent_id`, `creation_date`, `updation_date`) VALUES
(1, 'Books', 'Books description', 2, 0, '2023-07-27 14:09:13', '2023-07-21 13:55:49'),
(2, 'Glasses', 'Glasses Desc', 2, 0, '2023-07-21 13:55:49', '2023-07-21 13:55:49'),
(4, 'Novel Books', 'Novel Books', 3, 1, '2023-11-24 05:52:12', '2023-07-28 12:58:55'),
(12, 'Short sotires', 'Short sotires', 3, 1, '2023-11-24 05:52:16', '2023-10-04 10:50:13'),
(14, 'Women', 'Women', 23, 2, '2023-11-24 05:52:20', '2023-10-04 12:21:33'),
(15, 'Men', 'Men', 1, 2, '2023-11-24 05:51:57', '2023-11-24 05:51:57'),
(16, 'Baby', 'Baby', 2, 2, '2023-11-24 06:01:34', '2023-11-24 06:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `comment`) VALUES
(1, 1, 2, 'ssss'),
(2, 1, 1, 'ffff'),
(3, 1, 2, '222'),
(6, 4, 1, 'Comment 01\r\n'),
(7, 4, 1, 'Comment 02'),
(8, 4, 1, 'Comment 3'),
(9, 4, 1, 'Test coment 04\r\n'),
(10, 4, 1, 'Test comment 05'),
(11, 4, 1, '0'),
(12, 4, 1, '0'),
(13, 4, 1, 'Test comment 07'),
(14, 4, 1, 'Test comment 08'),
(15, 4, 2, 'Test comment product 02'),
(16, 4, 2, 'Test comment product 02 - time 2'),
(17, 4, 2, 'Test comment product 02 - time 3'),
(18, 4, 1, 'Commetn 06'),
(19, 4, 1, 'Phuong comment 01'),
(20, 4, 1, 'Phuong comment 02'),
(21, 1, 1, 'Admin comment 01'),
(22, 1, 1, 'Admin comment 02'),
(23, 1, 1, 'Tui comment'),
(24, 1, 1, 'Comment 01');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT 0,
  `payment_method` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` timestamp NULL DEFAULT NULL,
  `updation_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `is_paid`, `payment_method`, `user_id`, `creation_date`, `updation_date`) VALUES
(16, 1, 'Cash', 4, NULL, '2023-08-02 13:32:27'),
(17, 0, 'Cash', 1, NULL, '2023-08-02 13:43:36'),
(18, 0, 'Cash', 1, NULL, '2023-09-11 11:46:46'),
(19, 0, 'Cash', 4, NULL, '2023-09-18 10:51:39'),
(20, 0, 'Cash', 4, NULL, '2023-09-18 10:52:52'),
(21, 0, 'Cash', 4, NULL, '2023-09-18 10:53:04'),
(22, 0, 'Cash', 1, NULL, '2023-09-23 14:57:14'),
(23, 0, 'Cash', 4, NULL, '2023-10-04 11:13:13'),
(24, 0, 'Cash', 4, NULL, '2023-10-04 11:14:57'),
(25, 0, 'Cash', 1, NULL, '2023-11-24 06:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `creation_date` timestamp NULL DEFAULT current_timestamp(),
  `updation_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`id`, `amount`, `order_id`, `product_id`, `creation_date`, `updation_date`) VALUES
(29, 400, 16, 10, '2023-08-02 13:32:27', '2023-08-02 13:32:27'),
(30, 100, 17, 1, '2023-08-02 13:43:36', '2023-08-02 13:43:36'),
(31, 400, 17, 10, '2023-08-02 13:43:36', '2023-08-02 13:43:36'),
(33, 100, 18, 1, '2023-09-11 11:46:46', '2023-09-11 11:46:46'),
(34, 400, 21, 10, '2023-09-18 10:53:04', '2023-09-18 10:53:04'),
(36, 100, 22, 1, '2023-09-23 14:57:14', '2023-09-23 14:57:14'),
(37, 200, 22, 2, '2023-09-23 14:57:14', '2023-09-23 14:57:14'),
(38, 100, 23, 1, '2023-10-04 11:13:13', '2023-10-04 11:13:13'),
(39, 200, 23, 2, '2023-10-04 11:13:13', '2023-10-04 11:13:13'),
(40, 200, 25, 2, '2023-11-24 06:23:25', '2023-11-24 06:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` double(11,2) NOT NULL,
  `quantity` int(3) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updation_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `quantity`, `image`, `creation_date`, `updation_date`) VALUES
(1, 1, 'Đồng hồ', 'Book 01 description', 100.00, 2, '../view/images/1.jpg', '2023-10-13 03:56:31', '2023-07-21 06:57:27'),
(2, 1, 'Laptop', 'Book 02 description', 200.00, 102, '../view/images/2.gif', '2023-10-13 03:56:41', '2023-07-21 06:57:27'),
(10, 2, 'Nón', 'Glasses 01 description', 400.00, 10, '../view/images/5.jpg', '2023-10-13 03:56:52', '0000-00-00 00:00:00'),
(11, 2, 'Vali', 'Glasses 03 description', 450.00, 10, '../view/images/6.jpg', '2023-10-13 03:57:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `shipping_city` varchar(50) DEFAULT NULL,
  `billing_address` varchar(255) NOT NULL,
  `billing_city` varchar(50) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `full_name`, `phone`, `shipping_address`, `shipping_city`, `billing_address`, `billing_city`, `register_date`, `updation_date`, `is_admin`) VALUES
(1, 'hnpsolution@gmail.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Phuong Nguyen Le avc', '0987665431', '123/3B THC34', 'HCM City222', '123/3B THC34', '123/3B THC34', '2023-10-13 03:55:56', '2023-07-25 13:15:11', 1),
(4, 'phuongnguyen@gmail.com', 'phuongnguyen', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyen Phuong', '0987654332', NULL, NULL, '123/3B', 'HCMC', '2023-10-04 11:07:33', '0000-00-00 00:00:00', 1),
(5, 'email@aa.com', 'username', 'password', 'full_name', '123456789', 'shipping_address', 'shipping_city', 'billing_address', 'billing_city', '2023-09-27 10:01:54', '0000-00-00 00:00:00', 0),
(6, 'lephuong@gmail.com', 'lephuong', '123456', 'Nguyễn Lê Phương', '0987654321', '123/3B THC34', 'HCMC', '123/3B THC34', 'HCMC', '2023-09-27 10:20:19', '2023-09-27 10:20:19', 0),
(7, 'nguyenlephuong@gmail.com', 'nguyenlephuong', 'e10adc3949ba59abbe56e057f20f883e', 'Phuong Nguyen Le', '0986265254', '123/3B THC34', 'HCMC', '123/3B THC34', 'HCMC', '2023-09-27 10:23:30', '2023-09-27 10:23:30', 0),
(8, 'email@aa.com', 'username', 'password sdsds', 'full_namesdssd', '123', 'shipping_addresssd', 'shipping_city', 'billing_addresssds', 'billing_city', '2023-10-11 12:47:02', '2023-09-27 12:05:54', 0),
(9, 'phuongnguyen@gmail.com', 'phuongnguyen', 'e10adc3949ba59abbe56e057f20f883e', '123456', '0986265254', '123/3B THC34', 'HCMC', '123/3B THC34', '123/3B THC34', '2023-10-04 11:06:55', '2023-09-27 12:19:58', 1),
(10, 'lephuong1979@gmail.com', 'lephuong1979', '96e79218965eb72c92a549dd5a330112', 'Phuong Nguyen Le', '0986265254', '123/3B THC34', 'HCMC', '123/3B THC34', 'HCMC', '2023-10-04 11:08:53', '2023-10-04 11:08:53', 0),
(11, 'admin@gmail.com', 'user01', 'e10adc3949ba59abbe56e057f20f883e', 'Phuong Nguyen Le', '0986265254', NULL, NULL, '123/3B THC34', 'HCMC', '2023-11-07 06:25:23', '2023-11-07 06:25:23', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comments_user` (`user_id`),
  ADD KEY `fk_comments_products` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`),
  ADD KEY `transactions_product_id_foreign` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products_category` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_comments_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `products_product_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `orders_detail_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_detail_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
