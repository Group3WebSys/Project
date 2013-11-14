-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2013 at 03:58 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test1`
--
CREATE DATABASE IF NOT EXISTS `test1` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `test1`;

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE IF NOT EXISTS `journals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `author` (`author`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `suggestedtasks`
--

CREATE TABLE IF NOT EXISTS `suggestedtasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `suggestedBy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `suggestedBy` (`suggestedBy`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `star` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(2) DEFAULT '0',
  `progress` int(3) DEFAULT NULL,
  `totalPoints` int(11) DEFAULT NULL,
  `personalGoal1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personalGoal2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personalGoal3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `salt`, `email`, `id`, `gender`, `age`, `avatar`, `level`, `progress`, `totalPoints`, `personalGoal1`, `personalGoal2`, `personalGoal3`) VALUES
('system', 'password', 'salt', 'sys@foo.com', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Mike', '43ba898e483dca76fd759b3960dd63a4b0ce62ca28b7d917b3860101f054710e', '5500a41f25949b', 'mikeogod@gmail.com', 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Cat', '7a7753a22cb4357db5882d1c603566b9433731f8bad72390380a252e684852e3', '3515de2dd99b1f5', 'Cat@gmail.com', 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Cat2', 'a20b84900ceea55ebb377502d34ace72f6fbc077d75af98ee33a11279847294b', '7caceab6ed972a2', 'Cat2@gmail.com', 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Cat3', '923a5014c94b51b41ca93fbaf83bc495c6fd448cba92092e3b78e0c4632f4178', '15a11ba268a3894e', 'Cat3@gmail.com', 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Cat4', 'e72a5af839b32c12fd92d4ddf23617f93892df704dc71decc1f74e1e17646ca1', '19463196387bfd0a', 'Cat4@gmail.com', 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Cat5', 'd8ed7703393ec45fb111ee9f0d89da682dbea7e9dadfbade2e54fb5e5cf7bd42', '126810194e2543b6', 'Cat5@gmail.com', 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `journals`
--
ALTER TABLE `journals`
  ADD CONSTRAINT `journals_ibfk_2` FOREIGN KEY (`author`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `journals_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

--
-- Constraints for table `suggestedtasks`
--
ALTER TABLE `suggestedtasks`
  ADD CONSTRAINT `suggestedtasks_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `suggestedtasks_ibfk_1` FOREIGN KEY (`suggestedBy`) REFERENCES `users` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
