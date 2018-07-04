-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Client :  db740498105.db.1and1.com
-- Généré le :  Mer 04 Juillet 2018 à 19:13
-- Version du serveur :  5.5.60-0+deb7u1-log
-- Version de PHP :  5.4.45-0+deb7u14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `db740498105`
--

-- --------------------------------------------------------

--
-- Structure de la table `bague`
--

CREATE TABLE IF NOT EXISTS `bague` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `gravure` varchar(255) DEFAULT NULL,
  `fonctionnalite` text,
  `choix` varchar(255) NOT NULL,
  `imagebague` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `taille` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `bague`
--

INSERT INTO `bague` (`id`, `created`, `updated`, `gravure`, `fonctionnalite`, `choix`, `imagebague`, `email`, `taille`) VALUES
(1, '2018-06-26 00:00:00', '2018-06-26 00:00:00', 'ici texte', 'ma fonctionnalite', '', '', '', 0),
(2, '2018-06-26 00:00:00', '2018-06-26 00:00:00', 'ici texte2', 'ma fonctionnalite2', '', '', '', 0),
(3, '2018-06-26 00:00:00', '2018-06-26 00:00:00', 'ici texte2', 'ma fonctionnalite2', '', '', '', 0),
(4, '2018-06-27 00:00:00', '2018-06-27 00:00:00', '', '', 'choix-duo', '', '', 0),
(5, '2018-06-27 00:00:00', '2018-06-27 00:00:00', '', '', 'choix-duo', '', '', 0),
(6, '2018-06-27 00:00:00', '2018-06-27 00:00:00', '', '', 'choix-duo', '', '', NULL),
(7, '2018-06-30 22:37:59', '2018-06-30 22:37:59', 'taille 51', 'test', '', 'src/custom/anthracite-stone.png', 'sdaguerre75@gmail.com', 51),
(8, '2018-06-30 23:54:06', '2018-06-30 23:54:06', '', '', '', 'src/custom/blanc-rose.png', 'sdaguerre75@gmail.com', 45),
(9, '2018-06-30 23:54:28', '2018-06-30 23:54:28', '', '', '', 'src/custom/blanc-rose.png', 'sdaguerre75@gmail.com', 45),
(10, '2018-06-30 23:56:18', '2018-06-30 23:56:18', '', '', '', 'src/custom/blanc-rose.png', 'sdaguerre75@gmail.com', 45),
(11, '2018-07-01 00:12:41', '2018-07-01 00:12:41', 'ici texte2', '', 'choix-solo', 'src/custom/anthracite-snake.png', 'sdaguerre75@gmail.com', 47),
(12, '2018-07-01 16:40:33', '2018-07-01 16:40:33', 'Solenne', 'J''ai eu une bonne idée', 'choix-duo', 'src/custom/aluminium-spikes.png', 'sdaguerre75@gmail.com', 49),
(13, '2018-07-01 16:45:01', '2018-07-01 16:45:01', 'Soso', 'J''ai eu une bonne idée', 'choix-solo', 'src/custom/anthracite-snake.png', 'sdaguerre75@gmail.com', 71),
(14, '2018-07-01 16:49:03', '2018-07-01 16:49:03', 'taille 60', 'pouloulou', 'choix-solo', 'src/custom/acier-snake.png', 'sdaguerre75@gmail.com', 49),
(15, '2018-07-01 16:51:24', '2018-07-01 16:51:24', 'hello', 'baaand', 'choix-solo', 'src/custom/acier-stone.png', 'sdaguerre75@gmail.com', 55),
(16, '2018-07-01 17:16:08', '2018-07-01 17:16:08', '2message', '2messages', 'choix-duo', 'src/custom/aluminium-snake.png', 'sdaguerre75@gmail.com', 66),
(17, '2018-07-01 17:18:06', '2018-07-01 17:18:06', 'ici texte2', 'pouloulou', 'choix-solo', 'src/custom/aluminium-skull.png', 'sdaguerre75@gmail.com', 44),
(18, '2018-07-01 17:27:37', '2018-07-01 17:27:37', 'ici texte2', 'ma fonctionnalite2', 'choix-duo', 'src/custom/noir-snake.png', 'sdaguerre75@gmail.com', 47),
(19, '2018-07-01 17:33:15', '2018-07-01 17:33:15', 'non', '', 'choix-solo', 'src/custom/noir-skull.png', 'sdaguerre75@gmail.com', 47),
(20, '2018-07-01 17:42:11', '2018-07-01 17:42:11', 'taille 60', 'ma fonctionnalite2', 'choix-solo', 'src/custom/aluminium-spikes.png', 'sdaguerre75@gmail.com', 45);

