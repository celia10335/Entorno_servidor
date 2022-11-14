-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-11-2022 a las 14:09:53
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `murallas_reales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno`
--

CREATE TABLE `Alumno` (
  `id_alumno` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `expediente` int(6) NOT NULL,
  `telefono` varchar(12) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `Alumno`
--

INSERT INTO `Alumno` (`id_alumno`, `id_grupo`, `nombre`, `apellidos`, `expediente`, `telefono`, `email`) VALUES
(1, 1, 'Alba', 'García', 266, NULL, NULL),
(2, 9, 'Paula', 'López Paz', 212, '611222333', 'paulalopez@murallas.es'),
(3, 10, 'Hanan', 'Ahmed Mohamed', 411, NULL, NULL),
(4, 10, 'Hanan', 'Ahmed Mohamed', 411, NULL, NULL),
(5, 10, 'Hanan', 'Ahmed Mohamed', 411, NULL, NULL),
(6, 10, 'Hanan', 'Ahmed Mohamed', 411, NULL, NULL),
(7, 10, 'Hanan', 'Ahmed Mohamed', 411, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Grupo`
--

CREATE TABLE `Grupo` (
  `id_grupo` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `curso` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `Grupo`
--

INSERT INTO `Grupo` (`id_grupo`, `nombre`, `curso`) VALUES
(1, '2ºESO A', '2022/2023'),
(3, '2ºESO B', '2022/2023'),
(5, '1ºESO A', '2022/2023'),
(7, '1ºESO B', '2022/2023'),
(9, '3ºESO A', '2022/2023'),
(10, '4ºESO A', '2022/2023'),
(11, '3ºESO B', '2022/2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Profesor`
--

CREATE TABLE `Profesor` (
  `id_profesor` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `Profesor`
--

INSERT INTO `Profesor` (`id_profesor`, `nombre`, `apellidos`, `telefono`, `email`) VALUES
(1, 'Pilar', 'Millán Redondo', '607707707', 'pilarmillan@murallas.es'),
(3, 'Luis', 'Fernández Gil', '633000333', 'luisfernandez@murallas.es'),
(4, 'Ricardo', 'Aroca Ros', '677777770', 'ricardoaroca@murallas.es'),
(5, 'Margarita', 'Ruiz Alava', '600222345', 'margaruiz@murallas.es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tutoria`
--

CREATE TABLE `Tutoria` (
  `id_grupo` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `Tutoria`
--

INSERT INTO `Tutoria` (`id_grupo`, `id_profesor`) VALUES
(1, 1),
(3, 3),
(9, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Alumno`
--
ALTER TABLE `Alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `id_grupo` (`id_grupo`);

--
-- Indices de la tabla `Grupo`
--
ALTER TABLE `Grupo`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `Profesor`
--
ALTER TABLE `Profesor`
  ADD PRIMARY KEY (`id_profesor`);

--
-- Indices de la tabla `Tutoria`
--
ALTER TABLE `Tutoria`
  ADD PRIMARY KEY (`id_grupo`,`id_profesor`),
  ADD KEY `Tutoria_ibfk_2` (`id_profesor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Alumno`
--
ALTER TABLE `Alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `Grupo`
--
ALTER TABLE `Grupo`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `Profesor`
--
ALTER TABLE `Profesor`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Alumno`
--
ALTER TABLE `Alumno`
  ADD CONSTRAINT `Alumno_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `Grupo` (`id_grupo`);

--
-- Filtros para la tabla `Tutoria`
--
ALTER TABLE `Tutoria`
  ADD CONSTRAINT `Tutoria_ibfk_2` FOREIGN KEY (`id_profesor`) REFERENCES `Profesor` (`id_profesor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Tutoria_ibfk_3` FOREIGN KEY (`id_grupo`) REFERENCES `Grupo` (`id_grupo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
