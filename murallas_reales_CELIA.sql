-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2022 a las 20:09:15
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

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
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `expediente` int(6) NOT NULL,
  `telefono` varchar(12) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `id_grupo`, `nombre`, `apellidos`, `expediente`, `telefono`, `email`) VALUES
(1, 1, 'Alba', 'García', 266, '', ''),
(2, 9, 'Paula', 'López Paz', 212, '611222333', 'paulalopez@murallas.es'),
(3, 10, 'Adrián', 'Jones Gil', 411, '', 'adrianjones@murallas.es'),
(5, 5, 'Gael', 'Sánchez Bray', 411, '600123123', 'gaelsb@murallas.es'),
(6, 14, 'Hanan', 'Ahmed Mohamed', 411, '', 'hananmo@murallas.es'),
(8, 14, 'Leticia', 'Aroca Díaz', 298, '', 'leticiaa@murallas.es'),
(9, 7, 'Mohammed', 'Ahmed', 266, '', ''),
(10, 3, 'Nicolau', 'Romescu', 319, '', ''),
(11, 13, 'Hans', 'Müller', 477, '', ''),
(12, 5, 'Patricia', 'de Frutos Monje', 398, '600111888', ''),
(13, 7, 'Álvaro', 'Llopis Sánchez', 287, '600222888', ''),
(14, 1, 'Jesús', 'Rey España', 290, '600333111', 'reyespana@murallas.es'),
(15, 3, 'Dunia', 'Chemlal Ahmed', 200, '699000111', 'duniac@murallas.es'),
(16, 9, 'Carla', 'Bruni', 199, '633111000', 'carlab@murallas.es'),
(17, 10, 'Eutiquio', 'de Cos Fernández', 655, '', 'eutiquio@murallas.es'),
(18, 14, 'Laila', 'Yousafzai', 500, '', 'lailayou@murallas.es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupo` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `curso` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupo`, `nombre`, `curso`) VALUES
(1, '2ºESO A', '2022/2023'),
(3, '2ºESO B', '2022/2023'),
(5, '1ºESO A', '2022/2023'),
(7, '1ºESO B', '2022/2023'),
(9, '3ºESO A', '2022/2023'),
(10, '4ºESO A', '2022/2023'),
(13, '3ºESO B', '2022/2023'),
(14, '4ºESO B', '2022/2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id_profesor` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id_profesor`, `nombre`, `apellidos`, `telefono`, `email`) VALUES
(3, 'Luis', 'Fernández Gil', '633000000', 'luisfernandez@murallas.es'),
(4, 'Ricardo', 'Aroca Ros', '677777770', 'ricardoaroca@murallas.es'),
(5, 'Margarita', 'Ruiz Alava', '622123456', 'margaruiz@murallas.es'),
(8, 'Melissa', 'Buckley', '700123456', 'melissabuckley@murallas.es'),
(9, 'Patrick', 'Johnson', '733999888', 'patrickj@murallas.es'),
(10, 'Enriqueta', 'Salas Porras', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutoria`
--

CREATE TABLE `tutoria` (
  `id_grupo` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tutoria`
--

INSERT INTO `tutoria` (`id_grupo`, `id_profesor`) VALUES
(3, 3),
(5, 3),
(5, 8),
(7, 3),
(9, 4),
(10, 4),
(10, 5),
(13, 8),
(14, 8),
(14, 9);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `id_grupo` (`id_grupo`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_profesor`);

--
-- Indices de la tabla `tutoria`
--
ALTER TABLE `tutoria`
  ADD PRIMARY KEY (`id_grupo`,`id_profesor`),
  ADD KEY `Tutoria_ibfk_2` (`id_profesor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `Alumno_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id_grupo`);

--
-- Filtros para la tabla `tutoria`
--
ALTER TABLE `tutoria`
  ADD CONSTRAINT `Tutoria_ibfk_2` FOREIGN KEY (`id_profesor`) REFERENCES `profesor` (`id_profesor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Tutoria_ibfk_3` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id_grupo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