-- --------------------------------------------------------

--
-- Structure de la table `citation`
--

CREATE TABLE IF NOT EXISTS `citation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `bpm` int(11) NOT NULL,
  `texte` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=27 ;

--
-- Contenu de la table `citation`
--

INSERT INTO `citation` (`id`, `created`, `bpm`, `texte`) VALUES
(1, '2018-06-23 00:00:00', 90, 'Mmmh'),
(2, '2018-06-23 00:00:00', 120, 'Plus fort'),
(3, '0000-00-00 00:00:00', 190, 'Je jouis ! '),
(4, '2018-06-25 00:00:00', 90, 'Oui !'),
(5, '0000-00-00 00:00:00', 90, 'Ouhhh'),
(6, '0000-00-00 00:00:00', 90, 'Sexy...'),
(7, '0000-00-00 00:00:00', 90, 'C’est bon…'),
(8, '0000-00-00 00:00:00', 90, 'Prends moi !'),
(9, '0000-00-00 00:00:00', 90, 'Tu m''excites...'),
(10, '0000-00-00 00:00:00', 90, 'Continues comme ça...'),
(11, '0000-00-00 00:00:00', 90, 'Mords moi...'),
(12, '0000-00-00 00:00:00', 120, 'Grrr '),
(13, '0000-00-00 00:00:00', 120, 'Plus vite !'),
(14, '0000-00-00 00:00:00', 120, 'Encore !'),
(15, '0000-00-00 00:00:00', 120, 'T''aimes ça ?'),
(16, '0000-00-00 00:00:00', 120, 'Accélère !'),
(17, '0000-00-00 00:00:00', 120, 'N’arrêtes pas !'),
(18, '0000-00-00 00:00:00', 120, 'Plus profond !'),
(19, '0000-00-00 00:00:00', 120, 'J’y suis presque !'),
(20, '0000-00-00 00:00:00', 120, 'Ça vient...'),
(21, '0000-00-00 00:00:00', 190, 'Je jouis !'),
(22, '0000-00-00 00:00:00', 190, 'Oh mon dieu !'),
(23, '0000-00-00 00:00:00', 190, 'Oh putain !'),
(24, '0000-00-00 00:00:00', 190, 'Seigneur Marie-Joseph !'),
(25, '0000-00-00 00:00:00', 190, 'Aaaaaah !'),
(26, '0000-00-00 00:00:00', 190, 'Ouuuiiiii !');

-- --------------------------------------------------------

--
-- Structure de la table `costum`
--

CREATE TABLE IF NOT EXISTS `costum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `couleur` varchar(255) NOT NULL,
  `ornement` varchar(255) NOT NULL,
  `sources` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `costum`
--

