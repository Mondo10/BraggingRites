-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2015 at 06:02 PM
-- Server version: 5.1.63
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `s_aanderson3_games`
--

-- --------------------------------------------------------

--
-- Table structure for table `beer`
--

CREATE TABLE IF NOT EXISTS `Games` (
  `GameID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `ESRB` varchar(30) NOT NULL,
  `Genre` varchar(20) NOT NULL,
  `mcScore` int(11) NOT NULL DEFAULT '0',
  `Local` char(1) NOT NULL,
  `ReleaseDate` date DEFAULT NULL,
  PRIMARY KEY (`GameID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `game`
--

INSERT INTO `Games` (`GameID`, `Name`, `ESRB`, `Genre`, `mcScore`, `ReleaseDate`) VALUES
(1, 'Monster Hunter World', 'T', 'Action RPG',90,'2018-01-26'),
(2, 'God Of War', 'M', 'Action Adventure',94,'2018-01-26'),
(3, 'Sea Of Thieves', 'T', 'RPG',68,'2018-03-28'),
(4, 'CS:GO', 'M', 'FPS',83,'2012-08-21'),
(5, 'League of Legends', 'T', 'MOBA',78,'2009-10-27'),
(6, 'Final Fantasy XV', 'T', 'Action RPG',81,'2016-09-29'),
(7, 'Pokemon Sun and Moon', 'E', 'RPG',87,'2016-09-18'),
(8, 'Bloodborne', 'M', 'Fantasy Action',92,'2015-03-24'),
(9, 'Fortnite', 'T', 'third Person Shooter',77,'2017-07-21'),
(10, 'Spiderman', 'T', 'Action Adventure',90,'2018-08-07'),
(11, 'Divinity Original Sin 2', 'M', 'RPG',93,'2017-08-14'),
(12, 'Spyro Year of the Dragon', 'E', 'Platformer',91,'2000-10-23'),
(13, 'Kingdom Hearts 2', 'E', 'Action RPG',87,'2006-03-28'),
(14, 'Dragonball Z Fighter', 'T', '2D fighter',87,'2018-01-26'),
(15, 'Def Jam Fight for NYC', 't', 'fighting wrestling',83,'2004-08-04');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
