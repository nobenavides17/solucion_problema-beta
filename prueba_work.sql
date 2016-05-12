-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-05-2016 a las 06:52:22
-- Versión del servidor: 5.5.44-0+deb8u1
-- Versión de PHP: 5.6.13-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `prueba_work`
--
CREATE DATABASE IF NOT EXISTS `prueba_work` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `prueba_work`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE IF NOT EXISTS `acceso` (
`id_acceso` int(11) NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `username` varchar(110) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`id_acceso`, `id_sucursal`, `username`) VALUES
(1, 1, 'mau'),
(2, 1, 'asdf'),
(3, 1, 'mauricio'),
(4, 2, 'mau'),
(5, 1, 'prueba'),
(6, 1, 'super'),
(7, 1, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
`id_compra` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `precio_unitario` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `num_factura` varchar(100) NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `subtotal` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_compra`, `id_producto`, `id_proveedor`, `precio_unitario`, `cantidad`, `fecha`, `num_factura`, `id_sucursal`, `subtotal`, `total`) VALUES
(13, 2, 1, '0.56', 2, '12/05/2016', '456', 1, '1.12', ''),
(14, 1, 1, '100', 10, '12/05/2016', '45', 1, '1000', ''),
(15, 1, 3, '3', 4, '12/05/2016', '4545', 1, '12', ''),
(16, 3, 3, '1', 5, '12/05/2016', '4545', 1, '5', ''),
(17, 4, 1, '4', 3, '12/05/2016', '45677', 1, '12', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enlaces`
--

CREATE TABLE IF NOT EXISTS `enlaces` (
`id_enlace` int(11) NOT NULL,
  `nombre_enlace` varchar(100) NOT NULL,
  `href` varchar(300) NOT NULL,
  `id_modulo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enlaces`
--

INSERT INTO `enlaces` (`id_enlace`, `nombre_enlace`, `href`, `id_modulo`) VALUES
(5, 'Ver Usuarios', 'ver.usuarios.php', 3),
(6, 'Administrar Usuarios', 'listado.usuarios.php', 3),
(7, 'Ver Sucursales', 'ver.sucursales.php', 4),
(8, 'Administrar Sucursales', 'listado.sucursales.php', 4),
(9, 'Ver Productos', 'ver.productos.php', 5),
(10, 'Administrar Productos', 'listado.productos.php', 5),
(11, 'Ver Proveedores', 'ver.proveedores.php', 6),
(12, 'Administrar Proveedores', 'listado.proveedores.php', 6),
(13, 'Ver Productos en Inventario', 'ver.inventario.php', 7),
(14, 'Administrar Inventario', 'listado.inventario.php', 7),
(15, 'Añadir a Inventario', 'agregar.producto.inventario.php', 7),
(16, 'Agregar Usuario', 'usuarios.privilegios.php', 3),
(17, 'Agregar Producto', 'agregar.producto.php', 5),
(18, 'Hacer compra', 'agregar.compra.producto.php', 8),
(19, 'Ver compras', 'listado.compras.php', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
`id_inventario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio_venta` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_inventario`, `id_producto`, `stock`, `precio_venta`) VALUES
(11, 1, 14, '3.00'),
(12, 2, 2, '0.30'),
(13, 3, 5, '1.25'),
(14, 4, 3, '1.00'),
(15, 5, 0, '0.25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE IF NOT EXISTS `modulos` (
`id_modulo` int(11) NOT NULL,
  `nombre_modulo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id_modulo`, `nombre_modulo`) VALUES
(3, 'Usuarios'),
(4, 'Sucursales'),
(5, 'Productos'),
(6, 'Proveedores'),
(7, 'Inventario'),
(8, 'Compras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_enlaces`
--

CREATE TABLE IF NOT EXISTS `permisos_enlaces` (
`id_permiso_enlace` int(11) NOT NULL,
  `id_enlace` int(11) NOT NULL,
  `id_modulo` int(11) NOT NULL,
  `check_e` int(11) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos_enlaces`
--

INSERT INTO `permisos_enlaces` (`id_permiso_enlace`, `id_enlace`, `id_modulo`, `check_e`, `id_usuario`) VALUES
(42, 6, 3, 1, 5),
(43, 16, 3, 1, 5),
(44, 8, 4, 1, 5),
(45, 10, 5, 1, 5),
(46, 17, 5, 1, 5),
(47, 12, 6, 1, 5),
(48, 14, 7, 1, 5),
(49, 15, 7, 1, 5),
(50, 5, 3, 1, 6),
(51, 6, 3, 1, 6),
(52, 16, 3, 1, 6),
(53, 7, 4, 1, 6),
(54, 8, 4, 1, 6),
(55, 9, 5, 1, 6),
(56, 10, 5, 1, 6),
(57, 17, 5, 1, 6),
(58, 11, 6, 1, 6),
(59, 12, 6, 1, 6),
(60, 13, 7, 1, 6),
(61, 14, 7, 1, 6),
(62, 15, 7, 1, 6),
(63, 18, 8, 0, 5),
(64, 19, 8, 0, 5),
(65, 6, 3, 1, 7),
(66, 16, 3, 1, 7),
(67, 8, 4, 1, 7),
(68, 10, 5, 1, 7),
(69, 17, 5, 1, 7),
(70, 12, 6, 1, 7),
(71, 14, 7, 1, 7),
(72, 15, 7, 1, 7),
(73, 18, 8, 1, 7),
(74, 19, 8, 1, 7),
(75, 8, 4, 1, 8),
(76, 10, 5, 1, 8),
(77, 17, 5, 1, 8),
(78, 12, 6, 1, 8),
(79, 14, 7, 1, 8),
(80, 15, 7, 1, 8),
(81, 18, 8, 1, 8),
(82, 19, 8, 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_modulos`
--

CREATE TABLE IF NOT EXISTS `permisos_modulos` (
`id_permiso_modulo` int(11) NOT NULL,
  `id_modulo` int(11) NOT NULL,
  `check_m` int(11) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos_modulos`
--

INSERT INTO `permisos_modulos` (`id_permiso_modulo`, `id_modulo`, `check_m`, `id_usuario`) VALUES
(34, 3, 1, 4),
(35, 3, 1, 3),
(36, 3, 1, 5),
(37, 4, 1, 5),
(38, 5, 1, 5),
(39, 6, 1, 5),
(40, 7, 1, 5),
(41, 3, 1, 6),
(42, 4, 1, 6),
(43, 5, 1, 6),
(44, 6, 1, 6),
(45, 7, 1, 6),
(46, 8, 0, 5),
(47, 3, 1, 7),
(48, 4, 1, 7),
(49, 5, 1, 7),
(50, 6, 1, 7),
(51, 7, 1, 7),
(52, 8, 1, 7),
(53, 4, 1, 8),
(54, 5, 1, 8),
(55, 6, 1, 8),
(56, 7, 1, 8),
(57, 8, 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
`id_producto` int(11) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `presentacion` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `precio_1` varchar(100) NOT NULL,
  `precio_2` varchar(100) NOT NULL,
  `precio_3` varchar(100) NOT NULL,
  `precio_venta` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `codigo`, `descripcion`, `presentacion`, `marca`, `color`, `precio_1`, `precio_2`, `precio_3`, `precio_venta`, `estado`) VALUES
(1, '1234', 'CAFÃ‰ NESCAFE', 'CAJA 100 U', 'NESCAFE', '', '2.50', '3.00', 'precio3', 'precio3', 'Activo'),
(2, '123455', 'CAFÃ‰ NESCAFE', 'BOLSA 220 GR', 'NESCAFE', '', '0.25', '0.30', '', '0.25', 'Activo'),
(3, '3434', 'ACEITE ORISOL', 'BOLSA 750ML', 'ORISOL', '', '1.25', '1.50', '1.75', '1.50', 'Activo'),
(4, '3435', 'ACEITE ORISOL', 'BOLSA 350ML', 'ORISAL', '', '1.00', '1.25', '0.90', '1.00', 'Activo'),
(5, '34347', 'DETERGENTE XEDEX', 'BOLSA 220GR', 'XEDEX', '', '0.25', '0.30', '', '0.25', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
`id_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre_proveedor`, `direccion`, `telefono`, `email`) VALUES
(1, 'GUMARSAL', 'San Miguel', '2323-2323', 'emial@gmail.com'),
(2, 'qewrqewr', 'qewr', 'qerqewr', 'sdfgsfdg@adf.com'),
(3, 'INVERTON', 'SAN MIGUEL', '7878-8989', 'INVERTON@GMIAL.COM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE IF NOT EXISTS `sucursales` (
`id_sucursal` int(11) NOT NULL,
  `nombre_sucursal` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`id_sucursal`, `nombre_sucursal`, `direccion`, `telefono`) VALUES
(1, 'La Poderosa', 'alameda', '12121212'),
(2, 'La Americana', 'alameda', '12121212'),
(3, 'hello', 'hola', '75274490');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id_usuario` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `username`, `nombre`, `password`) VALUES
(3, 'mau', 'mauricio martinez', '12345'),
(4, 'asdf', 'nombre modificado', 'adf'),
(5, 'mauricio', 'Mauricio Rigoberto MartÃ­nez', '12345'),
(6, 'prueba', 'Prueba maurcio', '12345'),
(7, 'super', 'super', 'super'),
(8, 'admin', 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
 ADD PRIMARY KEY (`id_acceso`), ADD KEY `id_sucursal` (`id_sucursal`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
 ADD PRIMARY KEY (`id_compra`), ADD KEY `id_producto` (`id_producto`), ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `enlaces`
--
ALTER TABLE `enlaces`
 ADD PRIMARY KEY (`id_enlace`), ADD KEY `id_modulo` (`id_modulo`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
 ADD PRIMARY KEY (`id_inventario`), ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
 ADD PRIMARY KEY (`id_modulo`);

--
-- Indices de la tabla `permisos_enlaces`
--
ALTER TABLE `permisos_enlaces`
 ADD PRIMARY KEY (`id_permiso_enlace`), ADD KEY `id_modulo` (`id_modulo`), ADD KEY `id_usuario` (`id_usuario`), ADD KEY `id_enlace` (`id_enlace`);

--
-- Indices de la tabla `permisos_modulos`
--
ALTER TABLE `permisos_modulos`
 ADD PRIMARY KEY (`id_permiso_modulo`), ADD KEY `id_modulo` (`id_modulo`), ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
 ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
 ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
 ADD PRIMARY KEY (`id_sucursal`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id_usuario`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acceso`
--
ALTER TABLE `acceso`
MODIFY `id_acceso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `enlaces`
--
ALTER TABLE `enlaces`
MODIFY `id_enlace` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
MODIFY `id_inventario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
MODIFY `id_modulo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `permisos_enlaces`
--
ALTER TABLE `permisos_enlaces`
MODIFY `id_permiso_enlace` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT de la tabla `permisos_modulos`
--
ALTER TABLE `permisos_modulos`
MODIFY `id_permiso_modulo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
MODIFY `id_sucursal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acceso`
--
ALTER TABLE `acceso`
ADD CONSTRAINT `acceso_ibfk_1` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursales` (`id_sucursal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `compras_ibfk_3` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `enlaces`
--
ALTER TABLE `enlaces`
ADD CONSTRAINT `enlaces_ibfk_1` FOREIGN KEY (`id_modulo`) REFERENCES `modulos` (`id_modulo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `permisos_enlaces`
--
ALTER TABLE `permisos_enlaces`
ADD CONSTRAINT `permisos_enlaces_ibfk_1` FOREIGN KEY (`id_modulo`) REFERENCES `modulos` (`id_modulo`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `permisos_enlaces_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `permisos_enlaces_ibfk_3` FOREIGN KEY (`id_enlace`) REFERENCES `enlaces` (`id_enlace`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `permisos_modulos`
--
ALTER TABLE `permisos_modulos`
ADD CONSTRAINT `permisos_modulos_ibfk_1` FOREIGN KEY (`id_modulo`) REFERENCES `modulos` (`id_modulo`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `permisos_modulos_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
