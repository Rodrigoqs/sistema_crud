-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-09-2020 a las 18:37:28
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id14875253_registro`
--
CREATE DATABASE IF NOT EXISTS `id14875253_registro` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id14875253_registro`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `paterno` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `materno` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombres` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `genero` set('MASCULINO','FEMENINO','Preferiría no contestar') COLLATE utf8_unicode_ci NOT NULL,
  `estado_civil` set('SOLTERO/A','CASADO/A','DIVORCIADO/A','VIUDO/A') COLLATE utf8_unicode_ci NOT NULL,
  `carnet_de_identidad` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_de_nacimiento` date NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion_de_su_domicilio` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ocupacion` set('Empleo de medio tiempo','Empleo de tiempo completo','Desempleado','Trabajador por cuenta propia','Estudiante','Retirado') COLLATE utf8_unicode_ci NOT NULL,
  `correo_electronico` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_personal`, `paterno`, `materno`, `nombres`, `genero`, `estado_civil`, `carnet_de_identidad`, `fecha_de_nacimiento`, `telefono`, `direccion_de_su_domicilio`, `ocupacion`, `correo_electronico`) VALUES
(13, 'QUISPE', 'ALVAREZ', 'RONAL', 'MASCULINO', 'SOLTERO/A', '97455212', '1998-06-24', 74183063, 'VIACHA', 'Desempleado', 'ronal_23pem@gmail.com'),
(17, 'ALVAREZ', 'QUISPE', 'FERNADO', 'MASCULINO', 'SOLTERO/A', '78553312', '2000-06-27', 74585962, 'CEJA', 'Estudiante', 'fernado_543@gmail.com'),
(19, 'ALVAREZ', 'MAMANI', 'AIDE', 'FEMENINO', 'CASADO/A', '1123156', '1989-11-21', 7652653, 'Viacha', 'Trabajador por cuenta propia', 'aidepem@gmail.com'),
(20, 'ALVAREZ', 'MAMANI', 'JUANA', 'FEMENINO', 'CASADO/A', '7499111', '1990-07-07', 72015579, 'camino', 'Empleo de tiempo completo', 'juana_mamani@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
