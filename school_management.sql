-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2025 at 10:38 PM
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
-- Table structure for table `class_schedule`
--

CREATE TABLE `class_schedule` (
  `id` int(11) NOT NULL,
  `teacher_id` int(10) DEFAULT NULL,
  `class_id` int(10) DEFAULT NULL,
  `subject_id` int(10) DEFAULT NULL,
  `section_id` int(10) DEFAULT NULL,
  `class_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `class_date` date DEFAULT NULL,
  `inserted_by` int(20) DEFAULT NULL,
  `insert_date` date DEFAULT NULL,
  `updated_by` int(20) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `status_active` int(20) DEFAULT NULL,
  `is_deleted` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_schedule`
--

INSERT INTO `class_schedule` (`id`, `teacher_id`, `class_id`, `subject_id`, `section_id`, `class_time`, `class_date`, `inserted_by`, `insert_date`, `updated_by`, `update_date`, `status_active`, `is_deleted`) VALUES
(1, 2, 5, 2, 1, '0000-00-00 00:00:00', '2025-12-25', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 5, 2, 1, '0000-00-00 00:00:00', '2025-12-25', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `gender_id` int(10) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `roll` int(50) DEFAULT NULL,
  `blood_grop_id` int(10) DEFAULT NULL,
  `religion_id` int(10) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `class_id` int(50) DEFAULT NULL,
  `section_id` int(10) DEFAULT NULL,
  `admission_id` int(100) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `short_bio` varchar(300) DEFAULT NULL,
  `inserted_by` int(20) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(20) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `status_active` int(20) DEFAULT NULL,
  `is_deleted` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `gender_id`, `date_of_birth`, `roll`, `blood_grop_id`, `religion_id`, `email`, `class_id`, `section_id`, `admission_id`, `phone`, `short_bio`, `inserted_by`, `insert_date`, `updated_by`, `update_date`, `status_active`, `is_deleted`) VALUES
(1, 'Mamun', 'Ahmed', NULL, NULL, NULL, NULL, NULL, 'mamun@gmail.com', NULL, NULL, NULL, 192896, NULL, NULL, '2025-12-10 06:26:55', NULL, NULL, NULL, NULL),
(2, 'Suraya', 'Islam', NULL, NULL, NULL, NULL, NULL, 'suraya@gmail.com', NULL, NULL, NULL, 161257, NULL, NULL, '2025-12-10 06:32:06', NULL, NULL, NULL, NULL),
(3, 'M', 'R', NULL, NULL, NULL, NULL, NULL, 'mr@gmail.com', NULL, NULL, NULL, 133166, NULL, NULL, '2025-12-10 06:35:47', NULL, NULL, NULL, NULL),
(8, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '2025-12-21 00:18:36', NULL, NULL, NULL, NULL),
(9, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, 0, NULL, NULL, '2025-12-21 00:19:16', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(100) DEFAULT NULL,
  `subject_code` int(10) DEFAULT NULL,
  `subject_type_id` int(10) DEFAULT NULL,
  `inserted_by` int(20) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(20) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `status_active` int(20) DEFAULT NULL,
  `is_deleted` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `subject_code`, `subject_type_id`, `inserted_by`, `insert_date`, `updated_by`, `update_date`, `status_active`, `is_deleted`) VALUES
(1, 'Accounting', 28555, 1, NULL, '2025-12-21 00:19:30', NULL, NULL, NULL, NULL),
(2, 'Bangla', 25721, 2, NULL, '2025-12-22 17:05:38', NULL, NULL, NULL, NULL),
(3, 'English', 25722, 2, NULL, '2025-12-22 18:58:26', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `gender_id` int(10) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `id_no` int(50) DEFAULT NULL,
  `blood_grop_id` int(10) DEFAULT NULL,
  `religion_id` int(10) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `class_id` int(50) DEFAULT NULL,
  `section_id` int(10) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `short_bio` varchar(300) DEFAULT NULL,
  `inserted_by` int(20) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(20) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `status_active` int(20) DEFAULT NULL,
  `is_deleted` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `first_name`, `last_name`, `gender_id`, `date_of_birth`, `id_no`, `blood_grop_id`, `religion_id`, `email`, `class_id`, `section_id`, `address`, `phone`, `short_bio`, `inserted_by`, `insert_date`, `updated_by`, `update_date`, `status_active`, `is_deleted`) VALUES
(1, 'Mamun Ahmed', 'Sagor', NULL, NULL, NULL, NULL, NULL, 'mamun@gmail.com', NULL, NULL, NULL, 192896, NULL, NULL, '2025-12-10 20:35:06', NULL, NULL, NULL, NULL),
(2, 'Suraya Islam', 'Rita', NULL, NULL, NULL, NULL, NULL, 'suraya@gmail.com', NULL, NULL, NULL, 161257, NULL, NULL, '2025-12-10 20:38:42', NULL, NULL, NULL, NULL);

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
(15, 'Mamun', 'Ahmed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mamun@gmail.com', NULL, NULL, NULL, NULL, 192896, NULL, NULL, '2025-12-07 21:19:22', NULL, NULL, NULL, NULL),
(16, 'Suraya', 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'suraya@gmail.com', NULL, NULL, NULL, NULL, 161257, NULL, NULL, '2025-12-09 07:44:53', NULL, NULL, NULL, NULL),
(17, 'M', 'R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mr@gmail.com', NULL, NULL, NULL, NULL, 133166, NULL, NULL, '2025-12-09 08:46:27', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_schedule`
--
ALTER TABLE `class_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_schedule`
--
ALTER TABLE `class_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
