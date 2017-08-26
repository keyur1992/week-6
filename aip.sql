-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2017 at 03:49 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `aip`
--

CREATE TABLE `aip` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `release_date` date NOT NULL,
  `duration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `genre` text NOT NULL,
  `synopsis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aip`
--

INSERT INTO `aip` (`id`, `title`, `release_date`, `duration`, `genre`, `synopsis`) VALUES
(1, 'People Places Things', '2016-08-15', '2017-08-13 13:48:25', 'Comedy', 'Will Henry is a newly single graphic novelist balancing parenting hisyoung twin daughters and a classroom full of students while exploringand navigating the rich complexities of new love and letting go of thewoman who left him.'),
(2, 'dxffd', '2017-08-20', '0000-00-00 00:00:00', 'xcvcxv', 'vxc xcvxcxcv'),
(4, 'dxffd', '2017-08-20', '0000-00-00 00:00:00', 'xcvcxv', 'vxc xcvxcxcv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aip`
--
ALTER TABLE `aip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aip`
--
ALTER TABLE `aip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
