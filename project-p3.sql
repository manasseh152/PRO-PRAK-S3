-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 30, 2022 at 09:10 AM
-- Server version: 5.7.31
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectp3`
--
CREATE DATABASE IF NOT EXISTS `projectp3` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projectp3`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `commentID` int(11) NOT NULL AUTO_INCREMENT,
  `postID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `comment` varchar(300) NOT NULL,
  PRIMARY KEY (`commentID`),
  KEY `postID` (`postID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `postID`, `userID`, `comment`) VALUES
(17, 49, 57, 'what a lovely postðŸ‘ŒðŸ‘Œ'),
(18, 46, 57, 'Do i look like i care?');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contactID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `phoneNumber` varchar(14) NOT NULL,
  `email` varchar(300) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(1000) NOT NULL,
  PRIMARY KEY (`contactID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `postID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `text` varchar(1000) NOT NULL,
  `upvote` int(255) NOT NULL DEFAULT '0',
  `report` tinyint(1) NOT NULL DEFAULT '0',
  `hidden` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`postID`),
  KEY `upvote` (`upvote`),
  KEY `userID` (`userID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `userID`, `title`, `img`, `text`, `upvote`, `report`, `hidden`) VALUES
(46, 55, 'Our first post ever!!', NULL, 'Somebody once told me the world is gonna roll me. I ain&#039;t the sharpest tool in the shed. She was looking kind of dumb with her finger and her thumb. In the shape of an &quot;L&quot; on her forehead. Well the years start coming and they don&#039;t stop coming. Fed to the rules and I hit the ground running. Didn&#039;t make sense not to live for fun. Your brain gets smart but your head gets dumb. So much to do, so much to see. So what&#039;s wrong with taking the back streets?. You&#039;ll never know if you don&#039;t go. You&#039;ll never shine if you don&#039;t glow', 0, 0, NULL),
(47, 55, 'Our site', NULL, 'This is our third semester school project that was quite fun to make, to create a design and to make it from start to finish. the back story of the site was a instarag / reddit meshup the styling wasnt cloned from instagram. on our site people can create an account, post, react and upvote an connect in a group an any topic you can imagen', 0, 0, 1),
(48, 55, 'Future', NULL, 'Our site has a bright and wonderful future and we hope that our blood, sweat and tears will pay out in the form of a great figure. because we have done our best and we have learned a lot from it and are looking forward to a new challenge so no &quot;wordpress&quot; just joking  but are you a web DEV if you just install plugins and lay back in your gamerchair what a live XD #googleBestFriend', 0, 0, 1),
(49, 56, 'Fortnite Fan', NULL, 'Vogeljongen. Henk en Willem. V-v-v-vogelsquad. Dikke party bij de battle bus (hiha). In mijn huisje zit ik lekker knus (yeah). Drop een shuffle op die kaulo beat (whoo). Dat dacht ik dus even niet. Ja we looten die kisten leeg. Hakken die muren en bomen en blijven safe. Plaatsen traps, gooien nades en we staan nooit stil. Een broodje frikandel dat is wat ik nu wil. Ik wil winnen, maar ik weet niet hoe. Me health is laag, moet naar de dokter toe (serieus). Dit keer wil ik goeie loot (yeah). Dit keer wil ik goeie loot. Pas op er komt een team van zuid. En ze zien er best gevaarlijk uit. Die ene heeft een John Wick skin\r\nWe moeten rennen het heeft geen ene zin (rennuh)', 0, 0, NULL),
(50, 57, 'Never gonna give you up. ', NULL, 'We&#039;re no strangers to love. \r\nYou know the rules and so do I. \r\nA full commitment&#039;s what I&#039;m thinking of. \r\nYou wouldn&#039;t get this from any other guy. \r\nI just wanna tell you how I&#039;m feeling. \r\nGotta make you understand. \r\nNever gonna give you up. \r\nNever gonna let you down. \r\nNever gonna run around and desert you. \r\nNever gonna make you cry. \r\nNever gonna say goodbye. \r\nNever gonna tell a lie and hurt you. \r\nWe&#039;ve known each other for so long. \r\nYour heart&#039;s been aching but you&#039;re too shy to say it. \r\nInside we both know what&#039;s been going on. \r\nWe know the game and we&#039;re gonna play it. \r\nAnd if you ask me how I&#039;m feeling. \r\nDon&#039;t tell me you&#039;re too blind to see. \r\nNever gonna give you up. \r\nNever gonna let you down. \r\nNever gonna run around and desert you. \r\nNever gonna make you cry. \r\nNever gonna say goodbye. \r\nNever gonna tell a lie and hurt you. ', 0, 0, NULL),
(51, 58, 'Doge Coin', NULL, 'We got a number one Victory Royale. \r\nYeah, Fortnite, we &#039;bout to get down (get down). \r\nTen kills on the board right now. \r\nJust wiped out Tomato Town. \r\nMy friend just got downed. \r\nI revived him, now we&#039;re heading south-bound. \r\nNow we&#039;re in the Pleasant Park streets. \r\nLook at the map, go to the marked sheet. \r\nTake me to your Xbox to play Fortnite today. \r\nYou can take me to Moisty Mire, but not Loot Lake. \r\nI really love to Chug Jug with you. \r\nWe can be pro Fortnite gamers. \r\nHe says. \r\n&quot;Hey broski, you got some heals and a shield pot?&quot;. \r\n&quot;I need healing and I am only at one HP&quot;. \r\nHey dude, sorry, I found nothing on this safari. \r\nI checked the upstairs of that house but not the underneath yet. \r\nThere&#039;s a chest that&#039;s just down there. \r\nThe storm is coming fast and you need heals to prepare. \r\nI&#039;ve got V-Bucks that I&#039;ll spend. \r\nWe can be pro Fortnite gamers. ', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(300) NOT NULL,
  `userrole` enum('root','admin','moderator','user') NOT NULL DEFAULT 'user',
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `username`, `password`, `email`, `userrole`) VALUES
(49, 'admin', 'admin', '$2y$10$viGO72wGAKmLaesav5Zk8.tiUxOoN54QomGmPgYLt83rGjT2t9aLu', 'admin@admin', 'admin'),
(50, 'moderator', 'moderator', '$2y$10$CxoLCSCraXXveZnBD.yyGeHq/spczKBgTk/mYASAo/sw6T3rWY2zi', 'moderator@moderator', 'moderator'),
(51, 'root', 'root', '$2y$10$9L6RSTeqcHG5kZF3rgyxaOIisdLt2xgdOM3Yit04SzlTlP1sA/hCG', 'root@root', 'root'),
(55, 'Manasseh stam', 'Manasseh_stam', '$2y$10$rIaVmU4TRKbVHRitkwjenOselQkFjHy0AAYiMqX8ZS8EqimhqUnu.', 'manasseh2424@gmail.com', 'user'),
(56, 'john wick', 'John wicky', '$2y$10$oKI4iqtqHPlVr7mbhmvVYeN/fYvDovJJOVaMjDZF9HskNA.6NQ/hO', 'wicky@wicky', 'user'),
(57, 'leonardo', 'leonardo dicaprisun', '$2y$10$grB.XCsJ8L/BWRq71K13oOU4.xdqEw4xg5U6BEZOZ6.1I4heIxQ1i', 'leonardo@leonardo', 'user'),
(58, 'Elon', 'Elon Thusk', '$2y$10$wD5yP.avO/WUInkrYTm8me8pAyScyKzuzUgSuadlfvDNGza4gTjwe', 'elon@elon', 'user');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_cluserID` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_postID` FOREIGN KEY (`postID`) REFERENCES `post` (`postID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_userID` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
