-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 23, 2023 at 01:47 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leave_staff`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2020-11-03 05:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `donation_table`
--

DROP TABLE IF EXISTS `donation_table`;
CREATE TABLE IF NOT EXISTS `donation_table` (
  `donation_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `message` text,
  `amount_to_donate` decimal(10,2) NOT NULL,
  `currency_type` varchar(20) NOT NULL,
  `donation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`donation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation_table`
--

INSERT INTO `donation_table` (`donation_id`, `full_name`, `nic`, `address`, `email`, `country`, `phone_number`, `occupation`, `message`, `amount_to_donate`, `currency_type`, `donation_date`) VALUES
(1, 'TestUser', '2000123456789', 'Galle', 'testuser@gmail.com', 'Sri Lanka', '0712789456', 'student', 'no', '5000.00', 'Sri Lankan Ru', '2023-11-23 03:34:03'),
(2, 'TestUser', '20000147895', 'Galle', 'testuser@gmail.com', 'Sri Lanka', '074458936', 'Student', 'TESTING', '5000.00', 'Sri Lankan Ru', '2023-11-23 04:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `edonation_table`
--

DROP TABLE IF EXISTS `edonation_table`;
CREATE TABLE IF NOT EXISTS `edonation_table` (
  `Edonation_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `message` text,
  `sport_type` varchar(50) NOT NULL,
  `equi_name` text NOT NULL,
  `deliver_method` text NOT NULL,
  `Edonation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Edonation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edonation_table`
--

INSERT INTO `edonation_table` (`Edonation_id`, `full_name`, `nic`, `address`, `email`, `country`, `phone_number`, `occupation`, `message`, `sport_type`, `equi_name`, `deliver_method`, `Edonation_date`) VALUES
(1, 'TestUser', '20001478954', 'Galle', 'testuser@gmail.com', 'Sri Lanka', '0712789456', 'student', 'test', 'Cricket', 'bat', 'bus', '2023-11-23 03:39:50'),
(2, 'TestUser', '20001478954', 'Galle', 'testuser@gmail.com', 'Sri Lanka', '0712789456', 'student', 'test', 'Cricket', 'bat', 'bus', '2023-11-23 03:41:13'),
(3, 'TestUser', '20001478954', 'Galle', 'testuser@gmail.com', 'Sri Lanka', '0712789456', 'student', 'vcx', 'Cricket', 'bcxb', ' bv', '2023-11-23 12:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbldonor`
--

DROP TABLE IF EXISTS `tbldonor`;
CREATE TABLE IF NOT EXISTS `tbldonor` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(200) NOT NULL,
  `Password` varchar(180) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Dob` varchar(100) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Av_leave` varchar(150) NOT NULL,
  `Phonenumber` char(11) NOT NULL,
  `Status` int(1) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `appointment_date` date DEFAULT NULL,
  `epf_no` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `location` varchar(200) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldonor`
--

INSERT INTO `tbldonor` (`emp_id`, `FirstName`, `LastName`, `EmailId`, `Password`, `Gender`, `Dob`, `Department`, `Address`, `Av_leave`, `Phonenumber`, `Status`, `RegDate`, `appointment_date`, `epf_no`, `role`, `location`) VALUES
(2, 'Admin', 'Donation', 'admin@gmail.com', 'b4cc344d25a2efe540adbf2678e2304c', 'Male', '3 February, 1990', 'ICT', '65G,Colombo', '30', '8587944255', 1, '2017-11-10 13:40:02', NULL, '', 'Admin', 'logo.png'),
(22, 'Test', 'User', 'testuser@gmail.com', '5d9c68c6c50ed3d02a2fcf54f63993b6', 'female', '08 November 2023', 'ICT', 'Akurati Kanda Junction, Akuratiya, Baddegama, Galle', '30', '0771234567', 1, '2023-11-23 03:33:24', '2000-11-02', '123', 'Staff', 'NO-IMAGE-AVAILABLE.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
