-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2018 a las 19:27:52
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `newviewsoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `ciudad` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `ciudad`) VALUES
(0, 'Null'),
(4, 'Barranquilla'),
(5, 'Bogota'),
(6, 'Medellin ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dato_persona`
--

CREATE TABLE `dato_persona` (
  `documento` varchar(45) NOT NULL,
  `primer_nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `segundo_nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `primer_apellido` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `segundo_apellido` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `contrasena` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT 'Null',
  `fk_estado` int(2) NOT NULL DEFAULT '1',
  `fk_ficha` int(11) NOT NULL DEFAULT '0',
  `fk_tipo_documento` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dato_persona`
--

INSERT INTO `dato_persona` (`documento`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `correo`, `contrasena`, `fk_estado`, `fk_ficha`, `fk_tipo_documento`) VALUES
('CC1233697081', 'Rafael', 'Fernando', 'Polo', 'Cucaita', 'rfpolo5@misena.edu.co', '25f9e794323b453885f5181f1b624d0b', 1, 0, 1),
('CC52327483', 'Mery', 'Cris', 'Melo', 'Cucaita', 'mery@gmail.com', 'Null', 2, 1438303, 1),
('CC99121700405', 'Cristian ', 'Andres', 'Avila', 'Tejeda', 'andres@gmail.com', 'Null', 2, 1438303, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(2) NOT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`) VALUES
(1, 'Activo '),
(2, 'Inactivo ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `codigo_ficha` int(11) NOT NULL DEFAULT '0',
  `fk_sede` int(11) NOT NULL DEFAULT '0',
  `fk_jornada` int(11) NOT NULL DEFAULT '0',
  `fk_tipo_formacion` int(11) NOT NULL DEFAULT '0',
  `fk_modalidad` int(11) NOT NULL DEFAULT '0',
  `fk_programa_formacion` int(11) NOT NULL DEFAULT '0',
  `fk_trimestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`codigo_ficha`, `fk_sede`, `fk_jornada`, `fk_tipo_formacion`, `fk_modalidad`, `fk_programa_formacion`, `fk_trimestre`) VALUES
(0, 0, 0, 0, 0, 0, 0),
(1438303, 1, 3, 1, 2, 3, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada`
--

CREATE TABLE `jornada` (
  `id_jornada` int(11) NOT NULL,
  `jornada` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `jornada`
--

INSERT INTO `jornada` (`id_jornada`, `jornada`) VALUES
(0, 'Null'),
(3, 'Diurna'),
(4, 'Nocturna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE `modalidad` (
  `id_modalidad` int(11) NOT NULL,
  `modalidad` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modalidad`
--

INSERT INTO `modalidad` (`id_modalidad`, `modalidad`) VALUES
(0, 'Null'),
(1, 'Virtual'),
(2, 'Presencial ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad`
--

CREATE TABLE `novedad` (
  `id_novedad` int(2) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `motivo` text,
  `respuesta` varchar(45) DEFAULT NULL,
  `fallas` varchar(45) DEFAULT 'Null',
  `fk_tipo_novedad` int(2) NOT NULL,
  `fk_documento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `novedad`
--

INSERT INTO `novedad` (`id_novedad`, `fecha_inicio`, `fecha_fin`, `motivo`, `respuesta`, `fallas`, `fk_tipo_novedad`, `fk_documento`) VALUES
(14, '2018-08-30', '2018-09-30', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aavxfgfggdf', 'Null', 1, 'CC99121700405'),
(15, '2018-09-08', '2018-09-23', 'fg', 'hgfh', 'Null', 2, 'CC99121700405'),
(16, '2018-09-14', '2018-09-21', 'sdaf', 'dsf', 'Null', 3, 'CC99121700405'),
(17, '2018-09-09', '2018-09-16', 'vsd', 'fdsfd', 'Null', 5, 'CC99121700405'),
(18, '2018-09-23', '2018-09-30', 'sdffgd', 'fgdfd', 'Null', 6, 'CC99121700405'),
(19, '2018-09-21', '2018-10-13', 'sdf', 'sfdfdssdf', '80', 4, 'CC99121700405');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `id_documento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`id_documento`) VALUES
('CC1233697081'),
('CC52327483'),
('CC99121700405');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas_formacion`
--

CREATE TABLE `programas_formacion` (
  `id_programa_formacion` int(11) NOT NULL,
  `programas_formacion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `programas_formacion`
--

INSERT INTO `programas_formacion` (`id_programa_formacion`, `programas_formacion`) VALUES
(0, 'Null'),
(3, 'Analisis De Desarrollo De Sistemas De Informacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `fk_tipo_rol` int(11) NOT NULL,
  `fk_documento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`fk_tipo_rol`, `fk_documento`) VALUES
(4, 'CC1233697081'),
(4, 'CC99121700405');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `id_sede` int(11) NOT NULL,
  `sede` varchar(100) DEFAULT NULL,
  `fk_ciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id_sede`, `sede`, `fk_ciudad`) VALUES
(0, 'Null', 0),
(1, 'Colombia', 5),
(2, 'Complejo sur', 5),
(5, 'Ricaurte ', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_formacion`
--

CREATE TABLE `tipo_de_formacion` (
  `id_tipo_de_formacion` int(11) NOT NULL,
  `tipo_formacion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_de_formacion`
--

INSERT INTO `tipo_de_formacion` (`id_tipo_de_formacion`, `tipo_formacion`) VALUES
(0, 'Null'),
(1, 'Tecnologo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_tipo_documento` bigint(11) NOT NULL,
  `tipo_documento` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_tipo_documento`, `tipo_documento`) VALUES
(1, 'Cédula Ciudadanía'),
(2, 'Tarjeta Identidad'),
(3, 'Cédula Extranjera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_novedad`
--

CREATE TABLE `tipo_novedad` (
  `id_tipo_novedad` int(2) NOT NULL,
  `tipo_novedad` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_novedad`
--

INSERT INTO `tipo_novedad` (`id_tipo_novedad`, `tipo_novedad`) VALUES
(0, 'Null'),
(1, 'Cambio jornada'),
(2, 'Retiro Voluntario'),
(3, 'Aplazamiento'),
(4, 'Deserción '),
(5, 'Traslado'),
(6, 'Reintegro ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_rol`
--

CREATE TABLE `tipo_rol` (
  `id_tipo_rol` int(11) NOT NULL,
  `tipo_rol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_rol`
--

INSERT INTO `tipo_rol` (`id_tipo_rol`, `tipo_rol`) VALUES
(1, 'Aprendiz'),
(2, 'Instrucotor'),
(3, 'Apoyo Administrativo'),
(4, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trimestre`
--

CREATE TABLE `trimestre` (
  `id_trimestre` int(11) NOT NULL,
  `trimestre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `trimestre`
--

INSERT INTO `trimestre` (`id_trimestre`, `trimestre`) VALUES
(0, 'Null'),
(2, 'Uno'),
(3, 'Dos'),
(4, 'Tres'),
(5, 'Cuatro'),
(6, 'Cinco'),
(7, 'Seis'),
(8, 'Siete'),
(9, 'Ocho'),
(10, 'Nueve');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`);

--
-- Indices de la tabla `dato_persona`
--
ALTER TABLE `dato_persona`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `fk_datos_personas_tipo_documentos_idx` (`fk_tipo_documento`),
  ADD KEY `fk_datos_personas_Estado1_idx` (`fk_estado`),
  ADD KEY `fk_datos_personas_Fichas1_idx` (`fk_ficha`),
  ADD KEY `fk_dato_persona_permiso1_idx` (`documento`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`codigo_ficha`),
  ADD KEY `fk_Fichas_Sedes1_idx` (`fk_sede`),
  ADD KEY `fk_Fichas_Jornadas1_idx` (`fk_jornada`),
  ADD KEY `fk_Fichas_Tipos_de_formacion2_idx` (`fk_tipo_formacion`),
  ADD KEY `fk_Fichas_Modalidades1_idx` (`fk_modalidad`),
  ADD KEY `fk_Fichas_Programas_formacion1_idx` (`fk_programa_formacion`),
  ADD KEY `fk_ficha_trimestre1_idx` (`fk_trimestre`);

--
-- Indices de la tabla `jornada`
--
ALTER TABLE `jornada`
  ADD PRIMARY KEY (`id_jornada`);

--
-- Indices de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  ADD PRIMARY KEY (`id_modalidad`);

--
-- Indices de la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD PRIMARY KEY (`id_novedad`),
  ADD KEY `fk_Novedad_Tipo_novedad1_idx` (`fk_tipo_novedad`),
  ADD KEY `fk_novedad_dato_persona1_idx` (`fk_documento`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `programas_formacion`
--
ALTER TABLE `programas_formacion`
  ADD PRIMARY KEY (`id_programa_formacion`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD KEY `fk_Permisos_Rol1_idx` (`fk_tipo_rol`),
  ADD KEY `fk_rol_dato_persona1_idx` (`fk_documento`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id_sede`),
  ADD KEY `fk_sedes_ciudad1_idx` (`fk_ciudad`);

--
-- Indices de la tabla `tipo_de_formacion`
--
ALTER TABLE `tipo_de_formacion`
  ADD PRIMARY KEY (`id_tipo_de_formacion`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_tipo_documento`);

--
-- Indices de la tabla `tipo_novedad`
--
ALTER TABLE `tipo_novedad`
  ADD PRIMARY KEY (`id_tipo_novedad`);

--
-- Indices de la tabla `tipo_rol`
--
ALTER TABLE `tipo_rol`
  ADD PRIMARY KEY (`id_tipo_rol`);

--
-- Indices de la tabla `trimestre`
--
ALTER TABLE `trimestre`
  ADD PRIMARY KEY (`id_trimestre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `jornada`
--
ALTER TABLE `jornada`
  MODIFY `id_jornada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  MODIFY `id_modalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `novedad`
--
ALTER TABLE `novedad`
  MODIFY `id_novedad` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `programas_formacion`
--
ALTER TABLE `programas_formacion`
  MODIFY `id_programa_formacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `id_sede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_de_formacion`
--
ALTER TABLE `tipo_de_formacion`
  MODIFY `id_tipo_de_formacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_tipo_documento` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_novedad`
--
ALTER TABLE `tipo_novedad`
  MODIFY `id_tipo_novedad` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_rol`
--
ALTER TABLE `tipo_rol`
  MODIFY `id_tipo_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `trimestre`
--
ALTER TABLE `trimestre`
  MODIFY `id_trimestre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dato_persona`
--
ALTER TABLE `dato_persona`
  ADD CONSTRAINT `fk_dato_persona_permiso1` FOREIGN KEY (`documento`) REFERENCES `permiso` (`id_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_datos_personas_Estado1` FOREIGN KEY (`fk_estado`) REFERENCES `estado` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_datos_personas_Fichas1` FOREIGN KEY (`fk_ficha`) REFERENCES `ficha` (`codigo_ficha`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_datos_personas_tipo_documentos` FOREIGN KEY (`fk_tipo_documento`) REFERENCES `tipo_documento` (`id_tipo_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD CONSTRAINT `fk_Fichas_Jornadas1` FOREIGN KEY (`fk_jornada`) REFERENCES `jornada` (`id_jornada`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Fichas_Modalidades1` FOREIGN KEY (`fk_modalidad`) REFERENCES `modalidad` (`id_modalidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Fichas_Programas_formacion1` FOREIGN KEY (`fk_programa_formacion`) REFERENCES `programas_formacion` (`id_programa_formacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Fichas_Sedes1` FOREIGN KEY (`fk_sede`) REFERENCES `sede` (`id_sede`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Fichas_Tipos_de_formacion2` FOREIGN KEY (`fk_tipo_formacion`) REFERENCES `tipo_de_formacion` (`id_tipo_de_formacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ficha_trimestre1` FOREIGN KEY (`fk_trimestre`) REFERENCES `trimestre` (`id_trimestre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD CONSTRAINT `fk_Novedad_Tipo_novedad1` FOREIGN KEY (`fk_tipo_novedad`) REFERENCES `tipo_novedad` (`id_tipo_novedad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_novedad_dato_persona1` FOREIGN KEY (`fk_documento`) REFERENCES `dato_persona` (`documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rol`
--
ALTER TABLE `rol`
  ADD CONSTRAINT `fk_Permisos_Rol1` FOREIGN KEY (`fk_tipo_rol`) REFERENCES `tipo_rol` (`id_tipo_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rol_dato_persona1` FOREIGN KEY (`fk_documento`) REFERENCES `dato_persona` (`documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sede`
--
ALTER TABLE `sede`
  ADD CONSTRAINT `fk_sedes_ciudad1` FOREIGN KEY (`fk_ciudad`) REFERENCES `ciudad` (`id_ciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
