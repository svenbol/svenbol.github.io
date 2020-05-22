-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 22 mei 2020 om 14:19
-- Serverversie: 10.3.16-MariaDB
-- PHP-versie: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id7180973_id7180973_tracks`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_tracks`
--

CREATE TABLE `tbl_tracks` (
  `id_track` int(11) NOT NULL,
  `name_track` text NOT NULL,
  `img_track` text NOT NULL,
  `artist` text NOT NULL,
  `link_track` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tbl_tracks`
--

INSERT INTO `tbl_tracks` (`id_track`, `name_track`, `img_track`, `artist`, `link_track`) VALUES
(8, 'CTR: Papu', 'papupapu.png', 'Papu', 'https://www.youtube.com/watch?v=BrB3SoNtM30'),
(11, 'Afrika VIP', 'tri2.gif', 'Forbidden Society', 'https://www.youtube.com/watch?v=khYpd2TWc6Y'),
(13, 'Hellove Ja Wohl Yo', 'blacren.jpeg', 'Psykovsky', 'https://soundcloud.com/a-l-arrache/psykovsky-hellove-ja-wohl-yo'),
(15, 'Glue', 'crystal.gif', 'Bicep', 'https://www.youtube.com/watch?v=A7ZxRs45tTg'),
(20, 'Chimes', 'pyramid03.gif', 'Break & Kyo', 'https://soundcloud.com/drumandbassarena/break-kyo-chimes'),
(24, 'Garden (Calibre Remix)', 'tri1.gif', 'T.E.E.D', 'https://www.youtube.com/watch?v=GuQBopNcve0'),
(25, 'Broken Dreams ( Makoto Rmx )', 'psychedelic-crash-face.jpeg', 'Lenzman', 'https://www.youtube.com/watch?v=-5FT9Be0jAc'),
(26, 'Falling', 'tri6.gif', 'Apex', 'https://www.youtube.com/watch?v=GnhQlpRXri0'),
(31, 'The Joy (Seba Rmx )', 'tri12.gif', 'Kirsty Hawkshaw', 'https://www.youtube.com/watch?v=_r79fFir0Pk'),
(33, 'Arrows', 'tri10.gif', 'Icicle', 'https://soundcloud.com/nico-dct/icicle-arrows'),
(35, 'Rushing World', 'giphy[3].gif', 'Kong', 'https://soundcloud.com/kongdubz/kong-rushing-world-clip?in=sven-bollaerts/sets/golden-dubz'),
(39, 'Fenris', 'space02.gif', 'Concord Dawn', 'https://www.youtube.com/watch?v=Kzj-WuWYI-E'),
(40, 'CTR: Blizzard Bluff', 'penta.png', 'Penta Pinguïn', 'https://www.youtube.com/watch?v=oTu0EomojU8'),
(41, 'CTR: Tiger Temple', 'pura.png', 'Pura', 'https://www.youtube.com/watch?v=pY0e91WI7Bs'),
(42, 'Protected', 'pyramid03.gif', 'The Sect', 'https://www.youtube.com/watch?v=xEJ3yP_m9fw'),
(44, 'V', 'tri7.gif', 'Counterstrike', 'https://www.youtube.com/watch?v=vv8r9_QBc0o'),
(47, '100 Degrees', 'space05.gif', 'Corrupted', 'https://soundcloud.com/foot-juice-antwerp/corrupted-100-degrees-1'),
(52, 'Sun King', 'https://thumbs.gfycat.com/SpitefulJoyousAlaskankleekai-size_restricted.gif', 'State Of Mind', 'https://www.youtube.com/watch?v=imp0BqHBxyQ'),
(53, 'SoundTrack Full', 'https://media.giphy.com/media/2YlelGeI5ornsi6rbC/giphy.gif', 'Spyro The Dragon 1', 'https://www.youtube.com/watch?v=i08gE5EVKmM'),
(55, 'SoundTrack Full', 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f8cff7d2-3d2c-4ed2-8cfb-b8ce430db2a8/dcgvfqp-b452e029-45cc-443a-a89d-0e7da4be20a0.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y4Y2ZmN2QyLTNkMmMtNGVkMi04Y2ZiLWI4Y2U0MzBkYjJhOFwvZGNndmZxcC1iNDUyZTAyOS00NWNjLTQ0M2EtYTg5ZC0wZTdkYTRiZTIwYTAuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.eN1cktGw4qYIstM71auDsA1Pq1rFgfUj6yBag33daxg', 'Spyro The Dragon 2', 'https://www.youtube.com/watch?v=lHkV2mULSlU'),
(56, 'SoundTrack Full', 'https://media.giphy.com/media/2wh82C21KFVdi6uc7n/giphy.gif', 'Spyro The Dragon 3', 'https://www.youtube.com/watch?v=k7n74VEKXrM'),
(57, 'Lie Detection', 'https://i.gifer.com/7d1p.gif', 'Proxima', 'https://www.youtube.com/watch?v=M9nh26QpQVE'),
(60, 'Shinkansen', 'https://media1.giphy.com/media/xmc8SbsbDeyKQ/source.gif', 'Concord Dawn', 'https://www.youtube.com/watc'),
(62, '1138', 'https://media.giphy.com/media/ekBL4SQQBkwWhFIHrY/giphy.gif', 'Corrupted Souls & Hoax', 'https://www.youtube.com/watch?v=W2W7sMBuhGU');

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
  MODIFY `id_track` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
