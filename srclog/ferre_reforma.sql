-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 21-03-2017 a las 12:30:22
-- Versión del servidor: 5.6.35
-- Versión de PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ferre_reforma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id` varchar(5) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Costo` varchar(20) NOT NULL,
  `No.Piezas` varchar(20) NOT NULL,
  `Descripción` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id`, `Nombre`, `Costo`, `No.Piezas`, `Descripción`) VALUES
('01', 'Cemento', '185', '100', 'Cemento Cemex'),
('02', 'Pulidora', '590', '5', 'Pulidora Mikles orbital a dos manos'),
('03', 'Tubo PVC Sanitario', '92', '15', 'Tubo Pvc 6m, 2\'\'  diámetro 50mm'),
('04', 'Válvula Selenoide ', '250', '10', '1/2 electrovalvula 12v agua, riego, osmosis ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
