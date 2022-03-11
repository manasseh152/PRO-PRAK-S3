-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 11 mrt 2022 om 15:03
-- Serverversie: 5.7.31
-- PHP-versie: 8.1.2

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
-- Tabelstructuur voor tabel `comments`
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `comments`
--

INSERT INTO `comments` (`commentID`, `postID`, `userID`, `comment`) VALUES
(2, 1, 41, 'hehe boyyyyy'),
(3, 1, 42, 'Zo zo ik heb het werkende'),
(4, 1, 42, 'hgjjhghjghhghjgjhjh'),
(6, 1, 41, 'test'),
(7, 1, 41, 'test'),
(8, 1, 41, 'test'),
(9, 1, 42, 'hey'),
(10, 1, 42, 'hey'),
(11, 1, 42, 'dit is een test'),
(12, 1, 42, 'lol'),
(13, 16, 42, 'sgsgssdgs'),
(14, 23, 42, 'elle'),
(15, 18, 42, 'ello');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `postID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img` varchar(1000) DEFAULT NULL,
  `text` varchar(1000) NOT NULL,
  `upvote` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`postID`),
  KEY `upvote` (`upvote`),
  KEY `userID` (`userID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `post`
--

INSERT INTO `post` (`postID`, `userID`, `title`, `img`, `text`, `upvote`) VALUES
(1, 42, 'Hello me friend', 'test', 'test', 5),
(15, 42, 'Test', 'test', 'test', 5),
(16, 42, 'Test', 'test', 'test', 5),
(17, 42, 'Test', 'test', 'test', 5),
(18, 42, 'Test', 'test', 'test', 5),
(19, 42, 'Test', 'test', 'test', 5),
(20, 42, 'Test', 'test', 'test', 5),
(21, 42, 'Test', 'test', 'test', 5),
(22, 42, 'Test', 'test', 'test', 5),
(23, 42, 'Test', 'test', 'test', 5),
(24, 42, 'a', NULL, 'a', 0),
(25, 42, '', NULL, '', 0),
(26, 42, 'DIt is de nieuwste post', NULL, 'even kijken of dit erkt', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`userID`, `name`, `username`, `password`, `email`, `userrole`) VALUES
(39, '123', '123', '$2y$10$uZ3Xf4LEMMBBDKI5XhPo.uZrGEM8N9fHbwj/YRZS9C7lJpjbVohVa', '123@123', 'root'),
(40, '123', '123', '$2y$10$KsJbNUA9jeeIHASupMuzOOaKf78PYIMyh63ku8pWEj/OIRSR0WieC', 'a@a', 'root'),
(41, 'Maurice', 'mouse', '$2y$10$9DTsttT1SL3SalGkjrFrLebfc0EQwHwO7W8zUnSU8vcNNY.dmP7b6', 'mauricevanwijk@gmail.com', 'root'),
(42, 'hallo', 'hallo', '$2y$10$8gBbHsNVDodNfk5UW0tb.el0lVJrSzcywTPCrTJ3.EXX/HTLS88Iu', 'hallo@hallo', 'root');

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_cluserID` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_postID` FOREIGN KEY (`postID`) REFERENCES `post` (`postID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_userID` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
