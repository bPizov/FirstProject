-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 04:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employment_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `employments_info`
--

CREATE TABLE `employments_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(64) DEFAULT NULL,
  `name_company` varchar(64) DEFAULT NULL,
  `e_mail` varchar(32) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `type_students_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employments_info`
--

INSERT INTO `employments_info` (`id`, `full_name`, `name_company`, `e_mail`, `phone_number`, `type_students_id`) VALUES
(1, 'Blagojco Pizov', 'blazoKom', 'baki@test123', 075333, 2);

-- --------------------------------------------------------

--
-- Table structure for table `type_students`
--

CREATE TABLE `type_students` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_students`
--

INSERT INTO `type_students` (`id`, `type`) VALUES
(1, 'Студенти од маркетинг'),
(2, 'Студенти од програмирање'),
(3, 'Студенти од data science'),
(4, 'Студенти од дизајн');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employments_info`
--
ALTER TABLE `employments_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `type_students_id` (`type_students_id`);

--
-- Indexes for table `type_students`
--
ALTER TABLE `type_students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employments_info`
--
ALTER TABLE `employments_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `type_students`
--
ALTER TABLE `type_students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employments_info`
--
ALTER TABLE `employments_info`
  ADD CONSTRAINT `employments_info_ibfk_1` FOREIGN KEY (`type_students_id`) REFERENCES `type_students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
