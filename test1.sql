-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2013 at 04:01 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `completedtasks`
--

CREATE TABLE IF NOT EXISTS `completedtasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `taskId` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `feedback` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  KEY `taskId` (`taskId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
-- Table structure for table `levelup`
--

CREATE TABLE IF NOT EXISTS `levelup` (
  `currentlevel` int(11) NOT NULL,
  `1star` int(11) NOT NULL,
  `2star` int(11) NOT NULL,
  `3star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `levelup`
--

INSERT INTO `levelup` (`currentlevel`, `1star`, `2star`, `3star`) VALUES
(1, 4, 0, 0),
(2, 3, 1, 0),
(3, 2, 2, 0),
(4, 1, 3, 0),
(5, 1, 2, 1),
(6, 0, 3, 1),
(7, 0, 3, 1),
(8, 0, 2, 2),
(9, 0, 1, 3),
(10, 0, 0, 4),
(100, 1, 2, 0);

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
  KEY `username` (`username`),
  KEY `suggestedBy_2` (`suggestedBy`)
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `desc`, `star`) VALUES
(1, 'title1', 'desc1', 1),
(2, 'title2', 'desc2', 2),
(3, 'title3', 'desc3', 3),
(4, 'title1b', 'desc1b', 1),
(5, 'title2b', 'desc2b', 2);

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
  `DOB` date DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'default.jpg',
  `level` int(2) DEFAULT '1',
  `progress` int(3) DEFAULT NULL,
  `totalPoints` int(11) DEFAULT NULL,
  `personalGoal1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personalGoal2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personalGoal3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current1star` int(3) NOT NULL DEFAULT '0',
  `current2star` int(3) NOT NULL DEFAULT '0',
  `current3star` int(3) NOT NULL DEFAULT '0',
  `currentmissions` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `salt`, `email`, `id`, `gender`, `DOB`, `avatar`, `level`, `progress`, `totalPoints`, `personalGoal1`, `personalGoal2`, `personalGoal3`, `current1star`, `current2star`, `current3star`, `currentmissions`) VALUES
('Mike', '8a2e6f3faa5336f386db3c76839b4cadf0ffd1195e9ee17754ce7546d5cfa7d5', '5f5c20da183e499d', 'mikeogod@gmail.com', 26, 'unspecified', '1993-06-07', 'WP_000001.jpg', 0, 0, 0, 'Happy', 'Sad', 'Eat', 0, 0, 0, ''),
('Dog1', 'b60afe611efae3a1ed4dfd87f287fb8c4b609df220200049fc1f195df487fdb6', '552630623a5629b4', 'Dog1@gmail.com', 28, 'unspecified', '1993-06-07', 'WP_000001.jpg', 0, 0, 0, 'Happy', 'Sad', 'Eat', 0, 0, 0, ''),
('Dog', '8770cf1e03c618b202dfc3d9586a07d8147fa37fe60e271f4ed5f901f16ff6b3', '342e390565c5fc89', 'Dog@gmail.com', 30, 'unspecified', '1993-06-07', 'WP_000001.jpg', 0, 0, 0, 'Happy', 'Sad', 'Eat', 0, 0, 0, ''),
('Dog2', '0db7866df35ce6f5fb529c3f0f7179513c99759512926b57083bf7eb3d41919e', '1a126679235e4a8f', 'Dog2@gmail.com', 40, 'unspecified', '1993-06-07', 'WP_000003.jpg', 0, 0, 0, 'Happy', 'Sad', 'Eat', 0, 0, 0, ''),
('admin', 'aaa58ebeb05e8df22826dc290011211a3c4756740e0b7b075aa6c4cb8ac8b472', '7b7eadde6e0de2b2', 'mikeogod@outlook.com', 41, 'male', '2012-11-10', NULL, 0, 0, 0, 'Happy', '', '', 0, 0, 0, ''),
('hello', '29eece8cb0f4c7d6665b62067923e172b40b59bc27026260921641ce6ca59043', '312b073a621f8507', 'hi@hi.com', 42, 'unspecified', '0131-01-02', 'Snow-planet-fantasy-sky_1920x1200.jpg', 0, 0, 0, 'hi', 'hi', 'hi', 0, 0, 0, '4,5,2');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `completedtasks`
--
ALTER TABLE `completedtasks`
  ADD CONSTRAINT `completedtasks_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `completedtasks_ibfk_2` FOREIGN KEY (`taskId`) REFERENCES `tasks` (`id`);

--
-- Constraints for table `journals`
--
ALTER TABLE `journals`
  ADD CONSTRAINT `journals_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `journals_ibfk_2` FOREIGN KEY (`author`) REFERENCES `users` (`username`);

--
-- Constraints for table `suggestedtasks`
--
ALTER TABLE `suggestedtasks`
  ADD CONSTRAINT `suggestedtasks_ibfk_1` FOREIGN KEY (`suggestedBy`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `suggestedtasks_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
