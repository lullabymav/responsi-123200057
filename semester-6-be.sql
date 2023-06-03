-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 02:53 PM
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
-- Database: `semester-6-be`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `user_id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`user_id`, `firstName`, `lastName`, `email`, `pass`) VALUES
(2, 'test', '12', 'test12', '60474c9c10d7142b7508ce7a50acf414'),
(4, 'test', '13', 'test13', '33fc3dbd51a8b38a38b1b85b6a76b42b'),
(5, 'syafira', 'widiyanti', 'syafira@gmail.com', 'd57d8d5422365e4295153b987f907c5e'),
(6, 'test', '14', 'test14', 'b99c94f62fb2a61433c4e44e27406050'),
(7, 'Syafira ', 'Widiyanti', 'syafirawidiyanti11@gmail.com', '55f7e2acab57e1990c57f8233ed6427c'),
(8, 'test', '1', 'test1@gmail.com', '5a105e8b9d40e1329780d62ea2265d8a'),
(9, 'test', '2', 'test2', 'ad0234829205b9033196ba818f7a872b'),
(10, 'test', '3', 'test3', '8ad8757baa8564dc136c1e07507f4a98');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
