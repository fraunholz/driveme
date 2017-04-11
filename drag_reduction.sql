-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2017 at 11:43 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `platooning_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `drag_reduction`
--

CREATE TABLE `drag_reduction` (
  `id` int(11) NOT NULL,
  `distance` int(11) NOT NULL,
  `reduction` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drag_reduction`
--

INSERT INTO `drag_reduction` (`id`, `distance`, `reduction`) VALUES
(1, 0, 0.65),
(2, 1, 0.6),
(3, 2, 0.5),
(4, 3, 0.48),
(5, 4, 0.46),
(6, 5, 0.44),
(7, 6, 0.42),
(8, 7, 0.42),
(9, 8, 0.41),
(10, 9, 0.41),
(11, 10, 0.4),
(12, 11, 0.39),
(13, 12, 0.38),
(14, 13, 0.37),
(15, 14, 0.37),
(16, 15, 0.36),
(17, 16, 0.35),
(18, 17, 0.34),
(19, 18, 0.33),
(20, 19, 0.33),
(21, 20, 0.32),
(22, 21, 0.31),
(23, 22, 0.31),
(24, 23, 0.3),
(25, 24, 0.29),
(26, 25, 0.29),
(27, 26, 0.29),
(28, 27, 0.29),
(29, 28, 0.29),
(30, 29, 0.28),
(31, 30, 0.28),
(32, 31, 0.28),
(33, 32, 0.27),
(34, 33, 0.26),
(35, 34, 0.26),
(36, 35, 0.25),
(37, 36, 0.25),
(38, 37, 0.24),
(39, 38, 0.24),
(40, 39, 0.24),
(41, 40, 0.23),
(42, 41, 0.23),
(43, 42, 0.23),
(44, 43, 0.23),
(45, 44, 0.22),
(46, 45, 0.22),
(47, 46, 0.22),
(48, 47, 0.22),
(49, 48, 0.21),
(50, 49, 0.21),
(51, 50, 0.21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drag_reduction`
--
ALTER TABLE `drag_reduction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drag_reduction`
--
ALTER TABLE `drag_reduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
