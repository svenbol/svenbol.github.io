-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2021 at 01:34 PM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `GsN8DgJAZN`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plants`
--

CREATE TABLE `tbl_plants` (
  `id` smallint(6) NOT NULL,
  `name` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `family` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `humidity` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `water` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `waterWinter` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `waterSummer` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `acidityMin` tinyint(3) NOT NULL,
  `acidityMax` tinyint(3) NOT NULL,
  `sun` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `tempMin` tinyint(3) NOT NULL,
  `tempMax` tinyint(3) NOT NULL,
  `nutritionWhat` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nutritionWhen` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nutritionFreq` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pruningWhat` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pruningWhen` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `repotWhen` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `repotFreq` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `toxicity` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `extra` tinytext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_plants`
--

INSERT INTO `tbl_plants` (`id`, `name`, `family`, `img`, `humidity`, `water`, `waterWinter`, `waterSummer`, `acidityMin`, `acidityMax`, `sun`, `tempMin`, `tempMax`, `nutritionWhat`, `nutritionWhen`, `nutritionFreq`, `pruningWhat`, `pruningWhen`, `repotWhen`, `repotFreq`, `toxicity`, `extra`) VALUES
(1, 'Vriesea Frosteriana Red Chestnut', 'Bromeliaceae', 'https://i.pinimg.com/originals/33/73/39/337339b02f1269291fb5e8b0115a2946.jpg', 'Neutral', 'Always water in the calyx', '-', '-', 6, 7, 'Half Sun - Half Shadow', 18, 34, 'Low Nitrogen', '', 'Yearly / Not', 'Bad Leaves', '', '', 'Every 3 years', 'No tap water', ''),
(2, 'Dracaena Bicolor', 'Asparagaceae', 'https://www.tuinflora.com/media/catalog/product/cache/5/image/500x/9df78eab33525d08d6e5fb8d27136e95/F/D/FD15687WH_43.jpg\r\n', 'Humid', 'Droge grond , weinig water.', '', '', 6, 7, 'Full Shadow - Half Shadow', 12, 99, '6-1-3', 'March , Palmenvoeding', 'Every 10 days***', 'Flowers (stink)', '', 'Every 2 years.', 'Every 3 years', 'Juice of the plant light-irritating.', 'Keep dust-free, Spray with water for beautiful plant.'),
(3, 'Schefflera', 'Araliaceae', 'https://images.squarespace-cdn.com/content/v1/5dc4d61b431b5833eece4a6b/1593617518276-K8LWW8K4PPDNZALGFOF6/ke17ZwdGBToddI8pDm48kNiEM88mrzHRsd1mQ3bxVct7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0s0XaMNjCqAzRibjnE_wBlkZ2axuMlPfqFLWy-3Tjp4nKScCHg1XF4aLsQJlo6oYbA/IMG_20200210_155926_970+%281%29.jpg', 'Humid', 'Weinig water', 'Om de 10 dagen , grond mag even droog staan', 'Om de week , grond lichtvochtig houden', 6, 7, 'Full Shadow - Half Shadow', 8, 99, '10-10-10', 'Zomer ( 1x OF max 1 x 2 maand )', 'Monthly', '(Elk) Najaar', '', '3j', 'Every 2 years', 'Sap vd plant licht irriterend', 'Sproeien ( ongediertebestrijding ) Stofvrij houden\r\n'),
(4, 'Calathea Lancifolia', 'Marantaceae', 'https://www.tuinflora.com/media/catalog/product/cache/5/image/500x/9df78eab33525d08d6e5fb8d27136e95/F/D/FD16025WH_70.jpg', 'Humid', 'Veel water , Grond vochtig houden', 'Grond vochtig houden', '2x per week', 6, 7, 'Shadowplant', 16, 99, '', 'Lente/Zomer', '', 'Enkel slechte bladen', '', '2 jaar', '', '', 'Sproeien'),
(5, 'Aloë Vera', 'Asphodelaceae', 'https://www.intratuin.be/media/catalog/product/8/7/8717263717935.jpg', 'Dry', 'Little water', 'No water', 'Little water', 5, 6, 'Half shadow  Full sun', 2, 35, '-', '', '-', 'Bad Leaves', '', '2y ((spring))', 'Every 1 year', 'Juice slightly laxative.', 'Juice heals and protects wounds. Air-cleaner.'),
(6, 'Monstera Deliciosa', 'Araceae', 'https://cdn.webshopapp.com/shops/276756/files/327008036/800x1024x1/animaux-speciaux-botanical-wonders-monstera-delici.jpg', 'Humid', 'Water when ground is dry. Not too often.', 'Light Moisty', 'When ground is dry', 6, 7, 'Full Shadow - Half Shadow', 12, 30, 'Houseplants Basic', 'Spring,Summer (weekly)', '', 'Offshoots', 'Spring', 'Spring', 'Every 2 years', 'Juice is light-poisonous', 'Spray once a week for optimal care.'),
(7, 'Philodendron Scandens', 'Araceae', 'https://www.dutchrana.nl/wp-content/uploads/2019/02/Philodendron-scandens.jpg', 'Humid', 'Not too often, ground must dry out ', 'Light Moisty', 'Not too often', 6, 7, 'Full Shadow - Half Shadow', 16, 50, 'Houseplants Basic', 'Spring,Summer (2x/month)', 'Monthly', 'Offshoots', 'Spring', 'Spring', 'Every 2 years', 'Eating is poisonous', 'Spray once a week for optimal care.'),
(8, 'Rubus Idaeus Framboos', 'Rosaceae', 'https://www.dvplant.be/images/gardenpack/FRRUIAB.JPG', 'Neutral', 'Slightly moist ground', 'Monthly', 'Weekly ', 6, 7, 'Sun - Halfsun', -30, 30, '20-20-20', 'Spring', 'Once', 'Dead canes', 'Autumn', 'Spring', 'Every 2 years', '!Thorns', 'Fruit every year'),
(9, 'Rubus Thornfree Braambes', 'Rosaceae', 'https://groeneparadijs.be/media/catalog/product/cache/3ef9e7bfaa1ed2f189c51f943c68003c/r/u/rubus_fruticosus_thornfree__2.jpg', 'Neutral', 'Slightly moist ground', 'Monthly', 'Weekly ', 6, 7, 'Sun - Halfsun', -25, 35, '20-20-20', 'Mar', 'Once', 'Dead canes', 'Mar', 'Spring', 'Every 3 years', '-', 'Fruit in August yearly'),
(10, 'Ribes Rubrum Aalbes', 'Grossulariaceae', 'https://dkpo4ygqb6rh6.cloudfront.net/APPELTERN_NL/imageresized/154491/93df7cdd99943573f5d033ef9258b9d7/248_248_75_fixedjpg/270400_1.jpg', 'Neutral', 'Slightly moist ground', 'Monthly', 'Weekly ', 6, 7, 'Sun - Halfsun', -30, 35, '20-20-20', 'Spring', 'Once', 'Dead canes', 'Mar', 'Mar', 'Every 3 years', '!Birds', 'Fruit in July Yearly'),
(11, 'Dracena Fragrans', 'Asparagaceae', 'https://nurseryserve.com/img/detail_page/Nurseryserve-Dracaena-Massangeana-Dracaena-Fragrans.jpg', 'Humid', 'Keep slightly moist ground', 'Monthly', 'Weekly ', 6, 7, 'Full Shadow - Half Shadow', 10, 45, 'Organic soil', 'Summer', 'Monthly', 'Old leaves', '', 'Mar', 'Every 3 years', 'No windy environment', 'distil water to avoid leaftip burn'),
(12, 'Melissa Officinalis ', 'Lamiaceae', 'https://psychonaut.ca/wp-content/uploads/2020/11/Lemon-balm.jpg', 'Neutral', 'Slightly moist soil', '-', 'Weekly', 7, 8, 'Full sun', -25, 50, 'Nothing', 'Spring', '-', 'Dead canes', 'Spring', 'Spring', 'Every 3 years', '-', 'Keeps insects away from veggies'),
(13, 'Rubus Framberry', 'Rosaceae', 'https://www.bomenenplantenonline.nl/images/380x380/r/products/fragaria_ananassa_framberry_-_fraise_framboise_-_plant.jpg', '65% - 75%', 'Dry soil for half week', '-', 'Weekly ', 6, 7, 'Full sun', 5, 30, '10-10-10', 'Spring', 'Every 2 weeks', 'Strawberry', 'Sep', 'Spring', 'Every 3 years', 'No freeze', '.Bodembedekker'),
(14, 'Lemon Tree', 'Rutaceae', 'https://images-na.ssl-images-amazon.com/images/I/61squcHXXBL.jpg', 'Humid', 'Direct when soil dries out No wet feet', '-', 'Weekly ', 5, 6, 'Full sun', -2, 35, '8-8-8', 'Spring', 'Twice a year', 'Lemons', 'Spring', 'Spring', 'Every 2 years', '!Never let soil dry', 'Place tree high in the ground'),
(15, 'Mint', 'Lamiaceae', 'https://www.theflavorfactory.be/store/wp-content/uploads/2019/01/flavor-mint-thumbnail.jpg', 'Humid', 'Slightly Moist', '-', '-', 6, 7, 'Full Sun - Half Shadow', -10, 30, 'Organic Soil', 'Spring', 'Feed on repot', 'Before bloom', 'Jun', 'Spring', 'Every 3 years', 'Grows fast', 'Add mulch to soil'),
(16, 'Oregano', 'Lamiaceae', 'https://images.hermie.com/images/articles/normal/plantenfiche-origanum-vulgare-oregano-14325.jpg', 'Dry', 'When soil feels good dry', '-', '-', 6, 8, 'Full Sun', 0, 35, '5-10-5', 'Spring', 'Yearly', 'Empty Branches', 'Spring', 'Spring', 'Every 3 years', '', ''),
(17, 'Basilicum', 'Lamiaceae', 'https://www.veritarom.nl/wp-content/uploads/2019/11/basilicum@4x-100.jpg\r\n', 'Neutral', 'Moist , never dry soil', '-', '-', 5, 9, 'Full Sun', 7, 40, 'Organic Soil', 'Spring', 'Yearly', 'W stem splits', 'Spring', 'Spring', 'Every 3 years', '-', '-'),
(18, 'Chamaedorea Elegans', 'Arecaceae', 'https://www.ikea.com/nl/nl/images/products/chamaedorea-elegans-potplant-dwergpalm__0797381_PE766847_S5.JPG', 'Humid', 'Slight moist , roots not in water', 'Every 2 weeks', 'Twice a week', 6, 8, 'Shadow , no direct sun', 15, 27, 'Palm Feed', 'Spring', 'Monthly ', 'Browntip leaves', 'Spring', 'Spring', 'Every 2-3 years', '-', '-'),
(19, 'Chlorophytum', 'Asparagaceae', 'https://www.plantje.nl/wp-content/uploads/2018/04/chlorophytum-comosum-p12.jpg', '50 - 70', 'Weekly', 'Spray only', 'Moist ground', 6, 7, 'Shadow', 10, 27, 'Green plant ', 'Spring', 'Every 2 weeks', 'Bad leave parts', 'Spring', 'Spring', 'Every 3 years', '-', 'If big add gravel and clay'),
(20, 'Chives', 'Amaryllidaceae ', 'https://mobileimages.lowes.com/product/converted/715339/715339012142.jpg', 'Neutral', 'Slightly moist soil', '-', '-', 6, 7, 'Full Sun', 0, 35, 'Herb fertilizer', 'Spring', '', '-', 'Spring', 'Spring', 'Yearly', '-', '-'),
(21, 'Coriander', 'Apiaceae', 'https://greenvegetableseeds.com/wp-content/uploads/2013/10/coriander-leisure.jpg', 'Humid', 'Slightly moist soil', '-', '-', 7, 8, 'Half Sun - Half Shadow', -10, 30, 'Herb Fertilizer', 'Spring', '-', '-', 'Spring', 'Spring', 'Every 1 year', '-', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_plants`
--
ALTER TABLE `tbl_plants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_plants`
--
ALTER TABLE `tbl_plants`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
