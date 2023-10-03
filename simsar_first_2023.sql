-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 06:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simsar_first_2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(20) NOT NULL,
  `Category_Name` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `Category_Name`) VALUES
(1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `real_estates`
--

CREATE TABLE `real_estates` (
  `ID` int(20) NOT NULL,
  `U_ID` int(20) NOT NULL,
  `Type` varchar(250) COLLATE utf8_bin NOT NULL,
  `Title` varchar(250) COLLATE utf8_bin NOT NULL,
  `Description` varchar(250) COLLATE utf8_bin NOT NULL,
  `Building_Age` varchar(250) COLLATE utf8_bin NOT NULL,
  `Number_Of_Rooms` int(20) NOT NULL,
  `Number_Of_Bathrooms` int(20) NOT NULL,
  `Area_Size` int(20) NOT NULL,
  `Category_ID` int(20) NOT NULL,
  `Area` varchar(250) COLLATE utf8_bin NOT NULL,
  `Longitude` varchar(250) COLLATE utf8_bin NOT NULL,
  `Latitude` varchar(250) COLLATE utf8_bin NOT NULL,
  `Price` double NOT NULL,
  `Status` varchar(250) COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `real_estates`
--

INSERT INTO `real_estates` (`ID`, `U_ID`, `Type`, `Title`, `Description`, `Building_Age`, `Number_Of_Rooms`, `Number_Of_Bathrooms`, `Area_Size`, `Category_ID`, `Area`, `Longitude`, `Latitude`, `Price`, `Status`, `Add_Date_Time`) VALUES
(1, 1, 'Sell', 'test test test', 'test test test test test', '2', 2, 2, 80, 1, 'Khalda', '35.914128', '31.956264', 9717, 'Active', '2022-11-25 06:19:32'),
(2, 1, 'Sell', 'test test test', 'test test test test test', '2', 2, 2, 80, 1, 'Khalda', '35.915128', '31.956264', 500, 'Active', '2022-11-25 06:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `real_estates_pictures`
--

CREATE TABLE `real_estates_pictures` (
  `ID` int(20) NOT NULL,
  `RE_ID` int(20) NOT NULL,
  `Picture_Path` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `real_estates_pictures`
--

INSERT INTO `real_estates_pictures` (`ID`, `RE_ID`, `Picture_Path`) VALUES
(1, 1, 'Pictures/pic1.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(20) NOT NULL,
  `Name` varchar(250) COLLATE utf8_bin NOT NULL,
  `Phone_Number` varchar(250) COLLATE utf8_bin NOT NULL,
  `Email_Address` varchar(250) COLLATE utf8_bin NOT NULL,
  `Address` varchar(250) COLLATE utf8_bin NOT NULL,
  `Password` varchar(250) COLLATE utf8_bin NOT NULL,
  `Status` varchar(250) COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Phone_Number`, `Email_Address`, `Address`, `Password`, `Status`, `Add_Date_Time`) VALUES
(1,2,"Sell","hey","hey",2,2,2,80,1,"Abdali",35.915128,31.956264,899,"Active",25/11/2022 9:28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `real_estates`
--
ALTER TABLE `real_estates`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `U_ID` (`U_ID`),
  ADD KEY `Category_ID` (`Category_ID`);

--
-- Indexes for table `real_estates_pictures`
--
ALTER TABLE `real_estates_pictures`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `RE_ID` (`RE_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `real_estates`
--
ALTER TABLE `real_estates`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `real_estates_pictures`
--
ALTER TABLE `real_estates_pictures`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `real_estates`
--
ALTER TABLE `real_estates`
  ADD CONSTRAINT `Category_ID` FOREIGN KEY (`Category_ID`) REFERENCES `categories` (`ID`),
  ADD CONSTRAINT `U_ID` FOREIGN KEY (`U_ID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `real_estates_pictures`
--
ALTER TABLE `real_estates_pictures`
  ADD CONSTRAINT `RE_ID` FOREIGN KEY (`RE_ID`) REFERENCES `real_estates` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
