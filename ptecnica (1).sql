-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2021 a las 01:29:12
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ptecnica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE `padres` (
  `idPadres` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `padres`
--

INSERT INTO `padres` (`idPadres`, `nombre`, `apellido`) VALUES
(1, 'Carlos', 'Hincapie'),
(2, 'Yenny', 'Monsalve'),
(3, 'Camilo', 'Sanchez'),
(4, 'Camila', 'Gomez'),
(5, 'Sandra', 'Suarez'),
(6, 'Xander', 'Agudelo'),
(7, 'Pascual', 'Gaviria'),
(8, 'Triniti', 'Colombia'),
(9, 'Salcedo', 'Manco'),
(10, 'Camilo', 'Andre'),
(11, 'Redis', 'Post'),
(12, 'Camelo', 'Conni');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `celular` int(12) NOT NULL,
  `ciudad` varchar(40) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `hijos` tinyint(1) NOT NULL,
  `n_hijos` int(11) NOT NULL,
  `edadTuvoHijos` varchar(3) NOT NULL,
  `idPadres` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `apellido`, `edad`, `telefono`, `celular`, `ciudad`, `direccion`, `hijos`, `n_hijos`, `edadTuvoHijos`, `idPadres`) VALUES
(1, 'Brayan', 'Hincapie', 22, 12345, 304215333, 'Bello', 'Cr 4 B 27 H', 0, 0, 'NN', 2),
(2, 'Camila', 'Mira', 20, 121212, 300216337, 'Medellín', 'CR 45 bgt', 1, 2, '17', 10),
(3, 'Saldre', 'Cam', 22, 0, 304215333, 'Itagui', 'Cr 4 B 27 H', 0, 0, 'NN', 4),
(4, 'Camila', 'Sofia', 19, 22222, 300216337, 'Medellín', 'CR 45 bgt', 1, 2, '15', 3),
(5, 'Xander', 'Sanchez', 22, 3333, 30098876, 'Medellin', 'Calle 45 G', 1, 1, '20', 6),
(6, 'Yuliana', 'Guzman', 30, 0, 300456657, 'Medellín', 'Calle 45 T', 0, 0, 'NN', 12),
(7, 'Sofia', 'Carson', 26, 0, 30345678, 'Sabaneta', 'Cr34 Diaginal 23', 1, 2, '24', 9),
(8, 'Milana', 'Mondongo', 25, 2222, 320455664, 'Medellín', 'Cl 23 Cr 89B', 0, 0, 'NN', 8),
(9, 'Carlos', 'Padilla', 27, 0, 31245665, 'Itagui', 'Cr 3 S', 1, 2, '26', 11),
(10, 'Andres', 'Beta', 25, 0, 303516223, 'Bello', 'Cll 34 B ', 1, 1, '25', 5),
(11, 'Will', 'Smith', 33, 22222, 30045667, 'La Estrella', 'Calle 45 R', 0, 0, 'NN', 7),
(12, 'Milena', 'Velez', 33, 0, 322488778, 'Medellín', 'Cr 34 f', 1, 4, '22', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `padres`
--
ALTER TABLE `padres`
  ADD PRIMARY KEY (`idPadres`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPadres` (`idPadres`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`idPadres`) REFERENCES `padres` (`idPadres`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
