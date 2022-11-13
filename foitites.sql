-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 07:04 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foitites`
--

-- --------------------------------------------------------

--
-- Table structure for table `foitites`
--

CREATE TABLE `foitites` (
  `am` int(10) NOT NULL,
  `eponimo` varchar(30) NOT NULL,
  `onoma` varchar(30) NOT NULL,
  `eksamino` varchar(1) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foitites`
--

INSERT INTO `foitites` (`am`, `eponimo`, `onoma`, `eksamino`, `email`) VALUES
(76614029, 'Μαυρουδής', 'Παναγιώτης', 'Η', 'pspartanians@yahoo.gr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foitites`
--
ALTER TABLE `foitites`
  ADD PRIMARY KEY (`am`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
