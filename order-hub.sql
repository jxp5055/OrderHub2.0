-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 03:40 AM
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
-- Database: `order-hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `online_orders`
--

CREATE TABLE `online_orders` (
  `id` int(15) UNSIGNED NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `channel` varchar(20) NOT NULL,
  `order_type` varchar(20) NOT NULL,
  `source` varchar(20) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `state` varchar(2) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `online_orders`
--

INSERT INTO `online_orders` (`id`, `customer_name`, `brand`, `channel`, `order_type`, `source`, `order_date`, `status`, `customer_contact`, `address`, `zip`, `state`, `email`) VALUES
(1000000, 'David Rose', 'TB', 'EC', 'SFS', '261', '2022-04-17 20:41:39', 'Completed', '571-258-999', '11 Rose Street', '78984', 'MI', 'rosare@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `remote_orders`
--

CREATE TABLE `remote_orders` (
  `id` int(15) UNSIGNED NOT NULL,
  `order_date` datetime(5) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `state` varchar(2) NOT NULL,
  `email` varchar(100) NOT NULL,
  `customer_contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `remote_orders`
--

INSERT INTO `remote_orders` (`id`, `order_date`, `customer_name`, `order_status`, `type`, `address`, `zip`, `state`, `email`, `customer_contact`) VALUES
(100005, '2022-04-17 17:57:57.00000', 'David Rosse', 'Created', 'Order', '1432 Sate Wayee', '11111', 'SA', 'General@aol.ccorn', '3434343443'),
(100006, '2022-04-06 17:58:39.00000', 'Bruce Wayne', 'Complete', 'Order', 'Batcave Island', '88888', 'WA', 'BatDude@bat.com', '8569874588'),
(100007, '2022-04-11 18:58:47.00000', 'Hank Hill', 'Created', 'Order', '4356 Hill Road', '23567', 'TX', 'hank@hill.com', '4587489658');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `email`, `username`, `password`) VALUES
(10, 'matt@matt.com', 'matt', '1a1dc91c907325c69271ddf0c944bc72'),
(11, 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `online_orders`
--
ALTER TABLE `online_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remote_orders`
--
ALTER TABLE `remote_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `online_orders`
--
ALTER TABLE `online_orders`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000002;

--
-- AUTO_INCREMENT for table `remote_orders`
--
ALTER TABLE `remote_orders`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100008;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
