-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2022 at 12:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dha`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`) VALUES
(1, 'Karachi'),
(2, 'Islamabad'),
(3, 'Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `plot_denomination`
--

CREATE TABLE `plot_denomination` (
  `plot_den_id` int(11) NOT NULL,
  `plot_den` varchar(30) NOT NULL,
  `plot_type` int(11) NOT NULL,
  `unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plot_denomination`
--

INSERT INTO `plot_denomination` (`plot_den_id`, `plot_den`, `plot_type`, `unit`) VALUES
(1, '100', 1, 1),
(3, '125', 1, 1),
(4, '200', 1, 1),
(5, '250', 1, 1),
(6, '300', 1, 1),
(7, '500', 1, 1),
(8, '1000', 1, 1),
(10, '2000', 1, 1),
(11, '100', 2, 1),
(12, '125', 2, 1),
(13, '200', 2, 1),
(14, '250', 2, 1),
(15, '300', 2, 1),
(16, '500', 2, 1),
(17, '1000', 2, 1),
(18, '2000', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `plot_type`
--

CREATE TABLE `plot_type` (
  `id` int(11) NOT NULL,
  `plot_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plot_type`
--

INSERT INTO `plot_type` (`id`, `plot_type`) VALUES
(1, 'Residential'),
(2, 'Commercial');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `price_id` int(11) NOT NULL,
  `min` bigint(20) NOT NULL,
  `max` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `plot_den_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`price_id`, `min`, `max`, `date`, `plot_den_id`) VALUES
(1, 100000, 500000, '2022-03-02', 1),
(2, 500000, 1000000, '2022-03-02', 2),
(3, 1000000, 1500000, '2022-03-02', 3),
(4, 1500000, 2000000, '2022-03-02', 4),
(5, 2000000, 2500000, '2022-03-02', 5),
(6, 2500000, 3000000, '2022-03-02', 6),
(7, 3500000, 4000000, '2022-03-02', 7),
(8, 4500000, 5000000, '2022-03-02', 8),
(9, 5500000, 6000000, '2022-03-02', 9);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`) VALUES
(236, 'Bharia'),
(609, 'DHA City'),
(951, 'Askari');

-- --------------------------------------------------------

--
-- Table structure for table `project_data`
--

CREATE TABLE `project_data` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_data`
--

INSERT INTO `project_data` (`id`, `project_id`, `location_id`) VALUES
(108, 609, 1),
(109, 236, 1),
(110, 951, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_denominations`
--

CREATE TABLE `project_denominations` (
  `id` int(11) NOT NULL,
  `denomination_id` int(11) NOT NULL,
  `plot_status` int(11) NOT NULL,
  `data_of` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_denominations`
--

INSERT INTO `project_denominations` (`id`, `denomination_id`, `plot_status`, `data_of`) VALUES
(216, 6, 1, 1000024),
(217, 6, 1, 1000025),
(218, 6, 1, 1000026),
(219, 7, 1, 1000027),
(220, 7, 1, 1000029),
(221, 4, 1, 1000030),
(222, 7, 1, 1000030),
(223, 6, 1, 1000032),
(224, 6, 1, 1000033),
(225, 6, 1, 1000034),
(226, 7, 1, 1000035),
(227, 8, 1, 1000035),
(228, 7, 1, 1000036),
(229, 7, 1, 1000038),
(230, 7, 1, 1000039),
(231, 7, 1, 1000040),
(232, 8, 1, 1000041),
(233, 10, 1, 1000041),
(234, 1, 2, 1000104),
(235, 12, 2, 1000104),
(236, 1, 2, 1000105),
(237, 15, 2, 1000105),
(238, 4, 2, 1000106),
(239, 15, 2, 1000106),
(240, 10, 2, 5000082),
(241, 13, 2, 5000082),
(242, 1, 1, 1000107),
(243, 11, 1, 1000107),
(244, 3, 1, 1000108),
(245, 16, 1, 1000108),
(246, 8, 1, 5000083),
(247, 16, 1, 5000083),
(248, 10, 1, 1000109),
(249, 17, 1, 1000109),
(250, 3, 1, 5000084),
(251, 4, 1, 5000084),
(252, 5, 1, 5000084),
(253, 11, 1, 5000084);

-- --------------------------------------------------------

--
-- Table structure for table `project_pricings`
--

CREATE TABLE `project_pricings` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `project_deno_id` int(11) NOT NULL,
  `is_approved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_pricings`
--

INSERT INTO `project_pricings` (`id`, `date`, `min`, `max`, `project_deno_id`, `is_approved`) VALUES
(108, '03-15-2022', 100, 1000, 234, 0),
(109, '03-15-2022', 2332, 443, 235, 0),
(110, '03-15-2022', 55, 654, 236, 0),
(111, '03-15-2022', 3444, 4343, 237, 0),
(112, '03-15-2022', 122, 33, 238, 0),
(113, '03-15-2022', 454, 545, 239, 0),
(114, '03-15-2022', 54, 454, 240, 0),
(115, '03-15-2022', 45, 45, 241, 0),
(116, '03-15-2022', 343, 3443, 242, 0),
(117, '03-15-2022', 3434, 34, 243, 0),
(118, '03-15-2022', 4545, 4545, 244, 0),
(119, '03-15-2022', 3434, 343, 245, 0),
(120, '03-15-2022', 232, 233, 246, 0),
(121, '03-15-2022', 455, 54, 247, 0),
(122, '03-15-2022', 3434, 343, 248, 0),
(123, '03-15-2022', 34, 43, 249, 0),
(124, '03-15-2022', 34, 34, 250, 0),
(125, '03-15-2022', 344, 34, 251, 0),
(126, '03-15-2022', 32, 34, 252, 0),
(127, '03-15-2022', 34, 34, 253, 0);

-- --------------------------------------------------------

--
-- Table structure for table `project_sector`
--

CREATE TABLE `project_sector` (
  `id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `projectData_id` int(11) NOT NULL,
  `has_sub_sector` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_sector`
--

INSERT INTO `project_sector` (`id`, `sector_id`, `projectData_id`, `has_sub_sector`) VALUES
(1019, 103, 108, 1),
(1020, 104, 108, 1),
(1021, 105, 108, 1),
(1022, 106, 108, 1),
(1023, 107, 108, 1),
(1024, 108, 108, 1),
(1025, 109, 108, 1),
(1026, 110, 108, 1),
(1027, 111, 108, 1),
(1028, 112, 108, 1),
(1029, 113, 108, 1),
(1030, 114, 108, 1),
(1031, 115, 108, 1),
(1032, 116, 108, 1),
(1033, 117, 108, 1),
(1034, 118, 108, 1),
(1035, 153, 108, 1),
(1036, 1, 109, 1),
(1037, 2, 109, 1),
(1038, 3, 109, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_sub_sector`
--

CREATE TABLE `project_sub_sector` (
  `id` int(11) NOT NULL,
  `sub_sector_id` int(11) NOT NULL,
  `project_sector_id` int(11) NOT NULL,
  `has_sub_sub_sector` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_sub_sector`
--

INSERT INTO `project_sub_sector` (`id`, `sub_sector_id`, `project_sector_id`, `has_sub_sub_sector`) VALUES
(1000023, 79, 1019, 0),
(1000024, 3, 1020, 1),
(1000025, 4, 1020, 1),
(1000026, 5, 1020, 1),
(1000027, 6, 1020, 1),
(1000028, 79, 1020, 0),
(1000029, 3, 1021, 1),
(1000030, 4, 1021, 1),
(1000031, 79, 1021, 0),
(1000032, 3, 1022, 1),
(1000033, 4, 1022, 1),
(1000034, 5, 1022, 1),
(1000035, 6, 1022, 1),
(1000036, 7, 1022, 1),
(1000037, 79, 1022, 0),
(1000038, 3, 1023, 1),
(1000039, 4, 1023, 1),
(1000040, 5, 1023, 1),
(1000041, 6, 1023, 1),
(1000042, 79, 1023, 0),
(1000043, 3, 1024, 1),
(1000044, 4, 1024, 1),
(1000045, 5, 1024, 1),
(1000046, 6, 1024, 1),
(1000047, 79, 1024, 0),
(1000048, 3, 1025, 1),
(1000049, 4, 1025, 1),
(1000050, 5, 1025, 1),
(1000051, 6, 1025, 1),
(1000052, 79, 1025, 0),
(1000053, 3, 1026, 1),
(1000054, 4, 1026, 1),
(1000055, 5, 1026, 1),
(1000056, 6, 1026, 1),
(1000057, 79, 1026, 0),
(1000058, 3, 1027, 1),
(1000059, 4, 1027, 1),
(1000060, 5, 1027, 1),
(1000061, 6, 1027, 1),
(1000062, 79, 1027, 0),
(1000063, 3, 1028, 1),
(1000064, 4, 1028, 1),
(1000065, 5, 1028, 1),
(1000066, 6, 1028, 1),
(1000067, 7, 1028, 1),
(1000068, 79, 1028, 0),
(1000069, 3, 1029, 1),
(1000070, 4, 1029, 1),
(1000071, 5, 1029, 1),
(1000072, 6, 1029, 1),
(1000073, 7, 1029, 1),
(1000074, 79, 1029, 0),
(1000075, 3, 1030, 1),
(1000076, 4, 1030, 1),
(1000077, 5, 1030, 1),
(1000078, 6, 1030, 1),
(1000079, 79, 1030, 0),
(1000080, 3, 1031, 1),
(1000081, 4, 1031, 1),
(1000082, 5, 1031, 1),
(1000083, 6, 1031, 1),
(1000084, 7, 1031, 1),
(1000085, 8, 1031, 1),
(1000086, 79, 1031, 0),
(1000087, 3, 1032, 1),
(1000088, 4, 1032, 1),
(1000089, 5, 1032, 1),
(1000090, 6, 1032, 1),
(1000091, 79, 1032, 0),
(1000092, 3, 1033, 1),
(1000093, 4, 1033, 1),
(1000094, 5, 1033, 1),
(1000095, 6, 1033, 1),
(1000096, 79, 1033, 0),
(1000097, 3, 1034, 1),
(1000098, 4, 1034, 1),
(1000099, 5, 1034, 1),
(1000100, 6, 1034, 1),
(1000101, 79, 1034, 0),
(1000102, 4, 1035, 0),
(1000103, 15, 1035, 0),
(1000104, 3, 1036, 0),
(1000105, 4, 1036, 0),
(1000106, 5, 1037, 1),
(1000107, 6, 1037, 0),
(1000108, 6, 1038, 1),
(1000109, 7, 1038, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_sub_sub_sector`
--

CREATE TABLE `project_sub_sub_sector` (
  `id` int(11) NOT NULL,
  `sub_sub_sector_id` int(11) NOT NULL,
  `project_sub_sector_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_sub_sub_sector`
--

INSERT INTO `project_sub_sub_sector` (`id`, `sub_sub_sector_id`, `project_sub_sector_id`) VALUES
(5000019, 49, 1000024),
(5000020, 49, 1000025),
(5000021, 49, 1000026),
(5000022, 49, 1000027),
(5000023, 49, 1000029),
(5000024, 49, 1000030),
(5000025, 49, 1000032),
(5000026, 49, 1000033),
(5000027, 49, 1000034),
(5000028, 49, 1000035),
(5000029, 49, 1000036),
(5000030, 49, 1000038),
(5000031, 49, 1000039),
(5000032, 49, 1000040),
(5000033, 49, 1000041),
(5000034, 49, 1000043),
(5000035, 49, 1000044),
(5000036, 49, 1000045),
(5000037, 49, 1000046),
(5000038, 49, 1000048),
(5000039, 49, 1000049),
(5000040, 49, 1000050),
(5000041, 49, 1000051),
(5000042, 49, 1000053),
(5000043, 49, 1000054),
(5000044, 49, 1000055),
(5000045, 49, 1000056),
(5000046, 49, 1000058),
(5000047, 49, 1000059),
(5000048, 49, 1000060),
(5000049, 49, 1000061),
(5000050, 49, 1000063),
(5000051, 49, 1000064),
(5000052, 49, 1000065),
(5000053, 49, 1000066),
(5000054, 49, 1000067),
(5000055, 49, 1000069),
(5000056, 49, 1000070),
(5000057, 49, 1000071),
(5000058, 49, 1000072),
(5000059, 49, 1000073),
(5000060, 49, 1000075),
(5000061, 49, 1000076),
(5000062, 49, 1000077),
(5000063, 49, 1000078),
(5000064, 49, 1000080),
(5000065, 49, 1000081),
(5000066, 49, 1000082),
(5000067, 49, 1000083),
(5000068, 49, 1000084),
(5000069, 49, 1000085),
(5000070, 49, 1000087),
(5000071, 49, 1000088),
(5000072, 49, 1000089),
(5000073, 49, 1000090),
(5000074, 49, 1000092),
(5000075, 49, 1000093),
(5000076, 49, 1000094),
(5000077, 49, 1000095),
(5000078, 49, 1000097),
(5000079, 49, 1000098),
(5000080, 49, 1000099),
(5000081, 49, 1000100),
(5000082, 4, 1000106),
(5000083, 49, 1000108),
(5000084, 49, 1000109);

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `sector_id` int(11) NOT NULL,
  `sector_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`sector_id`, `sector_name`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E'),
(6, 'F'),
(7, 'G'),
(8, 'H'),
(9, 'I'),
(10, 'J'),
(11, 'K'),
(12, 'L'),
(13, 'M'),
(14, 'N'),
(15, 'O'),
(16, 'P'),
(17, 'Q'),
(18, 'R'),
(19, 'S'),
(20, 'T'),
(21, 'U'),
(22, 'V'),
(23, 'W'),
(24, 'X'),
(25, 'Y'),
(26, 'Z'),
(103, '1'),
(104, '2'),
(105, '3'),
(106, '4'),
(107, '5'),
(108, '6'),
(109, '7'),
(110, '8'),
(111, '9'),
(112, '10'),
(113, '11'),
(114, '12'),
(115, '13'),
(116, '14'),
(117, '15'),
(118, '16'),
(119, '17'),
(120, '18'),
(121, '19'),
(122, '20'),
(123, '21'),
(124, '22'),
(125, '23'),
(126, '24'),
(127, '25'),
(128, '26'),
(129, '27'),
(130, '28'),
(131, '29'),
(132, '30'),
(133, '31'),
(134, '32'),
(135, '33'),
(136, '34'),
(137, '35'),
(138, '36'),
(139, '37'),
(140, '38'),
(141, '39'),
(142, '40'),
(143, '41'),
(144, '42'),
(145, '43'),
(146, '44'),
(147, '45'),
(148, '46'),
(149, '47'),
(150, '48'),
(151, '49'),
(152, '50'),
(153, 'CBD');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status`) VALUES
(1, 'Plot'),
(2, 'File');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sector`
--

CREATE TABLE `sub_sector` (
  `sub_sector_id` int(11) NOT NULL,
  `sub_sector_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_sector`
--

INSERT INTO `sub_sector` (`sub_sector_id`, `sub_sector_name`) VALUES
(2, 'None'),
(3, 'A'),
(4, 'B'),
(5, 'C'),
(6, 'D'),
(7, 'E'),
(8, 'F'),
(9, 'G'),
(10, 'H'),
(11, 'I'),
(12, 'J'),
(13, 'K'),
(14, 'L'),
(15, 'M'),
(16, 'N'),
(17, 'O'),
(18, 'P'),
(19, 'Q'),
(20, 'R'),
(21, 'S'),
(22, 'T'),
(23, 'U'),
(24, 'V'),
(25, 'W'),
(26, 'X'),
(27, 'Y'),
(28, 'Z'),
(29, '11'),
(30, '22'),
(31, '33'),
(32, '44'),
(33, '55'),
(34, '66'),
(35, '77'),
(36, '88'),
(37, '99'),
(38, '10'),
(39, '11'),
(40, '12'),
(41, '13'),
(42, '14'),
(43, '15'),
(44, '16'),
(45, '17'),
(46, '18'),
(47, '19'),
(48, '20'),
(49, '21'),
(50, '22'),
(51, '23'),
(52, '24'),
(53, '25'),
(54, '26'),
(55, '27'),
(56, '28'),
(57, '29'),
(58, '30'),
(59, '31'),
(60, '32'),
(61, '33'),
(62, '34'),
(63, '35'),
(64, '36'),
(65, '37'),
(66, '38'),
(67, '39'),
(68, '40'),
(69, '41'),
(70, '42'),
(71, '43'),
(72, '44'),
(73, '45'),
(74, '46'),
(75, '47'),
(76, '48'),
(77, '49'),
(78, '50'),
(79, 'C5');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_sector`
--

CREATE TABLE `sub_sub_sector` (
  `sub_sub_sector_id` int(11) NOT NULL,
  `sub_sub_sector_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_sub_sector`
--

INSERT INTO `sub_sub_sector` (`sub_sub_sector_id`, `sub_sub_sector_name`) VALUES
(2, 'None'),
(3, 'AAA'),
(4, 'BBB'),
(5, 'CCC'),
(6, 'DDD'),
(7, 'EEE'),
(8, 'FFF'),
(9, 'GGG'),
(10, 'HHH'),
(11, 'III'),
(12, 'JJJ'),
(13, 'KKK'),
(14, 'LLL'),
(15, 'MMM'),
(16, 'NNN'),
(17, 'OOO'),
(18, 'PPP'),
(19, 'QQQ'),
(20, 'RRR'),
(21, 'SSS'),
(22, 'TTT'),
(23, 'UUU'),
(24, 'VVV'),
(25, 'WWW'),
(26, 'XXX'),
(27, 'YYY'),
(28, 'ZZZ'),
(29, '111'),
(30, '112'),
(31, '113'),
(32, '114'),
(33, '115'),
(34, '116'),
(35, '117'),
(36, '118'),
(37, '119'),
(38, '120'),
(39, '121'),
(40, '122'),
(41, '123'),
(42, '124'),
(43, '125'),
(44, '126'),
(45, '127'),
(46, '128'),
(47, '129'),
(48, '130'),
(49, 'C4');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `unit_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit_name`) VALUES
(1, 'Sq. Yards'),
(2, 'Marla');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_pic` varchar(5000) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `password`, `email`, `profile_pic`, `role`) VALUES
(1, 'V Media', 'admin', 'admin', 'info@vmedia.pk', 'vmedia.png', '1'),
(2, 'Hasnain', 'datacollector', 'datacollector', 'datacollector@example.com', 'datacollector.png', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `plot_denomination`
--
ALTER TABLE `plot_denomination`
  ADD PRIMARY KEY (`plot_den_id`);

--
-- Indexes for table `plot_type`
--
ALTER TABLE `plot_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_data`
--
ALTER TABLE `project_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_denominations`
--
ALTER TABLE `project_denominations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_pricings`
--
ALTER TABLE `project_pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_sector`
--
ALTER TABLE `project_sector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_sub_sector`
--
ALTER TABLE `project_sub_sector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_sub_sub_sector`
--
ALTER TABLE `project_sub_sub_sector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`sector_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `sub_sector`
--
ALTER TABLE `sub_sector`
  ADD PRIMARY KEY (`sub_sector_id`);

--
-- Indexes for table `sub_sub_sector`
--
ALTER TABLE `sub_sub_sector`
  ADD PRIMARY KEY (`sub_sub_sector_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plot_denomination`
--
ALTER TABLE `plot_denomination`
  MODIFY `plot_den_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `plot_type`
--
ALTER TABLE `plot_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37851;

--
-- AUTO_INCREMENT for table `project_data`
--
ALTER TABLE `project_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `project_denominations`
--
ALTER TABLE `project_denominations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `project_pricings`
--
ALTER TABLE `project_pricings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `project_sector`
--
ALTER TABLE `project_sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1039;

--
-- AUTO_INCREMENT for table `project_sub_sector`
--
ALTER TABLE `project_sub_sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000110;

--
-- AUTO_INCREMENT for table `project_sub_sub_sector`
--
ALTER TABLE `project_sub_sub_sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5000085;

--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `sector_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_sector`
--
ALTER TABLE `sub_sector`
  MODIFY `sub_sector_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1012;

--
-- AUTO_INCREMENT for table `sub_sub_sector`
--
ALTER TABLE `sub_sub_sector`
  MODIFY `sub_sub_sector_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
