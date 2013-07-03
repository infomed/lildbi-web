-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 11, 2013 at 07:50 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lildbi`
--

-- --------------------------------------------------------

--
-- Table structure for table `rols`
--

CREATE TABLE IF NOT EXISTS `rols` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `rols`
--

INSERT INTO `rols` (`id`, `name`, `created`, `modified`) VALUES
(8, 'Administrador', '2013-02-09 18:17:07', '2013-02-09 18:17:07'),
(9, 'Editor', '2013-02-09 18:17:15', '2013-02-09 18:17:15'),
(10, 'Documentalista', '2013-02-09 18:17:26', '2013-02-09 18:17:26');

-- --------------------------------------------------------

--
-- Table structure for table `rols_users`
--

CREATE TABLE IF NOT EXISTS `rols_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `rols_users`
--

INSERT INTO `rols_users` (`id`, `rol_id`, `user_id`) VALUES
(11, 9, 6),
(12, 8, 6),
(13, 10, 6),
(14, 8, 9),
(15, 9, 10),
(16, 8, 11),
(17, 8, 12),
(18, 9, 13),
(19, 10, 14),
(20, 8, 15),
(21, 9, 15),
(22, 8, 16),
(23, 10, 16),
(24, 8, 17),
(25, 10, 17),
(26, 8, 18),
(27, 9, 18),
(28, 10, 18);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `initials` varchar(10) NOT NULL,
  `center_code` varchar(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` char(40) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `initials`, `center_code`, `email`, `password`, `created`, `modified`) VALUES
(6, 'Fidel', 'fsantana', 'FSM', 'CU.1', 'fsantana@infomed.sld.cu', 'c730488255572f1c653ed8d6a1adbf783cc3a4ea', '2013-02-09 20:17:03', '2013-02-11 03:57:59'),
(17, 'LuisA', 'luisalberto', 'LA', 'CU.2', 'luis@gmail.com', 'c730488255572f1c653ed8d6a1adbf783cc3a4ea', '2013-02-11 03:47:17', '2013-02-11 04:00:55'),
(18, 'Carlos', 'carloernesto', 'CE', 'CU.54', 'carlosernesto@gmail.com', '6c1fa1a4732ed6affe3e26b8a5092908920ce2ed', '2013-02-11 03:59:28', '2013-02-11 04:36:12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
