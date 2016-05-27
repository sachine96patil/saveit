-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2016 at 08:37 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `new`
--

-- --------------------------------------------------------

--
-- Table structure for table `economics`
--

CREATE TABLE IF NOT EXISTS `economics` (
  `Sr no.` int(11) NOT NULL AUTO_INCREMENT,
  `Title1` text NOT NULL,
  `User1` text NOT NULL,
  `Title2` text NOT NULL,
  `User2` text NOT NULL,
  PRIMARY KEY (`Sr no.`),
  FULLTEXT KEY `Title1` (`Title1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `economics`
--

INSERT INTO `economics` (`Sr no.`, `Title1`, `User1`, `Title2`, `User2`) VALUES
(5, 'fsafasfas', 'sXdsd', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `geography`
--

CREATE TABLE IF NOT EXISTS `geography` (
  `Sr no.` int(11) NOT NULL AUTO_INCREMENT,
  `Title1` text NOT NULL,
  `User1` text NOT NULL,
  `Title2` text NOT NULL,
  `User2` text NOT NULL,
  PRIMARY KEY (`Sr no.`),
  FULLTEXT KEY `Title1` (`Title1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `geography`
--

INSERT INTO `geography` (`Sr no.`, `Title1`, `User1`, `Title2`, `User2`) VALUES
(6, 'fsafasfas', 'sXdsd', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `Sr no.` int(11) NOT NULL AUTO_INCREMENT,
  `Title1` text NOT NULL,
  `User1` text NOT NULL,
  PRIMARY KEY (`Sr no.`),
  UNIQUE KEY `Sr no.` (`Sr no.`),
  FULLTEXT KEY `User1` (`User1`),
  FULLTEXT KEY `Title1` (`Title1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`Sr no.`, `Title1`, `User1`) VALUES
(11, 'Gmail island', 'March 28, 1979: A meltdown at Three Mile Island in Dauphin County, Pennsylvania resulted in the worst accident ever at a U.S. nuclear power plant. The meltdown started because a valve inside one of the reactors was mistakenly left open, causing over two million gallons of nuclear coolant to boil over and escape. The initial radiation level of water around the plant was 300 times legal levelsâ€”radioactive gases and iodine were also released into the atmosphere, though only at about the level of a chest X-ray. While 140,000 residents evacuated the area, 98 percent returned to their homes within three weeks, and none died of cancer caused by the meltdown. Cleanup of Three Mile Island took 14 years and cost $1 billion, and the accident slowed the growth of the nuclear power industry. While one Three Mile Island reactor was shut down completely, the other is still running today.'),
(12, 'Apple first ipad', 'April 3, 2010: Apple released its first generation iPad in the United States. The tablet, which could shoot video, take photos, play music and surf the web, combined the design of the failed Newton PDA with the mobile capabilities of the iPhone and the iOS operating system. Critics praised the software, user interface and selection of apps, but as always criticized Appleâ€™s closed system. Apple sold one million iPads in the first month of release, including 300,000 on the first day. Within 90 days , 50 percent of Fortune 100 companies used the iPad. Other tablets eventually became part of the Apple family, namely the iPad Mini (released in 2012) and the thinner iPad Air (released in 2013). While the iPad didnâ€™t quite kill the laptop as predicted, itâ€™s now ubiquitous in boardrooms and living rooms alike.'),
(13, 'adolf hitler main kampf', 'Herodotus (Book VII, 213218) tells the story of how a Greek traitor, Ephialtes, helped the Persian\r\ninvaders at the Battle of Thermopylae (480 B.C.) When the Persian King, Xerxes, had begun to\r\ndespair of being able to break through the Greek defence, Ephialtes came to him and, on being\r\npromised a definite payment, told the King of a pathway over the shoulder of the mountain to the\r\nGreek end of the Pass. The bargain being clinched, Ephialtes led a detachment of the Persian troops\r\nunder General Hydarnes over the mountain pathway. Thus taken in the rear, the Greek defenders,\r\nunder Leonidas, King of Sparta, had to fight in two opposite directions within the narrow pass.\r\nTerrible slaughter ensued and Leonidas fell in the thick of the fighting.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'sachin.patil521@gmail.com', 'admincms');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE IF NOT EXISTS `others` (
  `Sr no.` int(11) NOT NULL AUTO_INCREMENT,
  `Title1` text NOT NULL,
  `User1` text NOT NULL,
  `Title2` text NOT NULL,
  `User2` text NOT NULL,
  PRIMARY KEY (`Sr no.`),
  FULLTEXT KEY `Title1` (`Title1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `politics`
--

CREATE TABLE IF NOT EXISTS `politics` (
  `Sr no.` int(11) NOT NULL AUTO_INCREMENT,
  `Title1` text NOT NULL,
  `User1` text NOT NULL,
  `Title2` text NOT NULL,
  `User2` text NOT NULL,
  PRIMARY KEY (`Sr no.`),
  FULLTEXT KEY `Title1` (`Title1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `politics`
--

INSERT INTO `politics` (`Sr no.`, `Title1`, `User1`, `Title2`, `User2`) VALUES
(7, 'adolf hitler main kampf', 'Herodotus (Book VII, 213218) tells the story of how a Greek traitor, Ephialtes, helped the Persian\r\ninvaders at the Battle of Thermopylae (480 B.C.) When the Persian King, Xerxes, had begun to\r\ndespair of being able to break through the Greek defence, Ephialtes came to him and, on being\r\npromised a definite payment, told the King of a pathway over the shoulder of the mountain to the\r\nGreek end of the Pass. The bargain being clinched, Ephialtes led a detachment of the Persian troops\r\nunder General Hydarnes over the mountain pathway. Thus taken in the rear, the Greek defenders,\r\nunder Leonidas, King of Sparta, had to fight in two opposite directions within the narrow pass.\r\nTerrible slaughter ensued and Leonidas fell in the thick of the fighting.', '', ''),
(14, 'helpline', 'India has got a new helpline number 112.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `science`
--

CREATE TABLE IF NOT EXISTS `science` (
  `Sr no.` int(11) NOT NULL AUTO_INCREMENT,
  `Title1` text NOT NULL,
  `User1` text NOT NULL,
  `Title2` text NOT NULL,
  `User2` text NOT NULL,
  PRIMARY KEY (`Sr no.`),
  FULLTEXT KEY `Title1` (`Title1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `science`
--

INSERT INTO `science` (`Sr no.`, `Title1`, `User1`, `Title2`, `User2`) VALUES
(6, 'aqfwraefsaf', 'fawfsaf', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

CREATE TABLE IF NOT EXISTS `technology` (
  `Sr no.` int(11) NOT NULL AUTO_INCREMENT,
  `Title1` text NOT NULL,
  `User1` text NOT NULL,
  `Title2` text NOT NULL,
  `User2` text NOT NULL,
  PRIMARY KEY (`Sr no.`),
  FULLTEXT KEY `Title1` (`Title1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `technology`
--

INSERT INTO `technology` (`Sr no.`, `Title1`, `User1`, `Title2`, `User2`) VALUES
(2, 'Gmail island', 'March 28, 1979: A meltdown at Three Mile Island in Dauphin County, Pennsylvania resulted in the worst accident ever at a U.S. nuclear power plant. The meltdown started because a valve inside one of the reactors was mistakenly left open, causing over two million gallons of nuclear coolant to boil over and escape. The initial radiation level of water around the plant was 300 times legal levelsâ€”radioactive gases and iodine were also released into the atmosphere, though only at about the level of a chest X-ray. While 140,000 residents evacuated the area, 98 percent returned to their homes within three weeks, and none died of cancer caused by the meltdown. Cleanup of Three Mile Island took 14 years and cost $1 billion, and the accident slowed the growth of the nuclear power industry. While one Three Mile Island reactor was shut down completely, the other is still running today.', '', ''),
(3, 'Apple first ipad', 'April 3, 2010: Apple released its first generation iPad in the United States. The tablet, which could shoot video, take photos, play music and surf the web, combined the design of the failed Newton PDA with the mobile capabilities of the iPhone and the iOS operating system. Critics praised the software, user interface and selection of apps, but as always criticized Appleâ€™s closed system. Apple sold one million iPads in the first month of release, including 300,000 on the first day. Within 90 days , 50 percent of Fortune 100 companies used the iPad. Other tablets eventually became part of the Apple family, namely the iPad Mini (released in 2012) and the thinner iPad Air (released in 2013). While the iPad didnâ€™t quite kill the laptop as predicted, itâ€™s now ubiquitous in boardrooms and living rooms alike.', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
