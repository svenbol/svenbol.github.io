-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 okt 2018 om 17:12
-- Serverversie: 10.1.34-MariaDB
-- PHP-versie: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voeding`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_voeding`
--

CREATE TABLE `tbl_voeding` (
  `id` int(11) NOT NULL,
  `name` text,
  `gram` int(11) DEFAULT NULL,
  `carbs` int(11) DEFAULT NULL,
  `sugars` int(11) DEFAULT NULL,
  `fats` int(11) DEFAULT NULL,
  `price` float NOT NULL,
  `photolink` text,
  `store` text NOT NULL,
  `category` text NOT NULL,
  `tags` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_voeding`
--

INSERT INTO `tbl_voeding` (`id`, `name`, `gram`, `carbs`, `sugars`, `fats`, `price`, `photolink`, `store`, `category`, `tags`) VALUES
(1, 'hummus maza', 200, NULL, NULL, NULL, 2.2, 'https://static.ah.nl/image-optimization/static/product/AHI_434d50323238333231_2_LowRes_JPG.JPG?options=399,q80', 'albert heijn', 'beleg', NULL),
(2, 'chips Doritos Lemon Blast', 185, NULL, NULL, NULL, 1.45, 'https://static.ah.nl/image-optimization/static/product/AHI_4354525f36303034383137_1_LowRes_JPG.JPG?options=399,q80', 'albert heijn', 'snoep', NULL),
(3, 'chocolade Tony\'s Chocolony', 180, NULL, NULL, NULL, 2.95, 'https://static.ahold.com/image-optimization/cmgtcontent/media//001800100/000/001800110_001_417353_200.jpg?options=399,q75', 'albert heijn', 'snoep', NULL),
(4, 'sinaasappelsap', 2000, NULL, NULL, NULL, 2.29, 'https://colruyt.collectandgo.be/cogo/step/JPG/JPG/500x500/std.lang.all/16/43/asset-1391643.jpg', 'colruyt', 'drank', NULL),
(6, 'appelsap', 1000, 0, 0, 0, 2.35, 'https://www.dutchexpatshop.com/media/catalog/product/cache/1/image/268x/e58cc65a563c5de5c76669b622421d50/j/o/jonapress_appelsap_natuurlijk.jpg', 'delhaize', 'drank', NULL),
(7, 'bananen chiquita', 1000, 0, 0, 0, 1.89, 'https://static.ahold.com/image-optimization/cmgtcontent/media//000998200/000/000998216_003_127393_708.jpg?options=399,q80', 'albert', 'fruit', NULL),
(8, 'chips bicky crocky', 200, 0, 0, 0, 0.99, 'http://croky.be/media/images/history/2016.png', 'albert', 'snoep', NULL),
(10, 'nutella', 750, 0, 0, 0, 5.41, 'https://images-na.ssl-images-amazon.com/images/I/71OSDx9uJjL._SX522_.jpg', 'Colruyt', 'beleg', NULL),
(11, 'lion pop choc', 140, 0, 0, 0, 1.12, 'https://www.opisopvoordeelshop.nl/media/catalog/product/cache/image/700x660/e9c3970ab036de70892d86c6d221abfe/3/0/3055_1_1.png', 'action', 'snoep', NULL),
(12, 'koffiepad Douwe Egberts', 375, 0, 0, 0, 5.58, 'https://static.mijnwebwinkel.nl/winkel/nachtwinkeloostende/image/cache/full/dc66ee7aa4c209a843aa650fc487accd45bb7283.jpg', 'albert', 'drank', NULL),
(13, 'Wafel lotus', 224, 0, 0, 0, 1.69, 'https://colruyt.collectandgo.be/cogo/step/JPG/JPG/500x500/std.lang.all/80/95/asset-388095.jpg', 'albert', 'snoep', NULL),
(16, 'falafel balletjes', 234, 0, 0, 0, 2.99, 'https://static.ah.nl/image-optimization/static/product/AHI_43545236313839323234_1_LowRes_JPG.JPG?options=399,q80', 'albert', 'vlees', NULL),
(17, 'geitenkaas', 0, 0, 0, 0, 0, 'https://nl.aldi.be/images/verse_geitenkaas_big_154815.jpg', 'aldi', 'zuivel', NULL),
(18, 'geitenkaas met spek', 0, 0, 0, 0, 0, 'https://www.supermarktaanbiedingen.com/public/images/discount/2018/14/717068.png', 'aldi', 'zuivel', NULL),
(19, 'spa lemon cactus', 1250, 0, 0, 0, 1.71, 'https://static.ah.nl/image-optimization/static/product/AHI_4b525436303033313831_1_LowRes_JPG.JPG?options=399,q80', 'albert', 'drank', NULL),
(20, 'advocaat', 400, 0, 0, 0, 12, 'https://static.webshopapp.com/shops/036165/files/043455140/400x400x2/den-gouden-haan-advokaat-klassiek-400g.jpg', 'carrefour', 'snoep', 'alcohol'),
(23, 'wafels ', 0, 0, 0, 0, 0, 'https://galettes-de-luc.be/wp-content/uploads/2016/02/galettes-de-luc-en-paquet.jpg', 'delhaize', 'snoep', ''),
(24, 'sriracha', 0, 0, 0, 0, 4, 'https://beautifullyalive.org/wp-content/uploads/2018/03/s-l1000.jpg', 'colruyt', 'beleg', 'pikant saus'),
(25, 'bicky burger', 100, 0, 0, 0, 2.7, 'http://www.redrooster.be/wp-content/uploads/2015/07/bickycrispy.jpg', 'carrefour', 'snoep', 'hamburger'),
(29, 'Ben n Jerrys', 500, 0, 0, 0, 5.29, 'https://www.benjerry.nl/files/live/sites/systemsite/files/flavors/products/eu/wich/pints/cookie-dough-swich-up-detail.png', 'albert', 'snoep', ''),
(30, 'Doritos Roulette', 185, 0, 0, 0, 1.32, 'https://d2rfo6yapuixuu.cloudfront.net/h7f/h78/9107030638622/8710398511232_1523144800807_master_axfood_400', 'albert', 'snoep', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tbl_voeding`
--
ALTER TABLE `tbl_voeding`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tbl_voeding`
--
ALTER TABLE `tbl_voeding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
