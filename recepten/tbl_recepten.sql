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
-- Tabelstructuur voor tabel `tbl_recepten`
--

CREATE TABLE `tbl_recepten` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `photo` text NOT NULL,
  `ingredients` text NOT NULL,
  `gram` text NOT NULL,
  `kitchmat` text NOT NULL,
  `description` text NOT NULL,
  `pretime` int(11) NOT NULL,
  `dotime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_recepten`
--

INSERT INTO `tbl_recepten` (`id`, `name`, `photo`, `ingredients`, `gram`, `kitchmat`, `description`, `pretime`, `dotime`) VALUES
(1, 'lemonade', 'https://img.static-smb.be/a/food/image/q75/w640/h400/1086910/zelfgemaakte-limonade.jpg', 'suiker water citroen', '50 500 500', 'potje vuur', '', 5, 15),
(2, 'carbonara', 'https://www.carusopizza.cz/324-large_default/spaghetti-carbonara.jpg', 'kwark ei', '500 200', 'pastalepel', 'HOE MAAK JE HET RECEPT', 5, 10),
(3, 'luikse wafel', 'https://www.chaupain.nl/wp-content/uploads/2017/11/11000-Luikse-wafel.png', 'appel sabeltandtijger', '20 40', 'oorapparaat', 'linkervoet naar voren', 5, 50);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tbl_recepten`
--
ALTER TABLE `tbl_recepten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tbl_recepten`
--
ALTER TABLE `tbl_recepten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
