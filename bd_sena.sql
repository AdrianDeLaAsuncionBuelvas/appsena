-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2018 a las 19:38:11
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_sena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_est_for`
--

CREATE TABLE `t_est_for` (
  `ESTFOR_FOR_ID` int(11) DEFAULT NULL,
  `ESTFOR_USU_ID` int(11) DEFAULT NULL,
  `ESTFOR_ESTADO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_formacion`
--

CREATE TABLE `t_formacion` (
  `FOR_ID` int(11) NOT NULL,
  `FOR_PRO_ID` int(11) DEFAULT NULL,
  `FOR_NOMBRE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `FOR_CODIGO` int(11) DEFAULT NULL,
  `FOR_FCH_INICIO` date DEFAULT NULL,
  `FOR_FCH_FIN` date DEFAULT NULL,
  `FOR_ESTADO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_formacion`
--

INSERT INTO `t_formacion` (`FOR_ID`, `FOR_PRO_ID`, `FOR_NOMBRE`, `FOR_CODIGO`, `FOR_FCH_INICIO`, `FOR_FCH_FIN`, `FOR_ESTADO`) VALUES
(10, NULL, 'PASTELERIA', 76543, '2017-04-12', '2018-04-12', 1),
(11, NULL, 'MATEMATICAS', 1213456, '2017-04-02', '2018-04-02', 1),
(12, NULL, 'SALUD OCUPACIONAL', 2010154, '2017-08-23', '2019-08-23', 1),
(13, NULL, 'MANTENIMIENTO DE COMPUTADORES', 1314156, '2017-04-16', '2018-04-16', 1),
(14, NULL, 'Licenciatura en Español', 345246, '2017-01-20', '2023-01-20', 1),
(15, NULL, 'PROGRAMACION DE SOFTWARE', 1613533, '2017-06-05', '2018-06-05', 1),
(17, 19, 'INGENIERIA DE SOFTWARE', 342513, '2015-02-10', '2020-02-10', 1),
(18, 6, 'ENFERMERIA', 235162, '2016-03-09', '2018-03-08', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_programa`
--

CREATE TABLE `t_programa` (
  `PRO_ID` int(11) NOT NULL,
  `PRO_NOMBRE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `PRO_CODIGO` int(11) DEFAULT NULL,
  `PRO_ESTADO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_programa`
--

INSERT INTO `t_programa` (`PRO_ID`, `PRO_NOMBRE`, `PRO_CODIGO`, `PRO_ESTADO`) VALUES
(3, 'SISTEMAS', 66755, 1),
(6, 'MEDICINA', 46532, 1),
(8, 'ESPAÑOL', 2324, 1),
(13, 'QUIMICA', 432322, 1),
(15, 'INGENIERIA MECANICA', 261341, 1),
(19, 'INFORMATICA', 85343, 1),
(20, 'DERECHO', 234153, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuario`
--

CREATE TABLE `t_usuario` (
  `USU_ID` int(11) NOT NULL,
  `USU_NOMBRE` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `USU_APELLIDO` varchar(50) DEFAULT NULL,
  `USU_CORREO` varchar(50) DEFAULT NULL,
  `USU_TP_DOC` int(11) DEFAULT NULL,
  `USU_NUM_DOC` int(11) DEFAULT NULL,
  `USU_ROL` int(11) NOT NULL,
  `USU_PASSWORD` varchar(50) NOT NULL,
  `USU_FCH_NAC` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_usuario`
--

INSERT INTO `t_usuario` (`USU_ID`, `USU_NOMBRE`, `USU_APELLIDO`, `USU_CORREO`, `USU_TP_DOC`, `USU_NUM_DOC`, `USU_ROL`, `USU_PASSWORD`, `USU_FCH_NAC`) VALUES
(1234, 'ADMIN', NULL, 'ADMIN@ADMIN.COM', 1, 12345678, 1, '123456', '2018-08-14'),
(1235, 'adrian', 'buelvas', 'adrian1234@gmail.com', 1, 12345678, 2, '7c222fb2927d828af22f592134e8932480637c0d', '1999-10-01'),
(1237, 'Oscar', 'Bravo', 'oscarbravo798@gmail.com', 2, 11223344, 2, 'b986415c93241513d33d01fcf532a6c47ac4f3ee', '1998-12-04'),
(1238, 'Linda', 'Arrieta', 'lindalu@gmail.com', 2, 12334455, 2, '35a73ef0488cb90de07d55fa37682be7f24563ca', '2000-01-02'),
(1239, 'LOLA', '', 'LOLA@GMAIL.COM', 1, 122334455, 1, '39d8c6df6896fd554186ff531ea95596e703a9e4', '2014-04-01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_est_for`
--
ALTER TABLE `t_est_for`
  ADD KEY `ESTFOR_FOR_ID` (`ESTFOR_FOR_ID`),
  ADD KEY `ESTFOR_USU_ID` (`ESTFOR_USU_ID`);

--
-- Indices de la tabla `t_formacion`
--
ALTER TABLE `t_formacion`
  ADD PRIMARY KEY (`FOR_ID`),
  ADD KEY `FOR_PRO_ID` (`FOR_PRO_ID`);

--
-- Indices de la tabla `t_programa`
--
ALTER TABLE `t_programa`
  ADD PRIMARY KEY (`PRO_ID`);

--
-- Indices de la tabla `t_usuario`
--
ALTER TABLE `t_usuario`
  ADD PRIMARY KEY (`USU_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_formacion`
--
ALTER TABLE `t_formacion`
  MODIFY `FOR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `t_programa`
--
ALTER TABLE `t_programa`
  MODIFY `PRO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `t_usuario`
--
ALTER TABLE `t_usuario`
  MODIFY `USU_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1240;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_est_for`
--
ALTER TABLE `t_est_for`
  ADD CONSTRAINT `t_est_for_ibfk_1` FOREIGN KEY (`ESTFOR_FOR_ID`) REFERENCES `t_formacion` (`FOR_ID`),
  ADD CONSTRAINT `t_est_for_ibfk_2` FOREIGN KEY (`ESTFOR_USU_ID`) REFERENCES `t_usuario` (`USU_ID`);

--
-- Filtros para la tabla `t_formacion`
--
ALTER TABLE `t_formacion`
  ADD CONSTRAINT `t_formacion_ibfk_1` FOREIGN KEY (`FOR_PRO_ID`) REFERENCES `t_programa` (`PRO_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
