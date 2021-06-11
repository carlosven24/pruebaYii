-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2021 a las 13:07:59
-- Versión del servidor: 8.0.22
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebaYii`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int NOT NULL,
  `formato` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `categoria` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tipo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `modalidad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `proposito` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `extension` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `paises` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `idioma` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `seo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `palabra_clave` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `semantica` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `archivo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `audio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `publico` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `perspectiva` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fecha_entrega` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `formato`, `categoria`, `tipo`, `modalidad`, `nombre`, `proposito`, `extension`, `paises`, `idioma`, `seo`, `palabra_clave`, `semantica`, `descripcion`, `archivo`, `audio`, `publico`, `perspectiva`, `fecha_entrega`) VALUES
(123, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '2', '06/14/2021'),
(124, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '2', '06/14/2021'),
(125, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '0', '06/14/2021'),
(126, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '3', '06/14/2021'),
(127, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '0', '06/14/2021'),
(128, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '0', '06/14/2021'),
(129, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '6', '06/14/2021'),
(130, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '0', '06/14/2021'),
(131, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '0', '06/14/2021'),
(132, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '0', '06/14/2021'),
(133, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '0', '06/14/2021'),
(134, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '6', '06/14/2021'),
(135, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '0', '06/14/2021'),
(136, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '0', '06/14/2021'),
(137, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '0', '06/14/2021'),
(138, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '0', '06/14/2021'),
(139, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '0', '06/14/2021'),
(140, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '0', '06/14/2021'),
(141, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '0', '06/14/2021'),
(142, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '0', '06/14/2021'),
(143, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '0', '06/14/2021'),
(144, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '0', '06/14/2021'),
(145, '1', '1,2,', '0', '2', 'prueba', '2', '0', '0,', '1', '0', 'prueba', 'prueba', 'prueba', 'cv.docx', 'jessica-make-up-remover-20-sec-big-cars-audio-track (1).mp3', 'prueba', '0', '06/14/2021');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
