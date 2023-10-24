-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2023 a las 00:15:17
-- Versión del servidor: 11.3.0-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `telefono`, `email`, `contrasena`) VALUES
(4, 'david', '1234567890', 'example123@gmail.com', '$2y$10$9YhatPA1bmV3daBKq4Z7O.cRNa8qxCDjgPqboaZhavi10rZjqf9kO'),
(5, 'prueba', '123456789', 'prueba@gmail.com', '$2y$10$KENPqmiPqFTDdEjSURuM3unH5FlzaG8IFCq3b0rQm2k94DLdmlMNu'),
(6, 'patroclo', '1234567899', 'patro@gamil.com', '$2y$10$ZtBhuo0Wa6fWtHPtYYnfeeuOukebfTI1lT0oOztBJdAWSWyW2DgAW'),
(7, 'angelica fuentes54', '3204549438', 'amfuentes@misena.edu.co', '$2y$10$ecM6k3FUDBiAN/OwqbhumuHnKj2BiqAmBRUF01v9s4T2AJhNuENvm'),
(8, 'maria', '323554', 'treterg@gmail.com', '$2y$10$GSIkFd//veSTbJbQXR.Oaumh9R2d7jIsWBOjvwKMyzbut1tGoFtYK');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telefono` (`telefono`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
