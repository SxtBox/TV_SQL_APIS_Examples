-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2020 at 04:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `live_tv_apis`
--

-- --------------------------------------------------------

--
-- Table structure for table `streaming`
--
-- Creation: Oct 01, 2020 at 02:02 AM
-- Last update: Oct 01, 2020 at 02:02 AM
--

DROP TABLE IF EXISTS `streaming`;
CREATE TABLE IF NOT EXISTS `streaming` (
  `stream_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fanart` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`stream_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `streaming`
--

INSERT INTO `streaming` (`stream_id`, `title`, `link`, `thumbnail`, `fanart`, `description`, `category`) VALUES
(1, 'ABC Albania', 'https://abcnews.al/abcnewslive/abcnews/playlist.m3u8', 'https://png.kodi.al/tv/albdroid/black.png', 'https://png.kodi.al/tv/albdroid/black.png', 'ABC Albania', 'Albanian Channels'),
(2, 'Ultimate Hardcore Megamix', 'https://dacasts3-vh.akamaihd.net/i/secure/129080/129080_,690351.mp4,.csmil/master.m3u8', 'https://images.dacast.com/129080/sf-690351-5.png?v=1601508955053', 'https://images.dacast.com/129080/sf-690351-5.png?v=1601508955053', 'Ultimate Hardcore Megamix', 'Hardcore'),
(3, 'Azstar', 'http://live.livestreamtv.ca/azstar/smil:azstar.smil/playlist.m3u8', 'https://png.kodi.al/tv/albdroid/black.png', 'https://png.kodi.al/tv/albdroid/black.png', 'Azstar', 'Music'),
(4, 'Kral Pop TV', 'https://www.youtube.com/watch?v=dEHMR7Qpthw', 'https://png.kodi.al/tv/albdroid/black.png', 'https://png.kodi.al/tv/albdroid/black.png', 'Kral TV Youtube Live Stream', 'Youtube Live Streams'),
(5, 'Kral TV', 'https://www.youtube.com/watch?v=88tf0H1ycDU', 'https://png.kodi.al/tv/albdroid/black.png', 'https://png.kodi.al/tv/albdroid/black.png', 'Kral TV Youtube Live Stream', 'Youtube Live Streams'),
(6, 'Wave Music Radio', 'https://www.youtube.com/watch?v=v3jpVUOi9XU', 'https://png.kodi.al/tv/albdroid/black.png', 'https://png.kodi.al/tv/albdroid/black.png', 'Wave Music Radio', 'Youtube Live Streams'),
(7, 'A State Of Trance', 'https://www.youtube.com/watch?v=5lMmnfVylEE', 'https://png.kodi.al/tv/albdroid/black.png', 'https://png.kodi.al/tv/albdroid/black.png', 'A State Of Trance', 'Youtube Live Streams'),
(8, 'Scantraxx Sessions - Best Of Euphoric Hardstyle', 'https://www.youtube.com/watch?v=aGeoCHm8OzM', 'https://png.kodi.al/tv/albdroid/black.png', 'https://png.kodi.al/tv/albdroid/black.png', 'Scantraxx Sessions - Best Of Euphoric Hardstyle', 'Youtube Live Streams'),
(9, 'A State of Trance Official Podcast Episode 609', 'http://media.blubrry.com/asot/podcast.armadamusic.com/asot/episodes/episode609.m4a', 'https://png.kodi.al/tv/albdroid/black.png', 'https://png.kodi.al/tv/albdroid/black.png', 'A State of Trance Official Podcast', 'Podcasts'),
(10, 'Groove Cruise Podcasts Episode 244', 'https://groovecruise.podomatic.com/enclosure/2020-03-11T18_04_29-07_00.mp3', 'https://png.kodi.al/tv/albdroid/black.png', 'https://png.kodi.al/tv/albdroid/black.png', 'Groove Cruise Official Podcast', 'Podcasts'),
(11, 'Promo DJ Podcasts Progressive Vocal House Mix', 'https://promodj.com/download/7069231/Aquamat%20B2B%20NataliS%20%20-%20Double%20%28%20Progressive%20Vocal%20House%20mix%20%29%20%28promodj.com%29.mp3?podcast', 'https://png.kodi.al/tv/albdroid/black.png', 'https://png.kodi.al/tv/albdroid/black.png', 'Promo DJ Podcasts', 'Podcasts'),
(12, 'Masters of Hardcore Podcast 212 by Broken Minds', 'https://traffic.libsyn.com/secure/mastersofhardcore/podcast_212_CHAPTERS.mp3?dest-id=498266', 'https://png.kodi.al/tv/albdroid/black.png', 'https://png.kodi.al/tv/albdroid/black.png', 'Masters of Hardcore Official Podcast', 'Podcasts'),
(13, 'Masters of Hardcore Podcast 204 by Korsakoff', 'https://traffic.libsyn.com/secure/mastersofhardcore/chapters_204.mp3?dest-id=498266', 'https://png.kodi.al/tv/albdroid/black.png', 'https://png.kodi.al/tv/albdroid/black.png', 'Masters of Hardcore Official Podcast', 'Podcasts'),
(14, 'Dance Wave', 'http://stream.dancewave.online:8080/dance.mp3', 'http://dancewave.online/images/dw.png', 'http://dancewave.online/images/dw.png', 'Dance Wave Radios', 'Radios'),
(15, 'Radio Italiana', 'http://online.radioplayer.ua/RadioItaliana', 'https://play.tavr.media/static/image/header_menu/RadioItaliana_220x220.jpg', 'https://play.tavr.media/static/image/header_menu/RadioItaliana_220x220.jpg', 'Kiss FM Ukrainie Radios', 'Radios'),
(16, 'Hotmix Radio Hits', 'https://streamingp.shoutcast.com/hotmixradio-hits-128.mp3?newsession=1601511307&p=false', 'https://png.kodi.al/tv/albdroid/black.png', 'https://png.kodi.al/tv/albdroid/black.png', 'Hotmix Radios France', 'Radios');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
