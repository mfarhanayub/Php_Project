-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2023 at 03:31 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoint_tb`
--

CREATE TABLE `appoint_tb` (
  `user_id` int(11) NOT NULL,
  `user_Name` varchar(20) NOT NULL,
  `user_number` varchar(11) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_date` varchar(10) NOT NULL,
  `user_time` varchar(10) NOT NULL,
  `user_service` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `user_area` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoint_tb`
--

INSERT INTO `appoint_tb` (`user_id`, `user_Name`, `user_number`, `user_email`, `user_date`, `user_time`, `user_service`, `user_type`, `user_area`, `user_address`) VALUES
(1, '$name', '$number', '$email', '$date', '$time', '$service', '$select', '$area', '$city'),
(2, 'farhan', '756758', 'f@gmail.com', '2023-08-04', '14:06', '', 'Shop Service', 'gadgv', 'Karachi'),
(3, 'farhan', '756758', 'f@gmail.com', '2023-08-04', '22:52', 'car wash', 'Shop Service', 'gadgv', 'Karachi');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tb`
--

CREATE TABLE `contact_tb` (
  `user_id` int(11) NOT NULL,
  `user_Name` varchar(20) NOT NULL,
  `user_Email` varchar(20) NOT NULL,
  `user_Number` varchar(11) NOT NULL,
  `user_service` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_tb`
--

INSERT INTO `contact_tb` (`user_id`, `user_Name`, `user_Email`, `user_Number`, `user_service`, `message`) VALUES
(1, 'farhan', 'f@gmaial.com', '03412801400', 'cae wash', 'helo how are you'),
(10, 'adnan', 'adnan@gmal.com', '0875874365', 'car wash', 'hello'),
(11, 'farhan', 'f@gmaial.com', '555', 'cae wash', 'hf');

-- --------------------------------------------------------

--
-- Table structure for table `signup_tb`
--

CREATE TABLE `signup_tb` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `conform_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_tb`
--

INSERT INTO `signup_tb` (`user_id`, `first_name`, `user_email`, `user_password`, `conform_password`) VALUES
(11, 'farhan', '', '$2y$10$t2RvTlPKNF094sQv1WB3YenUDHPBBgg5Kt45I.cmArsi1vHuTNLBS', '$2y$10$t2RvTlPKNF094sQv1WB3YenUDHPBBgg5Kt45I.cmArsi1vHuTNLBS'),
(13, 'wajahat', 'w@gmail.com', '$2y$10$YV/NdhklWSALmJAmtQW2xeaZHyfIIyAcHxdavAnKSglE8HvyyoWr6', '$2y$10$YV/NdhklWSALmJAmtQW2xeaZHyfIIyAcHxdavAnKSglE8HvyyoWr6'),
(14, 'shahmeer', 'shah@gmail.com', '$2y$10$AjkVapNmYrtfwfku6e9CveZRnwkKYOMid.XPOrcCAOFDsS0CgP.6u', '$2y$10$AjkVapNmYrtfwfku6e9CveZRnwkKYOMid.XPOrcCAOFDsS0CgP.6u'),
(15, 'ali', 'a@gmail.com', '$2y$10$BYoV0yiJjd6bXBz1D.Y/7u/5ztwJvSOXoO6D5NYKVd5RqhZup2asS', '$2y$10$BYoV0yiJjd6bXBz1D.Y/7u/5ztwJvSOXoO6D5NYKVd5RqhZup2asS'),
(16, 'khan', 'khan@gmail.com', '$2y$10$W1iSujsYKNMffPKUtZV/Jev/aeSNuig3nfTMdOlirtAbRfnqzB8Ha', '$2y$10$W1iSujsYKNMffPKUtZV/Jev/aeSNuig3nfTMdOlirtAbRfnqzB8Ha'),
(21, 'junaid', 'jj@gmail.com', '$2y$10$ZGLxY.uuVkCa/aS1tQ/IguZA9jyt0TIjUCWZdAxp.vW.qSYb0qHou', '$2y$10$ZGLxY.uuVkCa/aS1tQ/IguZA9jyt0TIjUCWZdAxp.vW.qSYb0qHou'),
(22, 'farhan', 'f@gmail.com', '$2y$10$q8tkVo6d6IPX.NcryKEqLuIdlFkL/0fQ6xmWTtYiYohe6QDGf3pKm', '$2y$10$q8tkVo6d6IPX.NcryKEqLuIdlFkL/0fQ6xmWTtYiYohe6QDGf3pKm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoint_tb`
--
ALTER TABLE `appoint_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `contact_tb`
--
ALTER TABLE `contact_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `signup_tb`
--
ALTER TABLE `signup_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoint_tb`
--
ALTER TABLE `appoint_tb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_tb`
--
ALTER TABLE `contact_tb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `signup_tb`
--
ALTER TABLE `signup_tb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
