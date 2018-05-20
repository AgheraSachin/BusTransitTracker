-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 08:39 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Admin_id` int(11) NOT NULL,
  `Admin_email` varchar(50) NOT NULL,
  `Admin_pass` varchar(50) NOT NULL,
  `Admin_sign` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_id`, `Admin_email`, `Admin_pass`, `Admin_sign`) VALUES
(1, 'sachinaghera4@gmail.com', '1234', 'images\\mysign.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bus_info`
--

CREATE TABLE `bus_info` (
  `bus_id` int(30) NOT NULL,
  `bus_name` varchar(50) NOT NULL,
  `from_place` varchar(50) NOT NULL,
  `to_place` varchar(50) NOT NULL,
  `day` varchar(80) NOT NULL,
  `via` varchar(100) NOT NULL,
  `From_time` varchar(50) NOT NULL,
  `To_time` varchar(50) NOT NULL,
  `Via_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_info`
--

INSERT INTO `bus_info` (`bus_id`, `bus_name`, `from_place`, `to_place`, `day`, `via`, `From_time`, `To_time`, `Via_time`) VALUES
(11, 'AHMEDABAD-VAPI', 'AHMEDABAD', 'VAPI', 'SUNDAY,MONDAY,TUESDAY,WEDNESDAY,SATURDAY', 'VADODARA,BHARUCH,SURAT,NAVSARI,VALSAD', '7:00', '14:00', '8:30,10:00,11:00,12:00,13:00'),
(12, 'AHMEDABAD-SURAT', 'AHMEDABAD', 'SURAT', 'SUNDAY,SATURDAY', 'VADODARA,BHARUCH', '10:00', '13:00', '11:30,12:30'),
(13, 'SURAT-KESHOD', 'SURAT', 'KESHOD', 'SUNDAY,SATURDAY', 'BHARUCH,VADODARA,AHMEDABAD,RAJKOT,JUNAGADH', '20:00', '8:00', '22:00,00:30,2:00,3:00,5:30'),
(14, 'SURAT-KESHOD', 'SURAT', 'KESHOD', 'SUNDAY,MONDAY,SATURDAY', 'BHARUCH,VADODARA,AHMEDABAD,RAJKOT,JUNAGADH', '4:00', '15:20', '4:36,5:40,7:45,12:30,14:50'),
(15, 'VAPI-KESHOD', 'VAPI', 'KESHOD', 'SUNDAY,MONDAY,TUESDAY,WEDNESDAY,THRUSDAY,FRIDAY,SATURDAY', 'VALSAD,NAVSARI,SURAT,VADODARA,AHMEDABAD,RAJKOT', '2:43', '16:25', '3:11,4:01,4:55,6:40,8:45,13:25'),
(17, 'SURAT-VAPI', 'SURAT', 'VAPI', 'SUNDAY,MONDAY,WEDNESDAY,THRUSDAY,SATURDAY', 'NAVSARI,VALSAD', '3:00', '5:30', '3:35,4:40'),
(18, 'AHMEDABAD-VADODARA', 'AHMEDABAD', 'VADODARA', 'SUNDAY,MONDAY,TUESDAY,THRUSDAY,FRIDAY,SATURDAY', 'ANAND,NADIAD', '2:00', '4:30', '2:40,3:30'),
(19, 'RAJKOT-VADODARA', 'RAJKOT', 'VADODARA', 'SUNDAY,MONDAY,TUESDAY,WEDNESDAY,THRUSDAY,FRIDAY,SATURDAY', 'SURENDRANAGAR,AHMEDABAD,NADIAD,ANAND', '8:00', '13:30', '9:30,11:50,12:50,13:00'),
(20, 'SOMNATH-SELVAS', 'SOMNATH', 'SELVAS', 'MONDAY,WEDNESDAY', 'KESHOD,JUNAGADH,RAJKOT,AHMEDABAD,SURAT', '1:00', '13:00', '2:00,3:30,5:30,7:30,10:30'),
(21, 'VADODARA-RAJKOT', 'VADODARA', 'RAJKOT', 'SUNDAY,MONDAY,TUESDAY,WEDNESDAY,THRUSDAY,FRIDAY,SATURDAY', 'ANAND,NADIAD,AHEMDABAD', '10:00', '15:00', '11:30,12:10,13:35'),
(22, 'AHMEDABAD-VAPI', 'AHMEDABAD', 'VAPI', 'SUNDAY,MONDAY,TUESDAY,WEDNESDAY,THRUSDAY,FRIDAY,SATURDAY', 'VADODARA,BHARUCH,SURAT,NAVSARI,VALSAD', '9:00', '15:20', '10:45,11:45,12:50,13:35,14:40'),
(23, 'VADODARA-NAVSARI', 'VADODARA', 'NAVSARI', 'MONDAY,TUESDAY,THRUSDAY,FRIDAY', 'BHARUCH,ANKLESHWAR,SURAT,', '7:30', '10:10', '8:35,8:55,9:35'),
(24, 'NAVSARI-VADODARA', 'NAVSARI', 'VADODARA', 'MONDAY,TUESDAY,THRUSDAY,FRIDAY', 'SURAT,ANKLESHWAR,BHARUCH', '8:30', '11:30', '9:05,10:10,10:25'),
(25, 'NAVSARI-VALSAD', 'NAVSARI', 'VALSAD', 'SUNDAY,MONDAY,TUESDAY,THRUSDAY,FRIDAY,SATURDAY', 'CHIKHLI', '9:00', '10:25', '9:55'),
(26, 'VALSAD-NAVSARI', 'VALSAD', 'NAVSARI', 'SUNDAY,MONDAY,TUESDAY,THRUSDAY,FRIDAY,SATURDAY', 'CHIKHLI', '13:00', '14:25', '13:55'),
(27, 'AHMEDABAD-VALSAD', 'AHMEDABAD', 'VALSAD', 'MONDAY,TUESDAY,FRIDAY,SATURDAY', 'ANAND,VADODARA,BHARUCH,ANKLESHWAR,SURAT,NAVSARI,CHIKHLI', '10:00', '16:00', '11:10,11:55,13:00,13:26,14:25,15:05,15:40'),
(28, 'AHMEDABAD-SURAT', 'AHMEDABAD', 'SURAT', 'MONDAY,TUESDAY,THRUSDAY,FRIDAY', 'VADODARA,BHARUCH', '8:00', '12:00', '10:00,11:00'),
(29, 'AHMEDABAD-SURAT', 'AHMEDABAD', 'SURAT', 'SUNDAY,MONDAY,TUESDAY,FRIDAY,SATURDAY', 'VADODARA,BHARUCH', '23:00', '2:30', '00:48,1:38'),
(30, 'AHMEDABAD-SURAT', 'AHMEDABAD', 'SURAT', 'SUNDAY,MONDAY,TUESDAY,WEDNESDAY,THRUSDAY,FRIDAY,SATURDAY', 'VADODARA,BHARUCH', '9:30', '13:30', '11:30,12:30'),
(31, 'AHMEDABAD-SURAT', 'AHMEDABAD', 'SURAT', 'SUNDAY,MONDAY,TUESDAY,WEDNESDAY,THRUSDAY,FRIDAY,SATURDAY', 'VADODARA,BHARUCH', '20:00', '00:10', '22:05,23:10'),
(32, 'SURAT-AHMEDABAD', 'SURAT', 'AHMEDABAD', 'SUNDAY,MONDAY,TUESDAY,WEDNESDAY,THRUSDAY,FRIDAY,SATURDAY', 'BHARUCH,VADODARA', '10:00', '14:00', '11:05,12:20'),
(33, 'SURAT-AHMEDABAD', 'SURAT', 'AHMEDABAD', 'SUNDAY,MONDAY,THRUSDAY,FRIDAY,SATURDAY', 'BHARUCH,VADODARA', '22:00', '2:05', '22:45,23:47'),
(34, 'SURAT-AHMEDABAD', 'SURAT', 'AHMEDABAD', 'MONDAY,TUESDAY,WEDNESDAY,THRUSDAY,SATURDAY', 'BHARUCH,VADODARA', '12:05', '16:10', '13:12,2:25'),
(35, 'SURAT-KESHOD', 'SURAT', 'KESHOD', 'SUNDAY,MONDAY,TUESDAY,WEDNESDAY,FRIDAY,SATURDAY', 'BHARUCH,VADODARA,AHMEDABAD,RAJKOT,JUNAGADH', '13:30', '2:45', '14:16,15:25,17:35,21:55,1:55'),
(36, 'SURAT-KESHOD', 'SURAT', 'KESHOD', 'SUNDAY,MONDAY,TUESDAY,WEDNESDAY,FRIDAY,SATURDAY', 'BHARUCH,VADODARA,AHMEDABAD,RAJKOT,JUNAGADH', '3:10', '15:25', '4:15,5:20,7:25,11:47,14:50'),
(37, 'SURAT-KESHOD', 'SURAT', 'KESHOD', 'SUNDAY,MONDAY,TUESDAY,WEDNESDAY,FRIDAY,SATURDAY', 'BHARUCH,VADODARA,AHMEDABAD,RAJKOT,JUNAGADH', '5:10', '17:25', '6:15,7:20,9:25,13:47,16:50'),
(38, 'SURAT-VALSAD', 'SURAT', 'VALSAD', 'SUNDAY,MONDAY,TUESDAY,WEDNESDAY,FRIDAY,SATURDAY', 'NAVSARI,CHIKHLI', '10:05', '11:40', '10:45,11:10'),
(39, 'SURAT-VALSAD', 'SURAT', 'VALSAD', 'MONDAY,TUESDAY,WEDNESDAY,THRUSDAY,FRIDAY', 'NAVSARI,CHIKHLI', '16:05', '17:35', '16:37,17:02'),
(40, 'SURAT-VALSAD', 'SURAT', 'VALSAD', 'SUNDAY,MONDAY,TUESDAY,WEDNESDAY,THRUSDAY,FRIDAY', 'NAVSARI,CHIKHLI', '8:20', '9:48', '8:55,9:28'),
(41, 'VALSAD-SURAT', 'VALSAD', 'SURAT', 'MONDAY,TUESDAY,THRUSDAY,FRIDAY,SATURDAY', 'CHIKHLI,NAVSARI', '13:30', '15:10', '14:00,14:40'),
(42, 'VALSAD-SURAT', 'VALSAD', 'SURAT', 'SUNDAY,MONDAY,WEDNESDAY,THRUSDAY,SATURDAY', 'CHIKHLI,NAVSARI', '4:15', '5:40', '4:45,5:10'),
(43, 'VALSAD-SURAT', 'VALSAD', 'SURAT', 'SUNDAY,MONDAY,TUESDAY,WEDNESDAY,THRUSDAY,FRIDAY,SATURDAY', 'CHIKHLI,NAVSARI', '11:47', '13:27', '12:10,12:45'),
(44, 'VALSAD-VADODARA', 'VALSAD', 'VADODARA', 'SUNDAY,MONDAY,TUESDAY,WEDNESDAY,FRIDAY', 'NAVSARI,SURAT,ANKLESHWAR,BHARUCH', '9:15', '12:35', '9:55,10:30,11:10,11:30'),
(45, 'VALSAD-VADODARA', 'VALSAD', 'VADODARA', 'SUNDAY,WEDNESDAY,THRUSDAY,FRIDAY,SATURDAY', 'NAVSARI,SURAT,ANKLESHWAR,BHARUCH', '20:25', '23:57', '21:05,21:37,22:43,23:05'),
(46, 'VALSAD-VADODARA', 'VALSAD', 'VADODARA', 'SUNDAY,MONDAY,WEDNESDAY,THRUSDAY,FRIDAY,SATURDAY', 'NAVSARI,SURAT,ANKLESHWAR,BHARUCH', '21:25', '24:57', '22:05,22:37,23:43,24:05'),
(47, 'VALSAD-AHMEDABAD', 'VALSAD', 'AHMEDABAD', 'SUNDAY,MONDAY,WEDNESDAY,THRUSDAY,FRIDAY,SATURDAY', 'NAVSARI,SURAT,ANKLESHWAR,BHARUCH,VADODARA', '20:43', '1:45', '21:16,21:55,22:34,22:45,23:47'),
(48, 'VALSAD-AHMEDABAD', 'VALSAD', 'AHMEDABAD', 'SUNDAY,MONDAY,TUESDAY,WEDNESDAY,THRUSDAY,FRIDAY,SATURDAY', 'NAVSARI,SURAT,ANKLESHWAR,BHARUCH,VADODARA', '8:40', '13:55', '9:15,9:55,10:40,11:00,12:00'),
(49, 'VALSAD-AHMEDABAD', 'VALSAD', 'AHMEDABAD', 'MONDAY,TUESDAY,WEDNESDAY,THRUSDAY,SATURDAY', 'NAVSARI,SURAT,ANKLESHWAR,BHARUCH,VADODARA', '9:40', '14:55', '10:15,10:55,11:40,12:00,13:00'),
(50, 'KESHOD-SURAT', 'KESHOD', 'SURAT', 'MONDAY,TUESDAY,WEDNESDAY,THRUSDAY,SATURDAY', 'JUNAGADH,RAJKOT,AHMEDABAD,VADODARA,BHARUCH', '5:22', '17:00', '5:55,8:20,13:00,14:55,15:45'),
(51, 'KESHOD-SURAT', 'KESHOD', 'SURAT', 'SUNDAY,MONDAY,TUESDAY,WEDNESDAY,THRUSDAY,FRIDAY,SATURDAY', 'JUNAGADH,RAJKOT,AHMEDABAD,VADODARA,BHARUCH', '9:04', '20:38', '9:40,12:15,16:40,18:47,19:40'),
(52, 'KESHOD-SURAT', 'KESHOD', 'SURAT', 'MONDAY,TUESDAY,WEDNESDAY,THRUSDAY,FRIDAY', 'JUNAGADH,RAJKOT,AHMEDABAD,VADODARA,BHARUCH', '10:05', '21:40', '10:40,13:15,17:40,19:49,20:40'),
(53, 'KESHOD-SURAT', 'KESHOD', 'SURAT', 'MONDAY,TUESDAY,WEDNESDAY,THRUSDAY,FRIDAY', 'JUNAGADH,RAJKOT,AHMEDABAD,VADODARA,BHARUCH', '10:05', '21:40', '10:40,13:15,17:40,19:49,20:40'),
(54, 'DAHOD-VADODARA', 'DAHOD', 'VADODARA', 'SUNDAY,MONDAY,TUESDAY,WEDNESDAY,THRUSDAY,FRIDAY', 'GODHRA', '5:50', '8:15', '7:15'),
(55, 'DAHOD-VADODARA', 'DAHOD', 'VADODARA', 'SUNDAY,TUESDAY,THRUSDAY,FRIDAY,SATURDAY', 'GODHRA', '9:48', '12:06', '11:07'),
(56, 'DAHOD-VADODARA', 'DAHOD', 'VADODARA', 'SUNDAY,MONDAY,WEDNESDAY,THRUSDAY,SATURDAY', 'GODHRA', '18:24', '20:45', '19:45'),
(57, 'DAHOD-SURAT', 'DAHOD', 'SURAT', 'SUNDAY,MONDAY,WEDNESDAY,THRUSDAY,SATURDAY', 'GODHRA,VADODARA,ANKLESHWAR,', '23:23', '3:30', '12:35,1:34,2:35'),
(58, 'DAHOD-SURAT', 'DAHOD', 'SURAT', 'SUNDAY,MONDAY,WEDNESDAY,THRUSDAY,SATURDAY', 'GODHRA,VADODARA,BHARUCH,ANKLESHWAR,', '14:50', '19:40', '16:05,17:20,18:30,18:50');

-- --------------------------------------------------------

--
-- Table structure for table `bus_pass`
--

CREATE TABLE `bus_pass` (
  `Pass_id` int(10) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Birth_date` varchar(50) NOT NULL,
  `Pass_type` varchar(20) NOT NULL,
  `Id__proof` varchar(1500) NOT NULL,
  `Photo` varchar(1500) NOT NULL,
  `School_name` varchar(100) NOT NULL,
  `School_address` varchar(300) NOT NULL,
  `Bonofied` varchar(1500) NOT NULL,
  `From_place` varchar(50) NOT NULL,
  `To_place` varchar(50) NOT NULL,
  `Pass_issue_date` varchar(30) NOT NULL,
  `Duration` int(20) NOT NULL,
  `Expire` varchar(50) NOT NULL,
  `Bus_type` varchar(200) NOT NULL,
  `Icard_Id` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_pass`
--

INSERT INTO `bus_pass` (`Pass_id`, `First_name`, `Last_name`, `email`, `Address`, `Gender`, `Birth_date`, `Pass_type`, `Id__proof`, `Photo`, `School_name`, `School_address`, `Bonofied`, `From_place`, `To_place`, `Pass_issue_date`, `Duration`, `Expire`, `Bus_type`, `Icard_Id`) VALUES
(274, 'Amit', 'patel', 'amp@gmail.com', 'QQQQ', 'Male', '2017-04-05', 'student pass', 'API/Nid/1ass2.jpg', 'API/Npic/3b5ce417[1].jpg', 'GMERS', 'MMMM', 'API/Nbonofied/3D_image277.jpg', 'Ahmedabad', 'Kheralu', '16/04/2017', 90, '2017-07-15', 'Local pass', 18864),
(275, 'kaushik', 'pandya', 'kp@gmail.com', 'vvv', 'Male', '2017-04-04', 'student pass', 'API/Nid/2zs90s8[1].jpg', 'API/Npic/2zs90s8[1].jpg', 'Say', 'sai', 'API/Nbonofied/2zs90s8[1].jpg', 'Ahmedabad', 'Ahmedabad', '16/04/2017', 60, '2017-06-15', 'Express Pass', 4293);

-- --------------------------------------------------------

--
-- Table structure for table `bus_pass_passenger`
--

CREATE TABLE `bus_pass_passenger` (
  `Pass_id` int(10) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Birth_date` varchar(50) NOT NULL,
  `Pass_type` varchar(20) NOT NULL,
  `Id__proof` varchar(50) NOT NULL,
  `Photo` varchar(50) NOT NULL,
  `From_place` varchar(50) NOT NULL,
  `To_place` varchar(50) NOT NULL,
  `Pass_issue_date` varchar(30) NOT NULL,
  `Duration` int(20) NOT NULL,
  `Expire` varchar(50) NOT NULL,
  `Bus_type` varchar(200) NOT NULL,
  `Icard_Id` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_pass_passenger`
--

INSERT INTO `bus_pass_passenger` (`Pass_id`, `First_name`, `Last_name`, `email`, `Address`, `Gender`, `Birth_date`, `Pass_type`, `Id__proof`, `Photo`, `From_place`, `To_place`, `Pass_issue_date`, `Duration`, `Expire`, `Bus_type`, `Icard_Id`) VALUES
(107, 'Aarti', 'patel', 'aap@gmail.com', 'QQQQ', 'Female', '2017-04-10', 'passenger pass', 'API/Nid/1ass2.jpg', 'API/Npic/3b5ce417[1].jpg', 'Ahmedabad', 'Kheralu', '16/04/2017', 90, '2017-07-15', 'Local pass', 16337),
(108, 'kaushik1', 'pandyaq', 'kpq@gmail.com', 'vvv', 'Male', '2017-04-04', 'passenger pass', 'API/Nid/2zs90s8[1].jpg', 'API/Npic/2zs90s8[1].jpg', 'Ahmedabad', 'Rajkot', '16/04/2017', 60, '2017-06-15', 'Express Pass', 9596);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(50) NOT NULL,
  `city_name` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'SOMNATH'),
(2, 'KESHOD'),
(3, 'JUNAGADH'),
(4, 'RAJKOT'),
(5, 'SURENDRANAGAR'),
(6, 'AHMEDABAD'),
(7, 'NADIAD'),
(8, 'ANAND'),
(9, 'VADODARA'),
(10, 'BHARUCH'),
(11, 'ANKLESHWAR'),
(12, 'SURAT'),
(13, 'NAVSARI'),
(14, 'VALSAD'),
(15, 'VAPI'),
(16, 'MUMBAI');

-- --------------------------------------------------------

--
-- Table structure for table `fare`
--

CREATE TABLE `fare` (
  `id` int(11) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fare`
--

INSERT INTO `fare` (`id`, `price`) VALUES
(0, '350');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `Notification_id` int(10) NOT NULL,
  `Notification_content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`Notification_id`, `Notification_content`) VALUES
(14, 'Bus No:14 Cancelled'),
(15, 'Welcome To BTT......');

-- --------------------------------------------------------

--
-- Table structure for table `occassional_booking`
--

CREATE TABLE `occassional_booking` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Phone` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Bus_Type` varchar(60) NOT NULL,
  `No_Of_bus` int(10) NOT NULL,
  `Date_Of_Journey` varchar(30) NOT NULL,
  `Timing` varchar(30) NOT NULL,
  `From_place` varchar(50) NOT NULL,
  `To_place` varchar(50) NOT NULL,
  `Order_id` varchar(50) NOT NULL,
  `Pay_Amount` varchar(50) DEFAULT NULL,
  `Response` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `occassional_booking`
--

INSERT INTO `occassional_booking` (`id`, `First_Name`, `Last_Name`, `Address`, `Phone`, `Email`, `Bus_Type`, `No_Of_bus`, `Date_Of_Journey`, `Timing`, `From_place`, `To_place`, `Order_id`, `Pay_Amount`, `Response`) VALUES
(78, 'Sachin', 'Aghera', 'Near Ram Mandir', 95959555, 'sachinaghera4@gmail.com', 'SLEEPER AC', 8, '04/19/2017', '10:00', 'Surat', 'Keshod', 'BTT24204', '5000', 'Confirm'),
(79, 'Rp', 'patel', 'rp@gmail.com', 98989898, 'sachinaghera4@gmail.com', 'nullSLEEPER AC,SITTING,', 4, '4/13/2017', '16:58', 'Surat', 'Keshod', 'BTT5610', '', ''),
(80, 'ravina', 'patel', 'very villege', 6868686, 'sachinaghera4@gmail.com', 'nullSLEEPER AC,SITTING,', 98988, '04/13/2017', '19:36', 'Surat', 'Keshod', 'BTT865', '', ''),
(81, 'Amita', 'Patel', 'XYZ,Steert', 12345, 'sachinaghera4@gmail.com', 'VOLVO,SLEEPER AC', 4, '05/17/2017', '13:00', 'Ahmedabad', 'Rajkot', 'BTT1486', '5000', 'Confirm');

-- --------------------------------------------------------

--
-- Table structure for table `renew_pass`
--

CREATE TABLE `renew_pass` (
  `Pass_id` int(10) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Birth_date` varchar(50) NOT NULL,
  `Pass_type` varchar(20) NOT NULL,
  `Id__proof` varchar(50) NOT NULL,
  `Photo` varchar(50) NOT NULL,
  `School_name` varchar(100) NOT NULL,
  `School_address` varchar(300) NOT NULL,
  `Bonofied` varchar(500) NOT NULL,
  `From_place` varchar(50) NOT NULL,
  `To_place` varchar(50) NOT NULL,
  `Pass_issue_date` varchar(30) NOT NULL,
  `Duration` int(20) NOT NULL,
  `Expire` varchar(50) NOT NULL,
  `Bus_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `renew_pass`
--

INSERT INTO `renew_pass` (`Pass_id`, `First_name`, `Last_name`, `email`, `Address`, `Gender`, `Birth_date`, `Pass_type`, `Id__proof`, `Photo`, `School_name`, `School_address`, `Bonofied`, `From_place`, `To_place`, `Pass_issue_date`, `Duration`, `Expire`, `Bus_type`) VALUES
(217, 'kaushik', 'pandya', 'kp@gmail.com', 'vvv', 'Male', '2017-04-04', 'student pass', 'API/Nid/2zs90s8[1].jpg', 'API/Npic/2zs90s8[1].jpg', 'Say', 'sai', 'API/Rbonofied/', 'Talaja', 'Talaja', '16/04/2017', 60, '2017-06-15', ''),
(218, 'Amit', 'patel', 'amp@gmail.com', 'QQQQ', 'Male', '2017-04-05', 'student pass', 'API/Nid/1ass2.jpg', 'API/Npic/3b5ce417[1].jpg', 'GMERS', 'MMMM', 'API/Rbonofied/2zs90s8[1].jpg', 'Ankleshwar', 'Ankleshwar', '16/04/2017', 60, '2017-06-15', ''),
(219, 'Amit', 'patel', 'amp@gmail.com', 'QQQQ', 'Male', '2017-04-05', 'student pass', 'API/Nid/1ass2.jpg', 'API/Npic/3b5ce417[1].jpg', 'GMERS', 'MMMM', 'API/Rbonofied/2zs90s8[1].jpg', 'Ankleshwar', 'Ankleshwar', '16/04/2017', 60, '2017-06-15', ''),
(220, 'Amit', 'patel', 'amp@gmail.com', 'QQQQ', 'Male', '2017-04-05', 'student pass', 'API/Nid/1ass2.jpg', 'API/Npic/3b5ce417[1].jpg', 'GMERS', 'MMMM', 'API/Rbonofied/2zs90s8[1].jpg', 'Ankleshwar', 'Ankleshwar', '16/04/2017', 60, '2017-06-15', ''),
(221, 'Amit', 'patel', 'amp@gmail.com', 'QQQQ', 'Male', '2017-04-05', 'student pass', 'API/Nid/1ass2.jpg', 'API/Npic/3b5ce417[1].jpg', 'GMERS', 'MMMM', 'API/Rbonofied/2zs90s8[1].jpg', 'Ankleshwar', 'Ankleshwar', '16/04/2017', 60, '2017-06-15', ''),
(222, 'Amit', 'patel', 'amp@gmail.com', 'QQQQ', 'Male', '2017-04-05', 'student pass', 'API/Nid/1ass2.jpg', 'API/Npic/3b5ce417[1].jpg', 'GMERS', 'MMMM', 'API/Rbonofied/.profig.os', 'Ankleshwar', 'Ankleshwar', '16/04/2017', 60, '2017-06-15', ''),
(223, 'Amit', 'patel', 'amp@gmail.com', 'QQQQ', 'Male', '2017-04-05', 'student pass', 'API/Nid/1ass2.jpg', 'API/Npic/3b5ce417[1].jpg', 'GMERS', 'MMMM', 'API/Rbonofied/.profig.os', 'Ankleshwar', 'AnkleshwarQq', '16/04/2017', 60, '2017-06-15', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Age` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Date_of_Journey` varchar(50) NOT NULL,
  `Start_point` varchar(50) NOT NULL,
  `End_point` varchar(50) NOT NULL,
  `Fare` varchar(50) NOT NULL,
  `Bus_Name` varchar(50) NOT NULL,
  `Seta_No` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `Name`, `Age`, `Gender`, `Email`, `Date_of_Journey`, `Start_point`, `End_point`, `Fare`, `Bus_Name`, `Seta_No`) VALUES
(63, 'xzxx', '21', 'Male', 'sachinaghera4@gmail.com', '05/27/2017', 'AHMEDABAD', 'RAJKOT', '369', 'VAPI-KESHOD', '6');

-- --------------------------------------------------------

--
-- Table structure for table `tracking_1`
--

CREATE TABLE `tracking_1` (
  `city_id` int(250) NOT NULL,
  `city_name` varchar(511) NOT NULL,
  `lat` varchar(511) NOT NULL,
  `longi` varchar(511) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracking_1`
--

INSERT INTO `tracking_1` (`city_id`, `city_name`, `lat`, `longi`) VALUES
(1, 'SOMNATH', '20.9060022', '70.38437210000006'),
(2, 'KESHOD', '21.2997164', '70.2492882'),
(3, 'JUNAGADH', '21.522184', '70.45787680000001'),
(4, 'RAJKOT', '22.3038945', '70.8021599'),
(5, 'SURENDRANAGAR', '22.720132', '71.649536'),
(6, 'AHMEDABAD', '23.022505', '72.5713621'),
(7, 'NADIAD', '22.6915853', '72.86336349999999'),
(8, 'ANAND', '22.5454963', '72.9519622'),
(9, 'VADODARA', '22.3071588', '73.18121870000004'),
(10, 'BHARUCH', '21.7051358', '72.99587480000002'),
(11, 'ANKLESHWAR', '21.6264236', '73.01519840000003'),
(12, 'SURAT', '21.1702401', '72.8310607'),
(13, 'NAVSARI', '20.9467019', '72.95203479999998'),
(14, 'VALSAD', '20.5992349', '72.9342451'),
(15, 'VAPI', '20.3893155', '72.91062020000004'),
(16, 'MUMBAI', '19.0759837', '72.8776559'),
(17, 'CHIKHLI', '20.75792', '73.063202'),
(18, 'VIRPUR', '21.845729', '70.697518'),
(19, 'HIMMATNAGAR', '23.6036268', '72.96394609999993'),
(20, 'VIRAMGAM', '23.123638', '72.052742');

-- --------------------------------------------------------

--
-- Table structure for table `tracking_2`
--

CREATE TABLE `tracking_2` (
  `id` int(200) NOT NULL,
  `lat` varchar(511) NOT NULL,
  `longi` varchar(511) NOT NULL,
  `IMEI` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracking_2`
--

INSERT INTO `tracking_2` (`id`, `lat`, `longi`, `IMEI`) VALUES
(31, '19.0759837', '72.8776559', 4),
(32, '19.0759837', '72.8776559', 900),
(33, '21.1817365', '72.8244067', 700);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `user_id` int(10) NOT NULL,
  `user_fname` varchar(30) NOT NULL,
  `user_lname` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_phone` int(20) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_city` varchar(30) NOT NULL,
  `user_birthdate` varchar(30) NOT NULL,
  `user_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `user_fname`, `user_lname`, `user_email`, `user_phone`, `user_password`, `user_gender`, `user_city`, `user_birthdate`, `user_address`) VALUES
(1, 'Sachin', 'Aghera', 'sachinaghera4@gmail.com', 2147483647, '12345', 'Male', 'Keshod', '24-01-1996', 'Navsari'),
(83, 'Aman', 'Patel', 'amanpatel@gmail.com', 2147483647, 'sa12345', 'Male', 'Ahmedabad', '15/8/1953', 'Xyz,Street'),
(84, 'Savan', 'Aghera', 'savan@gmail.com', 2147483647, '123456', 'Male', 'Morvi', '5/6/1991', 'Nava bazar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `bus_info`
--
ALTER TABLE `bus_info`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `bus_pass`
--
ALTER TABLE `bus_pass`
  ADD PRIMARY KEY (`Pass_id`);

--
-- Indexes for table `bus_pass_passenger`
--
ALTER TABLE `bus_pass_passenger`
  ADD PRIMARY KEY (`Pass_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `fare`
--
ALTER TABLE `fare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`Notification_id`);

--
-- Indexes for table `occassional_booking`
--
ALTER TABLE `occassional_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renew_pass`
--
ALTER TABLE `renew_pass`
  ADD PRIMARY KEY (`Pass_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracking_1`
--
ALTER TABLE `tracking_1`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `tracking_2`
--
ALTER TABLE `tracking_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bus_info`
--
ALTER TABLE `bus_info`
  MODIFY `bus_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `bus_pass`
--
ALTER TABLE `bus_pass`
  MODIFY `Pass_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;
--
-- AUTO_INCREMENT for table `bus_pass_passenger`
--
ALTER TABLE `bus_pass_passenger`
  MODIFY `Pass_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `Notification_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `occassional_booking`
--
ALTER TABLE `occassional_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `renew_pass`
--
ALTER TABLE `renew_pass`
  MODIFY `Pass_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `tracking_1`
--
ALTER TABLE `tracking_1`
  MODIFY `city_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tracking_2`
--
ALTER TABLE `tracking_2`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
