-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2016 at 07:23 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `technothon`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(700) NOT NULL,
  `subname` varchar(400) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `name`, `subname`) VALUES
(1, 'CE/IT', 'Cyber World'),
(2, 'CIVIL', 'Civil Station'),
(3, 'EC', 'Electro Spheare'),
(4, 'MECH/AUTO', 'Mech Mania'),
(5, 'ELECTRICAL', 'Electro Zone');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(700) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `name_2` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `name`) VALUES
(9, 'A. D. PATEL INSTITUTE OF TECHNOLOGY, KARAMSAD'),
(14, 'AHMEDABAD INSTITUTE OF TECHNOLOGY, OGNAJ-GOTA, AHMEDABAD'),
(22, 'B. H. GARDI COLLEGE OF ENGINEERING & TECHNOLOGY, ANANDPAR TAL: KALAWAD'),
(13, 'BABARIA INSTITUTE OF TECHNOLOGY, VARNAMA, VADODARA'),
(6, 'BIRLA VISHVAKARMA MAHA VIDHYALAYA, VALLABHVIDYANAGAR (GIA)'),
(10, 'BIRLA VISHVAKRMA MAHA VIDHYLAYA, VALLBHVIDYANAGAR'),
(8, 'CHAROTAR INSTITUTE OF TECHNOLOGY, CHANGA, DIST. ANAND'),
(7, 'G. H. PATEL COLLEGE OF ENGINEERING & TECHNOLOGY, V. V. NAGAR'),
(19, 'GANDHINAGAR INSTITITE OF TECHNOLOGY, GANDHINAGAR'),
(4, 'GOVERNMENT ENGINEERING COLLEGE, CHANDKHEDA, GHANDHINAGAR'),
(3, 'GOVERNMENT ENGINEERING COLLEGE, MODASA'),
(5, 'GOVERNMENT ENGINEERING COLLEGE, SEC-28, GANDHINAGAR'),
(20, 'HASMUKH GOSWAMI COLLEGE OF ENGINEERING, A/P: VAHELAL'),
(16, 'INDUS INSTITUTE OF TECHNOLOGY & ENGINEERING, RANCHARDA, AHMEDABAD'),
(17, 'KALOL INSTITUTE OF TECHNOLOGY, KALOL'),
(11, 'L. C. INSTITUTE OF TECH BHANDU, MEHSANA'),
(2, 'L. D. ENGINEERING COLLEGE , AHMEDABAD'),
(21, 'L. J. INSTITUTE OF TECHNOLOGY & ENGINEERING, SARKHEJ, AHMEDABAD'),
(15, 'LEELABEN DASHRATHBHAI RAMDAS PATEL INST. OF TECH. & RESEARCH, GANDHINAGAR'),
(23, 'NARNARAYAN SHASTRI INSTITUTE OF TECHNOLOGY, JETLPUR, AHMEDABAD'),
(12, 'PARUL INSTITUTE OF ENGG. AND TECHNOLOGY, LIMDA, VAGHODIA'),
(18, 'SAFFRONY, S. P. B. PATEL INST. OF TECH, AHMEDABAD-MAHESANA HWY. LINCH'),
(24, 'VIDYABHARTI TRUST, INSTITUTE OF TECHNOLOGY & RESEARCH, UMRAKH, BARDOLI');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(700) NOT NULL,
  `email` varchar(700) NOT NULL,
  `phone` double NOT NULL,
  `subject` varchar(700) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subject` (`subject`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(1, 'pokar ankit shantilal', 'apokar1995@gmail.com', 9925310517, 'Enquiry', 'Lorem Ipsum is inting and typesetting in simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the is dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. '),
(2, 'Ankit', 'apokar1995@gmail.com', 7041896837, 'checking', 'Lorem Ipsum is inting and typesetting in simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the is dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. '),
(4, 'Ankit', 'komalprajapati1211@gmail.com', 7041896837, 'myFirst Email For Admin', 'em Ipsum is inting and typesetting in simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the is dummy '),
(6, 'Ankit', 'dev@gmail.com', 9727658822, 'dsaa', 'ing and typesetting in simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the is dummy text ever since the 1500s,'),
(9, 'Ankit', 'apokar1995@gmail.com', 9925310517, 'fddd', 'ing and typesetting in simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the is dummy text ever since the 1500s,'),
(11, 'Ankit', 'komalprajapati1211@gmail.com', 9727658822, 'gbgbg', 'vs,scs,lsslla'),
(13, 'pokar ankit shantilal', 'dev@gmail.com', 9727658822, 'assss', 'ing and typesetting in simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the is dummy text ever since the 1500s,'),
(14, 'pokar ankit shantilal', 'dev@gmail.com', 9727658822, 'dwwtr', 'y text of the printing and typesetting industry. Lorem Ipsum has been the is dummy text ever since the 1500s, when an unknown printer took a gall'),
(16, 'pokar ankit shantilal', 'komalprajapati1211@gmail.com', 255, 'dsaadsa', 'y text of the printing and typesetting industry. Lorem Ipsum has been the is dummy text ever since the 1500s, when an unknown printer took a gall'),
(18, 'pokar ankit shantilal', 'dev@gmail.com', 255, 'checkingas', 'y text of the printing and typesetting industry. Lorem Ipsum has been the is dummy text ever since the 1500s, when an unknown printer took a gall'),
(20, 'pokar ankit shantilal', 'dev@gmail.com', 9727658822, 'checkingawq', 'y text of the printing and typesetting industry. Lorem Ipsum has been the is dummy text ever since the 1500s, when an unknown printer took a gall'),
(21, 'pokar ankit shantilal', 'dadadd@gmail.com', 9925310517, 'ngfv', 'my text of the printing and typesetting industry. Lorem Ipsum has been the is dummy text ever since the 1500s, when an unknown printer took a '),
(25, 'Ankit', 'komalprajapati1211@gmail.com', 7041896837, 'hhttyy', 'Dragon_Blade_(2015)_Dubbed_In_Hindi_BluRay_by_-IPagal.CoM(1)'),
(26, 'pokar ankit shantilal', 'komalprajapati1211@gmail.com', 255, 'checkingasqssd', 'Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(700) NOT NULL,
  `branch` varchar(700) NOT NULL,
  `fees` double NOT NULL,
  `member` int(3) NOT NULL,
  `details` text NOT NULL,
  `path` varchar(700) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `path` (`path`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `branch`, `fees`, `member`, `details`, `path`) VALUES
(3, 'Crazy C', 'ce/it', 50, 3, 'pdf/130903106012.pdf', 'upload/CrazyC.JPG'),
(4, 'Lan Gaming', 'ce/it', 30, 1, 'pdf/130903106012.pdf', 'upload/LG.JPG'),
(5, 'Design Your Idea', 'ce/it', 60, 2, 'pdf/130903106012.pdf', 'upload/DYI.JPG'),
(6, 'Code Master', 'ce/it', 70, 1, 'pdf/130903106012.pdf', 'upload/CM.JPG'),
(7, 'Error Recovery', 'ce/it', 100, 1, 'pdf/130903106012.pdf', 'upload/Error.JPG'),
(8, 'Poster Representation', 'ce/it', 120, 1, 'pdf/130903106012.pdf', 'upload/TMEP.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'technothon.gec@gmail.com', 'tecnothon.gec');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(120) NOT NULL,
  `event` varchar(700) NOT NULL,
  `fees` double NOT NULL,
  `enNumber` double NOT NULL,
  `branch` varchar(700) NOT NULL,
  `email` varchar(700) NOT NULL,
  `phone` double NOT NULL,
  `cName` varchar(700) NOT NULL,
  `tmember1` varchar(500) NOT NULL,
  `tmember2` varchar(500) NOT NULL,
  `tmember3` varchar(500) NOT NULL,
  `tmember4` varchar(500) NOT NULL,
  `tmember5` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `registration`
--

