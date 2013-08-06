-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 05, 2013 at 03:11 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `extras`
--

DROP TABLE IF EXISTS `extras`;
CREATE TABLE IF NOT EXISTS `extras` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `second_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `race_id` int(10) unsigned NOT NULL DEFAULT '0',
  `gender_id` int(10) unsigned NOT NULL DEFAULT '0',
  `email` varchar(100) DEFAULT NULL,
  `cell_number` varchar(20) DEFAULT NULL,
  `work_number` varchar(20) DEFAULT NULL,
  `home_number` varchar(20) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `emergency_contact_name` varchar(20) DEFAULT NULL,
  `emergency_contact_number` varchar(20) DEFAULT NULL,
  `is_on_whole_bang_shoot` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_on_gmail_contacts` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `had_previous_experience` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `banking_details` varchar(250) DEFAULT NULL,
  `height` int(3) unsigned DEFAULT NULL,
  `chest_size` int(2) unsigned DEFAULT NULL,
  `bra_size` varchar(6) DEFAULT NULL,
  `hips_size` int(3) unsigned DEFAULT NULL,
  `waist_size` int(3) unsigned DEFAULT NULL,
  `suit_size` int(3) unsigned DEFAULT NULL,
  `dress_size` int(3) unsigned DEFAULT NULL,
  `show_size` int(3) unsigned DEFAULT NULL,
  `collar_size` int(3) unsigned DEFAULT NULL,
  `hair_colour_id` int(10) unsigned DEFAULT NULL,
  `eye_colour_id` int(10) unsigned DEFAULT NULL,
  `skills` varchar(500) DEFAULT NULL,
  `allergies` varchar(500) DEFAULT NULL,
  `phobias` varchar(500) DEFAULT NULL,
  `availability` varchar(500) DEFAULT NULL,
  `has_tax_directive` tinyint(1) unsigned DEFAULT '0',
  `id_number` varchar(15) DEFAULT NULL,
  `passport_number` varchar(45) DEFAULT NULL,
  `pass_port_expiry_date` date DEFAULT NULL,
  `nationality_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `extras_id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `eye_colours`
--

DROP TABLE IF EXISTS `eye_colours`;
CREATE TABLE IF NOT EXISTS `eye_colours` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `colour` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

DROP TABLE IF EXISTS `genders`;
CREATE TABLE IF NOT EXISTS `genders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gender` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hair_colours`
--

DROP TABLE IF EXISTS `hair_colours`;
CREATE TABLE IF NOT EXISTS `hair_colours` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `colour` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nationalities`
--

DROP TABLE IF EXISTS `nationalities`;
CREATE TABLE IF NOT EXISTS `nationalities` (
  `id` int(11) NOT NULL,
  `nationality` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `extra_id` int(10) unsigned NOT NULL,
  `caption` varchar(100) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `date_taken` date DEFAULT NULL,
  `paid_for` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `races`
--

DROP TABLE IF EXISTS `races`;
CREATE TABLE IF NOT EXISTS `races` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `race` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
