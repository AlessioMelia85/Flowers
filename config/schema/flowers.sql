-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 24, 2020 alle 13:34
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
-- Struttura della tabella `flowers`
--

CREATE TABLE `flowers` (
  `id` int(11) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `occasione` text NOT NULL,
  `costo` float NOT NULL,
  `quantita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `flowers`
--

INSERT INTO `flowers` (`id`, `nome`, `occasione`, `costo`, `quantita`) VALUES
(1, 'Tulipano', 'Compleanno.\r\n\r\nIl compleanno è una ricorrenza annuale.\r\nTi ricorda che il tempo passa e te invecchi.', 4.5, 10),
(2, 'Orchidea', 'Fidanzamento\r\n\r\nIl fidanzamento è un usanza alquanto discussa in questo nostro negozio..\r\nInsomma..voglio dire..perchè legarsi a una persona quando la convivenza tra noi stessi è già complicata??\r\nVoglio dire..', 3.23, 6),
(3, 'Viola', 'Matrimonio\r\n\r\nEcco..abbiamo speso già diverse parole per quanto riguarda il fidanzamento..figuriamoci il matrimonio dove dobbiamo coinvolgere anche il signore.', 2.99, 5),
(4, 'Rosa bianca', 'Promozione\r\n\r\nEbbene questo è un motivo meno consono per dei fiori..magari per il gentilsesso..mah?!', 4, 9),
(5, 'Gardenia', 'Nascituri\r\n\r\nInsegniamo alle creature sin da subito ad apprezzare i fiori..sperando non abbiano già sviluppato delle allergie..piccini!!!', 3.46, 1);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `flowers`
--
ALTER TABLE `flowers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `flowers`
--
ALTER TABLE `flowers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
