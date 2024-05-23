-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 10:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_media_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacted_user`
--

CREATE TABLE `contacted_user` (
  `ID` int(11) NOT NULL,
  `FullNames` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacted_user`
--

INSERT INTO `contacted_user` (`ID`, `FullNames`, `Email`, `Message`) VALUES
(1, 'Hughes Fils MUGISHA', 'Sayhughes@lockrMail.com', 'Good!');

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `ID` int(11) NOT NULL,
  `FullNames` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `PhoneNumber` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`ID`, `FullNames`, `Username`, `Gender`, `PhoneNumber`, `Email`, `Password`) VALUES
(1, 'Hughes Fils MUGISHA', 'hughes', 'Male', '+250 785 817 551', 'Sayhughes@lockrMail.com', 'hughes'),
(2, 'Joy KANA', 'Joy', 'Female', '(437)299-7306', 'mugisha222017520@gmail.com', 'joy12'),
(3, 'Kenny SHEMA', 'shema', 'Male', '0788756453', 'shema@gmail.com', 'shema1'),
(4, 'Andy KAMALI', 'kamali', 'Male', '0788674523', 'kamali@gmail.com', 'kamali4567'),
(5, 'Angel MUTESI', 'angelm1', 'Female', '0788874645', 'angelmute23@gmail.com', 'angelm56387');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacted_user`
--
ALTER TABLE `contacted_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacted_user`
--
ALTER TABLE `contacted_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
