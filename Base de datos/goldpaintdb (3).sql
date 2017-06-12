-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2017 a las 20:06:18
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `goldpaintdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bancos`
--

CREATE TABLE `bancos` (
  `id` int(11) NOT NULL,
  `banc` varchar(65) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `bancos`
--

INSERT INTO `bancos` (`id`, `banc`, `created`, `modified`) VALUES
(1, 'banesco', '2017-05-30 06:21:33', '2017-05-30 06:21:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas`
--

CREATE TABLE `cajas` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `tgasto` int(11) NOT NULL,
  `tefectivo` int(11) NOT NULL,
  `tdebito` int(11) NOT NULL,
  `tcredito` int(11) NOT NULL,
  `ttotal` int(11) NOT NULL,
  `cantventa` int(11) NOT NULL,
  `treal` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cajas`
--

INSERT INTO `cajas` (`id`, `numero`, `tgasto`, `tefectivo`, `tdebito`, `tcredito`, `ttotal`, `cantventa`, `treal`, `created`, `modified`) VALUES
(1, 75000, 0, 75000, 0, 0, 75000, 1, 75000, '2017-05-30 06:20:49', '2017-05-30 06:20:49'),
(2, 75000, 0, 75000, 0, 0, 75000, 1, 75000, '2017-05-30 06:20:59', '2017-05-30 06:20:59'),
(3, 73000, 2000, 75000, 0, 0, 75000, 1, 73000, '2017-05-30 06:23:07', '2017-05-30 06:23:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `created`, `modified`) VALUES
(1, 'Pinturas', '2017-05-30 06:01:39', '2017-05-30 06:01:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cedula` int(12) NOT NULL,
  `direccion` varchar(500) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `full` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `cedula`, `direccion`, `created`, `modified`, `full`) VALUES
(1, 'fulano', 22545641, 'Sucasa', '2017-05-30 06:13:15', '2017-05-30 06:13:15', 'fulano dueño/a de la CI: 22545641');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consumibles`
--

CREATE TABLE `consumibles` (
  `id` int(11) NOT NULL,
  `consu` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `consumibles`
--

INSERT INTO `consumibles` (`id`, `consu`, `created`, `modified`) VALUES
(1, 'pan con mortadela', '2017-05-30 06:21:46', '2017-05-30 06:21:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombre`, `created`, `modified`) VALUES
(1, 'Distribuidora pinturita', '2017-05-30 06:04:50', '2017-05-30 06:04:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `vieja_cant` int(11) NOT NULL,
  `nueva_cant` int(11) NOT NULL,
  `en_inventario` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id`, `producto_id`, `vieja_cant`, `nueva_cant`, `en_inventario`, `created`, `modified`) VALUES
(1, 3, 50, 50, 100, '2017-05-30 06:44:43', '2017-05-30 06:44:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dir` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modifed` datetime NOT NULL,
  `material_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `ventatotale_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `precio_u` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `descuento` varchar(2) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `rest` int(11) DEFAULT NULL,
  `espera` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`id`, `ventatotale_id`, `producto_id`, `precio_u`, `cantidad`, `subtotal`, `descuento`, `valor`, `rest`, `espera`, `created`, `modified`) VALUES
(1, 1, 1, 15000, 5, 75000, 'no', NULL, 0, 0, '2017-05-30 06:13:51', '2017-05-30 06:13:51'),
(2, 2, 1, 15000, 5, 75000, 'no', NULL, 0, 0, '2017-05-30 06:38:27', '2017-05-30 06:38:27'),
(3, 3, 3, 30000, 2, 60000, 'no', NULL, 0, 1, '2017-05-30 22:03:43', '2017-05-30 22:03:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcapros`
--

CREATE TABLE `marcapros` (
  `id` int(11) NOT NULL,
  `marc` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tipopro_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marcapros`
--

INSERT INTO `marcapros` (`id`, `marc`, `tipopro_id`, `created`, `modified`) VALUES
(1, 'Montana', 2, '2017-05-30 06:03:17', '2017-05-30 06:03:17'),
(2, 'Pintotek', 2, '2017-05-30 06:03:17', '2017-05-30 06:03:17'),
(3, 'Otrapintura', 2, '2017-05-30 06:03:17', '2017-05-30 06:03:17'),
(4, 'tupintura', 2, '2017-05-30 06:05:41', '2017-05-30 06:05:41'),
(5, 'laotra', 2, '2017-05-30 06:05:41', '2017-05-30 06:05:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `full` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `marcapro_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `photo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dir` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `materials`
--

INSERT INTO `materials` (`id`, `codigo`, `modelo`, `full`, `marcapro_id`, `created`, `modified`, `photo`, `dir`) VALUES
(1, '0001', 'Un modelo de pintura xD', 'Un modelo de pintura xD del producto 0001', 1, '2017-05-30 06:04:12', '2017-05-30 06:04:12', NULL, NULL),
(2, '0002', 'pintoresco', 'pintoresco del producto 0002', 1, '2017-05-30 06:43:24', '2017-05-30 06:43:24', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perdidas`
--

CREATE TABLE `perdidas` (
  `id` int(11) NOT NULL,
  `gasto` int(11) NOT NULL,
  `consumible_id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `perdidas`
--

INSERT INTO `perdidas` (`id`, `gasto`, `consumible_id`, `nombre`, `created`, `modified`) VALUES
(1, 2000, 1, 'pan con mortadela', '2017-05-30 06:21:56', '2017-05-30 06:21:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `numero_serie` varchar(100) NOT NULL,
  `caracteristicas` varchar(300) NOT NULL,
  `existencia` int(11) NOT NULL,
  `pre_compra` int(11) NOT NULL,
  `iva` decimal(10,0) NOT NULL,
  `por_venta` decimal(10,0) NOT NULL,
  `valor_sugerido` decimal(10,0) NOT NULL,
  `precio` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `minimo` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `marca_id` int(11) NOT NULL,
  `full` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `material_id`, `numero_serie`, `caracteristicas`, `existencia`, `pre_compra`, `iva`, `por_venta`, `valor_sugerido`, `precio`, `created`, `minimo`, `modified`, `empresa_id`, `marca_id`, `full`) VALUES
(1, 1, '', 'Pintura blanca', 5, 10000, '12', '30', '14200', 15000, '2017-05-30 06:08:09', 5, '2017-05-30 06:08:09', 1, 0, 'Un modelo de pintura xD del producto 0001'),
(2, 1, '0111', 'holatillk', 15, 50000, '12', '30', '71000', 72000, '2017-05-30 06:36:11', 5, '2017-05-30 06:36:11', 1, 0, 'Un modelo de pintura xD del producto 0001'),
(3, 2, '2222', 'para pintar papel', 100, 20000, '12', '30', '28400', 30000, '2017-05-30 06:44:17', 5, '2017-05-30 06:44:17', 1, 0, 'pintoresco del producto 0002');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`id`, `nombre`, `categoria_id`, `created`, `modified`) VALUES
(1, 'Interior', 1, '2017-05-30 06:01:39', '2017-05-30 06:01:39'),
(2, 'Exterior', 1, '2017-05-30 06:01:39', '2017-05-30 06:01:39'),
(3, 'Industrial', 1, '2017-05-30 06:01:39', '2017-05-30 06:01:39'),
(4, 'Aceite', 1, '2017-05-30 06:01:39', '2017-05-30 06:01:39'),
(5, 'Carros', 1, '2017-05-30 06:01:39', '2017-05-30 06:01:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--

CREATE TABLE `telefonos` (
  `id` int(11) NOT NULL,
  `numero` varchar(15) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `otronumero` varchar(15) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `cliente_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `telefonos`
--

INSERT INTO `telefonos` (`id`, `numero`, `otronumero`, `cliente_id`, `created`, `modified`) VALUES
(1, '0414512562', '2154541005', 1, '2017-05-30 06:13:15', '2017-05-30 06:13:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopros`
--

CREATE TABLE `tipopros` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `subcategoria_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipopros`
--

INSERT INTO `tipopros` (`id`, `tipo`, `subcategoria_id`, `created`, `modified`) VALUES
(1, 'Caucho', 1, '2017-05-30 06:02:15', '2017-05-30 06:02:15'),
(2, 'Aceite', 1, '2017-05-30 06:02:15', '2017-05-30 06:02:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user','tecnico') NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `username`, `email`, `password`, `role`, `created`, `modified`) VALUES
(1, 'Emigdio', 'notrexxx', 'notrexx15@gmail.com', '$2y$10$zbWDJu51HtsO1Bfw5Eitou96dy1jJVLbzZ9oAfQstwo.xN13CcQei', 'admin', '2017-05-30 06:06:45', '2017-05-30 06:06:45'),
(2, 'prueba', 'prueba', 'prueba@prueba.com', '$2y$10$YfbGUmgWMS07lB0BfFYkVeJsmipyjvqZ9gl6/ZBGBiGnbcgGJz.Xm', 'admin', '2017-05-30 06:29:01', '2017-05-30 06:29:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vales`
--

CREATE TABLE `vales` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `precio_u` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `descuento` varchar(2) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `rest` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `producto_id`, `precio_u`, `cantidad`, `subtotal`, `descuento`, `valor`, `rest`, `created`, `modified`) VALUES
(8, 2, 72000, 1, 72000, 'no', NULL, 0, '2017-05-31 04:56:27', '2017-05-31 04:56:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventatotales`
--

CREATE TABLE `ventatotales` (
  `id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `tipopago` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `banco_id` int(11) DEFAULT NULL,
  `descuentot` varchar(2) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `valort` int(11) DEFAULT NULL,
  `restt` int(11) DEFAULT NULL,
  `espera` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ventatotales`
--

INSERT INTO `ventatotales` (`id`, `total`, `cliente_id`, `tipopago`, `banco_id`, `descuentot`, `valort`, `restt`, `espera`, `created`, `modified`) VALUES
(1, 75000, 1, 'efectivo', NULL, 'no', 0, 0, 0, '2017-05-30 06:13:51', '2017-05-30 06:13:51'),
(2, 75000, 1, 'efectivo', NULL, 'no', 0, 0, 0, '2017-05-30 06:38:27', '2017-05-30 06:38:27'),
(4, 45000, 1, 'efectivo', NULL, 'no', 0, 0, 0, '2017-05-31 04:53:29', '2017-05-31 04:53:29'),
(5, 45000, 1, 'efectivo', NULL, 'no', 0, 0, 0, '2017-05-31 04:53:59', '2017-05-31 04:53:59'),
(6, 45000, 1, 'efectivo', NULL, 'no', 0, 0, 0, '2017-05-31 04:54:19', '2017-05-31 04:54:19'),
(7, 45000, 1, 'efectivo', NULL, 'no', 0, 0, 0, '2017-05-31 04:55:26', '2017-05-31 04:55:26'),
(8, 102000, 1, 'efectivo', NULL, 'no', 0, 0, 0, '2017-05-31 04:56:32', '2017-05-31 04:56:32'),
(9, 87000, 1, 'efectivo', NULL, 'no', 0, 0, 0, '2017-05-31 05:01:17', '2017-05-31 05:01:17'),
(10, 72000, 1, 'efectivo', NULL, 'no', 0, 0, 0, '2017-05-31 05:01:33', '2017-05-31 05:01:33');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bancos`
--
ALTER TABLE `bancos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cajas`
--
ALTER TABLE `cajas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `consumibles`
--
ALTER TABLE `consumibles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcapros`
--
ALTER TABLE `marcapros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perdidas`
--
ALTER TABLE `perdidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipopros`
--
ALTER TABLE `tipopros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vales`
--
ALTER TABLE `vales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventatotales`
--
ALTER TABLE `ventatotales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bancos`
--
ALTER TABLE `bancos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cajas`
--
ALTER TABLE `cajas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `consumibles`
--
ALTER TABLE `consumibles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `marcapros`
--
ALTER TABLE `marcapros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `perdidas`
--
ALTER TABLE `perdidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipopros`
--
ALTER TABLE `tipopros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `vales`
--
ALTER TABLE `vales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `ventatotales`
--
ALTER TABLE `ventatotales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
