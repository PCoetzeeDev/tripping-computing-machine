-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 07, 2013 at 05:44 PM
-- Server version: 5.5.31
-- PHP Version: 5.4.17-1~precise+1

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

CREATE TABLE IF NOT EXISTS `genders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gender` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'default');

-- --------------------------------------------------------

--
-- Table structure for table `hair_colours`
--

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

CREATE TABLE IF NOT EXISTS `nationalities` (
  `id` int(11) NOT NULL,
  `nationality` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

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

CREATE TABLE IF NOT EXISTS `races` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `race` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS FOR TABLE `users`:
--   `group_id`
--       `groups` -> `id`
--

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
