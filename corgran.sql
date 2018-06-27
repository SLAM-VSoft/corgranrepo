-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-06-2018 a las 18:55:03
-- Versión del servidor: 5.7.22-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `corgran`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrusel`
--

CREATE TABLE `carrusel` (
  `id_carrusel` int(11) NOT NULL,
  `imagen` varchar(400) NOT NULL,
  `titulo` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegiado`
--

CREATE TABLE `colegiado` (
  `id_colegiado` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nro_colegiado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuota`
--

CREATE TABLE `cuota` (
  `id_cuota` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fec_pago` date NOT NULL,
  `monto` double NOT NULL,
  `estado` varchar(200) NOT NULL,
  `interes` double NOT NULL,
  `pago_adelantado` varchar(100) NOT NULL,
  `nro_cta` int(11) NOT NULL,
  `fecha_cta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_contacto`
--

CREATE TABLE `datos_contacto` (
  `id_contacto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `domic_personal` varchar(250) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `domic_laboral` varchar(250) NOT NULL,
  `domic_consultorio` varchar(250) NOT NULL,
  `localidad` varchar(200) NOT NULL,
  `telefono_laboral` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `email_laboral` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE `datos_personales` (
  `id_datos_personales` int(11) NOT NULL,
  `apellido` varchar(150) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `dni` varchar(100) NOT NULL,
  `cuit_cuil` varchar(50) NOT NULL,
  `fec_nac` date NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delegacion`
--

CREATE TABLE `delegacion` (
  `id_delegacion` int(11) NOT NULL,
  `localidad` varchar(200) NOT NULL,
  `mes` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `id_colegiado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descargas`
--

CREATE TABLE `descargas` (
  `$id_descarga` int(11) NOT NULL,
  `nombre_arch` varchar(150) NOT NULL,
  `formato` varchar(20) NOT NULL,
  `categoria_arch` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `link_interes`
--

CREATE TABLE `link_interes` (
  `id_link` int(11) NOT NULL,
  `nombre_sitio` varchar(200) NOT NULL,
  `link_acceso` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculacion`
--

CREATE TABLE `matriculacion` (
  `id_matriculacion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `mp` int(40) NOT NULL,
  `nro_resolucion` varchar(20) NOT NULL,
  `fec_resolucion` date NOT NULL,
  `$resolucion_baja` int(11) NOT NULL,
  `fec_resolucion_baja` date NOT NULL,
  `fec_matricula` date NOT NULL,
  `venc_matricula` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id_noticia` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `tipo_noticia` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `imagen` varchar(400) NOT NULL,
  `link` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicidad`
--

CREATE TABLE `publicidad` (
  `id_publicidad` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `$imagen` varchar(400) NOT NULL,
  `texto` text NOT NULL,
  `link` varchar(400) NOT NULL,
  `posicion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulo`
--

CREATE TABLE `titulo` (
  `id_titulo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `expedido_por` varchar(400) NOT NULL,
  `fec_egreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ultima_noticia`
--

CREATE TABLE `ultima_noticia` (
  `id_ultima_noticia` int(11) NOT NULL,
  `id_noticia` int(11) NOT NULL,
  `posicion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `tipo_usu` varchar(200) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `clave` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colegiado`
--
ALTER TABLE `colegiado`
  ADD PRIMARY KEY (`id_colegiado`);

--
-- Indices de la tabla `cuota`
--
ALTER TABLE `cuota`
  ADD PRIMARY KEY (`id_cuota`);

--
-- Indices de la tabla `datos_contacto`
--
ALTER TABLE `datos_contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`id_datos_personales`);

--
-- Indices de la tabla `delegacion`
--
ALTER TABLE `delegacion`
  ADD PRIMARY KEY (`id_delegacion`);

--
-- Indices de la tabla `descargas`
--
ALTER TABLE `descargas`
  ADD PRIMARY KEY (`$id_descarga`);

--
-- Indices de la tabla `link_interes`
--
ALTER TABLE `link_interes`
  ADD PRIMARY KEY (`id_link`);

--
-- Indices de la tabla `matriculacion`
--
ALTER TABLE `matriculacion`
  ADD PRIMARY KEY (`id_matriculacion`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indices de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  ADD PRIMARY KEY (`id_publicidad`);

--
-- Indices de la tabla `titulo`
--
ALTER TABLE `titulo`
  ADD PRIMARY KEY (`id_titulo`);

--
-- Indices de la tabla `ultima_noticia`
--
ALTER TABLE `ultima_noticia`
  ADD PRIMARY KEY (`id_ultima_noticia`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `colegiado`
--
ALTER TABLE `colegiado`
  MODIFY `id_colegiado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cuota`
--
ALTER TABLE `cuota`
  MODIFY `id_cuota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `datos_contacto`
--
ALTER TABLE `datos_contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  MODIFY `id_datos_personales` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `delegacion`
--
ALTER TABLE `delegacion`
  MODIFY `id_delegacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `descargas`
--
ALTER TABLE `descargas`
  MODIFY `$id_descarga` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `link_interes`
--
ALTER TABLE `link_interes`
  MODIFY `id_link` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `matriculacion`
--
ALTER TABLE `matriculacion`
  MODIFY `id_matriculacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  MODIFY `id_publicidad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `titulo`
--
ALTER TABLE `titulo`
  MODIFY `id_titulo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ultima_noticia`
--
ALTER TABLE `ultima_noticia`
  MODIFY `id_ultima_noticia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
