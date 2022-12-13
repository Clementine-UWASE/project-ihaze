-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2022 at 04:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ihaze`
--

-- --------------------------------------------------------

--
-- Table structure for table `atmospheric`
--

CREATE TABLE `atmospheric` (
  `Id` int(10) NOT NULL,
  `Atmospheric_Temp(cer)` varchar(10) NOT NULL,
  `Atmospheric_Hum(%)` varchar(10) NOT NULL,
  `Serial_No_Dev` varchar(20) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atmospheric`
--

INSERT INTO `atmospheric` (`Id`, `Atmospheric_Temp(cer)`, `Atmospheric_Hum(%)`, `Serial_No_Dev`, `Time`) VALUES
(1, '27', '77', 'DFY', '2022-11-25 12:51:16'),
(2, '', '', '', '2022-12-13 15:49:22'),
(3, '', '', '', '2022-12-13 15:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `fish_temperature`
--

CREATE TABLE `fish_temperature` (
  `Id` int(10) NOT NULL,
  `Fish_Temperature` varchar(10) NOT NULL,
  `Fish_Humidity` varchar(10) NOT NULL,
  `Serial_temp_device` varchar(20) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fish_temperature`
--

INSERT INTO `fish_temperature` (`Id`, `Fish_Temperature`, `Fish_Humidity`, `Serial_temp_device`, `Time`) VALUES
(1, '29', '61', 'hhg', '2022-11-25 13:03:55'),
(2, '25', '58', 'kkp', '2022-11-25 13:01:51'),
(3, '23', '42', 'jnk', '2022-11-25 12:51:16'),
(4, '', '', '', '2022-12-13 09:52:21'),
(5, '', '', '', '2022-12-13 10:01:24'),
(6, '', '', '', '2022-12-13 10:17:32'),
(7, '', '', '', '2022-12-13 15:42:33'),
(8, '', '', '', '2022-12-13 15:43:25'),
(9, '', '', '', '2022-12-13 15:47:15'),
(10, '', '', '', '2022-12-13 15:49:21'),
(11, '', '', '', '2022-12-13 15:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `mytest`
--

CREATE TABLE `mytest` (
  `id` int(11) NOT NULL,
  `user` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pond_temperature`
--

CREATE TABLE `pond_temperature` (
  `Id` int(10) NOT NULL,
  `Pond_Temperature(cer)` varchar(10) NOT NULL,
  `Pond_Humidity(%)` varchar(10) NOT NULL,
  `Serial_No_dev` varchar(20) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pond_temperature`
--

INSERT INTO `pond_temperature` (`Id`, `Pond_Temperature(cer)`, `Pond_Humidity(%)`, `Serial_No_dev`, `Time`) VALUES
(1, '23', '89', 'njmk', '2022-11-25 12:51:16'),
(2, '', '', '', '2022-12-13 15:47:15'),
(3, '', '', '', '2022-12-13 15:49:21'),
(4, '', '', '', '2022-12-13 15:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `solid`
--

CREATE TABLE `solid` (
  `id` int(11) NOT NULL,
  `tds` varchar(11) NOT NULL,
  `uub` varchar(11) NOT NULL,
  `tds_dev` varchar(40) NOT NULL,
  `uub_dev` varchar(40) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solid`
--

INSERT INTO `solid` (`id`, `tds`, `uub`, `tds_dev`, `uub_dev`, `Time`) VALUES
(1, '32', '78', 'tds_11', 'tbd', '2022-11-25 12:42:33'),
(2, '35', '80', 'tds', 'tbd', '2022-11-25 13:02:57'),
(3, '32', '78', 'tds_11', 'tbd', '2022-11-25 12:51:16'),
(4, '', '', '', '', '2022-12-13 09:52:21'),
(5, '', '', '', '', '2022-12-13 10:17:31'),
(6, '', '', '', '', '2022-12-13 15:42:33'),
(7, '', '', '', '', '2022-12-13 15:43:25'),
(8, '', '', '', '', '2022-12-13 15:47:14'),
(9, '', '', '', '', '2022-12-13 15:49:21'),
(10, '', '', '', '', '2022-12-13 15:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `tds_tub`
--

CREATE TABLE `tds_tub` (
  `id` int(11) NOT NULL,
  `tds` varchar(11) NOT NULL,
  `uub` varchar(11) NOT NULL,
  `tds_dev` varchar(40) NOT NULL,
  `uub_dev` varchar(40) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tds_tub`
--

INSERT INTO `tds_tub` (`id`, `tds`, `uub`, `tds_dev`, `uub_dev`, `Time`) VALUES
(1, '32', '78', 'tds_11', 'tbd', '2022-11-25 12:42:33'),
(2, '35', '80', 'tds', 'tbd', '2022-11-25 13:02:57'),
(3, '32', '78', 'tds_11', 'tbd', '2022-11-25 12:51:16'),
(4, '', '', '', '', '2022-12-13 09:52:21'),
(5, '', '', '', '', '2022-12-13 10:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `water_level`
--

CREATE TABLE `water_level` (
  `Id` int(10) NOT NULL,
  `Pond_Water_level` varchar(20) NOT NULL,
  `Tank_Water_level` varchar(20) NOT NULL,
  `serial_pond_device` varchar(200) NOT NULL,
  `serial_tank_device` varchar(200) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `water_level`
--

INSERT INTO `water_level` (`Id`, `Pond_Water_level`, `Tank_Water_level`, `serial_pond_device`, `serial_tank_device`, `Time`) VALUES
(1, '14', '12', 'kk_07', 'ee_08', '2022-11-25 12:51:16'),
(2, '', '', '', '', '2022-12-13 15:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `weight`
--

CREATE TABLE `weight` (
  `Id` int(11) NOT NULL,
  `Weight` varchar(11) NOT NULL,
  `Serial_No_Dev` varchar(200) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weight`
--

INSERT INTO `weight` (`Id`, `Weight`, `Serial_No_Dev`, `Time`) VALUES
(1, '6', 'rr_098', '2022-11-25 12:51:16'),
(2, '', '', '2022-12-13 15:52:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atmospheric`
--
ALTER TABLE `atmospheric`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fish_temperature`
--
ALTER TABLE `fish_temperature`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `mytest`
--
ALTER TABLE `mytest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pond_temperature`
--
ALTER TABLE `pond_temperature`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `solid`
--
ALTER TABLE `solid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tds_tub`
--
ALTER TABLE `tds_tub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `water_level`
--
ALTER TABLE `water_level`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `weight`
--
ALTER TABLE `weight`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atmospheric`
--
ALTER TABLE `atmospheric`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fish_temperature`
--
ALTER TABLE `fish_temperature`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mytest`
--
ALTER TABLE `mytest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pond_temperature`
--
ALTER TABLE `pond_temperature`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `solid`
--
ALTER TABLE `solid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tds_tub`
--
ALTER TABLE `tds_tub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `water_level`
--
ALTER TABLE `water_level`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `weight`
--
ALTER TABLE `weight`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
