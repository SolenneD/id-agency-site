-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 26, 2018 at 08:36 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `paceme`
--
CREATE DATABASE IF NOT EXISTS `paceme` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `paceme`;

-- --------------------------------------------------------

--
-- Table structure for table `bague`
--

CREATE TABLE `bague` (
  `id` int(11) NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  `gravure` varchar(255) DEFAULT NULL,
  `fonctionnalite` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bague`
--

INSERT INTO `bague` (`id`, `created`, `updated`, `gravure`, `fonctionnalite`) VALUES
(1, '2018-06-26', '2018-06-26', 'ici texte', 'ma fonctionnalite'),
(2, '2018-06-26', '2018-06-26', 'ici texte2', 'ma fonctionnalite2'),
(3, '2018-06-26', '2018-06-26', 'ici texte2', 'ma fonctionnalite2');

-- --------------------------------------------------------

--
-- Table structure for table `costum`
--

CREATE TABLE `costum` (
  `id` int(11) NOT NULL,
  `couleur` varchar(255) NOT NULL,
  `ornement` varchar(255) NOT NULL,
  `sources` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `costum`
--

INSERT INTO `costum` (`id`, `couleur`, `ornement`, `sources`) VALUES
(2, 'noir', 'spikes', 'noir-spikes.png'),
(3, 'noir', 'skull', 'noir-skull.png'),
(4, 'noir', 'snake', 'noir-snake.png'),
(5, 'noir', 'stone', 'noir-stone.png'),
(7, 'noir', 'rose', 'noir-rose.png'),
(8, 'anthracite', 'spikes', 'anthracite-spikes.png'),
(9, 'anthracite', 'skull', 'anthracite-skull.png'),
(10, 'anthracite', 'snake', 'anthracite-snake.png'),
(11, 'anthracite', 'stone', 'anthracite-stone.png'),
(12, 'anthracite', 'rose', 'anthracite-rose.png'),
(13, 'inox', 'spikes', 'inox-spikes.png'),
(15, 'inox', 'skull', 'inox-skull.png'),
(16, 'inox', 'snake', 'inox-snake.png'),
(17, 'inox', 'stone', 'inox-stone.png'),
(18, 'inox', 'rose', 'inox-rose.png'),
(19, 'gris', 'spikes', 'gris-spikes.png'),
(20, 'gris', 'skull', 'gris-skull.png'),
(21, 'gris', 'snake', 'gris-snake.png'),
(22, 'gris', 'stone', 'gris-stone.png'),
(23, 'gris', 'rose', 'gris-rose.png'),
(24, 'blanc', 'spikes', 'blanc-spikes.png'),
(25, 'blanc', 'skull', 'blanc-skull.png'),
(26, 'blanc', 'snake', 'blanc-snake.png'),
(27, 'blanc', 'stone', 'blanc-stone.png'),
(28, 'blanc', 'rose', 'blanc-rose.png');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `created` date NOT NULL,
  `updated` date NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `created`, `updated`, `email`) VALUES
(0, '2018-06-26', '2018-06-26', 'sdaguerre75@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bague`
--
ALTER TABLE `bague`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costum`
--
ALTER TABLE `costum`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bague`
--
ALTER TABLE `bague`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `costum`
--
ALTER TABLE `costum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
