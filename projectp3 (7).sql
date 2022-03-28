-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 28 mrt 2022 om 17:20
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
(4, 40, 52, 'wat lekker zech'),
(5, 40, 49, 'ghgggdfgdsdg'),
(6, 40, 49, 'dgdfgdfgdfgdf'),
(7, 40, 49, 'dfgdfgdfggsdfgaet'),
(8, 40, 49, 'ohhhhhhhhhhhhhhhhhhhh'),
(9, 40, 49, 'ooohhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(10, 42, 53, 'retard'),
(11, 43, 49, 'ggg'),
(12, 43, 49, '34'),
(13, 43, 49, 'test'),
(14, 43, 49, 'test'),
(15, 44, 49, 'test');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`contactID`, `name`, `phoneNumber`, `email`, `title`, `content`) VALUES
(1, 'sdadsadsds', 'dsaddds', 'dadadasd', 'asdasdadadsada', 'dasdadad');

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
  `report` tinyint(1) NOT NULL DEFAULT '0',
  `hidden` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`postID`),
  KEY `upvote` (`upvote`),
  KEY `userID` (`userID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `post`
--

INSERT INTO `post` (`postID`, `userID`, `title`, `img`, `text`, `upvote`, `report`, `hidden`) VALUES
(40, 52, 'appeltaart', NULL, 'dit weekend ga ik een appeltaart bakken', 0, 0, NULL),
(42, 53, 'hihihiha', NULL, 'i â™¥ clash royale', 0, 0, NULL),
(43, 49, 'gehakt12312312', NULL, 'bal12313212', 0, 0, NULL),
(44, 48, 'dit is een test van user', NULL, 'etetetet', 0, 0, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`userID`, `name`, `username`, `password`, `email`, `userrole`) VALUES
(48, 'user', 'user', '$2y$10$8Th/MrdBNodxjtrXZ6gq7.HeSWCy.5N4G3NF0Jvbkbw/g3j3X9Og2', 'user@user', 'user'),
(49, 'admin', 'admin', '$2y$10$viGO72wGAKmLaesav5Zk8.tiUxOoN54QomGmPgYLt83rGjT2t9aLu', 'admin@admin', 'admin'),
(50, 'moderator', 'moderator', '$2y$10$CxoLCSCraXXveZnBD.yyGeHq/spczKBgTk/mYASAo/sw6T3rWY2zi', 'moderator@moderator', 'moderator'),
(51, 'root', 'root', '$2y$10$9L6RSTeqcHG5kZF3rgyxaOIisdLt2xgdOM3Yit04SzlTlP1sA/hCG', 'root@root', 'root'),
(52, 'Miranda', 'snoopy', '$2y$10$dH7fDrHDJLAyfr0XKXJKXOSSkMtbTsdFV1o1HPIliaU4xqUk7W.P.', 'mirandagraeff@hotmail.com', 'user'),
(53, 'Rens Sevink', 'AuraKid', '$2y$10$fleKC1Vc2OgDHvrNqp.B/u/18/CYfoPhU4zOCDbkPW.hzCWQ5buQ2', 'hihihiha@gmail.com', 'user'),
(54, 'wop', 'wopper', '$2y$10$Vl/s.KwrXNOgVfW242lj3eSzAB6.QmYJsF56NjW38Z3SmOicli1d2', 'wop@wop.yeet', 'user');

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
