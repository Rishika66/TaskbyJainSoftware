-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 10:03 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `househawking`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproperty`
--

CREATE TABLE `addproperty` (
  `Ownername` varchar(50) NOT NULL,
  `Ownercontactno` int(10) NOT NULL,
  `Address` text NOT NULL,
  `City` text NOT NULL,
  `ZipCode` int(10) NOT NULL,
  `KindofProperty` text NOT NULL,
  `Area` int(100) NOT NULL,
  `TotalValuation` int(200) NOT NULL,
  `PropertyStatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addproperty`
--

INSERT INTO `addproperty` (`Ownername`, `Ownercontactno`, `Address`, `City`, `ZipCode`, `KindofProperty`, `Area`, `TotalValuation`, `PropertyStatus`) VALUES
('Jaya Kumari', 4578689, 'plot no 62 ward 8 shivaji nagar khoka', 'Bhilai', 490023, 'personal', 676908, 435658, 1),
('Anamika', 65654658, 'ghfdfgchg', 'bhilai', 490007, 'personal', 676908, 658799, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Password`) VALUES
(''),
(''),
('12345');

-- --------------------------------------------------------

--
-- Table structure for table `loginl`
--

CREATE TABLE `loginl` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginl`
--

INSERT INTO `loginl` (`Username`, `Password`) VALUES
('rishika', 'admin@1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