INSERT INTO `costum` (`id`, `couleur`, `ornement`, `sources`) VALUES
(2, 'noir', 'spikes', 'src/custom/noir-spikes.png'),
(3, 'noir', 'skull', 'src/custom/noir-skull.png'),
(4, 'noir', 'snake', 'src/custom/noir-snake.png'),
(5, 'noir', 'stone', 'src/custom/noir-stone.png'),
(7, 'noir', 'rose', 'src/custom/noir-rose.png'),
(8, 'anthracite', 'spikes', 'src/custom/anthracite-spikes.png'),
(9, 'anthracite', 'skull', 'src/custom/anthracite-skull.png'),
(10, 'anthracite', 'snake', 'src/custom/anthracite-snake.png'),
(11, 'anthracite', 'stone', 'src/custom/anthracite-stone.png'),
(12, 'anthracite', 'rose', 'src/custom/anthracite-rose.png'),
(13, 'aluminium', 'spikes', 'src/custom/aluminium-spikes.png'),
(15, 'aluminium', 'skull', 'src/custom/aluminium-skull.png'),
(16, 'aluminium', 'snake', 'src/custom/aluminium-snake.png'),
(17, 'aluminium', 'stone', 'src/custom/aluminium-stone.png'),
(18, 'aluminium', 'rose', 'src/custom/aluminium-rose.png'),
(19, 'acier', 'spikes', 'src/custom/acier-spikes.png'),
(20, 'acier', 'skull', 'src/custom/acier-skull.png'),
(21, 'acier', 'snake', 'src/custom/acier-snake.png'),
(22, 'acier', 'stone', 'src/custom/acier-stone.png'),
(23, 'acier', 'rose', 'src/custom/acier-rose.png'),
(24, 'blanc', 'spikes', 'src/custom/blanc-spikes.png'),
(25, 'blanc', 'skull', 'src/custom/blanc-skull.png'),
(26, 'blanc', 'snake', 'src/custom/blanc-snake.png'),
(27, 'blanc', 'stone', 'src/custom/blanc-stone.png'),
(28, 'blanc', 'rose', 'src/custom/blanc-rose.png');

-- --------------------------------------------------------

--
-- Structure de la table `deezer`
--

