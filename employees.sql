-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2017 at 10:53 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contrato` varchar(100) NOT NULL,
  `abonado` varchar(255) NOT NULL,
  `propiedad` varchar(255) NOT NULL,
  `sector` varchar(255) NOT NULL,
  `estado` int(1) NOT NULL,
  `pagomes` int(10) NOT NULL,
  `servicio` varchar(255) NOT NULL,
  `agencia` varchar(255) NOT NULL,
  `deuda` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `users` (`id`, `contrato`, `abonado`, `propiedad`,`sector`,`estado`,`pagomes`,`servicio`,`agencia`,`deuda`) VALUES 
(1,'001' ,'Roland Mendel','Buenos Aires MZ K Lt 05','H.A Jimarca',1,50,'duo', 'AGENCIAFIBERDIGITAL', 500),
(2,'002' ,'Roland Mendel 2','Buenos Aires MZ K Lt 06','H.A Jimarca 2',1,70,'trio', 'AGENCIAFIBERDIGITAL', 300),
(3,'003' ,'Roland Mendel 3','Buenos Aires MZ K Lt 07','H.A Jimarca 3',1,50,'duo', 'AGENCIAFIBERDIGITAL', 400);

