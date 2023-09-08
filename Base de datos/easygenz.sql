-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2023 a las 22:56:22
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
-- Base de datos: `easygenz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendices`
--

CREATE TABLE `aprendices` (
  `Nombre_completo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Documento_f` int(10) NOT NULL,
  `Documento_a` int(10) NOT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Contraseña` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Numero_ficha` int(7) NOT NULL,
  `Tipo_sangre` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Enfermedades` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `Nombre_completo` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `Numero_documento` int(10) NOT NULL,
  `Email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Contraseña` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Numero_ficha` int(7) NOT NULL,
  `Tipo_sangre` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Alergias_enfermedades` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionarios`
--

CREATE TABLE `funcionarios` (
  `Nombre_completo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Documento_f` int(10) NOT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Contraseña` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Tipo_sangre` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Enfermedades` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructores`
--

CREATE TABLE `instructores` (
  `Nombre_completo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Documento_f` int(10) NOT NULL,
  `Documento_i` int(10) NOT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Contraseña` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Tipo_sangre` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Enfermedades` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `Numero_documento` int(10) NOT NULL,
  `Contraseña` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnologo`
--

CREATE TABLE `tecnologo` (
  `Documento_i` int(10) NOT NULL,
  `Documento_a` int(10) NOT NULL,
  `Numero_ficha` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprendices`
--
ALTER TABLE `aprendices`
  ADD PRIMARY KEY (`Documento_a`),
  ADD KEY `Documento_f` (`Documento_f`);

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD KEY `Numero_documento` (`Numero_documento`);

--
-- Indices de la tabla `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`Documento_f`),
  ADD KEY `Documento_f` (`Documento_f`);

--
-- Indices de la tabla `instructores`
--
ALTER TABLE `instructores`
  ADD PRIMARY KEY (`Documento_i`),
  ADD KEY `Documento_f` (`Documento_f`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Numero_documento`);

--
-- Indices de la tabla `tecnologo`
--
ALTER TABLE `tecnologo`
  ADD KEY `Documento_i` (`Documento_i`,`Documento_a`),
  ADD KEY `Documento_a` (`Documento_a`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `Numero_documento` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aprendices`
--
ALTER TABLE `aprendices`
  ADD CONSTRAINT `aprendices_ibfk_1` FOREIGN KEY (`Documento_f`) REFERENCES `funcionarios` (`Documento_f`);

--
-- Filtros para la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD CONSTRAINT `formulario_ibfk_1` FOREIGN KEY (`Numero_documento`) REFERENCES `login` (`Numero_documento`);

--
-- Filtros para la tabla `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `funcionarios_ibfk_1` FOREIGN KEY (`Documento_f`) REFERENCES `login` (`Numero_documento`);

--
-- Filtros para la tabla `instructores`
--
ALTER TABLE `instructores`
  ADD CONSTRAINT `instructores_ibfk_1` FOREIGN KEY (`Documento_f`) REFERENCES `funcionarios` (`Documento_f`);

--
-- Filtros para la tabla `tecnologo`
--
ALTER TABLE `tecnologo`
  ADD CONSTRAINT `tecnologo_ibfk_1` FOREIGN KEY (`Documento_a`) REFERENCES `aprendices` (`Documento_a`),
  ADD CONSTRAINT `tecnologo_ibfk_2` FOREIGN KEY (`Documento_i`) REFERENCES `instructores` (`Documento_i`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
