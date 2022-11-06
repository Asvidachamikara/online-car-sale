-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 08:37 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carsaledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `memberid` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `nicnumber` varchar(12) DEFAULT NULL,
  `hometown` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`memberid`, `firstname`, `lastname`, `nicnumber`, `hometown`, `email`, `password`, `reg_date`) VALUES
(1, 'asvida', 'chamikara', '997536790', 'kandy', 'asvida@gmail.com', '123', '2021-06-20 07:17:16'),
(4, 'Ashen', 'Maleesha', '998765432', 'Gampaha', 'ashen@gmail.com', '1234', '2021-06-20 18:33:13'),
(5, 'Kasun', 'Madusanka', '992876459', 'Kadawatha', 'kasun@gmail.com', 'test', '2021-06-21 06:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `sellcars`
--

CREATE TABLE `sellcars` (
  `id` int(6) UNSIGNED NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `price` varchar(15) DEFAULT NULL,
  `description` varchar(30) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellcars`
--

INSERT INTO `sellcars` (`id`, `brand`, `model`, `price`, `description`, `image`, `add_date`) VALUES
(3, 'Toyota', 'Premio', '7775000', 'Brand New', 'toyota.jpg', '2021-06-20 07:29:07'),
(4, 'Honda', 'Civic', '6875000', 'Used', 'civic.jpg', '2021-06-20 07:39:45'),
(5, 'Suzuki', 'Wagon R', '3500000', 'Brand New', 'images.jpg', '2021-06-20 07:42:11'),
(6, 'Toyota', 'Premio', '8000000', 'Brand New', 'Premio-color-DarkRedMicaMetallic.jpg', '2021-06-20 07:44:20'),
(7, 'Toyota', 'Prius', '4000000', 'Used', 'download.jpg', '2021-06-20 09:35:41'),
(10, 'Micro', 'Panda', '2000000', 'Brand New', 'download (1).jpg', '2021-06-20 17:20:37'),
(11, 'Toyota', 'Prius', '4500000', 'Used', 'download.jpg', '2021-06-20 18:35:36'),
(13, 'Honda', 'Civic', '4500000', 'Used', 'civic.jpg', '2021-06-21 06:34:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`memberid`);

--
-- Indexes for table `sellcars`
--
ALTER TABLE `sellcars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `memberid` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sellcars`
--
ALTER TABLE `sellcars`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
