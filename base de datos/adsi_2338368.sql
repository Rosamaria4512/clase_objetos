-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2022 a las 22:44:14
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adsi_2338368`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(6) NOT NULL,
  `comentario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date DEFAULT NULL,
  `usuarioId` int(6) NOT NULL,
  `sitioId` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id`, `comentario`, `fecha`, `usuarioId`, `sitioId`) VALUES
(1, 'excelente servicio', '2022-03-24', 4, 1),
(2, 'se debe mejorar el servicio al cliente', '2022-03-30', 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reseva`
--

CREATE TABLE `reseva` (
  `id` int(6) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `numeroPersonas` int(3) DEFAULT NULL,
  `id_usuario` int(6) NOT NULL,
  `id_sitio` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reseva`
--

INSERT INTO `reseva` (`id`, `fecha`, `hora`, `numeroPersonas`, `id_usuario`, `id_sitio`) VALUES
(1, '2022-03-13', '08:00:00', 10, 2, 2),
(4, '2022-03-20', '17:00:00', 2, 4, 1),
(5, '2022-03-13', '13:00:00', 2, 3, 3),
(6, '2022-03-09', '03:00:00', 10, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` int(6) NOT NULL,
  `servicio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `precio` bigint(10) NOT NULL,
  `sitioid` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `servicio`, `precio`, `sitioid`) VALUES
(1, 'parrilla bar', 40000, 1),
(2, 'campin', 50000, 1),
(3, 'campin', 50000, 1),
(4, 'restaurante', 30000, 2),
(5, 'restaurante', 30000, 2),
(6, 'piscina', 10000, 3),
(7, 'pesca deportiva', 25000, 4),
(8, 'pesca deportiva', 25000, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sitio`
--

CREATE TABLE `sitio` (
  `id` int(6) NOT NULL,
  `municipio` varchar(60) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'popayan',
  `lugar` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `fotografia` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sitio`
--

INSERT INTO `sitio` (`id`, `municipio`, `lugar`, `nombre`, `fotografia`) VALUES
(1, 'Santander de quilichao', 'buenos Aires', 'La estancia', 'la estanca'),
(2, 'Boloivar', 'Las juntas', 'Campamento', 'Campamento'),
(3, 'Patia', 'El bordo', 'Residencia el Descanso', 'Residencia el Descanso'),
(4, 'Timbio', 'La Cañada', 'Madrigal', 'Madrigal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(6) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(90) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `email`, `password`) VALUES
(1, 'Mariangel Solarte', 'marinagel@gmail.com', '123456'),
(2, 'Anthony Meneses', 'meneses@gmail.com', '123456'),
(3, 'Milton Meneses', 'menesesmilton@gmail.com', '123456'),
(4, 'Rosa maria', 'maria_4512@gmail.com', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarioId` (`usuarioId`),
  ADD KEY `sitioId` (`sitioId`) USING BTREE;

--
-- Indices de la tabla `reseva`
--
ALTER TABLE `reseva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_sitio` (`id_sitio`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sitioId2` (`sitioid`);

--
-- Indices de la tabla `sitio`
--
ALTER TABLE `sitio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reseva`
--
ALTER TABLE `reseva`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `sitio`
--
ALTER TABLE `sitio`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`usuarioId`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`sitioId`) REFERENCES `sitio` (`id`);

--
-- Filtros para la tabla `reseva`
--
ALTER TABLE `reseva`
  ADD CONSTRAINT `reseva_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `reseva_ibfk_2` FOREIGN KEY (`id_sitio`) REFERENCES `sitio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`sitioid`) REFERENCES `sitio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
