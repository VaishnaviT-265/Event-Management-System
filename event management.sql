-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2022 at 04:09 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `event management`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE IF NOT EXISTS `gallary` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `event` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`ID`, `event`, `Date`, `image`) VALUES
(1, 'Environment Awarness', '24-06-21', 'n1.jpg n2.jfif n3.jfif n4.jpg      '),
(19, 'Basketball', '10-07-2021', 'basket2.jpg basket4.jfif        '),
(20, 'Football', '07-07-2021', 'foot1.jpg foot2.jpg foot3.jpg foot4.jpg      '),
(21, 'Environment Awarness', '25-06-2021', 'f1.jpg         ');

-- --------------------------------------------------------

--
-- Table structure for table `guest lecture`
--

CREATE TABLE IF NOT EXISTS `guest lecture` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(50) NOT NULL,
  `industry` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Venue` varchar(50) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Beneficiary` varchar(50) NOT NULL,
  `coordinator` varchar(50) NOT NULL,
  `Year` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `guest lecture`
--

INSERT INTO `guest lecture` (`ID`, `Fname`, `industry`, `Type`, `Date`, `Subject`, `Venue`, `Time`, `Beneficiary`, `coordinator`, `Year`) VALUES
(7, 'MS.Pawar Vaishnavi', 'Infotech', 'Guest lecture', '30-06-21', 'IOT', 'Seminar Hall', '10:33', 'TYCM-B', 'Prof.G.N.Jorvekar', '2020-21'),
(3, 'MS.Pawar Mayuri', 'Infotech', 'IT', '30-06-21', 'Expert Lecture', 'Seminar Hall', '16:25', 'TYCM-B', 'Prof.S.A.Patil', '2020-21'),
(9, 'Ms.Teke Vaishnavi', 'Infotech', 'Guest lecture', '25-06-2021', 'IOT', 'Seminar Hall', '14:12', 'TYCM-B', 'Prof.S.A.Patil', '2020-21'),
(8, 'Prof.Dananjay kadam', 'TCS', 'Guest lecture', '30-06-2021', 'Employ ability', 'Seminar Hall', '11:38', 'TYCM A and B', 'Prof.S.A.Patil', '2020-21');

-- --------------------------------------------------------

--
-- Table structure for table `record_d8`
--

CREATE TABLE IF NOT EXISTS `record_d8` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Person_name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Mobile No` varchar(20) NOT NULL,
  `Topic` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Semester` varchar(20) NOT NULL,
  `Co-Ordinator` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Beneficiaries` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `record_d8`
--

INSERT INTO `record_d8` (`ID`, `Person_name`, `Address`, `Mobile No`, `Topic`, `Course`, `Semester`, `Co-Ordinator`, `Date`, `Beneficiaries`, `year`) VALUES
(4, 'Ms.Mayuri Wakte', 'Kopargaon', '9276580213', 'My Story Board', 'CPP-22050', 'EVEN 2I', 'Ms.Vaishnavi Pawar', '2021-04-15', 'TYCM-32,SYCM-30', '0'),
(20, 'Mr.Prakash  Admane', 'Founder & Director Yushh Ltd,UK', '9824657820', 'Expert Lecture', 'CPP-22050', 'EVEN 4I', 'S.K.B.P Polytechnic', '11-07-2020', '61 Participants', '2020-21'),
(21, 'Ms.Vaishnavi Pawar', 'kumbhari', '7744829436', 'Expert Lecture', 'CPP-22050', 'EVEN 4I', 'Prof.Y.S.Modhe', '25-06-2021', '61 Participants', '2020-21'),
(13, 'Ms.Vaishnavi Pawar', 'kumbhari', '7744829436', 'Expert Lecture', 'CPP-22050', 'ODD 3I', 'Prof.Y.S.Modhe', '24-06-2021', 'TYCM-32 ,SYCM-30 ', '2020-21');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(50) NOT NULL,
  `Dept` varchar(50) NOT NULL,
  `Post` varchar(50) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `FullName`, `Dept`, `Post`, `Username`, `Password`) VALUES
(1, 'vaishnavi pawar', 'Computer Technology', 'Teacher', 'vaishnavi', '12345'),
(3, 'prasad', 'Computer Technology', 'Teacher', 'prasad', 'prsad'),
(49, 'vaishnavi ', 'Computer Technology', 'Hod', 'vaishnavi', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Std_name` varchar(50) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Event` varchar(50) NOT NULL,
  `Winner` varchar(50) NOT NULL,
  `Venue` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`ID`, `Std_name`, `Branch`, `Class`, `Event`, `Winner`, `Venue`, `Date`, `year`) VALUES
(4, 'Ms.Vaishnavi Pawar', 'Computer Technology', 'TYCM-B', 'Paper Presentation', 'Winner', 'Seminar Hall', '09-06-2021', '2020-21'),
(2, 'Ms.kajal Somavanshi', 'Computer Technology', 'TYCM-B', 'Chess', 'Winner', 'Seminar Hall', '10-07-2021', '2020-21'),
(9, 'Ms.Teke vaishnavi', 'Computer Technology', 'TYCM-B', 'Football', 'Runner Up', 'Sanjivani K.B.P Polytechnic', '14-07-2021', '2020-21'),
(10, 'Ms.Nale vaishnavi', 'Computer Technology', 'TYCM-B', 'Project Compitition', 'Runner Up', 'Sanjivani K.B.P Polytechnic', '30-06-2021', '2020-21'),
(11, 'Prasad Pawar', 'Computer Technology', 'TYCM-B', 'Paper Presentation', 'Third', 'Sanjivani K.B.P Polytechnic', '26-06-2021', '2020-21');

-- --------------------------------------------------------

--
-- Table structure for table `sport event`
--

CREATE TABLE IF NOT EXISTS `sport event` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `Event` varchar(50) NOT NULL,
  `Venue` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `Beneficiaries` varchar(70) NOT NULL,
  `time` varchar(50) NOT NULL,
  `coordinator` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `sport event`
--

INSERT INTO `sport event` (`ID`, `Event`, `Venue`, `Date`, `year`, `Beneficiaries`, `time`, `coordinator`) VALUES
(31, 'Project Compitition', 'Seminar Hall', '30-06-2021', '2020-21', '61 Participants', '14:15', 'Prof.G.N.Jorvekar'),
(30, 'Cricket', 'sanjivani collage play Ground', '10-07-2021', '2020-21', 'All', '11:35', 'Prof.G.N.Jorvekar'),
(29, 'Paper Presentation', 'Seminar Hall', '09-07-2021', '2020-21', 'TYCM-32 ,SYCM-30 ', '02:31', 'Prof.Y.S.Modhe'),
(27, 'Chess', 'sanjivani collage play Ground', '10-07-2021', '2020-21', 'TYCM-32 ,SYCM-30 ', '02:31', 'Prof.Y.S.Modhe'),
(26, 'Badminton', 'sanjivani collage play Ground', '30-06-2021', '2020-21', 'TYCM-32 ,SYCM-30 ', '11:31', 'Prof.S.A.Patil');
