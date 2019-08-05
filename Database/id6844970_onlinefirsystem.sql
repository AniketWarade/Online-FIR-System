-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 25, 2018 at 01:24 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6844970_onlinefirsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `firregister`
--

CREATE TABLE `firregister` (
  `FIRNumber` int(10) NOT NULL,
  `FIRType` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ComplainerName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` int(10) NOT NULL,
  `District` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `PoliceStation` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CrimeDate` date NOT NULL,
  `CrimeTime` time NOT NULL,
  `CrimeLocation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CrimeDescription` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Report` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policelogin`
--

CREATE TABLE `policelogin` (
  `UserName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `HostName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `IPAddr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `UserDate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `UserTime` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policeregister`
--

CREATE TABLE `policeregister` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `District` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `PoliceStation` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `UserName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `IPAddr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HostName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `UserDate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `UserTime` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE `userregister` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `District` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Occupation` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `firregister`
--
ALTER TABLE `firregister`
  ADD PRIMARY KEY (`FIRNumber`);

--
-- Indexes for table `policeregister`
--
ALTER TABLE `policeregister`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `userregister`
--
ALTER TABLE `userregister`
  ADD PRIMARY KEY (`UserName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
