-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 06:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `security_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `User_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `password`, `User_type`) VALUES
(38, 'Ahmmed.abdelalim', 'VHRFL3F1Z3o5K0J2Qm5DdEtrRkE4QT09OjoT7bjWMuoKdRmFZb3oxsYo', 'student'),
(39, 'ken ken', 'bDlXREVCQmhjcHdWelI0ZXZ2Q1RTQT09OjocRovYMfdXjYoEd/ERWwJ8', 'student'),
(40, 'pepeo', 'RFhrazZNd2p6NHJBS0pHK0tDaWhiQT09Ojr61tXuNDizpc5ElT9t2JHX', 'admin'),
(41, 'reham', 'dDJvMVZ1dGUrZXRod2I3WnptWHAxZz09OjrhZMrF03THxJZzCovhd44u', 'student'),
(43, 'hoda', 'WS9KQUxUM2MxYVpJelZBK1J5enZtQT09Ojp7U8mTQGR38voZYU/RZtMm', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `subject_table`
--

CREATE TABLE `subject_table` (
  `day` text NOT NULL,
  `date` text NOT NULL,
  `subject` text NOT NULL,
  `doctor` text NOT NULL,
  `hours` text NOT NULL,
  `id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_table`
--
ALTER TABLE `subject_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `subject_table`
--
ALTER TABLE `subject_table`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
