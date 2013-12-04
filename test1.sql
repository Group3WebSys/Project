-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2013 at 12:20 AM
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
  `personalGoal1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personalGoal2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personalGoal3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current1star` int(3) NOT NULL DEFAULT '0',
  `current2star` int(3) NOT NULL DEFAULT '0',
  `current3star` int(3) NOT NULL DEFAULT '0',
  `currentmissions` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=46 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `salt`, `email`, `id`, `gender`, `DOB`, `avatar`, `level`, `personalGoal1`, `personalGoal2`, `personalGoal3`, `current1star`, `current2star`, `current3star`, `currentmissions`) VALUES
('Mike', '8a2e6f3faa5336f386db3c76839b4cadf0ffd1195e9ee17754ce7546d5cfa7d5', '5f5c20da183e499d', 'mikeogod@gmail.com', 26, 'unspecified', '1993-06-07', 'WP_000001.jpg', 0, 'Happy', 'Sad', 'Eat', 0, 0, 0, ''),
('Dog1', 'b60afe611efae3a1ed4dfd87f287fb8c4b609df220200049fc1f195df487fdb6', '552630623a5629b4', 'Dog1@gmail.com', 28, 'unspecified', '1993-06-07', 'WP_000001.jpg', 0, 'Happy', 'Sad', 'Eat', 0, 0, 0, ''),
('Dog', '8770cf1e03c618b202dfc3d9586a07d8147fa37fe60e271f4ed5f901f16ff6b3', '342e390565c5fc89', 'Dog@gmail.com', 30, 'unspecified', '1993-06-07', 'WP_000001.jpg', 0, 'Happy', 'Sad', 'Eat', 0, 0, 0, ''),
('Dog2', '0db7866df35ce6f5fb529c3f0f7179513c99759512926b57083bf7eb3d41919e', '1a126679235e4a8f', 'Dog2@gmail.com', 40, 'unspecified', '1993-06-07', 'WP_000003.jpg', 0, 'Happy', 'Sad', 'Eat', 0, 0, 0, ''),
('admin', 'aaa58ebeb05e8df22826dc290011211a3c4756740e0b7b075aa6c4cb8ac8b472', '7b7eadde6e0de2b2', 'mikeogod@outlook.com', 41, 'male', '2012-11-10', NULL, 0, 'Happy', '', '', 0, 0, 0, ''),
('hello', '29eece8cb0f4c7d6665b62067923e172b40b59bc27026260921641ce6ca59043', '312b073a621f8507', 'hi@hi.com', 42, 'unspecified', '0131-01-02', 'Snow-planet-fantasy-sky_1920x1200.jpg', 4, 'hi', 'hi', 'hi', 0, 0, 0, '4,2,5'),
('newUser', 'f0efa15022b14ab853181f5179c43965b79bf5f57a9c99a33b146ce6ced76cbd', '3555698b79327e8d', 'newUser@user.com', 43, 'unspecified', '1990-01-01', 'default.jpg', 1, 'newUser', 'newUser', 'newUser', 0, 0, 0, '0'),
('hihihi', '1744d85176310ba61c40c00b7775671da936d357f188aa01720b687f06d394a2', '4d82fb72677769b9', 'hihihi@hihihi.com', 44, 'unspecified', '0000-00-00', 'default.jpg', 1, '', '', '', 0, 0, 0, ''),
('newUser1', '109b1b3023439c6b7b32971cd3d70662cf10c394bdaac686c2c862fdde637ec9', '7e34736f76b1cc5a', 'newUser1@gmail.com', 45, 'unspecified', '1990-01-01', 'default.jpg', 3, 'hi', 'hi', 'hi', 0, 0, 0, '4,14,37,36');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
