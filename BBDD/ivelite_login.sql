-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2020 a las 19:58:54
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ivelite_login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `user` varchar(16) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `rol` varchar(16) NOT NULL DEFAULT 'básico',
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`user`, `pass`, `rol`, `email`) VALUES
('javi', '$2y$10$VeIh3Anxmo5ppj8.yvLrSe2faDE9Wd3v5WUS6NF/LV5wdQrlJpLea', 'básico', 'javina02@ucm.es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelos`
--

CREATE TABLE `vuelos` (
  `idVuelo` varchar(5) NOT NULL,
  `Origen` text NOT NULL,
  `Destino` text NOT NULL,
  `FechaInicio` date NOT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vuelos`
--

INSERT INTO `vuelos` (`idVuelo`, `Origen`, `Destino`, `FechaInicio`, `Precio`) VALUES
('001', 'Madrid', 'Barcelona', '2020-04-29', 28),
('002', 'Madrid', 'Barcelona', '2020-04-30', 50),
('003', 'Barcelona', 'Madrid', '2020-04-29', 46),
('004', 'Barcelona', 'Madrid', '2020-04-30', 65);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
