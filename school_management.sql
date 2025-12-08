-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2025 at 08:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `gender_id` int(10) DEFAULT NULL,
  `fathers_name` varchar(250) DEFAULT NULL,
  `mothers_name` varchar(250) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `religion_id` int(10) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `subject_id` int(20) DEFAULT NULL,
  `class_id` int(50) DEFAULT NULL,
  `section_id` int(10) DEFAULT NULL,
  `id_no` int(100) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `inserted_by` int(20) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(20) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `status_active` int(20) DEFAULT NULL,
  `is_deleted` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_id`, `gender_id`, `fathers_name`, `mothers_name`, `date_of_birth`, `religion_id`, `joining_date`, `email`, `subject_id`, `class_id`, `section_id`, `id_no`, `phone`, `address`, `inserted_by`, `insert_date`, `updated_by`, `update_date`, `status_active`, `is_deleted`) VALUES
(15, 'Mamun', 'Ahmed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mamun@gmail.com', NULL, NULL, NULL, NULL, 192896, NULL, NULL, '2025-12-07 21:19:22', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
