-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 28, 2020 alle 09:09
-- Versione del server: 10.4.11-MariaDB
-- Versione PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fioraio`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `opportunities`
--

CREATE TABLE `opportunities` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `opportunities`
--

INSERT INTO `opportunities` (`id`, `name`, `description`) VALUES
(3, 'Matrimonio', 'Evento interessante'),
(4, 'Compleanno', 'Una volta l\'anno'),
(5, 'Promozione', 'Ebbene questo è un motivo meno consono per dei fiori..magari per il gentilsesso..mah?!'),
(6, 'Fidanzamento', 'Il fidanzamento è un usanza alquanto discussa in questo nostro negozio..\r\nInsomma..voglio dire..perchè legarsi a una persona quando la convivenza tra noi stessi è già complicata??\r\nVoglio dire..'),
(7, 'Nascituri', 'Insegniamo alle creature sin da subito ad apprezzare i fiori..sperando non abbiano già sviluppato delle allergie..piccini!!!\r\n');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `opportunities`
--
ALTER TABLE `opportunities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `opportunities`
--
ALTER TABLE `opportunities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
