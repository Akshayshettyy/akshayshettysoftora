-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 02:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodiehood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uemail` varchar(50) CHARACTER SET latin1 NOT NULL,
  `upassword` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uemail`, `upassword`) VALUES
(1, 'admin@gmail.com', 'admin111');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `food_id` int(10) NOT NULL,
  `food_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `food_quantity` int(10) NOT NULL,
  `food_price` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `total_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`) VALUES
(1, 'Chinese Food'),
(2, 'Pizza'),
(3, 'Desserts');

-- --------------------------------------------------------

--
-- Table structure for table `menuinfo`
--

CREATE TABLE `menuinfo` (
  `id` int(11) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `fname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menuinfo`
--

INSERT INTO `menuinfo` (`id`, `cat_id`, `fname`, `price`) VALUES
(1, 1, 'Dumplings', 250),
(2, 1, 'Chow Mein', 200),
(3, 1, 'Yangzhou Fried Rice', 220),
(4, 1, 'Thai dry baby corn', 200),
(5, 1, 'Mapo Tofu', 280),
(6, 2, 'Margherita', 250),
(7, 2, 'Veg Extravaganza', 235),
(8, 2, 'Cheese N Corn', 180),
(9, 2, 'Farm House', 260),
(10, 2, 'Peppy Paneer', 250),
(11, 3, 'Choco lava cake', 100),
(12, 3, 'Tres leches cake', 210),
(13, 3, 'Red velvet cupcakes', 120),
(14, 3, 'Mint Chocolate Chip', 150),
(15, 3, 'Butter Croissant ', 100);

-- --------------------------------------------------------

--
-- Table structure for table `orderinfo`
--

CREATE TABLE `orderinfo` (
  `id` int(11) NOT NULL,
  `order_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `user_id` varchar(10) CHARACTER SET latin1 NOT NULL,
  `food_id` varchar(10) CHARACTER SET latin1 NOT NULL,
  `food_quantity` int(10) NOT NULL,
  `user_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `user_phone` varchar(50) CHARACTER SET latin1 NOT NULL,
  `user_address` varchar(50) CHARACTER SET latin1 NOT NULL,
  `timestamp` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderinfo`
--

INSERT INTO `orderinfo` (`id`, `order_id`, `user_id`, `food_id`, `food_quantity`, `user_name`, `user_phone`, `user_address`, `timestamp`) VALUES
(12, 'FHQRT350092', '3', '11', 1, 'Jayaram', '9086754321', 'Bangalore', '16:07:2021 11:03:13pm'),
(13, 'FHQRT764774', '4', '5', 1, 'akshay', '8967543210', 'bangalore', '16:07:2021 11:05:12pm'),
(15, 'FHQRT499524', '7', '1', 1, 'akshay', '9204598651', 'bangalore', '17:07:2021 03:55:22pm'),
(16, 'FHQRT499524', '7', '8', 1, 'akshay', '9204598651', 'bangalore', '17:07:2021 03:55:22pm'),
(17, 'FHQRT499524', '7', '12', 2, 'akshay', '9204598651', 'bangalore', '17:07:2021 03:55:22pm'),
(18, 'FHQRT370391', '8', '5', 1, 'Jayaram', '9245630091', 'mysore', '17:07:2021 03:56:37pm'),
(19, 'FHQRT370391', '8', '9', 2, 'Jayaram', '9245630091', 'mysore', '17:07:2021 03:56:37pm'),
(20, 'FHQRT826871', '9', '4', 2, 'gayathri', '9234567980', 'bangalore', '17:07:2021 03:57:50pm'),
(21, 'FHQRT826871', '9', '14', 1, 'gayathri', '9234567980', 'bangalore', '17:07:2021 03:57:50pm'),
(22, 'FHQRT923314', '10', '3', 1, 'ananya', '8645332180', 'mysore', '17:07:2021 03:59:47pm'),
(23, 'FHQRT923314', '10', '10', 1, 'ananya', '8645332180', 'mysore', '17:07:2021 03:59:47pm'),
(24, 'FHQRT923314', '10', '13', 1, 'ananya', '8645332180', 'mysore', '17:07:2021 03:59:47pm'),
(25, 'FHQRT644285', '11', '3', 1, 'suhas', '9856432451', 'mangalore', '17:07:2021 04:01:29pm'),
(26, 'FHQRT644285', '11', '15', 2, 'suhas', '9856432451', 'mangalore', '17:07:2021 04:01:29pm'),
(27, 'FHQRT644285', '11', '4', 1, 'suhas', '9856432451', 'mangalore', '17:07:2021 04:01:29pm'),
(28, 'FHQRT253350', '12', '1', 2, 'sukesh', '9344567981', 'bangalore', '17:07:2021 05:28:29pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 NOT NULL,
  `password` varchar(200) CHARACTER SET latin1 NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `address` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `phone`, `address`) VALUES
(7, 'akshay@gmail.com', 'akshay1234', 'akshay', '9204598651', 'bangalore'),
(8, 'jayaram@gmail.com', 'jayaram1234', 'Jayaram', '9245630091', 'mysore'),
(9, 'gayathri@gmail.com', 'gayathri', 'gayathri', '9234567980', 'bangalore'),
(10, 'ananya@gmail.com', 'ananya12', 'ananya', '8645332180', 'mysore'),
(11, 'suhas@gmail.com', 'suhas1234', 'suhas', '9856432451', 'mangalore'),
(12, 'sukesh@gmail.com', 'sukesh1234', 'sukesh', '9344567981', 'bangalore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuinfo`
--
ALTER TABLE `menuinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderinfo`
--
ALTER TABLE `orderinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderinfo`
--
ALTER TABLE `orderinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
