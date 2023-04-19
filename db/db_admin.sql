-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 03:54 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `antiques360`
--

CREATE TABLE `antiques360` (
  `Antiques360` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `drescription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antiques360`
--

INSERT INTO `antiques360` (`Antiques360`, `name`, `url`, `drescription`) VALUES
(1, 'Test', '16598983951659557404kris.jpg', 'test'),
(2, 'Test', '16598984221659893453alex-bdnr.jpg', 'test'),
(3, 'Test', '16598984451659893299timothy.jpg', 'three');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `email`, `password`, `img`) VALUES
(1, '6240011040', '6240011040@psu.ac.th', '698d51a19d8a121ce581499d7b701668', 'kris.jpg'),
(7, '6240011010', '6240011010@psu.ac.th', '698d51a19d8a121ce581499d7b701668', '');

-- --------------------------------------------------------

--
-- Table structure for table `touristattractions360`
--

CREATE TABLE `touristattractions360` (
  `Tourist360_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `touristattractions360`
--

INSERT INTO `touristattractions360` (`Tourist360_id`, `name`, `url`, `description`) VALUES
(1, 'เจดีย์วัดเขาสุวรรณประดิษฐ์', '1.jpg', 'ด้านหน้าของเจดีย์วัดเขาสุวรรณประดิษฐ์'),
(2, 'เจดีย์วัดเขาสุวรรณประดิษฐ์', '2.jpg', 'ด้านหลังของเจดีย์วัดเขาสุวรรณประดิษฐ์'),
(3, 'เจดีย์วัดเขาสุวรรณประดิษฐ์', '3.jpg', 'ด้านในของเจดีย์วัดเขาสุวรรณประดิษฐ์'),
(4, 'จุดชมวิววัดเขาสุวรรณประดิษฐ์', '4.jpg', 'จุดชมวิวอยู่บนยอดเขาสูงสุดของวัดเขาสุวรรณประดิษฐ์'),
(5, 'เกาะแรต', '5.jpg', ' เป็นเกาะขนาดจิ๋วที่มีพื้นที่เพียงน้อยนิด ตั้งอยู่ห่างจากชายฝั่งบ้านแหลมลื่น');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antiques360`
--
ALTER TABLE `antiques360`
  ADD PRIMARY KEY (`Antiques360`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `touristattractions360`
--
ALTER TABLE `touristattractions360`
  ADD PRIMARY KEY (`Tourist360_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antiques360`
--
ALTER TABLE `antiques360`
  MODIFY `Antiques360` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `touristattractions360`
--
ALTER TABLE `touristattractions360`
  MODIFY `Tourist360_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
