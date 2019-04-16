-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Creato il: Apr 16, 2019 alle 08:18
-- Versione del server: 10.1.13-MariaDB
-- Versione PHP: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prova`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `id_utente` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`id_utente`, `nome`, `username`, `password`) VALUES
(1, 'matteo', 'vedovati', 'gigi'),
(2, 'andrea', 'traini', 'bel'),
(3, 'cristian', 'tironi', 'pollo'),
(4, 'risti', 'mizi', 'cristi'),
(5, 'nizzi', 'due', 'simopercortesia'),
(6, 'federica', 'freddy', 'ciao'),
(7, 'potto', 'erri', 'magic'),
(8, 'gigi', 'finizio', 'finiziah'),
(9, 'gigi', 'fizzio', 'freschio'),
(10, 'luca', 'capelli', 'nero'),
(11, 'nicolo', 'sputinik', 'suca'),
(16, 'galaxy', 'A5', 'undici'),
(17, 'a', 'a', 'w'),
(18, 'piero', 'flop', 'faltaalbuio'),
(19, 'Michele', 'Salvi', 'Pippo');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`id_utente`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `id_utente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
