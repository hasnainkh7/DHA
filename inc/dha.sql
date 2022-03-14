-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 11, 2022 at 09:22 AM
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
(574, 'DHA City');

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
(98, 574, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_denominations`
--

CREATE TABLE `project_denominations` (
  `id` int(11) NOT NULL,
  `denomination_id` int(11) NOT NULL,
  `data_of` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1001, 1, 98, 0),
(1002, 2, 98, 1);

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
(1000001, 29, 1002, 1);

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
(5000001, 3, 1000001),
(5000002, 4, 1000001);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `project_denominations`
--
ALTER TABLE `project_denominations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_sector`
--
ALTER TABLE `project_sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `project_sub_sector`
--
ALTER TABLE `project_sub_sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000002;

--
-- AUTO_INCREMENT for table `project_sub_sub_sector`
--
ALTER TABLE `project_sub_sub_sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5000003;

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
