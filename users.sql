-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2022 a las 18:31:53
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Base de datos: `tp17`
--

-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `jugadores` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pos` varchar(20) NOT NULL,
  `edad` varchar(20) NOT NULL,
  `est` varchar(20) NOT NULL,
  `p` varchar(20) NOT NULL,
  `nac` varchar(20) NOT NULL,
  `ap` varchar(20) NOT NULL,
  `sub` varchar(20) NOT NULL,
  `a` varchar(20) NOT NULL,
  `ga` varchar(20) NOT NULL,
  `a2` varchar(20) NOT NULL,
  `fc` varchar(20) NOT NULL,
  `fs` varchar(20) NOT NULL,
  `ta` varchar(20) NOT NULL,
  `tr` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcado de datos para la tabla `users`
--

INSERT INTO `jugadores` (`id`, `name`, `pos`, `edad`, `est`, `p`, `nac`, `ap`, `sub`, `a`, `ga`, `a2`, `fc`, `fs`, `ta`, `tr`) VALUES
(1, 'Daniel', 'POS1', '25', 'Est1', 'PNAC1', 'PNAC1', 'Ap1', 'SUB1', 'A1', 'GA1', 'A_FC1', 'A_FC1', 'FS1', 'TA1', 'TR1'),
(5, 'Eduardo', 'POS2', '30', 'Est2', 'PNAC2','PNAC2', 'Ap2', 'SUB2', 'A2', 'GA2', 'A_FC2', 'A_FC2', 'FS2', 'TA2', 'TR2');


-- Índices para tablas volcadas
--

-- Indices de la tabla `users`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT de las tablas volcadas
--

-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `jugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
