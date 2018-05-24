-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 24, 2018 at 03:34 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Articles`
--

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `home_address` text NOT NULL,
  `description` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `gender` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `home_address`, `description`, `password`, `username`, `gender`) VALUES
(3, 'Philip', 'Olulu', 'philipolulu@yahoo.com', '07064998471', '2 Nworgu Avenue(Ozoeto Lane) Rumuagholu, Rumuokoro', 'Awesome', '0', '0', '0'),
(4, 'Philip', 'Olulu', 'philipolulu@yahoo.com', '07064998471', '2 Nworgu Avenue(Ozoeto Lane) Rumuagholu, Rumuokoro', 'awesome me\r\n', '', '', ''),
(5, 'Philip', 'Olulu', 'philipolulu@yahoo.com', '07064998471', '2 Nworgu Avenue(Ozoeto Lane) Rumuagholu, Rumuokoro', 'ewqerwgerhtrtr', '040b7cf4a55014e185813e0644502ea9', 'philipolulu', 'Nothing'),
(6, 'Philip', 'Olulu', 'josh@gmail.com', '', '2 Nworgu Avenue(Ozoeto Lane) Rumuagholu, Rumuokoro', 'gosh', 'd4579b2688d675235f402f6b4b43bcbf', 'emroking', 'Nothing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
