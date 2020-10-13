-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 30, 2020 at 08:57 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

DROP TABLE IF EXISTS `stores`;
CREATE TABLE IF NOT EXISTS `stores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `street` varchar(128) NOT NULL,
  `city` varchar(128) NOT NULL,
  `state` varchar(128) NOT NULL,
  `pin` int(128) NOT NULL,
  `open_time` time NOT NULL,
  `close_time` time NOT NULL,
  `created_at` date NOT NULL,
  `latitude` decimal(10,6) NOT NULL,
  `longitude` decimal(10,6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `phone`, `street`, `city`, `state`, `pin`, `open_time`, `close_time`, `created_at`, `latitude`, `longitude`) VALUES
(12, 'Abids', '9537647680', 'Ander Nagari Sector 21', 'Mumbai', 'Maharashtra', 540008, '08:00:00', '09:00:00', '2020-09-29', '17.386709', '78.474420'),
(13, 'Bata', '9087566786', 'SM Street', 'Kozhikodhe', 'Kerala', 670036, '09:00:00', '23:00:00', '2010-01-01', '9.005556', '76.782673'),
(14, 'Allen Solly', '4677678775', 'Kalidasa Road', 'Mysore', 'Karnataka', 570001, '08:00:00', '13:26:00', '2012-02-29', '12.308984', '76.651649'),
(15, 'Adidas', '7895674567', 'Juhu Nagar Sector 9', 'Mumbai', 'Maharashtra', 400983, '10:30:00', '22:30:00', '1995-01-30', '19.185256', '72.862483'),
(16, 'Cucumber', '7896578956', 'Shobha City Mall', 'Trissur', 'Kerala', 670036, '07:32:00', '21:30:00', '2010-06-30', '10.350304', '76.342304'),
(17, 'Forever 21', '4567876567', 'Mall Of India Plot 3', 'Noida', 'Uttar Pradesh', 700009, '07:01:00', '22:33:00', '2011-07-13', '28.567130', '77.320848'),
(18, 'Lifestyle', '9856745345', 'Phoenix market', 'Chennai', 'Tamil Nadu', 560009, '11:35:00', '22:35:00', '2007-07-12', '13.055019', '80.090403'),
(19, 'H&M', '7898675634', 'Indira Gandhi nagar', 'Chennai', 'Tamil Nadu', 560009, '06:40:00', '17:37:00', '2017-06-07', '12.992907', '80.218186'),
(20, 'Dazzels', '7865467788', 'URS road', 'mysore', 'karnataka', 570019, '12:39:00', '17:39:00', '2013-07-11', '12.309252', '76.650744'),
(21, 'Gucci', '7896578956', 'Shobha City Mall', 'Trissur', 'Kerala', 670036, '13:41:00', '06:45:00', '2020-09-07', '10.550066', '76.182695'),
(22, 'Van Heusan', '8976897654', 'Indira Gandhi nagar', 'Mysore', 'Karnataka', 560009, '08:42:00', '18:43:00', '2011-07-15', '12.310537', '76.650247'),
(23, 'Mochi', '4568790245', 'Forum Centre Hyderali road', 'Mysore', 'Karnataka', 570001, '08:44:00', '19:45:00', '2017-03-10', '10.083380', '78.488942'),
(24, 'Manyawar', '9876456345', 'Kadapa AG road', 'Guntur', 'Andhra Pradesh', 780034, '09:47:00', '22:48:00', '2017-07-27', '12.309685', '76.647654'),
(25, 'Flora', '9738634572', '#789 NR road', 'Mysore', 'Karnataka', 56004, '13:49:00', '17:50:00', '2020-09-13', '12.337205', '76.639181'),
(26, 'ColorBar', '8878788784', 'Kadapa AG road', 'Guntur', 'Andhra Pradesh', 780034, '07:15:00', '18:15:00', '2013-10-09', '10.083380', '78.488942');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT for table `stores`

ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

