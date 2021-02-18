-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Erstellungszeit: 18. Feb 2021 um 09:06
-- Server-Version: 10.4.17-MariaDB
-- PHP-Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `myforo`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `forum_forums`
--

DROP TABLE IF EXISTS `forum_forums`;
CREATE TABLE IF NOT EXISTS `forum_forums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `forum_forums`
--

INSERT INTO `forum_forums` (`id`, `group_id`, `name`, `description`, `image`) VALUES
(1, 1, 'Wilkommen', 'Wilkommen auf MyForo, the Forum Software from EdingMC.', 'assets/img/default-pic.png'),
(2, 2, 'Test', 'Das ist ein test um den Abstand zu verdeutlichen', 'assets/img/default-pic.png');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `forum_groups`
--

DROP TABLE IF EXISTS `forum_groups`;
CREATE TABLE IF NOT EXISTS `forum_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `forum_groups`
--

INSERT INTO `forum_groups` (`id`, `name`) VALUES
(1, 'Wilkommen');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `forum_threadposts`
--

DROP TABLE IF EXISTS `forum_threadposts`;
CREATE TABLE IF NOT EXISTS `forum_threadposts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thread_id` int(11) NOT NULL,
  `user` text CHARACTER SET latin1 NOT NULL,
  `answer` longtext CHARACTER SET latin1 NOT NULL,
  `datetime` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `forum_threadposts`
--

INSERT INTO `forum_threadposts` (`id`, `thread_id`, `user`, `answer`, `datetime`) VALUES
(1, 1, '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et arcu facilisis, tristique risus nec, tempus mauris. Sed et metus sit amet enim faucibus semper non ut arcu. Proin eu eros vitae ipsum sodales imperdiet. Donec nec justo venenatis, sodales augue vitae, finibus mi. Aenean at ornare risus, semper tempus enim. Sed lacinia iaculis nulla sit amet sodales. Aenean id ex massa. Curabitur at augue finibus, facilisis libero ullamcorper, rutrum magna. Vivamus et magna vel ligula lacinia interdum.\r\n\r\nSed facilisis lacinia odio, vitae facilisis velit lobortis vitae. Proin consequat congue lorem vel euismod. Sed ac metus non nisl rhoncus dignissim in et nibh. Nulla at libero eget ligula maximus placerat. Vestibulum non metus posuere, aliquet risus pulvinar, auctor felis. Duis eget magna justo. Aenean mi sapien, cursus vestibulum placerat ac, ultricies et odio. Sed ut condimentum erat, vitae suscipit leo. Donec ultrices purus diam, ac placerat massa egestas ac. Integer nec pulvinar massa, sed dictum nibh. Duis sed facilisis quam, eu luctus massa. Integer porta posuere dapibus. Maecenas pretium congue diam, id mollis justo semper convallis. Integer vitae risus tempor mauris pharetra mattis. Aliquam vulputate nulla mi, id vehicula sem pulvinar vel. Sed pulvinar tempus leo, id iaculis enim auctor et.\r\n\r\nDonec imperdiet, neque at tincidunt efficitur, tellus erat auctor turpis, eget pellentesque mauris sapien sed felis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent vel mi id justo interdum placerat nec at arcu. Sed tortor tortor, porttitor vel auctor a, maximus eget enim. Cras ultrices placerat justo, quis accumsan justo ultrices quis. Ut ac fermentum dolor. Praesent in lacus feugiat urna cursus maximus sed vitae felis. Ut aliquam egestas justo in molestie. Curabitur neque risus, pretium vitae porta consequat, molestie eget dolor. Nullam consequat feugiat magna vitae dignissim. Nunc auctor tempus feugiat. Nullam egestas, risus a eleifend eleifend, augue sapien pretium libero, maximus pharetra libero odio eget erat.\r\n\r\nNullam quis leo ut metus placerat tristique. Fusce quis metus in ipsum pharetra aliquam. Nunc at sapien sodales, vehicula magna sed, hendrerit mauris. Praesent ac urna dictum dolor euismod iaculis. Duis eget vulputate sapien, vitae efficitur justo. Proin quis gravida neque. Vestibulum finibus nibh porttitor velit porta, eu elementum turpis lacinia. Curabitur quis mollis sapien, ut egestas ex. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut pellentesque tempor libero, quis rutrum nunc dapibus sit amet. Nunc ut nunc ligula. Proin eu massa congue, fringilla odio in, elementum est. Phasellus ex justo, consequat eu interdum non, tristique id massa. Mauris convallis feugiat velit eu fermentum. Aliquam faucibus sem et justo viverra tincidunt.\r\n\r\nUt et odio vestibulum, pulvinar odio sed, mollis est. Aliquam at sem in mauris volutpat aliquam id id lectus. Nunc rutrum egestas tellus a laoreet. Praesent porta laoreet molestie. Cras sed ligula laoreet, molestie ligula sit amet, congue nunc. Aenean dapibus gravida tortor, quis varius nisl efficitur sit amet. Nam eu urna consectetur, molestie nisl sed, facilisis magna. In hac habitasse platea dictumst. Duis luctus diam sit amet nunc convallis, id gravida tortor venenatis. Sed at facilisis dui. ', '01.01.2000');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `forum_threads`
--

DROP TABLE IF EXISTS `forum_threads`;
CREATE TABLE IF NOT EXISTS `forum_threads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_date` text NOT NULL,
  `last_answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `forum_threads`
--

INSERT INTO `forum_threads` (`id`, `forum_id`, `title`, `user_id`, `create_date`, `last_answer`) VALUES
(1, 1, 'Hello World', 1, 'Now', 'Now');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user_users`
--

DROP TABLE IF EXISTS `user_users`;
CREATE TABLE IF NOT EXISTS `user_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text CHARACTER SET latin1 NOT NULL,
  `password` text CHARACTER SET latin1 NOT NULL,
  `email` text CHARACTER SET latin1 NOT NULL,
  `profilepic` text NOT NULL,
  `usergroup` text CHARACTER SET latin1 NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `user_users`
--

INSERT INTO `user_users` (`id`, `username`, `password`, `email`, `profilepic`, `usergroup`, `verified`, `token`) VALUES
(1, 'test', '$2y$10$3XIYK5tYkbcRsBinW9yzWeaBPvONoooVWZoAZ8r7nr9XynXOPRu0W', 'test@test.com', '', 'guest', 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
