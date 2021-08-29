-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 03:57 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhom_4`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Vật lý'),
(2, 'Giải tích'),
(3, 'Hóa học'),
(4, 'Tin học'),
(5, 'Lịch sử');

-- --------------------------------------------------------

--
-- Table structure for table `muon_sach`
--

CREATE TABLE `muon_sach` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `muon_sach`
--

INSERT INTO `muon_sach` (`id`, `student_id`, `date`, `price`) VALUES
(30, 1, '2021-08-24', 0),
(31, 1, '2021-08-26', 0),
(32, 1, '2021-08-26', 0),
(33, 1, '2021-08-23', 0),
(34, 2, '2021-08-27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(29, 30, 4, 2),
(30, 30, 3, 1),
(33, 30, 4, 2),
(34, 30, 3, 1),
(35, 31, 4, 2),
(36, 32, 3, 1),
(37, 33, 4, 2),
(39, 34, 3, 2),
(40, 34, 2, 2),
(41, 34, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `remaining` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `bookCode` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `seriCode` varchar(255) NOT NULL,
  `public` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `remaining`, `author`, `bookCode`, `price`, `seriCode`, `public`) VALUES
(1, 2, 'Giải tích 1', 100, 'Vũ Đức Công', 'GT1', 50000, '0011111', '2021-02-09'),
(2, 3, 'Hóa điện tử 1', 96, 'Nguyễn Thị Châm', 'HH', 50000, '00122222', '2021-08-23'),
(3, 4, 'C++', 98, 'Nguyễn Thị Châm', 'TH1', 10000, '0011111444', '2021-04-30'),
(4, 4, 'Tin học', 95, 'Hiệp', 'TH01', 100000, '2020212', '2021-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `studentCode` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `studentClass` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `dateOfBookkingBook` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `studentName`, `studentCode`, `gender`, `studentClass`, `phoneNumber`, `dateOfBookkingBook`) VALUES
(1, 'Trần Thành Công', '2018603485', 'Nam', 'KTPM02', '0398171495', '2021-08-04'),
(2, 'Vũ Đức Công', '2018603485', 'Nam', 'KTPM02', '0979023009', '2021-08-01'),
(3, 'Nguyễn Thị Châm', '2018605494', 'Nữ', 'KTPM3', '05657345454', '2021-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `tra_sach`
--

CREATE TABLE `tra_sach` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tra_sach`
--

INSERT INTO `tra_sach` (`id`, `product_name`, `product_price`, `quantity`, `order_date`, `student_name`, `total_price`) VALUES
(11, 'Giải tích 1', 50000, 1, '2021-08-26', 'Trần Thành Công', 50000),
(12, 'Giải tích 1', 50000, 1, '2021-08-26', 'Trần Thành Công', 50000),
(13, 'Hóa điện tử 1', 50000, 1, '2021-08-26', 'Trần Thành Công', 50000),
(14, 'C++', 10000, 1, '2021-08-26', 'Trần Thành Công', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(8, 'tranthanhcongktpm2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'vuduccong@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(15, 'nguyenthicham@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muon_sach`
--
ALTER TABLE `muon_sach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tra_sach`
--
ALTER TABLE `tra_sach`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `muon_sach`
--
ALTER TABLE `muon_sach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tra_sach`
--
ALTER TABLE `tra_sach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
