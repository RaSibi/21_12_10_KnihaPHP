-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Počítač: sql5.webzdarma.cz:3306
-- Vytvořeno: Sob 05. úno 2022, 11:19
-- Verze serveru: 8.0.26-17
-- Verze PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `radeksibinsk7607`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `seznam`
--

CREATE TABLE `seznam` (
  `isbn` varchar(13) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `jmeno` varchar(50) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `prijmeni` varchar(50) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `nazev` varchar(100) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `popis` varchar(200) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `seznam`
--

INSERT INTO `seznam` (`isbn`, `jmeno`, `prijmeni`, `nazev`, `popis`) VALUES
('', '', '', '', ' Popis knihy'),
('80-200-0750-9', 'Aleš', 'Míček', 'Basket', 'Dobrá kniha o basketu.'),
('80-200-0968-6', 'Marian', 'Stola', 'Ryby a potok', 'Rybareni je moje velke hoby'),
('80-200-0980-1', 'Ella', 'Šibinská', 'Andulka', 'Dobrá kniha o andulkách.'),
('80-200-0980-2', 'Radek', 'Šibinský', 'Otužování', 'Dobrá kniha o otužování.'),
('80-200-0980-3', 'Robin', 'Šibinský', 'Auta', 'Dobrá kniha o autech.'),
('80-200-0980-9', 'Bára', 'Šibinská', 'Zahrada', 'Dobrá kniha o zahradách.');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `seznam`
--
ALTER TABLE `seznam`
  ADD PRIMARY KEY (`isbn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
