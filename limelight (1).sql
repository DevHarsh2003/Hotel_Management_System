-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 12:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `limelight`
--

-- --------------------------------------------------------

--
-- Table structure for table `deluxe`
--

CREATE TABLE `deluxe` (
  `email` varchar(50) NOT NULL,
  `roomno` varchar(50) NOT NULL,
  `holder_name` varchar(50) NOT NULL,
  `holder_mobile` varchar(50) NOT NULL,
  `holder_address` varchar(100) NOT NULL,
  `child` varchar(20) NOT NULL,
  `adult` varchar(20) NOT NULL,
  `in_date` varchar(50) NOT NULL,
  `out_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deluxe`
--

INSERT INTO `deluxe` (`email`, `roomno`, `holder_name`, `holder_mobile`, `holder_address`, `child`, `adult`, `in_date`, `out_date`) VALUES
('jack123@gmail.com', '402', 'Jack', '1234567899', 'Xyz', '\r\nST[child]', '2', '2024-04-19', '2024-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `executive`
--

CREATE TABLE `executive` (
  `email` varchar(50) NOT NULL,
  `roomno` varchar(50) NOT NULL,
  `holder_name` varchar(50) NOT NULL,
  `holder_mobile` varchar(50) NOT NULL,
  `holder_address` varchar(100) NOT NULL,
  `child` varchar(20) NOT NULL,
  `adult` varchar(20) NOT NULL,
  `in_date` varchar(50) NOT NULL,
  `out_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `joindate` varchar(20) NOT NULL,
  `resigndate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `mobile`, `dept`, `salary`, `joindate`, `resigndate`) VALUES
('1', 'Athma', '987654321', 'Kitchen', '400000', '2022-02-09', '');

-- --------------------------------------------------------

--
-- Table structure for table `standard`
--

CREATE TABLE `standard` (
  `email` varchar(50) NOT NULL,
  `roomno` varchar(50) NOT NULL,
  `holder_name` varchar(50) NOT NULL,
  `holder_mobile` varchar(50) NOT NULL,
  `holder_address` varchar(100) NOT NULL,
  `child` varchar(20) NOT NULL,
  `adult` varchar(20) NOT NULL,
  `in_date` varchar(50) NOT NULL,
  `out_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suite`
--

CREATE TABLE `suite` (
  `email` varchar(50) NOT NULL,
  `roomno` varchar(50) NOT NULL,
  `holder_name` varchar(50) NOT NULL,
  `holder_mobile` varchar(50) NOT NULL,
  `holder_address` varchar(100) NOT NULL,
  `child` varchar(20) NOT NULL,
  `adult` varchar(20) NOT NULL,
  `in_date` varchar(50) NOT NULL,
  `out_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `phno`, `email`, `password`) VALUES
('Jack', '1234567899', 'jack123@gmail.com', 'jack123'),
('', '', 'admin1234@gmail.com', '1234'),
('jayanth', '7095069355', 'jayanth123@gmail.com', '15378300'),
('fouz', '1234567890', 'fouz@gmail.com', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
