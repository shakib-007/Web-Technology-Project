-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 12:38 PM
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
-- Database: `managerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(5) NOT NULL,
  `cName` varchar(20) NOT NULL,
  `cEmail` varchar(20) NOT NULL,
  `cNumber` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cName`, `cEmail`, `cNumber`) VALUES
(1, 'hridoy', 'hridoy@gmail.com', '01743917299'),
(2, 'rajib', 'rajib@gmail.com', '01940915737'),
(4, 'jibon', 'jibon@gmail.com', '01940915737'),
(5, 'rahim', 'rahim@gmail.com', '01928783721'),
(6, 'rakib', 'rakib@gmail.com', '01732950515'),
(9, 'samiha', 'samiha@gamil.com', '01812395705');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `price` int(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `price`, `status`) VALUES
(101, 'Single Roo', 2000, 'Not Booked'),
(102, 'Triple Roo', 3000, 'Not Booked'),
(103, 'Deluxe Roo', 5000, 'Not Booked'),
(104, 'Twin', 2500, 'Booked'),
(105, 'Quad', 4000, 'Booked'),
(201, 'Double Roo', 3500, 'Not Booked'),
(202, 'Double Roo', 2222, 'Not Booked');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`) VALUES
(2, 'shakib', 'shakib@gmail.com', 'shakib', '456789@'),
(3, 'fahim', 'fahim@gmail.com', 'fahim', '123456@'),
(4, 'noman', 'noman@gmail.com', 'noman', '23456@'),
(5, 'saiful', 'saiful@gmail.com', 'saiful', '12345@'),
(6, 'fahim', 'fahim@gmail.com', 'fahim', '123456@'),
(7, 'rafiq', 'rafiq@gmail.com', 'rafiq', '1234@'),
(9, 'fahim', 'fahim@gmail.com', 'fahim', '1234567@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
