-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 09:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(100) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phn_no` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `desk_id` int(20) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `designation` varchar(100) NOT NULL,
  `role_as` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `staff_id`, `name`, `dob`, `gender`, `phn_no`, `email`, `desk_id`, `photo`, `address`, `designation`, `role_as`) VALUES
(1, 'AD2306010001', 'MAYUR KALE', '2023-06-01', 'male', '9999999999', 'mayur@gmail.com', 1111, 'mayur_img.jpg', 'Aurangabad', 'Principal', 'admin'),
(2, 'AD2306010002', 'JOSHUA KALLUPURAKAL', '2023-06-01', 'male', '8888888888', 'vaibhav@gmail.com', 2222, 'joshua.jpeg', 'Aurangabad', 'HOD', 'User'),
(3, 'AD2306060003', 'Swati Dakulge', '2023-06-06', 'female', '8763736379', 'swati@gmail.com', 3333, 'swati.jpg', 'Aurangabad', 'HOD', 'User'),
(4, 'AD2306110004', 'Megha Choudam', '2023-06-12', 'female', '8763736376', 'megh@gmail.com', 3333, 'IMG-20220922-WA0023.jpg', 'Aurangabad', 'Professor', 'User'),
(5, 'AD2306120005', 'Akki', '2023-06-13', 'female', '8977444455', 'swati@gmail.com', 7887, 'krishna.jpg', 'Nanded', 'Professor', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `create_doc`
--

CREATE TABLE `create_doc` (
  `id` int(11) NOT NULL,
  `doc_id` varchar(12) NOT NULL,
  `desk_id` varchar(12) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `doc_type` varchar(10) DEFAULT NULL,
  `doc_status` varchar(20) DEFAULT NULL,
  `doc_owner` varchar(50) DEFAULT NULL,
  `phn_owner` varchar(10) DEFAULT NULL,
  `doc_desc` varchar(255) DEFAULT NULL,
  `addressed_to` varchar(50) DEFAULT NULL,
  `no_of_copies` int(10) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `doc_mode` varchar(10) DEFAULT NULL,
  `doc_ref_no` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `create_doc`
--

INSERT INTO `create_doc` (`id`, `doc_id`, `desk_id`, `date`, `doc_type`, `doc_status`, `doc_owner`, `phn_owner`, `doc_desc`, `addressed_to`, `no_of_copies`, `created_by`, `doc_mode`, `doc_ref_no`) VALUES
(1, 'IN2306010001', '66666', '2023-06-01', 'note', 'underprocess', 'JOSHUA KALLUPURAKAL', '8888888888', '    Note                                ', 'officer1', 5, 'JOSHUA KALLUPURAKAL', 'public', 'JOE/KL-90'),
(2, 'IN2306060002', '4567', '2023-06-06', 'note', 'underprocess', 'Sadashiv', '8777676767', '                          Note          ', 'officer1', 5, 'Sadashiv Bhusse', 'public', 'SRB/SD/4565-67'),
(3, 'IN2306110003', '6666', '2023-06-11', 'circular', 'underprocess', 'Megha Choudam', '8787877877', '                         Circular          ', 'officer1', 2, 'Megha Choudam', 'public', 'mjh/kj/90989'),
(4, 'IN2306110004', '9999', '2023-06-11', 'letter', 'underprocess', 'pallavi varkad', '9999999999', '                               Letter    ', 'officer2', 10, 'pallavi varkad', 'general', 'kjj78899'),
(5, 'IN2306120005', '8888', '2023-06-12', 'note', 'underprocess', 'Akki', '8888888888', '                  Note                  ', 'officer1', 10, 'Akki', 'public', 'akki12345');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(12) NOT NULL,
  `dept_id` varchar(10) NOT NULL,
  `dept_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dept_id`, `dept_name`) VALUES
(1, 'IN0001', 'MCA'),
(2, 'IN0002', 'MBA');

-- --------------------------------------------------------

--
-- Table structure for table `doc_update`
--

CREATE TABLE `doc_update` (
  `id` int(15) NOT NULL,
  `track_id` varchar(12) DEFAULT NULL,
  `desk_id` varchar(12) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `doc_id` varchar(12) DEFAULT NULL,
  `doc_status1` varchar(10) DEFAULT NULL,
  `remark` varchar(30) NOT NULL,
  `forw_to` varchar(20) NOT NULL,
  `staff_id` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doc_update`
