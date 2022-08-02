-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 11:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `driving`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `discription` varchar(300) NOT NULL,
  `class` varchar(40) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `pic` varchar(30) NOT NULL,
  `date_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `cname`, `discription`, `class`, `duration`, `amount`, `pic`, `date_create`) VALUES
(1, 'Highway driving Lesson', 'Highway lesson are for strong men that are not afraid', 'Proffessional', '6 Weeks', '100000', 'course3681751.jpg', '2022-07-23 00:00:00'),
(2, 'International Driving', 'Distance Drive is good and it is sweet', 'Beginner', '3 Weeks', '50000', 'course8608540.jpg', '2022-07-23 00:00:00'),
(3, 'Automatic Car Lessons', 'sudl;iusldfiuvg;dfiuvh;dufvldfjklvjdbzlfiuvhdf', 'Workers', '11 Weeks', '70000', 'course7477558.jpg', '2022-07-23 00:00:00'),
(4, 'Truck Driving', 'Highway lesson are for strong men that are not afraid', 'Workers', '11 Weeks', '100000', 'course7389443.jpg', '2022-07-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(300) NOT NULL,
  `user_password` varchar(300) NOT NULL,
  `prof_pic` varchar(20) NOT NULL,
  `user_role` varchar(10) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `phone`, `gender`, `email`, `user_password`, `prof_pic`, `user_role`, `date_created`) VALUES
(1, 'Miracle', 'Obafemi', '08200922930', 'Male', 'miracle@gmail.com', '$2y$10$BdTjWf9TDCchljujHhffR.o85FosZ88FEy5pnrYs1eOQ48BddNXYy', 'profile1.jpg', 'user', '2022-07-23 00:00:00'),
(2, 'John', 'Wick', '09032231243', 'Male', 'john@gmail.com', '$2y$10$.CxPwnt7XMvonHck1QNfduBzIcimElc8U6glfcUgOBLbitFQO3262', '', 'user', '2022-07-25 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
