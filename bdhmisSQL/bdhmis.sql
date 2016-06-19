-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2016 a las 18:52:21
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdhmis`
--
USE bdhmis;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pistas`
--

CREATE TABLE IF NOT EXISTS `pistas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pistas`
--

INSERT INTO `pistas` (`id`, `nombre`, `tipo`, `created_at`, `updated_at`) VALUES
(44, 'Pista01', 'Padel', '2016-06-01 12:31:23', '2016-06-01 12:31:23'),
(46, 'Pista02', 'Futbol 7', '2016-06-01 12:31:58', '2016-06-01 12:31:58'),
(48, 'Pista03', 'Futbol 11', '2016-06-01 12:32:35', '2016-06-01 12:32:35'),
(49, 'Pista04', 'Futbol Sala', '2016-06-01 12:32:42', '2016-06-01 12:32:42'),
(50, 'Pista05', 'Futbol Indoor', '2016-06-01 12:32:51', '2016-06-01 12:32:51'),
(51, 'Pista06', 'Tenis', '2016-06-01 12:32:58', '2016-06-01 12:32:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE IF NOT EXISTS `reservas` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_pista` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fechaR` varchar(50) CHARACTER SET utf8 NOT NULL,
  `horaR` varchar(50) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `id_user`, `id_pista`, `fechaR`, `horaR`, `created_at`, `updated_at`) VALUES
(2, '60', 'Pista04', '2016-06-16', '19:00-20:00', '2016-06-08 12:39:58', '2016-06-08 12:39:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `activo` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'si',
  `rol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `activo`, `rol`, `remember_token`, `created_at`, `updated_at`) VALUES
(44, 'esteban', 'esteban@gmail.com', '$2y$10$RsbRvA.L1e1RfMsk/qQud.dmJQGXlQSb6rvBnPvRAHW6j7/d59qMG', 'si', 'administrador', 'sPGyRByzHIwF3fD4RmFOTn3niBPwf2xmsSOoQIrD3evTGTPqAfcTP2ZLGHg0', '2016-05-25 13:53:01', '2016-06-15 14:13:08'),
(46, 'angeles', 'angeles@gmail.com', '$2y$10$bAQG4sZN148f6Lt0lsk7S.GTGfX6X/aqqx2kc5.pQa/J33jGPM3rm', 'si', 'usuario', 'GITjlmvN2g0seOR7DLQjzEWlLN2ugql9GlNHkEP3YkGocojnXGRDf1rNp8he', '2016-05-30 06:04:14', '2016-06-06 15:12:14'),
(58, 'isabela', 'isabela@gmail.com', '$2y$10$kBzu/jA5eNfL.mvOu.Q2zOVQDcDdk6atlXc0azuWjS/8XZduHDx3y', 'si', 'usuario', 'yIQXgPZkqhMnrEeQku7ty3KEDi5fjR2Q9FzTBy6Az3Rv3Fy6Zjm5BZHLDrDu', '2016-06-01 12:28:58', '2016-06-15 14:49:09'),
(59, 'franci', 'franci@gmail.com', '$2y$10$pFaQLGYVwI1iXY1J1y2.ou6iV3wQceVStZW0998OJORA.iXdNzs3O', 'si', 'usuario', 'SZGzSGaGLjArd5mJOnSFw0FN4ySfgmxnhB3DbcCKUHUvda9WBixanP3krd2B', '2016-06-06 11:32:33', '2016-06-15 14:49:30'),
(60, 'tarik', 'tarik@gmail.com', '$2y$10$UAiiYegwiY/F5eHf1x5d.OuxqJh3LlqWqY04TITEU9zCz8xWysgqO', 'si', 'usuario', 'b1j3P41MGheau9QoZArMlcOIVZKQgyDcSNgQmT8jBhf1DdPFWJkvEIQYS0xM', '2016-06-08 12:39:39', '2016-06-08 12:40:05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pistas`
--
ALTER TABLE `pistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`id_user`,`id_pista`,`fechaR`,`horaR`),
  ADD UNIQUE KEY `created_at` (`created_at`,`updated_at`),
  ADD UNIQUE KEY `id_2` (`id`,`id_user`,`id_pista`,`fechaR`,`horaR`,`created_at`,`updated_at`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pistas`
--
ALTER TABLE `pistas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