--

INSERT INTO `doc_update` (`id`, `track_id`, `desk_id`, `date`, `doc_id`, `doc_status1`, `remark`, `forw_to`, `staff_id`) VALUES
(1, 'TR2306010001', '7777', '2023-06-01 09:38:15', 'IN2306010001', 'underproce', 'Underprocess', 'clerk', ''),
(2, 'TR2306010002', '8888', '2023-06-01 09:38:40', 'IN2306010001', 'Rejected', 'pending', 'clerk', ''),
(3, 'TR2306060003', '5555', '2023-06-06 20:13:38', 'IN2306060002', 'Rejected', 'Pending', 'Clerk', ''),
(4, 'TR2306090004', '7777', '2023-06-09 13:54:17', 'IN2306060002', 'completed', 'completed', 'HOD', ''),
(5, 'TR2306110005', '565665', '2023-06-11 17:55:22', 'IN2306110003', 'underproce', 'Underprocess', 'clerk', ''),
(6, 'TR2306110006', '5555', '2023-06-11 17:55:57', 'IN2306110003', 'Rejected', 'pending', 'Sr.Clerk', ''),
(7, 'TR2306110007', '7777', '2023-06-11 17:56:19', 'IN2306110003', 'completed', 'completed', 'HOD', ''),
(8, 'TR2306110008', '4444', '2023-06-11 18:06:11', 'IN2306110004', 'underproce', 'Underprocess', 'Sr.Clerk', ''),
(9, 'TR2306110009', '7780', '2023-06-11 18:06:38', 'IN2306110004', 'Rejected', 'Rejected', 'Clerk', ''),
(10, 'TR2306120010', '45667', '2023-06-12 06:24:41', 'IN2306120005', 'underproce', 'Underprocess', 'clerk', ''),
(11, 'TR2306120011', '6788', '2023-06-12 06:25:18', 'IN2306120005', 'Rejected', 'reject', 'applicant', ''),
(12, 'TR2306120012', '6778', '2023-06-12 06:25:41', 'IN2306120005', 'completed', 'completed', 'HOD', ''),
(13, 'TR2306120013', '9999', '2023-06-12 08:58:15', 'IN2306110003', 'underproce', 'revert', 'Vaibhav', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `staff_id` varchar(12) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `role_as` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`staff_id`, `password`, `role_as`) VALUES
('AD2305310004', 'swati@12345', 'admin'),
('AD2305310005', 'deepak@67546', 'User'),
('AD2305310006', 'swati@12345', 'User'),
('AD2305310007', 'swati@12345', 'admin'),
('AD2305310008', 'swati@12345', 'User'),
('AD2305310012', 'avanee@1234', 'User'),
('AD2305310013', 'avanee@1234', 'User'),
('AD2305310014', 'swati@12345', 'User'),
('AD2306010015', 'swati@12345', 'User'),
('AD2306010001', 'mayur@12345', 'admin'),
('AD2306010002', 'joshua@12345', 'User'),
('AD2306060003', 'swati@1234', 'User'),
('AD2306110004', 'megha@12345', 'User'),
('AD2306120005', 'akki@12345', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) NOT NULL,
  `desk_id` varchar(10) NOT NULL,
  `roles_name` varchar(20) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `desk_id`, `roles_name`, `department`) VALUES
(1, 'DS0001', 'Role1', 'MCA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_doc`
--
ALTER TABLE `create_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_update`
--
ALTER TABLE `doc_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `create_doc`
--
ALTER TABLE `create_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doc_update`
--
ALTER TABLE `doc_update`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
