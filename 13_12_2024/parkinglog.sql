-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 07:20 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icae02`

-- --------------------------------------------------------

--
-- Table structure for table `parkinglog`
--

CREATE TABLE `parkinglog` (
  `id` int(11) NOT NULL,
  `parking_slot` varchar(10) NOT NULL,
  `vehicle_no` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parkinglog`
--

INSERT INTO `parkinglog` (`id`, `parking_slot`, `vehicle_no`) VALUES
(1, 'SLOT1', 'CAT4525'),
(2, 'SLOT2', 'BCD4523'),
(3, 'SLOT3', 'ACB7946'),
(4, 'SLOT4', 'EMPTY'),
(5, 'SLOT5', 'CAV4231'),
(6, 'SLOT6', 'EMPTY'),
(7, 'SLOT7', 'DAD8523'),
(8, 'SLOT8', 'EMPTY'),
(9, 'SLOT9', 'EMPTY'),
(10, 'SLOT10', 'DAC486'),
(11, 'SLOT11', 'CAV4231'),
(12, 'SLOT12', 'EMPTY'),
(13, 'SLOT13', 'EMPTY'),
(14, 'SLOT14', 'EMPTY'),
(15, 'SLOT15', 'EMPTY'),
(16, 'SLOT16', 'EMPTY'),
(17, 'SLOT17', 'EMPTY'),
(18, 'SLOT18', 'EMPTY'),
(19, 'SLOT19', 'EMPTY'),
(20, 'SLOT20', 'EMPTY'),
(21, 'SLOT21', 'EMPTY'),
(22, 'SLOT22', 'EMPTY'),
(23, 'SLOT23', 'EMPTY'),
(24, 'SLOT24', 'EMPTY'),
(25, 'SLOT25', 'KS6696'),
(26, 'SLOT26', 'EMPTY'),
(27, 'SLOT27', 'EMPTY'),
(28, 'SLOT28', 'EMPTY'),
(29, 'SLOT29', 'EMPTY'),
(30, 'SLOT30', 'EMPTY'),
(31, 'SLOT31', 'EMPTY'),
(32, 'SLOT32', 'EMPTY'),
(33, 'SLOT33', 'EMPTY'),
(34, 'SLOT34', 'EMPTY'),
(35, 'SLOT35', 'DG4562'),
(36, 'SLOT36', 'EMPTY'),
(37, 'SLOT37', 'BCT9652'),
(38, 'SLOT38', 'EMPTY'),
(39, 'SLOT39', 'EMPTY'),
(40, 'SLOT40', 'EMPTY'),
(41, 'SLOT41', 'EMPTY'),
(42, 'SLOT42', 'EMPTY'),
(43, 'SLOT43', 'EMPTY'),
(44, 'SLOT44', 'EMPTY'),
(45, 'SLOT45', 'EMPTY'),
(46, 'SLOT46', 'CAC4512'),
(47, 'SLOT47', 'EMPTY'),
(48, 'SLOT48', 'EMPTY'),
(49, 'SLOT49', 'EMPTY'),
(50, 'SLOT50', 'EMPTY');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD