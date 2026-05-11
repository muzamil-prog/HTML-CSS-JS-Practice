-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2026 at 03:44 PM
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
-- Database: `instructerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `instructer_table`
--

CREATE TABLE `instructer_table` (
  `id` int(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `profession` varchar(80) NOT NULL,
  `courses` varchar(80) NOT NULL,
  `students` varchar(80) NOT NULL,
  `twitter` varchar(80) NOT NULL,
  `facebook` varchar(80) NOT NULL,
  `linkedin` varchar(80) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructer_table`
--

INSERT INTO `instructer_table` (`id`, `name`, `profession`, `courses`, `students`, `twitter`, `facebook`, `linkedin`, `image`) VALUES
(3, 'ali shan', 'appp development', '7', '6', 'https://twitter.com/', 'https://www.facebook.com/', 'https://www.linkedin.com/', 'client03.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instructer_table`
--
ALTER TABLE `instructer_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instructer_table`
--
ALTER TABLE `instructer_table`
  MODIFY `id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
