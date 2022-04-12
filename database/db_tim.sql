-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 10:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virex`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_tim`
--

CREATE TABLE `db_tim` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_tim` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `materi` varchar(255) DEFAULT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `video_demo` varchar(255) DEFAULT NULL,
  `video_profile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_tim`
--

INSERT INTO `db_tim` (`id`, `email`, `nama_tim`, `role`, `password`, `judul`, `materi`, `poster`, `video_demo`, `video_profile`) VALUES
(1, 'tes2@aaa.com', 'Tes', 'Ekshibitor', '$2y$10$bs94X0UE33IpztbVNEwMsO4pJ4p4y9bAXE5ix4hSMX.ECOWoyvbuG', NULL, 'materi - tes2@aaa.com.pdf', 'poster - tes2@aaa.com.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_tim`
--
ALTER TABLE `db_tim`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_tim`
--
ALTER TABLE `db_tim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
