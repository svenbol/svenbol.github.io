-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 mei 2015 om 12:21
-- Serverversie: 5.6.24
-- PHP-versie: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tracks`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_tracks`
--

CREATE TABLE IF NOT EXISTS `tbl_tracks` (
  `id_track` int(11) NOT NULL,
  `name_track` text NOT NULL,
  `img_track` text NOT NULL,
  `artist` text NOT NULL,
  `link_track` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_tracks`
--

INSERT INTO `tbl_tracks` (`id_track`, `name_track`, `img_track`, `artist`, `link_track`) VALUES
(4, 'Bunny in the boiler Complex', 'profielpic.jpg', 'Macky Gee', 'https://soundcloud.com/mixskank/macky-gee-bunny-boiler-complex-remix'),
(7, 'Mr Roboto Promomix', 'mario.jpg', 'Xerxes', 'https://soundcloud.com/xerxesdj/xerxes-mr-robotos-events-1-year-anniversary-promomix'),
(8, 'Papu', 'papupapu.png', 'Papu', 'https://www.youtube.com/watch?v=BrB3SoNtM30'),
(9, 'Backstage Passes', 'diamond2.gif', 'Macky Gee & Complex', 'https://soundcloud.com/mackygee/macky-gee-complex-backstage-passes'),
(11, 'The Hills Have Eyes', 'psychedelic-crash-face.jpeg', 'Dub Berzerka', 'https://soundcloud.com/dubberzerka/dub-berzerka-the-hills-have-eyes'),
(12, 'Confusion', 'psychedelic9.gif', 'AcidManiac', ' https://soundcloud.com/psychoticacidmaniac/acidmaniac-confusion-185bpm?in=sven-bs/hitech-dark-psyollaerts/set'),
(13, 'Flor Lied', 'blacren.jpeg', 'Flo', 'https://soundcloud.com/digixdnb/dub-berzerka-tell-you-digix-remix-free-download-500-followers'),
(15, 'hhhh', 'crystal.gif', 'hhhyyyyy', 'https://soundcloud.com/mixskank/l6c6wa7ykhc1'),
(18, 'y', 'elephant.gif', 'Yoshi', 'https://soundcloud.com/mixskank/l6c6wa7ykhc1'),
(19, 'Years and years', 'Rida.png', 'Rida Baas', 'https://www.youtube.com/watch?v=H3T2RnTBp_4'),
(20, 'Olifant', 'elesmoke.jpg', 'Meneer', 'https://soundcloud.com/digixdnb/dub-berzerka-tell-you-digix-remix-free-download-500-followers'),
(21, 'Darkness', 'gakpic.png', 'Dub Berzerka & Gakke', 'https://soundcloud.com/dubberzerka/dub-berzerka-darkness'),
(22, 'Nu Elementz', 'haunter.gif', 'Murderah', 'https://soundcloud.com/hover-dubz/nu-elementz-murderah'),
(23, 'Hardcoriste', 'space.gif', 'Le Bask & Lisakke', 'https://soundcloud.com/strafika/le-bask-hardchoriste');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tbl_tracks`
--
ALTER TABLE `tbl_tracks`
  ADD PRIMARY KEY (`id_track`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tbl_tracks`
--
ALTER TABLE `tbl_tracks`
  MODIFY `id_track` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
