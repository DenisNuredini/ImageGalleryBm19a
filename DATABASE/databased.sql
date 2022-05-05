-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 05. Mai 2022 um 11:08
-- Server-Version: 10.4.19-MariaDB
-- PHP-Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `databased`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_photos`
--

CREATE TABLE `tbl_photos` (
  `img_id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `img_type` varchar(255) NOT NULL,
  `img_title` varchar(255) NOT NULL,
  `img_height` varchar(255) NOT NULL,
  `img_width` varchar(255) NOT NULL,
  `img_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tbl_photos`
--

INSERT INTO `tbl_photos` (`img_id`, `img_name`, `img_path`, `img_type`, `img_title`, `img_height`, `img_width`, `img_time`) VALUES
(57, '1.jpg', 'img/1.jpg', 'image/jpeg', '1', '1080', '1920', ''),
(58, '2.jpg', 'img/2.jpg', 'image/jpeg', '2', '1080', '1920', ''),
(59, '3.jpg', 'img/3.jpg', 'image/jpeg', '3', '1080', '1920', ''),
(60, '4.jpg', 'img/4.jpg', 'image/jpeg', '4', '1080', '1920', ''),
(61, '5.jpg', 'img/5.jpg', 'image/jpeg', '5', '1080', '1920', ''),
(62, '6.jpg', 'img/6.jpg', 'image/jpeg', '6', '1080', '1920', ''),
(63, '7.jpg', 'img/7.jpg', 'image/jpeg', '7', '1080', '1920', ''),
(64, '8.jpg', 'img/8.jpg', 'image/jpeg', '8', '1080', '1920', ''),
(65, '9.jpg', 'img/9.jpg', 'image/jpeg', '9', '1080', '1920', ''),
(66, '10.jpg', 'img/10.jpg', 'image/jpeg', '10', '1080', '1920', ''),
(67, '11.jpg', 'img/11.jpg', 'image/jpeg', '11', '1080', '1920', ''),
(68, '12.jpg', 'img/12.jpg', 'image/jpeg', '12', '1080', '1920', '');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tbl_photos`
--
ALTER TABLE `tbl_photos`
  ADD PRIMARY KEY (`img_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `tbl_photos`
--
ALTER TABLE `tbl_photos`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
