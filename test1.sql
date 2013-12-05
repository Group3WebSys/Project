-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2013 at 02:07 AM
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
  `tid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `feedback` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `completedtasks`
--

INSERT INTO `completedtasks` (`id`, `tid`, `uid`, `feedback`) VALUES
(26, 1, 42, 'a a a a a a a a a a a a a a a a a a a a a aa a a a a a a a a a a a a a a a a a a a a a'),
(27, 4, 42, 'a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a '),
(28, 2, 42, 'a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a '),
(29, 5, 42, 'mission mission mission mission mission mission mission mission mission mission mission mission mission mission mission mission mission mission mission mission mission mission mission mission mission mission mission mission mission mission '),
(30, 1, 43, 'yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo '),
(31, 4, 43, 'yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo '),
(32, 1, 45, 'hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi '),
(33, 6, 45, 'hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi '),
(34, 10, 45, 'hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi '),
(35, 18, 45, 'hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi hi '),
(36, 9, 45, 'newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 '),
(37, 11, 45, 'newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 '),
(38, 12, 45, 'newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 '),
(39, 24, 45, 'newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 newUser1 ');

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
  `subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `author` (`author`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`id`, `uid`, `author`, `content`, `date`, `subject`) VALUES
(1, 42, 'hello', 'test entry', '2013-12-04', 'test subject'),
(2, 42, 'hello', 'new entry new entrynew entrynew entrynew entrynew entrynew entry', '2013-12-04', 'new entry'),
(3, 43, 'newUser', 'lololollololollololollololollololollololollololollololol', '2013-12-04', 'lololol'),
(4, 43, 'newUser', 'test subjecttest subjecttest subjecttest subjecttest subject', '2013-12-04', 'test subject'),
(5, 43, 'newUser', 'nospacenospacenospace', '2013-12-04', 'nospace');

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
(10, 0, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `suggestedtasks`
--

CREATE TABLE IF NOT EXISTS `suggestedtasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `suggestedBy` int(11) NOT NULL,
  `suggestion` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `suggestedBy` (`suggestedBy`),
  KEY `suggestedBy_2` (`suggestedBy`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `suggestedtasks`
--

INSERT INTO `suggestedtasks` (`id`, `suggestedBy`, `suggestion`) VALUES
(26, 43, ''),
(27, 43, ''),
(28, 43, ''),
(29, 43, ''),
(30, 43, ''),
(31, 43, ''),
(32, 43, 'hihihih');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `desc`, `star`) VALUES
(6, 'Reflect ', '<a target=''_blank'' href=''http://www.askmen.com/grooming/project/top-10-ways-to-show-confidence-with-body-language.html''>Body Language</a>', 1),
(7, 'Reflect', '<a target=''_blank'' href=''http://www.councelingcenter.illinois.edu/self-help-brochures/self-awarenessself-care/self-confidence/''>Confidence</a>', 1),
(8, 'Say Cheese', 'Take and upload a picture of yourself', 1),
(9, 'Reflect', '<a target=''_blank'' href=''http://www.mindtools.com/selfconf.html''>Prepare for Success</a>', 1),
(10, 'Pat On The Back', 'Write down and upload a list of things you like about yourself', 1),
(11, 'Tough Crowd', 'Make a (good or bad) joke in front of at least one person', 1),
(12, 'Lend a Hand', 'Help one of your friends with homework or a simple task', 1),
(13, 'Show Off Those Pearly Whites', 'Smile at someone passing by', 1),
(14, 'Connect', 'Make eye contact with someone passing by', 1),
(15, 'Everyone''s Favorite', 'Cook or bake something to share', 1),
(16, 'Power Pose', '<a target=''_blank'' href=''http://online.wsj.com/news/articles/SB10001424127887323608504579022942032641408''> Power Pose</a>', 1),
(17, 'Pass It On', 'Compliment someone (make it genuine!)', 1),
(18, 'Kick Back', 'Treat yourself to something', 1),
(19, 'Narcissist', 'Look at yourself in a mirror for 3 minutes straight (and accept your flaws)', 1),
(20, 'Meet and Greet', 'Say “hello” to a stranger', 2),
(21, 'Master of Trades', 'Work for at least 5 hours on developing a new skill', 2),
(22, 'MapQuest', 'Ask a stranger for directions', 2),
(23, 'New Horizons', 'Join a new club that you''re interested in ', 2),
(24, 'Strut', 'Walk from Point A to Point B with your head up', 2),
(25, 'Heart of Gold', 'Give change to a homeless person', 2),
(26, 'Besties', 'Invite someone to do something with you and follow through', 2),
(27, 'Leap of Faith', 'Do something you''ve been afraid to do', 2),
(28, 'Class Act', 'Dress fancy for no reason', 2),
(29, 'Stylist', 'Try something new with your hair or get a haircut', 2),
(30, 'Give Back', 'Volunteer for something', 2),
(31, 'Master of Creativity', 'Craft, make or build something', 2),
(32, 'Green Thumb', 'Take care of a plant or plant a seed an help it grow', 2),
(33, 'Date Night', 'Take yourself on a date (go out to eat, watch a movie, etc.) alone', 2),
(34, 'Step Up', 'Give food to a homeless person', 2),
(35, 'Read!', '''Confidence: How Winning Streaks and Losing Streaks Begin and End'' by Rosabeth Moss Kanter', 2),
(36, 'Read!', '''Love Yourself Like Your Life Depends On It'' by Kamal Ravinkant', 2),
(37, 'Read!', '''Confidence: Overcoming Low Self-Esteem, Insecurity, and Self-Doubt'' by Thomas Chamorro-Premuzic Ph.D', 2),
(38, 'Read!', '''Confidence'' by Norman Vincent Peale', 2),
(39, 'Book Worm', 'Read a book recommended by someone', 2),
(40, 'Socialite', 'Call and talk to someone on the phone for 30 seconds', 3),
(41, 'Smooth Talker', 'Start a conversation while waiting in line for something', 3),
(42, 'Helping Hand', 'Help a stranger in need', 3),
(43, 'Beauty Queen', 'Don''t look at your reflection all day', 3),
(44, 'Branch Out', 'Speak in front of a group of people', 3),
(45, 'Comedian', 'Make a purposely bad joke in front of at least 3 people', 3),
(46, 'What Friends Are For', 'Talk to someone you trust about your insecurities', 3),
(47, 'Practice Makes Person', 'Try your hardest not to compare yourself to others all day', 3),
(48, 'Sharpen Your Skills', 'Take a class (exercise, cooking, drawing, etc.) for any length of time', 3),
(49, 'Escape', 'Take a day trip and get a change of scenery for a day', 3),
(50, 'Hermit', 'Don''t check a social media site for 24 hours', 3);

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `journals`
--
ALTER TABLE `journals`
  ADD CONSTRAINT `journals_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `journals_ibfk_2` FOREIGN KEY (`author`) REFERENCES `users` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
