-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-11-2015 a las 03:48:42
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `floreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arreglo`
--

CREATE TABLE IF NOT EXISTS `arreglo` (
  `id_arreglo` int(11) NOT NULL AUTO_INCREMENT,
  `precio` decimal(7,2) DEFAULT NULL,
  `descripcion` tinytext,
  `ruta_imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`id_arreglo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `arreglo`
--

INSERT INTO `arreglo` (`id_arreglo`, `precio`, `descripcion`, `ruta_imagen`) VALUES
(1, '500.00', 'Arreglo con rosas y canasta pequeña', 'inicio/Arreglos/1.jpg'),
(2, '600.00', 'Arreglo con rosas y canasta grande', 'inicio/Arreglos/2.jpg'),
(3, '700.00', 'Arreglo con rosas en corazon', 'inicio/Arreglos/3.jpg'),
(4, '800.00', 'Arreglo con rosas en caida', 'inicio/Arreglos/4.jpg'),
(5, '900.00', 'Arreglo con flores en triangulo', 'inicio/Arreglos/5.jpg'),
(6, '1000.00', 'Arreglo con tulipanes', 'inicio/Arreglos/6.jpg'),
(7, '1100.00', 'Arreglo  con rosas y globo', 'inicio/Arreglos/7.jpg'),
(8, '1200.00', 'Arreglo cencillo', 'inicio/Arreglos/8.jpg'),
(9, '1300.00', 'Arreglo con rosas y peluche', 'inicio/Arreglos/9.jpg'),
(10, '1400.00', 'Arreglo con rosas y canasta cubica', 'inicio/Arreglos/10.jpg'),
(11, '1500.00', 'Arreglo con rosas en florero', 'inicio/Arreglos/11.jpg'),
(12, '1600.00', 'Arreglo con girasoles', 'inicio/Arreglos/12.jpg'),
(13, '1700.00', 'Arreglo con rosas y canasta blanca', 'inicio/Arreglos/13.jpg'),
(14, '1800.00', 'Arreglo con rosas rosas y canasta blanca', 'inicio/Arreglos/14.jpg'),
(15, '1900.00', 'Arreglo con cencillo girasoles', 'inicio/Arreglos/15.jpg'),
(16, '2000.00', 'Arreglo con rosas rosas y florero', 'inicio/Arreglos/16.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
