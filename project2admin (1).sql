-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 09:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`id`, `username`, `email`, `password`, `dob`, `contact`, `address`, `gender`, `createdat`) VALUES
(1, 'Aman', 'aman@gmail.com', '$2y$10$7QTVW2P2UWLvSO4Aytsha.n2KuFEYiMJXf4UdpabhTzIYMuWb6Wba', '15-01-1999', 123456789, 'fjhfhdhffhdhjhhh', 'Male', '2021-03-28 01:53:44'),
(2, 'admin', 'admin@gmail.com', '$2y$10$VGn/O39TzRaoR1szug2SGu2aibc1GeuOiFTOaShQ658FWnJsqbNhO', '15-01-1999', 1234567890, 'fjhfhdhffhdhjhhh', 'Male', '2021-04-01 01:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `delguy`
--

CREATE TABLE `delguy` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `age` int(5) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delguy`
--

INSERT INTO `delguy` (`id`, `username`, `age`, `address`, `email`, `contact`, `createdat`) VALUES
(1, 'Aman', 20, 'Chembur', 'aman@gmail.com', 1234567890, '2021-05-06 10:49:58'),
(2, 'Qwerty', 25, 'ksjfhsfdjfdjhdhj', 'jhshsdhjdhjh@gmail.com', 1234567890, '2021-05-06 10:50:37'),
(3, 'Rohan', 45, 'iufhwakfsffpjdpdjaldadamada', 'Rohan@gmail.com', 2147483647, '2021-05-08 09:27:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delguy`
--
ALTER TABLE `delguy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `delguy`
--
ALTER TABLE `delguy`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
