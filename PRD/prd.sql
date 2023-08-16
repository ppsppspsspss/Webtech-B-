-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 17, 2023 at 01:57 AM
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
-- Database: `prd`
--

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `FeatureID` int(11) NOT NULL,
  `FeatureName` varchar(80) NOT NULL,
  `ProjectID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`FeatureID`, `FeatureName`, `ProjectID`) VALUES
(5, 'Auth Feature', 6);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ProjectID` int(11) NOT NULL,
  `ProjectName` varchar(80) NOT NULL,
  `DomainID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjectID`, `ProjectName`, `DomainID`) VALUES
(6, 'iMBD', 2);

-- --------------------------------------------------------

--
-- Table structure for table `projectdomain`
--

CREATE TABLE `projectdomain` (
  `DomainID` int(11) NOT NULL,
  `DomainName` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projectdomain`
--

INSERT INTO `projectdomain` (`DomainID`, `DomainName`) VALUES
(1, 'Education'),
(2, 'Entertainment'),
(3, 'E-Commerce');

-- --------------------------------------------------------

--
-- Table structure for table `specification`
--

CREATE TABLE `specification` (
  `SpecificationID` int(11) NOT NULL,
  `ProjectID` int(11) NOT NULL,
  `Specification` varchar(255) NOT NULL,
  `ScreenDefinition` varchar(255) NOT NULL,
  `UserStory` varchar(255) NOT NULL,
  `AcceptanceCriteria` varchar(255) NOT NULL,
  `Wireframe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specification`
--

INSERT INTO `specification` (`SpecificationID`, `ProjectID`, `Specification`, `ScreenDefinition`, `UserStory`, `AcceptanceCriteria`, `Wireframe`) VALUES
(3, 6, 'Sign Up', 'Screen Definition', 'User Story', 'Acceptance Criteria', 'images/563124-achievement.jpg'),
(4, 6, 'Forgot Password', 'Screen Definition', 'User Story', 'Acceptance Criteria', 'images/563124-achievement.jpg'),
(5, 6, 'Sign In', 'Screen Definition', 'User Story', 'Acceptance Criteria', 'images/563124-achievement.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`UserID`, `Username`, `Password`, `Role`) VALUES
(1, 'admin', '1234', 'Administrator'),
(2, 'analyst', '1234', 'Analyst');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`FeatureID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ProjectID`);

--
-- Indexes for table `projectdomain`
--
ALTER TABLE `projectdomain`
  ADD PRIMARY KEY (`DomainID`);

--
-- Indexes for table `specification`
--
ALTER TABLE `specification`
  ADD PRIMARY KEY (`SpecificationID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `FeatureID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `ProjectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projectdomain`
--
ALTER TABLE `projectdomain`
  MODIFY `DomainID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `specification`
--
ALTER TABLE `specification`
  MODIFY `SpecificationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
