-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 11:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avantrac_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_desc` varchar(255) NOT NULL,
  `brand_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_desc`, `brand_image`) VALUES
(1, 'asdasd', 'asdasd', '1523-logo.jpg'),
(2, 'CAT', 'cat is waht', '1523-logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_truck`
--

CREATE TABLE `tbl_truck` (
  `truck_id` int(11) NOT NULL,
  `truck_name` varchar(255) NOT NULL,
  `truck_description` varchar(255) NOT NULL,
  `truck_features` varchar(225) NOT NULL,
  `truck_brochure` varchar(255) NOT NULL,
  `truck_image` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_truck`
--

INSERT INTO `tbl_truck` (`truck_id`, `truck_name`, `truck_description`, `truck_features`, `truck_brochure`, `truck_image`, `brand_id`, `type_id`) VALUES
(2, 'qweqw', 'qweqw', 'eqweq,qweqwe,qweqwe,qweqweqw', 'Red-Cat-245hp-4X2-Dumptruck-WP6.245E40.pdf', '5495-2.jpg', 1, 4),
(3, 'asdasd', 'asdasd', 'asdas,asdasd,qweqw', '6491-150-Crawler-Excavator-1.pdf', '5495-2.jpg', 2, 5),
(4, '12312AS', 'Asdas', 'asd', '5693-150-Crawler-Excavator-1.pdf', '1494-4.jpg', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `type_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `type_name`, `type_image`) VALUES
(4, 'excavator', '8234-1.jpg'),
(5, 'Dump Truck', '4719-2.jpg'),
(6, 'Bulldozer', '5130-4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_truck`
--
ALTER TABLE `tbl_truck`
  ADD PRIMARY KEY (`truck_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_truck`
--
ALTER TABLE `tbl_truck`
  MODIFY `truck_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_truck`
--
ALTER TABLE `tbl_truck`
  ADD CONSTRAINT `tbl_truck_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `tbl_brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_truck_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `tbl_type` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
