-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2020 a las 17:21:33
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.27

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
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE `foro` (
  `ID` int(7) NOT NULL,
  `Autor` varchar(30) NOT NULL,
  `Titulo` varchar(40) NOT NULL,
  `Mensaje` text NOT NULL,
  `Fecha` date NOT NULL,
  `Respuestas` int(11) NOT NULL,
  `Identificador` int(7) NOT NULL,
  `Ultres` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `foro`
--

INSERT INTO `foro` (`ID`, `Autor`, `Titulo`, `Mensaje`, `Fecha`, `Respuestas`, `Identificador`, `Ultres`) VALUES
(1, 'Iker', 'Madrid', 'Esta ciudad esta muy bonita ultimamenta', '2001-06-15', 3, 0, '2001-06-15'),
(2, 'Javi', 'Barna', 'Barcelona es lo mas, tiene una sociedad multicultural', '2001-06-15', 1, 0, '2001-06-15'),
(3, 'Blanzas', 'nuevos destinos', 'Estamos buscando nuevos destinos para expandirnos', '2001-06-15', 2, 1, '2001-06-15'),
(4, 'Julius', 'Crack', 'La gente que programa estos son unos cracks gracias por la info', '2001-06-15', 1, 2, '2001-06-15'),
(5, 'Cintia', 'Bueno relaja', 'barna esta bien pero arrastra multiples rallauras', '2001-06-15', 0, 0, '2001-06-15'),
(6, 'pablo', 'barajas', 'es de donde salen los aviones', '2009-05-20', 2, 1, '2009-05-20');

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
('javi', '$2y$10$VeIh3Anxmo5ppj8.yvLrSe2faDE9Wd3v5WUS6NF/LV5wdQrlJpLea', 'básico', 'javina02@ucm.es'),
('pablo', '$2y$10$UBLQUus1GpdSCSYZQTCsEOTIr3ggwjIqP3MkbHEmTqY5zmCN3CDhm', 'básico', 'psaro@ucm.es');

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
