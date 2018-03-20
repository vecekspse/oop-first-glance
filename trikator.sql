-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pon 19. bře 2018, 09:12
-- Verze serveru: 5.6.17
-- Verze PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `trikator`
--
CREATE DATABASE IF NOT EXISTS `trikator` DEFAULT CHARACTER SET utf8 COLLATE utf8_czech_ci;
USE `trikator`;

-- --------------------------------------------------------

--
-- Struktura tabulky `tricka`
--

CREATE TABLE IF NOT EXISTS `tricka` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazev` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `barva` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `velikost` varchar(5) COLLATE utf8_czech_ci NOT NULL,
  `skladem` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=9 ;

--
-- Vypisuji data pro tabulku `tricka`
--

INSERT INTO `tricka` (`id`, `nazev`, `barva`, `velikost`, `skladem`) VALUES
(1, 'Tričko pánské Sabaton', 'černá', 'XL', 1),
(2, 'Tričko dámské Motorhead', 'šedá', 'M', 1),
(3, 'Tričko pánské System of a Down', 'hnědá', 'L', 0),
(4, 'Tričko dětské Pokémon', 'modrá', 'M', 1),
(5, 'Tričko dámské Pink Floyd', 'tmavě modrá', 'XS', 0),
(6, 'Tričko dětské Iron Man', 'červená', 'M', 0),
(7, 'Tričko pánské Deep purple', 'fialová', 'XL', 1),
(8, 'Tričko dámské My little pony', 'zelená', 'S', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
