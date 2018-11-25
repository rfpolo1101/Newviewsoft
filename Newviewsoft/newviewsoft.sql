-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2018 a las 03:04:11
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

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
  `id_ciudad` int(11) NOT NULL COMMENT 'Identificador de las ciudades',
  `ciudad` varchar(45) DEFAULT NULL COMMENT 'Ingreso de la ciudad'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Ciudad a la que pertenece cada sede';

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `ciudad`) VALUES
(1, 'Null'),
(2, 'Barranquilla'),
(3, 'Bogota'),
(4, 'Medellin ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencias`
--

CREATE TABLE `competencias` (
  `id_competencia` int(11) NOT NULL COMMENT 'Identificador de las competencias',
  `competencia` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Ingreso de las competencias',
  `trimestre_diurno` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Ingreso del trimestre en el que pertece la competencia',
  `trimestre_especial` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Ingreso especial para las competencias que esten en 7 u 8 trimestre',
  `fk_programa` int(11) NOT NULL COMMENT 'Llave foránea en la que se almacena el programa de formación'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacenamiento de las competencias';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dato_persona`
--

CREATE TABLE `dato_persona` (
  `documento` varchar(45) NOT NULL COMMENT 'Documento de identificación de los usuarios y aprendices',
  `primer_nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Primer nombre de los usuarios y aprendices',
  `segundo_nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Segundo nombre de los usuarios y aprendices',
  `primer_apellido` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Primer apellido de los usuarios y aprendices',
  `segundo_apellido` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Segundo apellido de los usuarios y aprendices',
  `correo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Correo de los usuario y aprendices',
  `contrasena` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT 'Null' COMMENT 'Contraseña de los usuarios',
  `fk_estado` int(2) NOT NULL DEFAULT '1' COMMENT 'Estado en el que se encuentran los usuarios y aprendices',
  `fk_ficha` int(11) NOT NULL DEFAULT '0' COMMENT 'Llave foránea de la ficha de formación a la que pertenecen los aprendices',
  `fk_tipo_documento` bigint(11) NOT NULL COMMENT 'LLave foránea del tipo de documento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Datos personales de los usuarios y aprendices';

--
-- Volcado de datos para la tabla `dato_persona`
--

INSERT INTO `dato_persona` (`documento`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `correo`, `contrasena`, `fk_estado`, `fk_ficha`, `fk_tipo_documento`) VALUES
('CC1233697081', 'Rafael', 'Fernando', 'Polo', 'Cucaita', 'Rfpolo1101@gmail.com', '25f9e794323b453885f5181f1b624d0b', 1, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(2) NOT NULL COMMENT 'Identificador del estado',
  `estado` varchar(20) DEFAULT NULL COMMENT 'Ingreso del estado en el que se encuentran los usuarios y aprendices'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacenamiento del estado en el que se encuentran los aprendices y usuarios';

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
  `codigo_ficha` int(11) NOT NULL DEFAULT '0' COMMENT 'Código de la ficha a la que pertenece el aprendiz',
  `fk_sede` int(11) NOT NULL DEFAULT '0' COMMENT 'Llave foránea de la sede en la que se encuentra el aprendiz',
  `fk_jornada` int(11) NOT NULL DEFAULT '0' COMMENT 'Llave foránea de la jornada en la que se encuentra el aprendiz',
  `fk_modalidad` int(11) NOT NULL DEFAULT '0' COMMENT 'Llave foránea de la modalidad en la que se encuentra el aprendiz',
  `fk_programa_formacion` int(11) NOT NULL DEFAULT '0' COMMENT 'Llave foránea del programa de formación en donde se encuentra el aprendiz',
  `fk_trimestre` int(11) NOT NULL COMMENT 'Llave foránea del trimestre en el que se encuentra el aprendiz',
  `fk_estado` int(2) NOT NULL COMMENT 'Llave foránea del estado de la ficha'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacenamiento de las fichas de los aprendices';

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`codigo_ficha`, `fk_sede`, `fk_jornada`, `fk_modalidad`, `fk_programa_formacion`, `fk_trimestre`, `fk_estado`) VALUES
(0, 1, 1, 1, 1, 1, 2),
(1438303, 5, 4, 3, 2, 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_aprendiz`
--

CREATE TABLE `historial_aprendiz` (
  `id_historial_aprendiz` int(11) NOT NULL COMMENT 'Identificador del hitorial de cada aprendiz',
  `fecha_historial_aprendiz` date DEFAULT NULL COMMENT 'Fecha en la que se realizó el historial del aprendiz',
  `fk_sede_antigua` int(11) NOT NULL DEFAULT '0' COMMENT 'Llave foránea de la sede anterior del aprendiz',
  `fk_jornada_antigua` int(11) NOT NULL DEFAULT '0' COMMENT 'Llave foránea de la jornada en la que se encontraba el aprendiz',
  `fk_modalidad_antigua` int(11) NOT NULL DEFAULT '0' COMMENT 'Llave foránea de la modalidad en la que se encontraba el aprendiz',
  `fk_trimestre_antigua` int(11) NOT NULL COMMENT 'Llave foránea del trimestre en el que se encontraba el aprendiz',
  `fk_codigo_ficha` int(11) NOT NULL COMMENT 'Llave foránea del códigode la ficha del aprendiz'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacenamiento del historial de cada aprendiz';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada`
--

CREATE TABLE `jornada` (
  `id_jornada` int(11) NOT NULL COMMENT 'Identificador de la jornada de formación del aprendiz',
  `jornada` varchar(45) DEFAULT NULL COMMENT 'Ingreso de la jornada de formación del aprendiz'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacenamiento de las jornadas de formación';

--
-- Volcado de datos para la tabla `jornada`
--

INSERT INTO `jornada` (`id_jornada`, `jornada`) VALUES
(1, 'Null'),
(2, 'Diurna'),
(3, 'Nocturna'),
(4, ' Diruna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE `modalidad` (
  `id_modalidad` int(11) NOT NULL COMMENT 'Identificador de la modalidad',
  `modalidad` varchar(45) DEFAULT NULL COMMENT 'Ingreso de la modalidad a la que pertenece la ficha'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacenamiento de la modalidad de formación de la ficha';

--
-- Volcado de datos para la tabla `modalidad`
--

INSERT INTO `modalidad` (`id_modalidad`, `modalidad`) VALUES
(1, 'Null'),
(2, 'Virtual'),
(3, 'Presencial ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad`
--

CREATE TABLE `novedad` (
  `id_novedad` int(2) NOT NULL COMMENT 'Identificador de la novedad',
  `fecha_inicio` date DEFAULT NULL COMMENT 'Ingreso de la fecha de inicio de la novedad',
  `fecha_fin` date DEFAULT NULL COMMENT 'Ingreso de la fecha fin de la novedad',
  `motivo` text COMMENT 'Ingreso del motivo por el cual se realizó la novedad',
  `respuesta` varchar(45) DEFAULT NULL COMMENT 'Ingreso de la respuesta de la novedad',
  `fallas` varchar(45) DEFAULT 'Null' COMMENT 'Ingreso de la cantidad de fallas del aprendiz',
  `documento_responsable` varchar(45) DEFAULT NULL COMMENT 'Documento del responsable de realizar la novedad',
  `tiempo_estimado` varchar(45) DEFAULT NULL COMMENT 'Ingreso del tiempo estimado de la novedad',
  `instructor_encargado` varchar(45) DEFAULT NULL COMMENT 'Ingreso del instructor encargado de la novedad',
  `tamano_acta` int(20) DEFAULT NULL COMMENT 'Ingreso del tamaño que tendrá el acta',
  `acta` varchar(200) DEFAULT NULL COMMENT 'Ingreso del acta de la novedad',
  `fk_documento` varchar(45) NOT NULL COMMENT 'Llave foránea del documento del aprendiz',
  `fk_tipo_novedad` int(2) NOT NULL COMMENT 'Llave foránea del tipo de novedad',
  `fk_tipo_respuesta` int(2) NOT NULL COMMENT 'Llave foránea del tipo de respuesta'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacenamiento de las novedades';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `id_documento` varchar(45) NOT NULL COMMENT 'Identificador de los documentos para dar permisos'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacenamiento de los permisos';

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`id_documento`) VALUES
('CC1000332215'),
('CC1233697081');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_formacion`
--

CREATE TABLE `programa_formacion` (
  `id_programa_formacion` int(11) NOT NULL COMMENT 'Identificador del programa de formación',
  `programa_formacion` varchar(200) DEFAULT NULL COMMENT 'Ingreso del programa de formación',
  `proyecto` varchar(45) DEFAULT NULL COMMENT 'Ingreso del proyecto al que esta sujeto el programa de formación',
  `fk_tipo_de_formacion` int(11) NOT NULL COMMENT 'Llave foránea de los tipos de formación'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacenamiento de los programas de formación';

--
-- Volcado de datos para la tabla `programa_formacion`
--

INSERT INTO `programa_formacion` (`id_programa_formacion`, `programa_formacion`, `proyecto`, `fk_tipo_de_formacion`) VALUES
(1, 'Null', 'Null', 1),
(2, 'Analisis De Desarrollo De Sistemas De Informacion', 'Null', 1),
(3, 'Tecnico En Programacion De Software', 'Null', 1),
(4, 'Producción Multimedia', 'Null', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado_aprendizaje`
--

CREATE TABLE `resultado_aprendizaje` (
  `id_resultado_aprendizaje` int(11) NOT NULL COMMENT 'Identifdicador del resultado de aprendizaje',
  `resultado_aprendizaje` text COLLATE utf8_spanish_ci COMMENT 'Ingreso del resultado de aprendizaje',
  `fk_competencia` int(11) NOT NULL COMMENT 'Llave foránea de las competencias'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Almacenamiento de los resultados de aprendizaje ';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL COMMENT 'Identificador del rol',
  `fk_tipo_rol` int(11) NOT NULL COMMENT 'Llave foránea del tipo de rol',
  `fk_documento` varchar(45) NOT NULL COMMENT 'Llave foránea del documento de los usuarios'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacenamiento de los roles para los usuarios';

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `fk_tipo_rol`, `fk_documento`) VALUES
(1, 4, 'CC1000332215'),
(2, 5, 'CC1233697081');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `id_sede` int(11) NOT NULL COMMENT 'Identificador de las sedes',
  `sede` varchar(100) DEFAULT NULL COMMENT 'Almacenamiento de las sedes',
  `fk_ciudad` int(11) NOT NULL COMMENT 'Llave foránea de las ciudades a la que pertece cada sede'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacenamiento de las sedes existentes';

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id_sede`, `sede`, `fk_ciudad`) VALUES
(1, 'Null', 1),
(2, 'Colombia', 3),
(3, 'Complejo sur', 3),
(4, 'Ricaurte', 3),
(5, '  Colombia', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id_solicitud` int(11) NOT NULL COMMENT 'Identificador de la solicitud',
  `documento_solicitud` varchar(45) DEFAULT NULL COMMENT 'Ingreso del documento de la persona que realiza la solicitud',
  `correo_solicitud` varchar(45) DEFAULT NULL COMMENT 'Ingreso del correo de la persona que realiza la solicitud',
  `mensaje_solicitud` varchar(45) DEFAULT NULL COMMENT 'Ingreso del mensaje de la persona que realiza la solicitud',
  `fk_documento_administrador` varchar(45) NOT NULL COMMENT 'Llave foránea del documento del administrador'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacenamiento de las solicitudes que hagan los usuarios';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_formacion`
--

CREATE TABLE `tipo_de_formacion` (
  `id_tipo_de_formacion` int(11) NOT NULL COMMENT 'Identificador del tipo de formación',
  `tipo_formacion` varchar(100) DEFAULT NULL COMMENT 'Ingreso del tipo de formación'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacenamiento de los tipos de formación';

--
-- Volcado de datos para la tabla `tipo_de_formacion`
--

INSERT INTO `tipo_de_formacion` (`id_tipo_de_formacion`, `tipo_formacion`) VALUES
(1, 'Null'),
(2, 'Tecnologo'),
(3, 'Tecnico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_tipo_documento` bigint(11) NOT NULL COMMENT 'Identificador de los tipos de documento',
  `tipo_documento` varchar(45) DEFAULT NULL COMMENT 'Ingreso de los tipos de documento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacenamiento de los tipos de documento';

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
  `id_tipo_novedad` int(2) NOT NULL COMMENT 'Identificador de los tipos de novedad',
  `tipo_novedad` varchar(45) DEFAULT NULL COMMENT 'Ingreso de los tipos de novedad'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacenamiento de los tipos de novedad';

--
-- Volcado de datos para la tabla `tipo_novedad`
--

INSERT INTO `tipo_novedad` (`id_tipo_novedad`, `tipo_novedad`) VALUES
(1, 'Null'),
(2, 'Cambio jornada'),
(3, 'Retiro Voluntario'),
(4, 'Aplazamiento'),
(5, 'Deserción '),
(6, 'Traslado'),
(7, 'Reintegro ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_respuesta`
--

CREATE TABLE `tipo_respuesta` (
  `id_tipo_respuesta` int(2) NOT NULL COMMENT 'Identificador del tipo de respuesta',
  `tipo_respuesta` varchar(45) DEFAULT NULL COMMENT 'Ingreso del tipo de respuesta'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacenamiento de los tipos de respuesta';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_rol`
--

CREATE TABLE `tipo_rol` (
  `id_tipo_rol` int(11) NOT NULL COMMENT 'Identificador del tipo de rol',
  `tipo_rol` varchar(45) DEFAULT NULL COMMENT 'Ingreso del tipo de rol existente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacenamiento de los roles';

--
-- Volcado de datos para la tabla `tipo_rol`
--

INSERT INTO `tipo_rol` (`id_tipo_rol`, `tipo_rol`) VALUES
(1, 'Aprendiz'),
(2, 'Instructor'),
(3, 'Apoyo Administrativo'),
(4, 'Administrador'),
(5, 'Super Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trimestre`
--

CREATE TABLE `trimestre` (
  `id_trimestre` int(11) NOT NULL COMMENT 'Identificador de los trimestres',
  `trimestre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Ingreso del trimestre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Almacenamiento de los trimestres';

--
-- Volcado de datos para la tabla `trimestre`
--

INSERT INTO `trimestre` (`id_trimestre`, `trimestre`) VALUES
(1, 'Null'),
(2, 'Uno'),
(3, 'Dos'),
(4, 'Tres'),
(5, 'Cuatro'),
(6, 'Cinco'),
(7, 'Seis'),
(8, 'Siete'),
(9, 'Ocho');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`);

--
-- Indices de la tabla `competencias`
--
ALTER TABLE `competencias`
  ADD PRIMARY KEY (`id_competencia`),
  ADD KEY `fk_competencias_programa_formacion_idx` (`fk_programa`);

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
  ADD KEY `fk_Fichas_Modalidades1_idx` (`fk_modalidad`),
  ADD KEY `fk_Fichas_Programas_formacion1_idx` (`fk_programa_formacion`),
  ADD KEY `fk_ficha_trimestre1_idx` (`fk_trimestre`),
  ADD KEY `fk_ficha_estado1_idx` (`fk_estado`);

--
-- Indices de la tabla `historial_aprendiz`
--
ALTER TABLE `historial_aprendiz`
  ADD PRIMARY KEY (`id_historial_aprendiz`),
  ADD KEY `fk_Fichas_Sedes1_idx` (`fk_sede_antigua`),
  ADD KEY `fk_Fichas_Jornadas1_idx` (`fk_jornada_antigua`),
  ADD KEY `fk_Fichas_Modalidades1_idx` (`fk_modalidad_antigua`),
  ADD KEY `fk_ficha_trimestre1_idx` (`fk_trimestre_antigua`),
  ADD KEY `fk_historial_aprendiz_ficha1_idx` (`fk_codigo_ficha`);

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
  ADD KEY `fk_novedad_dato_persona1_idx` (`fk_documento`),
  ADD KEY `fk_novedad_tipo_respuesta1_idx` (`fk_tipo_respuesta`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `programa_formacion`
--
ALTER TABLE `programa_formacion`
  ADD PRIMARY KEY (`id_programa_formacion`),
  ADD KEY `fk_programa_formacion_tipo_de_formacion1_idx` (`fk_tipo_de_formacion`);

--
-- Indices de la tabla `resultado_aprendizaje`
--
ALTER TABLE `resultado_aprendizaje`
  ADD PRIMARY KEY (`id_resultado_aprendizaje`),
  ADD KEY `fk_resultado_aprendizaje_competencias1_idx` (`fk_competencia`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`),
  ADD KEY `fk_rol_tipo_rol1_idx` (`fk_tipo_rol`),
  ADD KEY `fk_rol_permiso1_idx` (`fk_documento`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id_sede`),
  ADD KEY `fk_sedes_ciudad1_idx` (`fk_ciudad`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `fk_solicitud_permiso1_idx` (`fk_documento_administrador`);

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
-- Indices de la tabla `tipo_respuesta`
--
ALTER TABLE `tipo_respuesta`
  ADD PRIMARY KEY (`id_tipo_respuesta`);

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
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de las ciudades', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del estado', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `historial_aprendiz`
--
ALTER TABLE `historial_aprendiz`
  MODIFY `id_historial_aprendiz` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del hitorial de cada aprendiz';

--
-- AUTO_INCREMENT de la tabla `jornada`
--
ALTER TABLE `jornada`
  MODIFY `id_jornada` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la jornada de formación del aprendiz', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  MODIFY `id_modalidad` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la modalidad', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `novedad`
--
ALTER TABLE `novedad`
  MODIFY `id_novedad` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la novedad';

--
-- AUTO_INCREMENT de la tabla `programa_formacion`
--
ALTER TABLE `programa_formacion`
  MODIFY `id_programa_formacion` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del programa de formación', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del rol', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `id_sede` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de las sedes', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la solicitud';

--
-- AUTO_INCREMENT de la tabla `tipo_de_formacion`
--
ALTER TABLE `tipo_de_formacion`
  MODIFY `id_tipo_de_formacion` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del tipo de formación', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_tipo_documento` bigint(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de los tipos de documento', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_novedad`
--
ALTER TABLE `tipo_novedad`
  MODIFY `id_tipo_novedad` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de los tipos de novedad', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tipo_respuesta`
--
ALTER TABLE `tipo_respuesta`
  MODIFY `id_tipo_respuesta` int(2) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del tipo de respuesta';

--
-- AUTO_INCREMENT de la tabla `tipo_rol`
--
ALTER TABLE `tipo_rol`
  MODIFY `id_tipo_rol` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del tipo de rol', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `trimestre`
--
ALTER TABLE `trimestre`
  MODIFY `id_trimestre` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de los trimestres', AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `competencias`
--
ALTER TABLE `competencias`
  ADD CONSTRAINT `fk_competencias_programa_formacion` FOREIGN KEY (`fk_programa`) REFERENCES `programa_formacion` (`id_programa_formacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_Fichas_Programas_formacion1` FOREIGN KEY (`fk_programa_formacion`) REFERENCES `programa_formacion` (`id_programa_formacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Fichas_Sedes1` FOREIGN KEY (`fk_sede`) REFERENCES `sede` (`id_sede`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ficha_estado1` FOREIGN KEY (`fk_estado`) REFERENCES `estado` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ficha_trimestre1` FOREIGN KEY (`fk_trimestre`) REFERENCES `trimestre` (`id_trimestre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `historial_aprendiz`
--
ALTER TABLE `historial_aprendiz`
  ADD CONSTRAINT `fk_Fichas_Jornadas10` FOREIGN KEY (`fk_jornada_antigua`) REFERENCES `jornada` (`id_jornada`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Fichas_Modalidades10` FOREIGN KEY (`fk_modalidad_antigua`) REFERENCES `modalidad` (`id_modalidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Fichas_Sedes10` FOREIGN KEY (`fk_sede_antigua`) REFERENCES `sede` (`id_sede`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ficha_trimestre10` FOREIGN KEY (`fk_trimestre_antigua`) REFERENCES `trimestre` (`id_trimestre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_historial_aprendiz_ficha1` FOREIGN KEY (`fk_codigo_ficha`) REFERENCES `ficha` (`codigo_ficha`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD CONSTRAINT `fk_Novedad_Tipo_novedad1` FOREIGN KEY (`fk_tipo_novedad`) REFERENCES `tipo_novedad` (`id_tipo_novedad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_novedad_dato_persona1` FOREIGN KEY (`fk_documento`) REFERENCES `dato_persona` (`documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_novedad_tipo_respuesta1` FOREIGN KEY (`fk_tipo_respuesta`) REFERENCES `tipo_respuesta` (`id_tipo_respuesta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `programa_formacion`
--
ALTER TABLE `programa_formacion`
  ADD CONSTRAINT `fk_programa_formacion_tipo_de_formacion1` FOREIGN KEY (`fk_tipo_de_formacion`) REFERENCES `tipo_de_formacion` (`id_tipo_de_formacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `resultado_aprendizaje`
--
ALTER TABLE `resultado_aprendizaje`
  ADD CONSTRAINT `fk_resultado_aprendizaje_competencias1` FOREIGN KEY (`fk_competencia`) REFERENCES `competencias` (`id_competencia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rol`
--
ALTER TABLE `rol`
  ADD CONSTRAINT `fk_rol_permiso1` FOREIGN KEY (`fk_documento`) REFERENCES `permiso` (`id_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rol_tipo_rol1` FOREIGN KEY (`fk_tipo_rol`) REFERENCES `tipo_rol` (`id_tipo_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sede`
--
ALTER TABLE `sede`
  ADD CONSTRAINT `fk_sedes_ciudad1` FOREIGN KEY (`fk_ciudad`) REFERENCES `ciudad` (`id_ciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `fk_solicitud_permiso1` FOREIGN KEY (`fk_documento_administrador`) REFERENCES `permiso` (`id_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
