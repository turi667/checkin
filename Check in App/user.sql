-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 05:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `checkinapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 11
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `active`) VALUES
(1, 'Viktor', 'Sejko', 0),
(2, 'Alban', 'Hoxha', 0),
(3, 'Sara', 'Tota', 0),
(4, 'Arjana', 'Hoxha', 0),
(5, 'Blearta', 'Sejko', 0),
(6, 'Almir', 'Haxhiu', 0),
(7, 'Bora', 'Kejko', 0),
(8, 'Altin', 'Boka', 0),
(9, 'Sara', 'Haxhiu', 0),
(10, 'Arben', 'Sejko', 0),
(11, 'Marsela', 'Sadiku', 0),
(12, 'Arber', 'Hoxha', 0),
(15, 'Denada', 'Gashi', 0),
(16, 'Albin', 'Gashi', 0),
(17, 'Xhilda', 'Basha', 0),
(18, 'Ardit', 'Basha', 0),
(19, 'Altea', 'Noka', 0),
(20, 'Armand', 'Noka', 0),
(21, 'Albana', 'Toska', 0),
(22, 'Ledion', 'Toska', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