CREATE TABLE IF NOT EXISTS `deezer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `id_deezer` int(11) NOT NULL,
  `bpm` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=192 ;

--
-- Contenu de la table `deezer`
--

INSERT INTO `deezer` (`id`, `created`, `id_deezer`, `bpm`) VALUES
(1, '2018-06-19 00:00:00', 92719900, 115),
(2, '2018-06-19 00:00:00', 462946822, 120),
(3, '2018-06-19 00:00:00', 462946832, 135),
(4, '2018-06-19 00:00:00', 435821682, 124),
(5, '2018-06-19 00:00:00', 462946892, 95),
(6, '2018-06-19 00:00:00', 5652656, 166),
(7, '2018-06-19 00:00:00', 677232, 109),
(8, '2018-06-19 00:00:00', 37734441, 107),
(9, '2018-06-19 00:00:00', 13791930, 116),
(10, '2018-06-19 00:00:00', 912486, 110),
(11, '2018-06-19 00:00:00', 9997018, 141),
(12, '2018-06-19 00:00:00', 88003859, 143),
(13, '2018-06-19 00:00:00', 948047, 123),
(14, '2018-06-19 00:00:00', 3614134, 104),
(15, '2018-06-19 00:00:00', 138547415, 91),
(16, '2018-06-19 00:00:00', 95085780, 160),
(17, '2018-06-19 00:00:00', 907684, 167),
(18, '2018-06-19 00:00:00', 408728172, 112),
(19, '2018-06-19 00:00:00', 2525864, 117),
(20, '2018-06-19 00:00:00', 3091992, 150),
(21, '2018-06-19 00:00:00', 2263033, 148),
(22, '2018-06-19 00:00:00', 4603408, 117),
(23, '2018-06-19 00:00:00', 110593342, 98),
(24, '2018-06-19 00:00:00', 68097787, 147),
(25, '2018-06-19 00:00:00', 2171464, 124),
(26, '2018-06-19 00:00:00', 7818900, 159),
(27, '2018-06-19 00:00:00', 60742395, 147),
(28, '2018-06-19 00:00:00', 60840057, 113),
(29, '2018-06-19 00:00:00', 797434, 147),
(30, '2018-06-19 00:00:00', 9914834, 118),
(31, '2018-06-19 00:00:00', 676183, 105),
(32, '2018-06-19 00:00:00', 3098840, 146),
(33, '2018-06-19 00:00:00', 116348694, 154),
(34, '2018-06-19 00:00:00', 12206933, 81),
(35, '2018-06-19 00:00:00', 92720102, 133),
(36, '2018-06-19 00:00:00', 1579265, 101),
(37, '2018-06-19 00:00:00', 74173002, 173),
(38, '2018-06-19 00:00:00', 6611231, 166),
(39, '2018-06-19 00:00:00', 137234014, 107),
(40, '2018-06-19 00:00:00', 912742, 118),
(41, '2018-06-19 00:00:00', 3145759, 189),
(42, '2018-06-19 00:00:00', 3129663, 107),
(43, '2018-06-19 00:00:00', 1079668, 92),
(44, '2018-06-19 00:00:00', 41306291, 105),
(45, '2018-06-19 00:00:00', 3469516, 98),
(46, '2018-06-19 00:00:00', 550518, 116),
(47, '2018-06-19 00:00:00', 123981786, 99),
(48, '2018-06-19 00:00:00', 14638386, 135),
(49, '2018-06-19 00:00:00', 143042822, 139),
(50, '2018-06-19 00:00:00', 1097838, 146),
(51, '2018-06-19 00:00:00', 3155135, 116),
(52, '2018-06-19 00:00:00', 782753, 98),
(53, '2018-06-19 00:00:00', 6878097, 120),
(54, '2018-06-19 00:00:00', 570650, 132),
(55, '2018-06-19 00:00:00', 94781534, 164),
(56, '2018-06-19 00:00:00', 727720, 123),
(57, '2018-06-19 00:00:00', 608589, 139),
(58, '2018-06-19 00:00:00', 143061028, 79),
(59, '2018-06-19 00:00:00', 125044824, 141),
(60, '2018-06-19 00:00:00', 541399, 105),
(61, '2018-06-19 00:00:00', 977945, 173),
(62, '2018-06-19 00:00:00', 65922308, 160),
(63, '2018-06-19 00:00:00', 3977905, 177),
(64, '2018-06-19 00:00:00', 368173971, 154),
(65, '2018-06-19 00:00:00', 134036212, 94),
(66, '2018-06-19 00:00:00', 2447245, 118),
(67, '2018-06-19 00:00:00', 680601, 225),
(68, '2018-06-19 00:00:00', 2168802, 180),
(69, '2018-06-19 00:00:00', 60702996, 102),
(70, '2018-06-19 00:00:00', 756755, 113),
(71, '2018-06-19 00:00:00', 89239759, 137),
(72, '2018-06-19 00:00:00', 82159934, 166),
(73, '2018-06-19 00:00:00', 907709, 88),
(74, '2018-06-19 00:00:00', 84791527, 120),
(75, '2018-06-19 00:00:00', 449183832, 123),
(76, '2018-06-19 00:00:00', 929222, 119),
(77, '2018-06-19 00:00:00', 2525877, 132),
(78, '2018-06-19 00:00:00', 10303625, 175),
(79, '2018-06-19 00:00:00', 1101200, 161),
(80, '2018-06-19 00:00:00', 557641, 135),
(81, '2018-06-19 00:00:00', 104760756, 92),
(82, '2018-06-19 00:00:00', 1175620, 104),
(83, '2018-06-19 00:00:00', 3818860, 185),
(84, '2018-06-19 00:00:00', 849592, 136),
(85, '2018-06-19 00:00:00', 121927192, 153),
(86, '2018-06-19 00:00:00', 1144863, 136),
(87, '2018-06-19 00:00:00', 404618712, 128),
(88, '2018-06-19 00:00:00', 1175615, 115),
(89, '2018-06-19 00:00:00', 60840057, 113),
(90, '2018-06-19 00:00:00', 2114399, 124),
(91, '2018-06-19 00:00:00', 3155466, 134),
(92, '2018-06-19 00:00:00', 1037414, 109),
(93, '2018-06-19 00:00:00', 3614666, 144),
(94, '2018-06-19 00:00:00', 920414, 144),
(95, '2018-06-19 00:00:00', 7193834, 151),
(96, '2018-06-19 00:00:00', 14477354, 190),
(97, '2018-06-19 00:00:00', 7279327, 149),
(98, '2018-06-19 00:00:00', 812715, 160),
(99, '2018-06-19 00:00:00', 65445461, 169),
(100, '2018-06-19 00:00:00', 594827, 137),
(101, '2018-06-19 00:00:00', 2483915, 148),
(102, '2018-06-19 00:00:00', 883648, 132),
(103, '2018-06-19 00:00:00', 907714, 195),
(104, '2018-06-19 00:00:00', 2121805, 115),
(105, '2018-06-19 00:00:00', 134946506, 163),
(106, '2018-06-19 00:00:00', 117581966, 127),
(107, '2018-06-19 00:00:00', 4952889, 113),
(108, '2018-06-19 00:00:00', 116348694, 154),
(109, '2018-06-19 00:00:00', 92720046, 190),
(110, '2018-06-19 00:00:00', 9914834, 118),
(111, '2018-06-19 00:00:00', 95085780, 160),
(112, '2018-06-19 00:00:00', 1104580, 181),
(113, '2018-06-19 00:00:00', 62082829, 163),
(114, '2018-06-19 00:00:00', 70466227, 99),
(115, '2018-06-19 00:00:00', 137234080, 104),
(116, '2018-06-19 00:00:00', 2542120, 151),
(117, '2018-06-19 00:00:00', 3102138, 120),
(118, '2018-06-19 00:00:00', 74173044, 105),
(119, '2018-06-19 00:00:00', 678044, 175),
(120, '2018-06-19 00:00:00', 78631539, 104),
(121, '2018-06-19 00:00:00', 7332947, 143),
(122, '2018-06-19 00:00:00', 3102130, 129),
(123, '2018-06-19 00:00:00', 63884541, 150),
(124, '2018-06-19 00:00:00', 432946922, 170),
(125, '2018-06-19 00:00:00', 137233986, 99),
(126, '2018-06-19 00:00:00', 785192, 96),
(127, '2018-06-19 00:00:00', 366448231, 128),
(128, '2018-06-19 00:00:00', 389065721, 139),
(129, '2018-06-19 00:00:00', 3129746, 107),
(130, '2018-06-19 00:00:00', 714554, 129),
(131, '2018-06-19 00:00:00', 60847286, 129),
(132, '2018-06-19 00:00:00', 60847286, 119),
(133, '2018-06-19 00:00:00', 5512145, 103),
(134, '2018-06-19 00:00:00', 3871841, 115),
(135, '2018-06-19 00:00:00', 1572586, 145),
(136, '2018-06-19 00:00:00', 492429952, 124),
(137, '2018-06-19 00:00:00', 492429732, 123),
(138, '2018-06-19 00:00:00', 2485366, 154),
(139, '2018-06-19 00:00:00', 3135725, 139),
(140, '2018-06-19 00:00:00', 3135726, 142),
(141, '2018-06-19 00:00:00', 3256040, 114),
(142, '2018-06-19 00:00:00', 3135721, 138),
(143, '2018-06-19 00:00:00', 1132150, 167),
(144, '2018-06-19 00:00:00', 870090, 109),
(145, '2018-06-19 00:00:00', 1048898, 137),
(146, '2018-06-19 00:00:00', 1077176, 148),
(147, '2018-06-19 00:00:00', 1078003, 142),
(148, '2018-06-19 00:00:00', 2203492, 102),
(149, '2018-06-19 00:00:00', 14352333, 105),
(150, '2018-06-19 00:00:00', 2203474, 104),
(151, '2018-06-19 00:00:00', 2203493, 84),
(152, '2018-06-19 00:00:00', 984398, 102),
(153, '2018-06-19 00:00:00', 60788473, 107),
(154, '2018-06-19 00:00:00', 357116921, 109),
(155, '2018-06-19 00:00:00', 357116941, 136),
(156, '2018-06-19 00:00:00', 60788469, 99),
(157, '2018-06-19 00:00:00', 357116911, 175),
(158, '2018-06-19 00:00:00', 139103973, 95),
(159, '2018-06-19 00:00:00', 128171553, 109),
(160, '2018-06-19 00:00:00', 65445466, 103),
(161, '2018-06-19 00:00:00', 117581954, 103),
(162, '2018-06-19 00:00:00', 2525878, 154),
(163, '2018-06-19 00:00:00', 3613215, 124),
(164, '2018-06-19 00:00:00', 1056919, 103),
(165, '2018-06-19 00:00:00', 120430776, 106),
(166, '2018-06-19 00:00:00', 811880, 104),
(167, '2018-06-19 00:00:00', 948047, 123),
(168, '2018-06-19 00:00:00', 2947342, 137),
(169, '2018-06-19 00:00:00', 4315684, 104),
(170, '2018-06-19 00:00:00', 3599714, 186),
(171, '2018-06-19 00:00:00', 70322130, 84),
(172, '2018-06-19 00:00:00', 3590186, 119),
(173, '2018-06-19 00:00:00', 725929, 126),
(174, '2018-06-19 00:00:00', 68513563, 130),
(175, '2018-06-19 00:00:00', 7597630, 152),
(176, '2018-06-19 00:00:00', 1145260, 182),
(177, '2018-06-19 00:00:00', 69962764, 131),
(178, '2018-06-19 00:00:00', 12210099, 110),
(179, '2018-06-19 00:00:00', 598721, 94),
(180, '2018-06-19 00:00:00', 3092637, 194),
(181, '2018-06-19 00:00:00', 2963078, 157),
(182, '2018-06-19 00:00:00', 598719, 164),
(183, '2018-06-19 00:00:00', 118609320, 126),
(184, '2018-06-19 00:00:00', 65326443, 157),
(185, '2018-06-19 00:00:00', 63564840, 166),
(186, '2018-06-19 00:00:00', 12210088, 160),
(187, '2018-06-19 00:00:00', 3130099, 124),
(188, '2018-06-19 00:00:00', 355182911, 105),
(189, '2018-06-19 00:00:00', 355182921, 176),
(190, '2018-06-19 00:00:00', 355172301, 126),
(191, '2018-06-19 00:00:00', 983238, 137);

-- --------------------------------------------------------

--
-- Structure de la table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `email`
--

INSERT INTO `email` (`id`, `created`, `updated`, `email`) VALUES
(1, '2018-06-03 17:20:54', '2018-06-03 17:20:54', 'sdaguerre75@gmail.com'),
(2, '2018-06-03 17:24:17', '2018-06-03 17:24:17', 'solenne.daguerre@gmail.com'),
(3, '2018-06-08 00:00:04', '2018-06-08 00:00:04', 'sdaguerre75@gmail.com'),
(4, '2018-06-08 12:35:19', '2018-06-08 12:35:19', 'marianne.dufosse@hotmail.fr'),
(5, '2018-06-10 13:53:37', '2018-06-10 13:53:37', 'lotte97@live.fr'),
(6, '2018-06-27 14:32:02', '2018-06-27 14:32:02', 'sdaguerre75@gmail.com'),
(7, '2018-06-27 14:32:52', '2018-06-27 14:32:52', 'sdaguerre75@gmail.com'),
(8, '2018-06-27 14:35:32', '2018-06-27 14:35:32', 'solenne.daguerre@gmail.com'),
(9, '2018-06-27 14:38:08', '2018-06-27 14:38:08', 'sdaguerre75@gmail.com'),
(10, '2018-06-27 14:53:42', '2018-06-27 14:53:42', 'sdaguerre75@gmail.com'),
(11, '2018-06-27 14:57:08', '2018-06-27 14:57:08', 'sdaguerre75@gmail.com'),
(12, '2018-06-27 14:57:17', '2018-06-27 14:57:17', 'sdaguerre75@gmail.com'),
(13, '2018-06-27 14:58:11', '2018-06-27 14:58:11', 'sdaguerre75@gmail.com'),
(14, '2018-06-27 15:00:06', '2018-06-27 15:00:06', 'sdaguerre75@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `horoscope`
--

CREATE TABLE IF NOT EXISTS `horoscope` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `score` int(11) NOT NULL,
  `rockeur` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `texte` text COLLATE latin1_general_ci NOT NULL,
  `progressrock` int(11) NOT NULL,
  `progresssonore` int(11) NOT NULL,
  `progressbpm` int(11) NOT NULL,
  `progresssexualite` int(11) NOT NULL,
  `mode` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `lien` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `horoscope`
--

INSERT INTO `horoscope` (`id`, `created`, `updated`, `score`, `rockeur`, `texte`, `progressrock`, `progresssonore`, `progressbpm`, `progresssexualite`, `mode`, `lien`) VALUES
(1, '2018-06-20 00:00:00', '2018-06-20 00:00:00', 0, 'Beatles', 'Vous recherchez l’esthétisme dans ce qui vous entours et rien ne vous dérange plus que la vulgarité et l’obscénité. Vous pouvez même parfois voir la sexualité comme un élément révoltant ou indigne et serez instantanément refroidie si vous êtes confrontés à quelque chose que vous ne jugez pas suffisamment romantique ou mignon. Les mots crus ou les images vulgaires vous rebutent et vous font fuir à toutes jambes.', 10, 15, 50, 10, 'Solo', 'connexion.php'),
(2, '2018-06-20 00:00:00', '2018-06-20 00:00:00', 4, 'John Lennon', 'Vous ne pouvez trouver l''épanouissement des sens que dans l''harmonie et l''équilibre. Toute contrainte, toute brusquerie, toute dissonance et tout désordre sont aptes à refroidir vos ardeurs et à vous ôter l''envie de la moindre expérience. Vous êtes dotés d''un bon tempérament sexuel, ni trop faible, ni excessif. Le maître mot pour qualifier votre comportement est "équilibre" - équilibre entre sexe et sentiments, entre animalité et raffinement, entre pulsions et jeux amoureux. Les ambiances comptent beaucoup pour vous : le décor, la qualité des lumières, des couleurs, des odeurs... ', 50, 40, 60, 45, 'Solo', 'connexion.php'),
(3, '2018-06-20 00:00:00', '2018-06-20 00:00:00', 9, 'David Bowie', 'Dans vos rencontres sexuelles, ce qui compte surtout pour vous, ce sont les préliminaires subtils, les ébats ludiques... Vous êtes un grand consommateur de nouveautés et voulez tout essayer. Comme vous êtes doués d''une imagination débordante, vous n''êtes jamais à court d’idées. Vous n''êtes pas pressé de passer aux choses sérieuses. Vous aimez flâner, divaguer, s’observer et observer votre partenaire. ', 100, 90, 93, 100, 'Solo', 'connexion.php'),
(4, '2018-06-20 00:00:00', '2018-06-20 00:00:00', 6, 'ACDC', 'Vous vivez votre sexualité le plus naturellement et le plus joyeusement du monde. Vous ne connaissez ni tabous ni inhibitions, vous vous acceptez telle que vous êtes. Vous êtes dotés d''une forte vitalité et d''une personnalité exigeante. Vous faites partie de ceux qui abordent l''univers de la sexualité de la manière dénuée de tout sens de culpabilité et vivez vos désirs sans se compliquer la vie. Cependant, en raison de votre spontanéité et de son aisance, vous pourriez effaroucher certaines personnes, trop timides ou introvertis avec le sujet. Vous aimez les personnalités excentriques et vivez passionnément, quitte à y laisser des plumes !\n', 80, 90, 73, 86, 'Solo', 'connexion.php');

-- --------------------------------------------------------

--
-- Structure de la table `mode`
--

CREATE TABLE IF NOT EXISTS `mode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `mode`
--

INSERT INTO `mode` (`id`, `created`, `updated`, `email`) VALUES
(1, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(2, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(3, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(4, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(5, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(6, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(7, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(8, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(9, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(10, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(11, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(12, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(13, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(14, '2018-07-03', '2018-07-03', 'sd_1997@hotmail.fr'),
(15, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(16, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(17, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(18, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(19, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(20, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(21, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(22, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(23, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com'),
(24, '2018-07-03', '2018-07-03', 'lotte97@live.fr'),
(25, '2018-07-03', '2018-07-03', 'sdaguerre75@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
