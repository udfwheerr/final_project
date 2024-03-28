-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 03:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meditation`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `ID` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`ID`, `first_name`, `last_name`, `country`, `email`, `phone_number`) VALUES
(1, 'Patel', 'Dhruti', '0', 'heer22205@gmail.com', '0751536334'),
(2, 'Patel', 'Dhruti', 'Uganda', 'heer22205@gmail.com', '0751536334'),
(3, 'Patel', 'Dhruti', 'Uganda', 'heer22205@gmail.com', '0751536334'),
(4, 'Patel', 'Dhruti', 'Uganda', 'heer22205@gmail.com', '0751536334'),
(5, 'Patel', 'Dhruti', 'Uganda', 'heer22205@gmail.com', '0751536334'),
(6, 'Heer', 'Patel', 'Uganda', 'heerpatel2024@gmail.com', '0752613842'),
(7, 'Heer', 'Patel', 'Uganda', 'heerpatel2024@gmail.com', '0752613842'),
(8, 'Heer', 'Patel', 'Uganda', 'heerpatel2024@gmail.com', '0752613842'),
(9, 'Heer', 'Patel', 'Uganda', 'heerpatel2024@gmail.com', '0752613842'),
(10, 'john', 'smith', 'Uganda', 'heerpatel2024@gmail.com', '0752613842'),
(11, 'Heer', 'Patel', 'Uganda', 'heerpatel2024@gmail.com', '0752613842'),
(12, 'john', 'smith', 'Uganda', 'heerpatel2024@gmail.com', '0752613842'),
(13, 'john', 'smith', 'Uganda', 'heerpatel2024@gmail.com', '0752613842'),
(14, 'john', 'smith', 'Uganda', 'heerpatel2024@gmail.com', '0752613842'),
(15, 'john', 'smith', 'Uganda', 'heerpatel2024@gmail.com', '0752613842'),
(16, 'john', 'smit', 'Uganda', 'heerpatel2024@gmail.com', '0752613842'),
(17, 'Heer', 'smith', 'Uganda', 'heerpatel2024@gmail.com', '498765432345'),
(18, 'Heer', 'Patel', 'Uganda', 'heerpatel2024@gmail.com', '0752613842'),
(19, 'Heer', 'smit', 'Uganda', 'heerpatel2024@gmail.com', '0752613842'),
(20, 'Heer', 'smith', 'Uganda', 'heerpatel2024@gmail.com', '0752613842'),
(21, 'Heer', 'smith', 'Uganda', 'heerpatel2024@gmail.com', '752613842'),
(22, 'Heer', 'Patel', 'Uganda', 'heerpatel2024@gmail.com', '752613842'),
(23, 'Heer', 'Patel', 'Uganda', 'heerpatel2024@gmail.com', '752613842'),
(24, 'Heer', 'Patel', 'Uganda', 'heerpatel2024@gmail.com', '752613842'),
(25, 'john', 'smith', 'Uganda', 'heerpatel2024@gmail.com', '752613842'),
(26, 'john', 'smith', 'Uganda', 'heerpatel2024@gmail.com', '752613842');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
