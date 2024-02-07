-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2024 a las 14:30:29
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_login_database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

CREATE TABLE `familia` (
  `id_familia` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `parentesco` varchar(50) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `edad` int(20) NOT NULL,
  `condicion_medica` varchar(100) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `nacimiento` date NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `familia`
--

INSERT INTO `familia` (`id_familia`, `id_user`, `parentesco`, `nombre_completo`, `edad`, `condicion_medica`, `cedula`, `nacimiento`, `sexo`, `estado`) VALUES
(12, 19, 'Abuelo', 'Pedr Linares', 45, 'si vista', '23438776', '1999-12-25', 'hombre', 'Difunto'),
(17, 19, 'tia', 'Maria Salasar', 50, 'no', '12438776', '1999-03-02', 'mujer', 'Difunta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(250) NOT NULL,
  `cedula` int(10) NOT NULL,
  `jerarquia` varchar(250) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `nacimiento` varchar(50) NOT NULL,
  `edad` int(5) NOT NULL,
  `estado_civil` varchar(11) NOT NULL,
  `grupo_sanguineo` varchar(250) NOT NULL,
  `telefono` int(50) NOT NULL,
  `talla_pantalon` varchar(10) NOT NULL,
  `talla_camisa` varchar(10) NOT NULL,
  `talla_botas` varchar(10) NOT NULL,
  `grado_de_instruccion` varchar(250) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `cohorte_promocion` varchar(50) NOT NULL,
  `fecha_ultimo_ascenso` date NOT NULL,
  `tiempo_en_rango` int(10) NOT NULL,
  `tiempo_en_servicio` int(10) NOT NULL,
  `ultima_fecha_servicio_RETEN` date NOT NULL,
  `serial_de_credencial` varchar(40) NOT NULL,
  `estudia_actualmente` varchar(5) NOT NULL,
  `espesifique1` varchar(250) NOT NULL,
  `universidad_donde_estudia` varchar(100) NOT NULL,
  `padece_condicion_fisica` varchar(5) NOT NULL,
  `espesifique2` varchar(250) NOT NULL,
  `c_familia` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre_completo`, `cedula`, `jerarquia`, `correo`, `contrasena`, `id_cargo`, `nacimiento`, `edad`, `estado_civil`, `grupo_sanguineo`, `telefono`, `talla_pantalon`, `talla_camisa`, `talla_botas`, `grado_de_instruccion`, `fecha_ingreso`, `cohorte_promocion`, `fecha_ultimo_ascenso`, `tiempo_en_rango`, `tiempo_en_servicio`, `ultima_fecha_servicio_RETEN`, `serial_de_credencial`, `estudia_actualmente`, `espesifique1`, `universidad_donde_estudia`, `padece_condicion_fisica`, `espesifique2`, `c_familia`) VALUES
(18, 'Jose Torres', 23438776, 'normal', 'master@gmail.com', '123', 2, 'barinas 15/05/2004', 12, 'Casado(a)', '123', 416522789, '19', '23', '12', 'medio', '0000-00-00', '12', '2023-07-03', 2, 3, '2023-10-03', 'er421tg46u8', 'si', 'informatica', 'unellez', 'no', 'ninguna', 0),
(19, 'Marco camacho', 33438776, 'normal', 'camaco81@gmail.com', '123', 2, 'sabaneta 02/05/2004', 19, 'viudo', '123', 2147483647, '23', '12', '34', 'alto', '2023-02-04', '23', '2023-10-04', 4, 5, '2024-03-04', 'er421tg46u23', 'si', 'arte', 'romulo', 'no', 'ninguna', 0),
(20, 'andres perez', 23438776, 'normal', 'Marc12@gmail.com', '123', 1, '', 0, '', '', 0, '', '', '', '', '0000-00-00', '', '0000-00-00', 0, 0, '0000-00-00', '', '', '', '', '', '', 0),
(21, 'Jose Torres', 23438776, 'normal', 'master123@gmail.com', '123', 1, '', 0, '', '', 0, '', '', '', '', '0000-00-00', '', '0000-00-00', 0, 0, '0000-00-00', '', '', '', '', '', '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `familia`
--
ALTER TABLE `familia`
  ADD PRIMARY KEY (`id_familia`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cargo` (`id_cargo`),
  ADD KEY `familia` (`c_familia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `familia`
--
ALTER TABLE `familia`
  MODIFY `id_familia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD CONSTRAINT `cargo_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id_cargo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
