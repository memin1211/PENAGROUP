-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-10-2018 a las 18:19:52
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id5392174_penagroup_erpdev`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_bitacora`
--

CREATE TABLE `erp_bitacora` (
  `Id` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Hora_Registro` time NOT NULL,
  `Fecha_Registro` date NOT NULL,
  `Ip_Ingreso` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_bodega`
--

CREATE TABLE `erp_bodega` (
  `Id` int(11) NOT NULL,
  `Direccion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono_Fijo` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `Id_Sucursal` int(11) NOT NULL,
  `Fecha_Apertura` date NOT NULL,
  `Id_Entidad` int(11) NOT NULL,
  `Id_Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_categoria`
--

CREATE TABLE `erp_categoria` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(11) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_categoria`
--

INSERT INTO `erp_categoria` (`Id`, `Nombre`) VALUES
(1, 'Venta Libre'),
(2, 'Ético');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_cliente`
--

CREATE TABLE `erp_cliente` (
  `Id` int(11) NOT NULL,
  `Primer_Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Segundo_Nombre` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Tercer_Nombre` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Primer_Apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Segundo_Apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Id_Estado_Civil` int(11) NOT NULL,
  `Genero` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Empresa` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Giro` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Nit` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Nrc` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Id_Tipo_Cliente` int(11) NOT NULL,
  `Id_Cuenta_Cliente` int(11) NOT NULL,
  `Id_Entidad` int(11) NOT NULL,
  `Id_Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_cobro`
--

CREATE TABLE `erp_cobro` (
  `Id` int(11) NOT NULL,
  `Correlativo_Fisico` int(11) NOT NULL,
  `Fecha_Cobro` date NOT NULL,
  `Id_Receptor` int(11) NOT NULL,
  `Id_Entidad` int(11) NOT NULL,
  `Id_Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_compra`
--

CREATE TABLE `erp_compra` (
  `Id` int(11) NOT NULL,
  `Id_Orden_Compra` int(11) NOT NULL,
  `Id_Proveedor` int(11) NOT NULL,
  `Id_Tipo_Movimiento` int(11) NOT NULL,
  `Correlativo_Fisico` int(11) NOT NULL,
  `Fecha_Ingreso` date NOT NULL,
  `Id_Entidad` int(11) NOT NULL,
  `Id_Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_condicion_pago`
--

CREATE TABLE `erp_condicion_pago` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Dias_Credito` int(2) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_condicion_pago`
--

INSERT INTO `erp_condicion_pago` (`Id`, `Nombre`, `Dias_Credito`, `Descripcion`) VALUES
(1, 'Contado', 0, 'No Contiene Dias de Crédito'),
(2, 'Crédito 7 días', 7, 'Crédito a 7 días de plazo como máximo, sino caera en mora el Cliente'),
(3, 'Crédito 15 días', 15, 'Crédito a 15 días de plazo como máximo, sino caera en mora el Cliente'),
(4, 'Crédito 30 días', 30, 'Crédito a 30 días de plazo como máximo, sino caera en mora el Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_cuenta_cliente`
--

CREATE TABLE `erp_cuenta_cliente` (
  `Id` int(11) NOT NULL,
  `Saldo_Pendiente` decimal(10,2) NOT NULL,
  `Fecha_Apertura` date NOT NULL,
  `Codigo_Cuenta` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_cuenta_proveedor`
--

CREATE TABLE `erp_cuenta_proveedor` (
  `Id` int(11) NOT NULL,
  `Saldo_Pendiente` decimal(10,2) NOT NULL,
  `Fecha_Apertura` date NOT NULL,
  `Codigo_Cuenta` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_cuenta_proveedor`
--

INSERT INTO `erp_cuenta_proveedor` (`Id`, `Saldo_Pendiente`, `Fecha_Apertura`, `Codigo_Cuenta`) VALUES
(1, 0.00, '2018-07-01', 'P000000001'),
(2, 0.00, '2018-07-01', 'P000000002'),
(3, 0.00, '2018-07-01', 'P000000003'),
(4, 0.00, '2018-07-01', 'P000000004'),
(5, 0.00, '2018-07-01', 'P000000005'),
(6, 0.00, '2018-07-01', 'P000000006'),
(7, 0.00, '2018-07-01', 'P000000007'),
(8, 0.00, '2018-07-01', 'D000000001'),
(9, 0.00, '2018-07-01', 'M000000008'),
(10, 0.00, '2018-07-01', 'R000000009'),
(11, 0.00, '1970-01-01', 'P000000010');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_departamento`
--

CREATE TABLE `erp_departamento` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Iso_Codigo` varchar(5) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_departamento`
--

INSERT INTO `erp_departamento` (`Id`, `Nombre`, `Iso_Codigo`) VALUES
(1, 'AHUACHAPÁN', 'SV-AH'),
(2, 'CABAÑAS', 'SV-CA'),
(3, 'CHALATENANGO', 'SV-CH'),
(4, 'CUSCATLÁN', 'SV-CU'),
(5, 'LA LIBERTAD', 'SV-LI'),
(6, 'MORAZÁN', 'SV-MO'),
(7, 'LA PAZ', 'SV-PA'),
(8, 'SANTA ANA', 'SV-SA'),
(9, 'SAN MIGUEL', 'SV-SM'),
(10, 'SONSONANTE', 'SV-SO'),
(11, 'SAN SALVADOR', 'SV-SS'),
(12, 'SAN VICENTE', 'SV-SV'),
(13, 'LA UNIÓN', 'SV-UN'),
(14, 'USULUTAN', 'SV-US');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_detalle_cobro`
--

CREATE TABLE `erp_detalle_cobro` (
  `Id` int(11) NOT NULL,
  `Id_Cobro` int(11) NOT NULL,
  `Id_Venta` int(11) NOT NULL,
  `Monto_Cobro` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_detalle_compra`
--

CREATE TABLE `erp_detalle_compra` (
  `Id` int(11) NOT NULL,
  `Id_Compra` int(11) NOT NULL,
  `Id_Kardex` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_detalle_movimiento_producto`
--

CREATE TABLE `erp_detalle_movimiento_producto` (
  `Id` int(11) NOT NULL,
  `Id_Movimiento_Producto` int(11) NOT NULL,
  `Id_Kardex` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_detalle_orden_venta`
--

CREATE TABLE `erp_detalle_orden_venta` (
  `Id` int(11) NOT NULL,
  `Id_Orden_Venta` int(11) NOT NULL,
  `Id_Producto` int(11) NOT NULL,
  `Id_Detalle_Precio` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_detalle_precio`
--

CREATE TABLE `erp_detalle_precio` (
  `Id` int(11) NOT NULL,
  `Id_Sucursal` int(11) NOT NULL,
  `Id_Producto` int(11) NOT NULL,
  `Precio_Unidad` decimal(10,2) NOT NULL,
  `Descuento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_detalle_precio`
--

INSERT INTO `erp_detalle_precio` (`Id`, `Id_Sucursal`, `Id_Producto`, `Precio_Unidad`, `Descuento`) VALUES
(1, 1, 1, 0.25, 0),
(2, 2, 1, 0.15, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_detalle_solicitud_bodega`
--

CREATE TABLE `erp_detalle_solicitud_bodega` (
  `Id` int(11) NOT NULL,
  `Id_Solicitud_Bodega` int(11) NOT NULL,
  `Id_Producto` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_detalle_venta`
--

CREATE TABLE `erp_detalle_venta` (
  `Id` int(11) NOT NULL,
  `Id_Venta` int(11) NOT NULL,
  `Id_Kardex` int(11) NOT NULL,
  `Id_Detalle_Precio` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Descuento_Extra` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_empleado`
--

CREATE TABLE `erp_empleado` (
  `Id` int(11) NOT NULL,
  `Primer_Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Segundo_Nombre` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Tercer_Nombre` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Primer_Apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Segundo_Apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Id_Estado_Civil` int(11) NOT NULL,
  `Genero` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono_Fijo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono_Celular` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `Nit` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Dui` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Id_Entidad` int(11) NOT NULL,
  `Id_Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_empleado`
--

INSERT INTO `erp_empleado` (`Id`, `Primer_Nombre`, `Segundo_Nombre`, `Tercer_Nombre`, `Primer_Apellido`, `Segundo_Apellido`, `Fecha_Nacimiento`, `Id_Estado_Civil`, `Genero`, `Telefono_Fijo`, `Telefono_Celular`, `Direccion`, `Nit`, `Dui`, `Id_Entidad`, `Id_Estado`) VALUES
(1, 'Miguel', 'Alejandro', '', 'Peña', 'Alvarenga', '1994-11-13', 1, 'Masculino', '', '7598-3352', 'Col. El Paraiso, 8Va Calle Ort. S.S', '1234-123456-123-4', '05073671-6', 1, 1),
(2, 'Liliana', 'Iveth', '', 'Alfaro', 'De Peña', '0000-00-00', 3, 'Femenino', '2222-2222', '7575-7575', 'Residencial San Pedro, Calle Motocros, San Salvador', '1234-123456-123-0', '12345678-9', 1, 1),
(3, 'Equipo', 'de', 'Desarrollo', '- Scrum', 'Team', '1985-11-18', 1, 'Masculino', '0000-0000', '0000-0000', 'San Salvador', '0000-000000-000-0', '00000000-0', 1, 1),
(4, 'Susan', 'Lissette', '', 'Cano', '', '1992-11-03', 2, 'Femenino', '0000-0000', '0000-0000', 'Santa Tecla', '1234-456789-321-5', '99887765-1', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_entidad`
--

CREATE TABLE `erp_entidad` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_entidad`
--

INSERT INTO `erp_entidad` (`Id`, `Nombre`, `Descripcion`) VALUES
(1, 'Empleado', ''),
(2, 'Cliente', ''),
(3, 'Proveedor', ''),
(4, 'Laboratorio', ''),
(5, 'Bodega', ''),
(6, 'Cobro', ''),
(7, 'Compra', ''),
(8, 'Menu', ''),
(9, 'Movimiento', ''),
(10, 'Orden', ''),
(11, 'Producto', ''),
(12, 'Solicitud', ''),
(13, 'Sucursal', ''),
(14, 'Usuario', ''),
(15, 'Venta', ''),
(16, 'Modulo', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_estado`
--

CREATE TABLE `erp_estado` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_estado`
--

INSERT INTO `erp_estado` (`Id`, `Nombre`, `Descripcion`) VALUES
(1, 'Activo', 'Estado Inicial para la mayoria de Registros'),
(2, 'Inactivo', 'Indica que un Registro no esta disponible o ya no se utiliza'),
(3, 'Suspendido', ''),
(4, 'Creado', ''),
(5, 'Eliminado', ''),
(6, 'Bloqueado', ''),
(7, 'Mora', ''),
(8, 'Vigente', ''),
(9, 'Pendiente', ''),
(10, 'Histórico', ''),
(11, 'Aperturada', ''),
(12, 'Cerrada', ''),
(13, 'Cancelado', ''),
(14, 'Abono', ''),
(15, 'Pendiente de Cobro', ''),
(16, 'Plan de Pago', ''),
(17, 'Pendiente de Pago', ''),
(18, 'Autorizado', ''),
(19, 'Aprobado', ''),
(20, 'Pendiente Aprobación', ''),
(21, 'Rechazado', ''),
(22, 'Impreso', ''),
(23, 'Reimpreso', ''),
(24, 'Facturada', ''),
(25, 'Anulada', ''),
(26, 'Revisado', ''),
(27, 'Pendiente de Revisión', ''),
(28, 'Devolución', ''),
(29, 'Pendiente de Recibir', 'Valido para Compras a Proveedores o Solicitud a Bodega'),
(30, 'Vencido', 'Válido para Producto'),
(31, 'Agotado', 'Válido para Producto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_estado_civil`
--

CREATE TABLE `erp_estado_civil` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_estado_civil`
--

INSERT INTO `erp_estado_civil` (`Id`, `Nombre`, `Descripcion`) VALUES
(1, 'Soltero/a', 'Estado Civil para Personas que no están unidos en matrimonio a otra persona'),
(2, 'Comprometido/a', 'Estado Civil para Personas que no están unidos en matrimonio a otra persona pero que están en proces'),
(3, 'Casado/a', 'Estado Civil para Personas que sí están unidos en matrimonio a otra persona'),
(4, 'Divorsiado/a', 'Estado Civil para Personas que no están unidos en matrimonio a otra persona pero que lo estuvierón'),
(5, 'Viudo/a', 'Estado Civil para Personas que estuvierón unidos en matrimonio a otra persona pero que su conyugue f');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_forma_pago`
--

CREATE TABLE `erp_forma_pago` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_forma_pago`
--

INSERT INTO `erp_forma_pago` (`Id`, `Nombre`, `Descripcion`) VALUES
(1, 'Efectivo', 'Metodo de Pago para Ventas en Mostrador o en Línea'),
(2, 'Cheque', 'Metodo de Pago para Ventas en Mostrador o en Línea'),
(3, 'Transferencia', 'Metodo de Pago para Ventas en Línea');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_kardex`
--

CREATE TABLE `erp_kardex` (
  `Id` int(11) NOT NULL,
  `Id_Sucursal` int(11) DEFAULT NULL,
  `Id_Bodega` int(11) DEFAULT NULL,
  `Id_Producto` int(11) NOT NULL,
  `Id_Tipo_Movimiento` int(11) NOT NULL,
  `Existencia` int(11) NOT NULL,
  `Stock_Minimo` int(11) NOT NULL,
  `Costo_Unidad` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_kardex`
--

INSERT INTO `erp_kardex` (`Id`, `Id_Sucursal`, `Id_Bodega`, `Id_Producto`, `Id_Tipo_Movimiento`, `Existencia`, `Stock_Minimo`, `Costo_Unidad`) VALUES
(1, 1, NULL, 1, 1, 100, 10, 0.03),
(2, 2, NULL, 1, 1, 150, 15, 0.03),
(3, 1, NULL, 2, 1, 200, 20, 0.10),
(4, 2, NULL, 2, 1, 185, 15, 0.10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_laboratorio`
--

CREATE TABLE `erp_laboratorio` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(75) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre_Legal` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Abreviatura` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Id_Entidad` int(11) NOT NULL,
  `Id_Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_laboratorio`
--

INSERT INTO `erp_laboratorio` (`Id`, `Nombre`, `Nombre_Legal`, `Abreviatura`, `Id_Entidad`, `Id_Estado`) VALUES
(1, 'Laboratorio Farmacéutico Rowalt Pharmaceutical', '', 'Rowalt', 4, 1),
(2, 'Laboratorio Farmacéutico Butterpharma', '', 'Butterphar', 4, 1),
(3, 'Farmacéutica Rodim S.A de C.V', '', 'Rodim', 4, 1),
(4, 'Laboratorio Suizos S.A de C.V', '', 'Suizos', 4, 1),
(5, 'Medical Pharma S.A de C.V', '', 'Tecnofarma', 4, 1),
(6, 'Ancalmo S.A de C.V', '', 'Ancalmo', 4, 1),
(7, 'Laboratorios Generix S.A de C.V', '', 'Generix', 4, 1),
(8, 'Laboratorios Combisa S.A de C.V', '', 'Combisa', 4, 1),
(9, 'Laboratorios Ferson S.A de C.V', '', 'Ferson', 4, 1),
(10, 'Laboratorio Healthco S.A de C.V', '', 'Healthco', 4, 1),
(11, 'Laboratorios Medikem S.A de C.V', '', 'Medikem', 4, 1),
(12, 'Laboratorio Farmacéutico Pharmator', '', 'Pharmator', 4, 1),
(13, 'Laboratorios Farmacéuticos Razel', '', 'Razel', 4, 1),
(14, 'Laboratorio Soperquimia', '', 'Soperquimi', 4, 1),
(15, 'Laboratorios SYM, S.A de C.V', '', 'SYM', 4, 1),
(16, 'Laboratorio Farmacéutico Farcel', '', 'Fardel', 4, 1),
(17, 'Laboratorio Farmacéutico Solaris S.A de C.V', '', 'Solaris', 4, 1),
(18, 'Laboratorio Pharmedic', '', 'Pharmedic', 4, 1),
(19, 'Laboratorio Farmacéutico Bayer', '', 'Bayer', 4, 1),
(20, 'Laboratorios Falmar', '', 'Falmar', 4, 1),
(21, 'Sociedad Corporación Bonima S.A de C.V', '', 'Bonima', 4, 1),
(22, 'Ovidio J. Vides, S.A de C.V', '', 'Vides', 4, 1),
(23, 'Laboratorio Marceli', '', 'Marceli', 4, 1),
(24, 'Laboratorios Carosa S.A de C.V', '', 'Carosa', 4, 1),
(25, 'Sociedad Laboratorios Farma S.A de C.V', '', 'Lafar', 4, 1),
(26, 'Laboratorio Farmacéutico Enmilen', '', 'Enmilen', 4, 1),
(27, 'Laboratorios Cofasa', '', 'Cofasa', 4, 1),
(28, 'Laboratorio Farmacéutico Meditech', '', 'Meditech', 4, 1),
(29, 'Laboratorio Farmacéutico López', '', 'López', 4, 1),
(30, 'Laboratorio Farmacéutico Paill', '', 'Paill', 4, 1),
(31, 'Laboratorios Biogalenic, S.A de C.V ', '', 'Biogalenic', 4, 1),
(32, 'Gamma Laboratories, S.A de C.V', '', 'Gamma', 4, 1),
(33, 'Laboratorios Arsal S.A de C.V', '', 'Arsal', 4, 1),
(34, 'Laboratorios Teramed', '', 'Teramed', 4, 1),
(35, 'Laboratorios Vijosa S.A de C.V', '', 'Vijosa', 4, 1),
(36, 'Laboratorios Biokemical', 'Bk', 'Biokemical', 4, 2),
(40, 'Laboratorio Modificado Exitosamente', 'Laboratorio Modificado Exitosamente S.a De C.v', 'good', 4, 2),
(41, 'Laboratorios MK', 'Laboratorios MK', 'MK', 4, 1),
(42, 'Laboratorio de Prueba', 'Laboratorio de Prueba', 'Prueba', 4, 1),
(43, 'Laboratorio De Prueba Dos', 'Laboratorio De Prueba Dos S.a De C.v', 'Prueba Dos', 4, 2),
(44, 'Laboratorio Prueba', 'prueba', 'prueba', 4, 1),
(45, 'Laboratorio De Prueba Tres', 'Laboratorio De Prueba Tres S.a De C.v', 'PruebaTres', 4, 2),
(46, 'Laboratorio De Prueba Cuatro', 'Laboratorio De Prueba Cuatro S.a De C.v', 'Test', 4, 2),
(47, 'Laboratorio De Prueba Quinto', 'Laboratorio De Prueba Quinto S.a De C.v', 'LABPQ', 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_lote`
--

CREATE TABLE `erp_lote` (
  `Id` int(11) NOT NULL,
  `Lote` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Ingreso` date NOT NULL,
  `Fecha_Vencimiento` date NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_lote`
--

INSERT INTO `erp_lote` (`Id`, `Lote`, `Fecha_Ingreso`, `Fecha_Vencimiento`, `Descripcion`) VALUES
(1, '7225435200D', '2018-06-14', '2020-07-14', ''),
(2, '1245789865127', '2018-06-14', '2022-06-14', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_lote_kardex`
--

CREATE TABLE `erp_lote_kardex` (
  `Id` int(11) NOT NULL,
  `Id_Kardex` int(11) NOT NULL,
  `Id_Lote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_lote_kardex`
--

INSERT INTO `erp_lote_kardex` (`Id`, `Id_Kardex`, `Id_Lote`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2),
(4, 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_menu`
--

CREATE TABLE `erp_menu` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Url` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Id_Menu_Padre` int(11) NOT NULL,
  `Id_Modulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_menu`
--

INSERT INTO `erp_menu` (`Id`, `Nombre`, `Url`, `Id_Menu_Padre`, `Id_Modulo`) VALUES
(1, 'GESTIONAR USUARIOS', '', 1, 1),
(2, 'Agregar', 'NuevoUsuario.php', 1, 1),
(3, 'Modificar', 'ModificarUsuario.php', 1, 1),
(4, 'Ver', 'VerUsuario.php', 1, 1),
(5, 'OTROS', '', 5, 1),
(6, 'Bitácora', 'VerBitacora.php', 5, 1),
(7, 'Reportes', 'PanelReporte.php', 5, 1),
(8, 'GESTIONAR COMPRAS', '', 8, 1),
(9, 'Generar', 'NuevoCompra.php', 8, 1),
(10, 'Modificar', 'ModificarCompra.php', 8, 1),
(11, 'Ver', 'VerCompra.php', 8, 1),
(12, 'GESTIONAR CLIENTES', '', 12, 1),
(13, 'Agregar', 'NuevoCliente.php', 12, 1),
(14, 'Modificar', 'ModificarCliente.php', 12, 1),
(15, 'Ver', 'VerCliente.php', 12, 1),
(16, 'GESTIONAR SUCURSALES', '', 16, 1),
(17, 'Agregar', 'NuevoSucursal.php', 16, 1),
(18, 'Modificar', 'ModificarSucursal.php', 16, 1),
(19, 'Ver', 'VerSucursal.php', 16, 1),
(20, 'GESTIONAR EMPLEADOS', '', 20, 1),
(21, 'Agregar', 'NuevoEmpleado.php', 20, 1),
(22, 'Modificar', 'ModificarEmpleado.php', 20, 1),
(23, 'Ver', 'VerEmpleado.php', 20, 1),
(24, 'GESTIONAR VENTAS', '', 24, 2),
(25, 'Facturar', 'GenerarVenta.php', 24, 2),
(26, 'Modificar', 'ModificarVenta.php', 24, 2),
(27, 'Ver', 'VerVenta.php', 24, 2),
(28, 'GESTIONAR COBROS', '', 28, 2),
(29, 'Generar', 'GenerarCobro.php', 28, 2),
(30, 'Modificar', 'ModificarCobro.php', 28, 2),
(31, 'Ver', 'VerCobro.php', 28, 2),
(32, 'GESTIONAR PEDIDOS', '', 32, 2),
(33, 'Modificar', 'ModificarPedido.php', 32, 2),
(34, 'Ver', 'VerPedido.php', 32, 2),
(35, 'GESTIONAR PRODUCTOS', '', 35, 3),
(36, 'Agregar', 'NuevoProducto.php', 35, 3),
(37, 'Modificar', 'ModificarProducto.php', 35, 3),
(38, 'Ver', 'VerProducto.php', 35, 3),
(39, 'ORDENES DE COMPRA', '', 39, 3),
(40, 'Agregar', 'NuevoOrdenCompra.php', 39, 3),
(41, 'Modificar', 'ModificarOrdenCompra.php', 39, 3),
(42, 'Ver', 'VerOrdenCompra.php', 39, 3),
(43, 'BODEGA', '', 43, 3),
(44, 'Agregar Producto', 'NuevoProductoBodega.php', 43, 3),
(45, 'Modificar Producto', 'ModificarProductoBodega.php', 43, 3),
(46, 'Ver Productos', 'VerProductoBodega.php', 43, 3),
(47, 'Ver Orden de Compra', 'VerOrdenCompraBodega.php', 43, 3),
(48, 'Despachar Ordenes', 'DespacharOrdenBodega.php', 43, 3),
(49, 'Reportes', 'PanelReporteBodega.php', 43, 3),
(50, 'GESTIONAR LABORATORIOS', '', 50, 3),
(51, 'Agregar', 'NuevoLaboratorio.php', 50, 3),
(52, 'Modificar', 'ModificarLaboratorio.php', 50, 3),
(53, 'Ver', 'VerLaboratorio.php', 50, 3),
(54, 'GESTIONAR PROVEEDORES', '', 54, 3),
(55, 'Agregar', 'NuevoProveedor.php', 54, 3),
(56, 'Modificar', 'ModificarProveedor.php', 54, 3),
(57, 'Ver', 'VerProveedor.php', 54, 3),
(58, 'GESTIONAR BANCOS', '', 58, 4),
(59, 'Agregar', 'NuevoBanco.php', 58, 4),
(60, 'Modificar', 'ModificarBanco.php', 58, 4),
(61, 'Ver', 'VerBanco.php', 58, 4),
(62, 'GESTIONAR CUENTAS', '', 62, 4),
(63, 'Agregar', 'NuevoCuenta.php', 62, 4),
(64, 'Modificar', 'ModificarCuenta.php', 62, 4),
(65, 'Ver', 'VerCuenta.php', 62, 4),
(66, 'GESTIONAR CHEQUERA', '', 66, 4),
(67, 'Agregar', 'NuevoChequera.php', 66, 4),
(68, 'Modificar', 'ModificarChequera.php', 66, 4),
(69, 'Ver', 'VerChequera.php', 66, 4),
(70, 'GESTIONAR CHEQUES', '', 70, 4),
(71, 'Emitir', 'NuevoCheque.php', 70, 4),
(72, 'Modificar', 'ModificarCheque.php', 70, 4),
(73, 'Ver', 'VerCheque.php', 70, 4),
(74, 'ORDENES DE COMPRA', '', 74, 4),
(75, 'Modificar', 'ModificarOrdenCompraC.php', 74, 4),
(76, 'Ver', 'VerOrdenCompraC.php', 74, 4),
(77, 'OTROS', '', 77, 4),
(78, 'Reportes', 'PanelReporteC.php', 77, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_menu_usuario`
--

CREATE TABLE `erp_menu_usuario` (
  `Id` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Id_Menu` int(11) NOT NULL,
  `Id_Entidad` int(11) NOT NULL,
  `Id_Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `erp_menu_usuario`
--

INSERT INTO `erp_menu_usuario` (`Id`, `Id_Usuario`, `Id_Menu`, `Id_Entidad`, `Id_Estado`) VALUES
(1, 1, 1, 8, 1),
(2, 1, 2, 8, 1),
(3, 1, 3, 8, 1),
(4, 1, 4, 8, 1),
(5, 1, 5, 8, 1),
(6, 1, 6, 8, 1),
(7, 1, 7, 8, 1),
(8, 1, 8, 8, 1),
(9, 1, 9, 8, 1),
(10, 1, 10, 8, 1),
(11, 1, 11, 8, 1),
(12, 1, 12, 8, 1),
(13, 1, 13, 8, 1),
(14, 1, 14, 8, 1),
(15, 1, 15, 8, 1),
(16, 1, 16, 8, 1),
(17, 1, 17, 8, 1),
(18, 1, 18, 8, 1),
(19, 1, 19, 8, 1),
(20, 1, 20, 8, 1),
(21, 1, 21, 8, 1),
(22, 1, 22, 8, 1),
(23, 1, 23, 8, 1),
(24, 1, 24, 8, 1),
(25, 1, 25, 8, 1),
(26, 1, 26, 8, 1),
(27, 1, 27, 8, 1),
(28, 1, 28, 8, 1),
(29, 1, 29, 8, 1),
(30, 1, 30, 8, 1),
(31, 1, 31, 8, 1),
(32, 1, 32, 8, 1),
(33, 1, 33, 8, 1),
(34, 1, 34, 8, 1),
(35, 1, 35, 8, 1),
(36, 1, 36, 8, 1),
(37, 1, 37, 8, 1),
(38, 1, 38, 8, 1),
(39, 1, 39, 8, 1),
(40, 1, 40, 8, 1),
(41, 1, 11, 8, 2),
(42, 1, 42, 8, 1),
(43, 1, 43, 8, 1),
(44, 1, 44, 8, 1),
(45, 1, 45, 8, 1),
(46, 1, 46, 8, 1),
(47, 1, 47, 8, 1),
(48, 1, 48, 8, 1),
(49, 1, 49, 8, 1),
(50, 1, 50, 8, 1),
(51, 1, 51, 8, 1),
(52, 1, 52, 8, 1),
(53, 1, 53, 8, 1),
(54, 1, 54, 8, 1),
(55, 1, 55, 8, 1),
(56, 1, 56, 8, 1),
(57, 1, 57, 8, 1),
(58, 1, 58, 8, 1),
(59, 1, 59, 8, 1),
(60, 1, 60, 8, 1),
(61, 1, 61, 8, 1),
(62, 1, 62, 8, 1),
(63, 1, 63, 8, 1),
(64, 1, 64, 8, 1),
(65, 1, 65, 8, 1),
(66, 1, 66, 8, 1),
(67, 1, 67, 8, 1),
(68, 1, 68, 8, 1),
(69, 1, 69, 8, 1),
(70, 1, 70, 8, 1),
(71, 1, 71, 8, 1),
(72, 1, 72, 8, 1),
(73, 1, 73, 8, 1),
(74, 1, 74, 8, 1),
(75, 1, 75, 8, 1),
(76, 1, 76, 8, 1),
(77, 1, 77, 8, 1),
(78, 1, 78, 8, 1),
(79, 3, 1, 8, 1),
(80, 3, 2, 8, 1),
(81, 3, 3, 8, 1),
(82, 3, 4, 8, 1),
(83, 3, 5, 8, 1),
(84, 3, 6, 8, 1),
(85, 3, 7, 8, 1),
(86, 3, 8, 8, 1),
(87, 3, 9, 8, 1),
(88, 3, 10, 8, 1),
(89, 3, 11, 8, 1),
(90, 3, 12, 8, 1),
(91, 3, 13, 8, 1),
(92, 3, 14, 8, 1),
(93, 3, 15, 8, 1),
(94, 3, 16, 8, 1),
(95, 3, 17, 8, 1),
(96, 3, 18, 8, 1),
(97, 3, 19, 8, 1),
(98, 3, 20, 8, 1),
(99, 3, 21, 8, 1),
(100, 3, 22, 8, 1),
(101, 3, 23, 8, 1),
(102, 3, 24, 8, 1),
(103, 3, 25, 8, 1),
(104, 3, 26, 8, 1),
(105, 3, 27, 8, 1),
(106, 3, 28, 8, 1),
(107, 3, 29, 8, 1),
(108, 3, 30, 8, 1),
(109, 3, 31, 8, 1),
(110, 3, 32, 8, 1),
(111, 3, 33, 8, 1),
(112, 3, 34, 8, 1),
(113, 3, 35, 8, 1),
(114, 3, 36, 8, 1),
(115, 3, 37, 8, 1),
(116, 3, 38, 8, 1),
(117, 3, 39, 8, 1),
(118, 3, 40, 8, 1),
(119, 3, 11, 8, 2),
(120, 3, 42, 8, 1),
(121, 3, 43, 8, 1),
(122, 3, 44, 8, 1),
(123, 3, 45, 8, 1),
(124, 3, 46, 8, 1),
(125, 3, 47, 8, 1),
(126, 3, 48, 8, 1),
(127, 3, 49, 8, 1),
(128, 3, 50, 8, 1),
(129, 3, 51, 8, 1),
(130, 3, 52, 8, 1),
(131, 3, 53, 8, 1),
(132, 3, 54, 8, 1),
(133, 3, 55, 8, 1),
(134, 3, 56, 8, 1),
(135, 3, 57, 8, 1),
(136, 3, 58, 8, 1),
(137, 3, 59, 8, 1),
(138, 3, 60, 8, 1),
(139, 3, 61, 8, 1),
(140, 3, 62, 8, 1),
(141, 3, 63, 8, 1),
(142, 3, 64, 8, 1),
(143, 3, 65, 8, 1),
(144, 3, 66, 8, 1),
(145, 3, 67, 8, 1),
(146, 3, 68, 8, 1),
(147, 3, 69, 8, 1),
(148, 3, 70, 8, 1),
(149, 3, 71, 8, 1),
(150, 3, 72, 8, 1),
(151, 3, 73, 8, 1),
(152, 3, 74, 8, 1),
(153, 3, 75, 8, 1),
(154, 3, 76, 8, 1),
(155, 3, 77, 8, 1),
(156, 3, 78, 8, 1),
(157, 4, 1, 8, 2),
(158, 4, 2, 8, 2),
(159, 4, 3, 8, 2),
(160, 4, 4, 8, 2),
(161, 4, 5, 8, 1),
(162, 4, 6, 8, 1),
(163, 4, 7, 8, 2),
(164, 4, 8, 8, 2),
(165, 4, 9, 8, 2),
(166, 4, 10, 8, 2),
(167, 4, 11, 8, 2),
(168, 4, 12, 8, 1),
(169, 4, 13, 8, 1),
(170, 4, 14, 8, 1),
(171, 4, 15, 8, 1),
(172, 4, 16, 8, 2),
(173, 4, 17, 8, 2),
(174, 4, 18, 8, 2),
(175, 4, 19, 8, 2),
(176, 4, 20, 8, 1),
(177, 4, 21, 8, 1),
(178, 4, 22, 8, 1),
(179, 4, 23, 8, 1),
(180, 4, 24, 8, 2),
(181, 4, 25, 8, 2),
(182, 4, 26, 8, 2),
(183, 4, 27, 8, 2),
(184, 4, 28, 8, 2),
(185, 4, 29, 8, 2),
(186, 4, 30, 8, 2),
(187, 4, 31, 8, 2),
(188, 4, 32, 8, 2),
(189, 4, 33, 8, 2),
(190, 4, 34, 8, 2),
(191, 4, 35, 8, 2),
(192, 4, 36, 8, 2),
(193, 4, 37, 8, 2),
(194, 4, 38, 8, 2),
(195, 4, 39, 8, 2),
(196, 4, 40, 8, 2),
(197, 4, 11, 8, 2),
(198, 4, 42, 8, 2),
(199, 4, 43, 8, 2),
(200, 4, 44, 8, 2),
(201, 4, 45, 8, 2),
(202, 4, 46, 8, 2),
(203, 4, 47, 8, 2),
(204, 4, 48, 8, 2),
(205, 4, 49, 8, 2),
(206, 4, 50, 8, 1),
(207, 4, 51, 8, 1),
(208, 4, 52, 8, 1),
(209, 4, 53, 8, 1),
(210, 4, 54, 8, 1),
(211, 4, 55, 8, 1),
(212, 4, 56, 8, 1),
(213, 4, 57, 8, 1),
(214, 4, 58, 8, 2),
(215, 4, 59, 8, 2),
(216, 4, 60, 8, 2),
(217, 4, 61, 8, 2),
(218, 4, 62, 8, 2),
(219, 4, 63, 8, 2),
(220, 4, 64, 8, 2),
(221, 4, 65, 8, 2),
(222, 4, 66, 8, 2),
(223, 4, 67, 8, 2),
(224, 4, 68, 8, 2),
(225, 4, 69, 8, 2),
(226, 4, 70, 8, 2),
(227, 4, 71, 8, 2),
(228, 4, 72, 8, 2),
(229, 4, 73, 8, 2),
(230, 4, 74, 8, 2),
(231, 4, 75, 8, 2),
(232, 4, 76, 8, 2),
(233, 4, 77, 8, 2),
(234, 4, 78, 8, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_modulo`
--

CREATE TABLE `erp_modulo` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Logo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Id_Entidad` int(11) NOT NULL,
  `Id_Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_modulo`
--

INSERT INTO `erp_modulo` (`Id`, `Nombre`, `Descripcion`, `Logo`, `Id_Entidad`, `Id_Estado`) VALUES
(1, 'Administración', 'Control y Mantenimiento a Clientes, Empleados, Sucursales, Usuarios, entre otros', '../assets/img/admin/Modulo_Administracion.png', 16, 1),
(2, 'Punto de Venta', 'Control y Mantenimiento a Ventas, Cobros, entre otros', '../assets/img/admin/Punto_de_Venta.png', 16, 1),
(3, 'Inventario', 'Control y Mantenimiento a Bodega, Productos, Solicitud de Ordenes, entre otros', '../assets/img/admin/Modulo_Inventario.png', 16, 1),
(4, 'Contabilidad', 'Control y Mantenimiento a Bancos, Chequera, Permiso o Negacion de Solicitudes, entre otros', '../assets/img/admin/Modulo_Contabilidad.png', 16, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_movimiento_producto`
--

CREATE TABLE `erp_movimiento_producto` (
  `Id` int(11) NOT NULL,
  `Fecha_Movimiento` date NOT NULL,
  `Id_Tipo_Movimiento` int(11) NOT NULL,
  `Id_Entidad` int(11) NOT NULL,
  `Id_Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_municipio`
--

CREATE TABLE `erp_municipio` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Id_Departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_municipio`
--

INSERT INTO `erp_municipio` (`Id`, `Nombre`, `Id_Departamento`) VALUES
(1, 'Ahuachapan', 1),
(2, 'Apaneca', 1),
(3, 'Atiquizaya', 1),
(4, 'Concepción de Ataco', 1),
(5, 'El Refugio', 1),
(6, 'Guaymango', 1),
(7, 'Jujutla', 1),
(8, 'San Francisco Menéndez', 1),
(9, 'San Lorenzo', 1),
(10, 'San Pedro Puxtla', 1),
(11, 'Tacuba', 1),
(12, 'Turín', 1),
(13, 'Anamorós', 2),
(14, 'Bolivar', 2),
(15, 'Concepción de Oriente', 2),
(16, 'Conchagua', 2),
(17, 'El Carmen', 2),
(18, 'El Sauce', 2),
(19, 'Intipucá', 2),
(20, 'La Unión', 2),
(21, 'Lislique 2', 2),
(22, 'Meanguera del Golfo', 2),
(23, 'Nueva Esparta', 2),
(24, 'Pasaquina', 2),
(25, 'Polorós', 2),
(26, 'San Alejo', 2),
(27, 'San José', 2),
(28, 'Santa Rosa de Lima', 2),
(29, 'Yayantique', 2),
(30, 'Yucuaquin', 2),
(31, 'Agua Caliente', 3),
(32, 'Arcatao', 3),
(33, 'Azacualpa', 3),
(34, 'Chalatenango (ciudad)', 3),
(35, 'Comalapa', 3),
(36, 'Citalá', 3),
(37, 'Concepción Quezaltepeque', 3),
(38, 'Dulce Nombre de María', 3),
(39, 'El Carrizal', 3),
(40, 'El Paraíso', 3),
(41, 'La Laguna', 3),
(42, 'La Palma', 3),
(43, 'La Reina', 3),
(44, 'Las Vueltas', 3),
(45, 'Nueva Concepción', 3),
(46, 'Nueva Trinidad', 3),
(47, 'Nombre de Jesús', 3),
(48, 'Ojos de Agua', 3),
(49, 'Potonico', 3),
(50, 'San Antonio de la Cruz', 3),
(51, 'San Antonio Los Ranchos', 3),
(52, 'San Fernando', 3),
(53, 'San Francisco Lempa', 3),
(54, 'San Francisco Morazán', 3),
(55, 'San Ignacio', 3),
(56, 'San Isidro Labrador', 3),
(57, 'San José Cancasque', 3),
(58, 'San José Las Flores', 3),
(59, 'San Luis del Carmen', 3),
(60, 'San Miguel de Mercedes', 3),
(61, 'San Rafael', 3),
(62, 'Santa Rita', 3),
(63, 'Tejutla', 3),
(64, 'Candelaria ', 4),
(65, 'Cojutepeque', 4),
(66, 'El Carmen', 4),
(67, 'El Rosario', 4),
(68, 'Monte San Juan', 4),
(69, 'Oratorio de Concepción', 4),
(70, 'San Bartolomé Perulapía', 4),
(71, 'San Cristóbal', 4),
(72, 'San José Guayabal', 4),
(73, 'San Pedro Perulapán', 4),
(74, 'San Rafael Cedros', 4),
(75, 'San Ramón', 4),
(76, 'Santa Cruz Analquito', 4),
(77, 'Santa Cruz Michapa', 4),
(78, 'Suchitoto', 4),
(79, 'Tenancingo', 4),
(80, 'Antiguo Cuscatlán', 5),
(81, 'Chiltiupán', 5),
(82, 'Ciudad Arce', 5),
(83, 'Colón', 5),
(84, 'Comasagua', 5),
(85, 'Huizúcar', 5),
(86, 'Jayaque', 5),
(87, 'Jicalapa', 5),
(88, 'La Libertad', 5),
(89, 'Santa Tecla', 5),
(90, 'Nuevo Cuscatlán', 5),
(91, 'San Juan Opico', 5),
(92, 'Quezaltepeque', 5),
(93, 'Sacacoyo', 5),
(94, 'San José Villanueva', 5),
(95, 'San Matías', 5),
(96, 'San Pablo Tacachico', 5),
(97, 'Talnique', 5),
(98, 'Tamanique', 5),
(99, 'Teotepeque', 5),
(100, 'Tepecoyo', 5),
(101, 'Zaragoza', 5),
(102, 'Carolina', 6),
(103, 'Chapeltique', 6),
(104, 'Chinameca', 6),
(105, 'Chirilagua', 6),
(106, 'Ciudad Barrios', 6),
(107, 'Comacarán', 6),
(108, 'El Tránsito', 6),
(109, 'Lolotique', 6),
(110, 'Moncagua', 6),
(111, 'Nueva Guadalupe', 6),
(112, 'Nuevo Edén de San Juan', 6),
(113, 'Quelepa', 6),
(114, 'San Antonio del Mosco', 6),
(115, 'San Gerardo', 6),
(116, 'San Jorge', 6),
(117, 'San Luis de la Reina', 6),
(118, 'San Miguel', 6),
(119, 'San Rafael Oriente', 6),
(120, 'Sesori', 6),
(121, 'Uluazapa', 6),
(122, 'Cinquera', 7),
(123, 'Dolores', 7),
(124, 'Guacotecti', 7),
(125, 'Ilobasco', 7),
(126, 'Jutiapa', 7),
(127, 'San Isidro', 7),
(128, 'Sensuntepeque', 7),
(129, 'Tejutepeque', 7),
(130, 'Victoria', 7),
(131, 'Candelaria de la Frontera', 8),
(132, 'Chalchuapa', 8),
(133, 'Coatepeque', 8),
(134, 'El Congo', 8),
(135, 'El Porvenir', 8),
(136, 'Masahuat', 8),
(137, 'Metapán', 8),
(138, 'San Antonio Pajonal', 8),
(139, 'San Sebastián Salitrillo', 8),
(140, 'Santa Ana', 8),
(141, 'Santa Rosa Guachipilín', 8),
(142, 'Santiago de la Frontera', 8),
(143, 'Texistepeque', 8),
(144, 'Alegría', 9),
(145, 'Berlín', 9),
(146, 'California', 9),
(147, 'Concepción Batres', 9),
(148, 'El Triunfo', 9),
(149, 'Ereguayquín', 9),
(150, 'Estanzuelas', 9),
(151, 'Jiquilisco', 9),
(152, 'Jucuapa', 9),
(153, 'Jucuarán', 9),
(154, 'Mercedes Umaña', 9),
(155, 'Nueva Granada', 9),
(156, 'Ozatlán', 9),
(157, 'Puerto El Triunfo', 9),
(158, 'San Agustín', 9),
(159, 'San Buenaventura', 9),
(160, 'San Dionisio', 9),
(161, 'San Francisco Javier', 9),
(162, 'Santa Elena', 9),
(163, 'Santa María', 9),
(164, 'Santiago de María', 9),
(165, 'Tecapán', 9),
(166, 'Usulután', 9),
(167, 'Acajutla', 10),
(168, 'Armenia', 10),
(169, 'Caluco', 10),
(170, 'Cuisnahuat', 10),
(171, 'Izalco', 10),
(172, 'Juayúa', 10),
(173, 'Nahuizalco', 10),
(174, 'Nahulingo', 10),
(175, 'Salcoatitán', 10),
(176, 'San Antonio del Monte', 10),
(177, 'San Julián', 10),
(178, 'Santa Catarina Masahuat', 10),
(179, 'Santa Isabel Ishuatán', 10),
(180, 'Santo Domingo Guzmán', 10),
(181, 'Sonsonate', 10),
(182, 'Sonzacate', 10),
(183, 'Aguilares', 11),
(184, 'Apopa', 11),
(185, 'Ayutuxtepeque', 11),
(186, 'Cuscatancingo', 11),
(187, 'Ciudad Delgado', 11),
(188, 'El Paisnal', 11),
(189, 'Guazapa', 11),
(190, 'Ilopango', 11),
(191, 'Mejicanos', 11),
(192, 'Nejapa', 11),
(193, 'Panchimalco', 11),
(194, 'Rosario de Mora', 11),
(195, 'San Marcos', 11),
(196, 'San Martín', 11),
(197, 'San Salvador', 11),
(198, 'Santiago Texacuangos', 11),
(199, 'Santo Tomás', 11),
(200, 'Soyapango', 11),
(201, 'Tonacatepeque', 11),
(202, 'Apastepeque', 12),
(203, 'Guadalupe', 12),
(204, 'San Cayetano Istepeque', 12),
(205, 'San Esteban Catarina', 12),
(206, 'San Ildefonso', 12),
(207, 'San Lorenzo', 12),
(208, 'San Sebastián', 12),
(209, 'San Vicente', 12),
(210, 'Santa Clara ', 12),
(211, 'Santo Domingo', 12),
(212, 'Tecoluca', 12),
(213, 'Tepetitán', 12),
(214, 'Verapaz', 12),
(215, 'Arambala', 13),
(216, 'Cacaopera', 13),
(217, 'Chilanga', 13),
(218, 'Corinto', 13),
(219, 'Delicias de Concepción', 13),
(220, 'El Divisadero', 13),
(221, 'El Rosario', 13),
(222, 'Gualococti', 13),
(223, 'Guatajiagua', 13),
(224, 'Joateca', 13),
(225, 'Jocoaitique', 13),
(226, 'Jocoro', 13),
(227, 'Lolotiquillo', 13),
(228, 'Meanguera', 13),
(229, 'Osicala', 13),
(230, 'Perquín', 13),
(231, 'San Carlos', 13),
(232, 'San Fernando', 13),
(233, 'San Francisco Gotera', 13),
(234, 'San Isidro', 13),
(235, 'San Simón', 13),
(236, 'Sensembra', 13),
(237, 'Sociedad', 13),
(238, 'Torola', 13),
(239, 'Yamabal', 13),
(240, 'Yoloaiquín', 13),
(241, 'Cuyultitán', 14),
(242, 'El Rosario', 14),
(243, 'Jerusalén', 14),
(244, 'Mercedes La Ceiba', 14),
(245, 'Olocuilta', 14),
(246, 'Paraíso de Osorio', 14),
(247, 'San Antonio Masahuat', 14),
(248, 'San Emigdio', 14),
(249, 'San Francisco Chinameca', 14),
(250, 'San Juan Nonualco', 14),
(251, 'San Juan Talpa', 14),
(252, 'San Juan Tepezontes', 14),
(253, 'San Luis Talpa', 14),
(254, 'San Luis La Herradura', 14),
(255, 'San Miguel Tepezontes', 14),
(256, 'San Pedro Masahuat', 14),
(257, 'San Pedro Nonualco', 14),
(258, 'San Rafael Obrajuelo', 14),
(259, 'Santa María Ostuma', 14),
(260, 'Santiago Nonualco', 14),
(261, 'Tapalhuaca', 14),
(262, 'Zacatecoluca', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_orden_venta`
--

CREATE TABLE `erp_orden_venta` (
  `Id` int(11) NOT NULL,
  `Id_Cliente` int(11) NOT NULL,
  `Id_Sucursal` int(11) NOT NULL,
  `Id_Tipo_Venta` int(11) NOT NULL,
  `Fecha_Registro` date NOT NULL,
  `Id_Entidad` int(11) NOT NULL,
  `Id_Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_presentacion`
--

CREATE TABLE `erp_presentacion` (
  `Id` int(11) NOT NULL,
  `Presentacion` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Abreviatura` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Id_Unidad_Medida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_presentacion`
--

INSERT INTO `erp_presentacion` (`Id`, `Presentacion`, `Abreviatura`, `Id_Unidad_Medida`) VALUES
(1, 'Tableta', 'Tbl.', 1),
(2, 'Cápsula', 'Cáp.', 1),
(3, 'Blister', 'Blter.', 1),
(4, 'Jarabe', 'Jbe.', 13),
(5, 'Jarabe', 'Jbe.', 14),
(6, 'Jarabe', 'Jbe.', 15),
(7, 'Frasco', 'Fco.', 4),
(8, 'Frasco', 'Fco.', 5),
(9, 'Frasco', 'Fco.', 13),
(10, 'Frasco', 'Fco.', 14),
(11, 'Frasco', 'Fco.', 15),
(12, 'Frasco', 'Fco.', 16),
(13, 'Frasco', 'Fco.', 17),
(14, 'Tarro', 'Tarro', 23),
(15, 'Tarro', 'Tarro', 24),
(16, 'Tarro', 'Tarro', 25),
(17, 'Tarro', 'Tarro', 26),
(18, 'Tarro', 'Tarro', 27),
(19, 'Tarro', 'Tarro', 28),
(20, 'Tarro', 'Tarro', 29),
(21, 'Tarro', 'Tarro', 30),
(22, 'Tarro', 'Tarro', 31),
(23, 'Tarro', 'Tarro', 32),
(24, 'Tarro', 'Tarro', 33),
(25, 'Tarro', 'Tarro', 34),
(26, 'Tarro', 'Tarro', 35),
(27, 'Tarro', 'Tarro', 36),
(28, 'Tarro', 'Tarro', 37),
(29, 'Tarro', 'Tarro', 38),
(30, 'Tarro', 'Tarro', 39),
(31, 'Tarro', 'Tarro', 40),
(32, 'Tarro', 'Tarro', 41),
(33, 'Tarro', 'Tarro', 42),
(34, 'Tarro', 'Tarro', 43),
(35, 'Tarro', 'Tarro', 44),
(36, 'Lata', 'Lata', 18),
(37, 'Lata', 'Lata', 19),
(38, 'Lata', 'Lata', 20),
(39, 'Lata', 'Lata', 21),
(40, 'Lata', 'Lata', 22),
(41, 'Sobre', 'Sobre', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_producto`
--

CREATE TABLE `erp_producto` (
  `Id` int(11) NOT NULL,
  `Codigo_Barra` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Id_Laboratorio` int(11) NOT NULL,
  `Id_Presentacion` int(11) NOT NULL,
  `Id_Categoria` int(11) NOT NULL,
  `Id_Entidad` int(11) NOT NULL,
  `Id_Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_producto`
--

INSERT INTO `erp_producto` (`Id`, `Codigo_Barra`, `Nombre`, `Id_Laboratorio`, `Id_Presentacion`, `Id_Categoria`, `Id_Entidad`, `Id_Estado`) VALUES
(1, '7500435121491', 'Acetaminofen', 15, 3, 1, 11, 1),
(2, '989936787890', 'Suero Oral Fresa', 6, 41, 1, 11, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_proveedor`
--

CREATE TABLE `erp_proveedor` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono_Fijo` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono_Celular` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Correo_Electronico` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Giro` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Id_Municipio` int(11) NOT NULL,
  `Id_Cuenta_Proveedor` int(11) NOT NULL,
  `Id_Entidad` int(11) NOT NULL,
  `Id_Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_proveedor`
--

INSERT INTO `erp_proveedor` (`Id`, `Nombre`, `Direccion`, `Telefono_Fijo`, `Telefono_Celular`, `Correo_Electronico`, `Giro`, `Id_Municipio`, `Id_Cuenta_Proveedor`, `Id_Entidad`, `Id_Estado`) VALUES
(1, 'Proveedor De Prueba Uno', 'Centro, San Salvador', '2222-2222', '7584-3392', 'ventas@gmail.com', 'Venta De Medicina', 197, 1, 3, 1),
(2, 'Proveedor De Prueba Dos', 'Mejicanos, San Salvador.', '2235-2312', '7528-2359', 'ventas@hotmail.com', 'Venta De Medicamentos', 191, 2, 3, 1),
(3, 'Proveedor De Prueba Tres', 'Santa Tecla', '2693-3998', '', 'pvtres@admin.com', 'Distribucion De Productos Farmaceuticos', 89, 3, 3, 1),
(4, 'Proveedor De Prueba Cuarto', 'San Salvador', '2222-3434', '', 'pvr@ventas.com', 'Venta De Productos Medicinales', 197, 4, 3, 1),
(5, 'Proveedor De Prueba Quinto', 'El Paraiso', '2225-3029', '7592-9328', 'pv1@admin.com', 'Productos Medicos', 197, 5, 3, 1),
(6, 'Proveedor De Prueba Sexto', 'San Salvador', '2222-3333', '', 'pps@ventas.com', 'Distribucion De Medicamentos', 197, 6, 3, 1),
(7, 'Proveedor De Prueba Septimo', 'San Salvador', '2234-2393', '', 'pps@venta.com', 'Venta De Medicamentos', 197, 7, 3, 1),
(8, 'Distribuidores De Medicamentos', 'San Salvador', '2525-3949', '', 'medicos@admin.com', 'Distribucion De Medicamentos', 197, 8, 3, 1),
(9, 'Medicamentos', 'Ahuachapan', '2534-2342', '', 'medicamentos@ventas.com', 'Venta Y Distribucion De Productos Farmaceuticos', 1, 9, 3, 1),
(10, 'Robles S.a De C.v', 'Av. Por Ahi', '2576-4095', '', 'robles@dominio.com', 'Distribucion De Producos Clinicos', 197, 10, 3, 1),
(11, 'Proveedor De Prueba Octavo', 'San Salvador, El Salvador', '2225-2326', '7598-6585', 'pdpo@ventas.com', 'Giro De Prueba Octavo', 197, 11, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_rol`
--

CREATE TABLE `erp_rol` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_rol`
--

INSERT INTO `erp_rol` (`Id`, `Nombre`, `Descripcion`) VALUES
(1, 'Administrador', 'Administrador de Todo el Sistema'),
(2, 'Contador', 'Digitador de Documentos'),
(3, 'Cliente', 'Clientes en Línea'),
(4, 'Vendedor', 'Vendedores de Mostrador, Cajeros, entre otros'),
(5, 'Bodeguero', 'Encargado de Controlar y dar Mantenimiento a Bodega');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_solicitud_bodega`
--

CREATE TABLE `erp_solicitud_bodega` (
  `Id` int(11) NOT NULL,
  `Id_Sucursal` int(11) NOT NULL,
  `Id_Bodega` int(11) NOT NULL,
  `Id_Kardex` int(11) NOT NULL,
  `Id_Solicitante` int(11) NOT NULL,
  `Fecha_Solicitud` date NOT NULL,
  `Fecha_Entrega` date DEFAULT NULL,
  `Id_Entidad` int(11) NOT NULL,
  `Id_Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_sucursal`
--

CREATE TABLE `erp_sucursal` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre_Corto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `Logo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Id_Municipio` int(30) NOT NULL,
  `Id_Empleado_Encargado` int(11) NOT NULL,
  `Id_Entidad` int(11) NOT NULL,
  `Id_Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_sucursal`
--

INSERT INTO `erp_sucursal` (`Id`, `Nombre`, `Nombre_Corto`, `Telefono`, `Direccion`, `Logo`, `Id_Municipio`, `Id_Empleado_Encargado`, `Id_Entidad`, `Id_Estado`) VALUES
(1, 'Venta de Medicina Popular y Más, Santa María', 'Santa María', '2222-2222', 'Av. Castro Morán, Local 3 y 4, Contiguo a Pizza Hut', '../assets/img/Sucursal_Santa_Maria.png', 197, 1, 13, 1),
(2, 'Venta De Medicina Popular Y Más, Sagrada Familia', 'Sagrada Familia', '2222-2525', 'Av. Xyz, Local A Y B.', '../assets/img/Sucursal_Sagrada_Familia.png', 89, 1, 13, 1),
(3, 'Venta De Medicina Popular Y Más, Sagrado Corazón', 'Sagrado Corazón', '2525-2626', 'San Salvador', '', 197, 1, 13, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_sucursal_usuario`
--

CREATE TABLE `erp_sucursal_usuario` (
  `Id` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Id_Sucursal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_sucursal_usuario`
--

INSERT INTO `erp_sucursal_usuario` (`Id`, `Id_Usuario`, `Id_Sucursal`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 2, 1),
(6, 3, 1),
(7, 3, 2),
(8, 4, 1),
(9, 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_tipo_cliente`
--

CREATE TABLE `erp_tipo_cliente` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Descuento_Otorgado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_tipo_cliente`
--

INSERT INTO `erp_tipo_cliente` (`Id`, `Nombre`, `Descripcion`, `Descuento_Otorgado`) VALUES
(1, 'Común', 'Cualquier Cliente', 0),
(2, 'Frecuente', 'Clientes que Realizan Compras a Diario pero con Montos Bajos', 5),
(3, 'Preferencial', 'Cliente que realizan Compras de Vez en Cuando pero con Montos Medios', 10),
(4, 'VIP', 'Cliente que realizan Compras con Montos Grandes', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_tipo_entidad`
--

CREATE TABLE `erp_tipo_entidad` (
  `Id` int(11) NOT NULL,
  `Id_Entidad` int(11) NOT NULL,
  `Id_Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_tipo_entidad`
--

INSERT INTO `erp_tipo_entidad` (`Id`, `Id_Entidad`, `Id_Estado`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 6),
(5, 2, 1),
(6, 2, 2),
(7, 2, 3),
(8, 2, 6),
(9, 3, 1),
(10, 3, 2),
(11, 4, 1),
(12, 4, 2),
(13, 5, 1),
(14, 5, 2),
(15, 6, 3),
(16, 6, 14),
(17, 6, 22),
(18, 6, 23),
(19, 6, 25),
(20, 7, 3),
(21, 7, 18),
(22, 7, 19),
(23, 7, 20),
(24, 7, 21),
(25, 7, 25),
(26, 7, 29),
(27, 8, 1),
(28, 8, 2),
(29, 9, 18),
(30, 9, 21),
(31, 9, 26),
(32, 9, 27),
(33, 9, 28),
(34, 9, 29),
(35, 10, 3),
(36, 10, 4),
(37, 10, 5),
(38, 10, 9),
(39, 10, 20),
(40, 10, 25),
(41, 10, 26),
(42, 10, 27),
(43, 11, 1),
(44, 11, 2),
(45, 11, 30),
(46, 11, 31),
(47, 12, 4),
(48, 12, 5),
(49, 12, 9),
(50, 12, 19),
(51, 12, 20),
(52, 12, 21),
(53, 12, 25),
(54, 12, 26),
(55, 12, 27),
(56, 12, 28),
(57, 12, 29),
(58, 13, 1),
(59, 13, 2),
(60, 14, 1),
(61, 14, 2),
(62, 14, 3),
(63, 14, 6),
(64, 15, 7),
(65, 15, 9),
(66, 15, 13),
(67, 15, 15),
(68, 15, 22),
(69, 15, 23),
(70, 15, 24),
(71, 15, 25),
(72, 16, 1),
(73, 16, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_tipo_movimiento`
--

CREATE TABLE `erp_tipo_movimiento` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_tipo_movimiento`
--

INSERT INTO `erp_tipo_movimiento` (`Id`, `Nombre`, `Descripcion`) VALUES
(1, 'Inventario Inicial', 'Implementado para la Cargar Producto al Sistema del Sistema Antes Utilizado'),
(2, 'CCF', 'Crédito Fiscal, Documento Utilizado para Ventas y Compras'),
(3, 'Factura', 'Factura de Consumidor Final, Documento Utilizado para Ventas y Compras'),
(4, 'Ticket', 'Documento Utilizado para Ventas y Compras'),
(5, 'Devolución', 'Implementado en Movimiento de Productos'),
(6, 'Producto Vencido', 'Implementado en Movimiento de Productos'),
(7, 'Regalía', 'Implementado en Movimiento de Productos'),
(8, 'Reembolso', 'Implementado en Ventas o Compras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_tipo_venta`
--

CREATE TABLE `erp_tipo_venta` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_tipo_venta`
--

INSERT INTO `erp_tipo_venta` (`Id`, `Nombre`, `Descripcion`) VALUES
(1, 'Línea', 'Venta generada a travez de la web'),
(2, 'Mostrador', 'Venta generada directamente en la Sucursal'),
(3, 'Llamada Telefónica', 'Venta generada a travez del Teléfono');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_transaccion_kardex`
--

CREATE TABLE `erp_transaccion_kardex` (
  `Id` int(11) NOT NULL,
  `Id_Kardex` int(11) NOT NULL,
  `Fecha_Transaccion` date NOT NULL,
  `Entrada` int(11) NOT NULL,
  `Salida` int(11) NOT NULL,
  `Costo_Unidad` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_transaccion_kardex`
--

INSERT INTO `erp_transaccion_kardex` (`Id`, `Id_Kardex`, `Fecha_Transaccion`, `Entrada`, `Salida`, `Costo_Unidad`) VALUES
(1, 1, '2018-06-14', 100, 0, 0.03),
(2, 2, '2018-06-14', 150, 0, 0.03),
(3, 3, '2018-06-14', 200, 0, 0.12),
(4, 4, '2018-06-14', 185, 0, 0.12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_unidad_medida`
--

CREATE TABLE `erp_unidad_medida` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Unidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_unidad_medida`
--

INSERT INTO `erp_unidad_medida` (`Id`, `Nombre`, `Unidad`) VALUES
(1, 'Unidad', 1),
(2, 'Caja', 1),
(3, 'Sobre', 1),
(4, 'Litro', 1),
(5, 'Galón', 1),
(6, '5mL', 5),
(7, '10mL', 10),
(8, '15mL', 15),
(9, '20mL', 20),
(10, '30mL', 30),
(11, '40mL', 40),
(12, '50mL', 50),
(13, '60mL', 60),
(14, '120mL', 120),
(15, '240mL', 240),
(16, '500mL', 500),
(17, '750mL', 750),
(18, '5gr', 5),
(19, '10gr', 10),
(20, '15gr', 15),
(21, '20gr', 20),
(22, '25gr', 25),
(23, '30gr', 30),
(24, '35gr', 35),
(25, '40gr', 40),
(26, '45gr', 45),
(27, '50gr', 50),
(28, '55gr', 55),
(29, '60gr', 60),
(30, '65gr', 65),
(31, '70gr', 70),
(32, '75gr', 75),
(33, '80gr', 80),
(34, '85gr', 85),
(35, '90gr', 90),
(36, '95gr', 95),
(37, '100gr', 100),
(38, '150gr', 150),
(39, '200gr', 200),
(40, '250gr', 250),
(41, '300gr', 300),
(42, '350gr', 350),
(43, '450gr', 450),
(44, '500gr', 500),
(45, '1/2 Onza', 1),
(46, 'Onza', 1),
(47, '4 Onza', 1),
(48, '1/2 Libra', 1),
(49, 'Libra', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_usuario`
--

CREATE TABLE `erp_usuario` (
  `Id` int(11) NOT NULL,
  `Tipo_Usuario` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Id_Rol` int(11) DEFAULT NULL,
  `Correo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Clave` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Registro` date NOT NULL,
  `Fecha_Modificacion` date NOT NULL,
  `Id_Entidad` int(11) NOT NULL,
  `Id_Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `erp_usuario`
--

INSERT INTO `erp_usuario` (`Id`, `Tipo_Usuario`, `Id_Usuario`, `Id_Rol`, `Correo`, `Usuario`, `Clave`, `Fecha_Registro`, `Fecha_Modificacion`, `Id_Entidad`, `Id_Estado`) VALUES
(1, 'Empleado', 1, 1, 'miguel_alvarenga1994@hotmail.com', 'mpena', 'ae65541ab1bcd2f9ba4e8c4d1e2fc14140702fe2c5a6d24abdd651a01e26682b', '2018-06-10', '2018-06-10', 14, 1),
(2, 'Empleado', 2, 1, 'lilialfaro06@gmail.com', 'lpena', '335df7a794c3329292f95baa6750f6522ea2c7b44f2ccf83f91ca439a8f7d263', '0000-00-00', '0000-00-00', 14, 1),
(3, 'Empleado', 3, 4, 'steam@desarrollo.com', 'steam', 'be6660b19e08c2fb6c3a92090b9e156f9fff0cef3baaed1b89c669a8a5a9922b', '2018-09-25', '2018-09-25', 14, 1),
(4, 'Empleado', 4, 5, 'scano@ufg.edu.sv', 'scano', '4765ca80166ef0115e5d3a531b08ff5c39c4902d4308d79636deb01886c37068', '2018-09-15', '2018-09-25', 14, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erp_venta`
--

CREATE TABLE `erp_venta` (
  `Id` int(11) NOT NULL,
  `Correlativo_Fisico` int(11) NOT NULL,
  `Fecha_Facturacion` date NOT NULL,
  `Id_Cliente` int(11) NOT NULL,
  `Id_Forma_Pago` int(11) NOT NULL,
  `Id_Condicion_Pago` int(11) NOT NULL,
  `Id_Tipo_Movimiento` int(11) NOT NULL,
  `Id_Entidad` int(11) NOT NULL,
  `Id_Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `erp_bitacora`
--
ALTER TABLE `erp_bitacora`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Usuario` (`Id_Usuario`);

--
-- Indices de la tabla `erp_bodega`
--
ALTER TABLE `erp_bodega`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Sucursal` (`Id_Sucursal`),
  ADD KEY `Id_Tipo_Entidad` (`Id_Entidad`),
  ADD KEY `Id_Estado` (`Id_Estado`);

--
-- Indices de la tabla `erp_categoria`
--
ALTER TABLE `erp_categoria`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `erp_cliente`
--
ALTER TABLE `erp_cliente`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Cuenta_Cliente` (`Id_Cuenta_Cliente`),
  ADD KEY `Id_Estado_Civil` (`Id_Estado_Civil`),
  ADD KEY `Id_Tipo_Entidad` (`Id_Entidad`),
  ADD KEY `Id_Estado` (`Id_Estado`),
  ADD KEY `Id_Tipo_Cliente` (`Id_Tipo_Cliente`);

--
-- Indices de la tabla `erp_cobro`
--
ALTER TABLE `erp_cobro`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Receptor` (`Id_Receptor`),
  ADD KEY `Id_Tipo_Entidad` (`Id_Entidad`),
  ADD KEY `Id_Estado` (`Id_Estado`);

--
-- Indices de la tabla `erp_compra`
--
ALTER TABLE `erp_compra`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Orden_Compra` (`Id_Orden_Compra`),
  ADD KEY `Id_Proveedor` (`Id_Proveedor`),
  ADD KEY `Id_Tipo_Movimiento` (`Id_Tipo_Movimiento`),
  ADD KEY `Id_Tipo_Entidad` (`Id_Entidad`),
  ADD KEY `Id_Entidad` (`Id_Entidad`),
  ADD KEY `Id_Estado` (`Id_Estado`);

--
-- Indices de la tabla `erp_condicion_pago`
--
ALTER TABLE `erp_condicion_pago`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `erp_cuenta_cliente`
--
ALTER TABLE `erp_cuenta_cliente`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `erp_cuenta_proveedor`
--
ALTER TABLE `erp_cuenta_proveedor`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `erp_departamento`
--
ALTER TABLE `erp_departamento`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `erp_detalle_cobro`
--
ALTER TABLE `erp_detalle_cobro`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Cobro` (`Id_Cobro`),
  ADD KEY `Id_Venta` (`Id_Venta`);

--
-- Indices de la tabla `erp_detalle_compra`
--
ALTER TABLE `erp_detalle_compra`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Compra` (`Id_Compra`),
  ADD KEY `Id_Kardex` (`Id_Kardex`);

--
-- Indices de la tabla `erp_detalle_movimiento_producto`
--
ALTER TABLE `erp_detalle_movimiento_producto`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Movimiento_Producto` (`Id_Movimiento_Producto`),
  ADD KEY `Id_Kardex` (`Id_Kardex`);

--
-- Indices de la tabla `erp_detalle_orden_venta`
--
ALTER TABLE `erp_detalle_orden_venta`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Detalle_Precio` (`Id_Detalle_Precio`),
  ADD KEY `Id_Orden_Venta` (`Id_Orden_Venta`),
  ADD KEY `Id_Producto` (`Id_Producto`);

--
-- Indices de la tabla `erp_detalle_precio`
--
ALTER TABLE `erp_detalle_precio`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Sucursal` (`Id_Sucursal`),
  ADD KEY `Id_Producto` (`Id_Producto`);

--
-- Indices de la tabla `erp_detalle_solicitud_bodega`
--
ALTER TABLE `erp_detalle_solicitud_bodega`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Solicitud_Bodega` (`Id_Solicitud_Bodega`),
  ADD KEY `Id_Producto` (`Id_Producto`);

--
-- Indices de la tabla `erp_detalle_venta`
--
ALTER TABLE `erp_detalle_venta`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Venta` (`Id_Venta`),
  ADD KEY `Id_Kardex` (`Id_Kardex`),
  ADD KEY `Id_Detalle_Precio` (`Id_Detalle_Precio`);

--
-- Indices de la tabla `erp_empleado`
--
ALTER TABLE `erp_empleado`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Estado_Civil` (`Id_Estado_Civil`),
  ADD KEY `Id_Tipo_Entidad` (`Id_Entidad`),
  ADD KEY `Id_Estado` (`Id_Estado`);

--
-- Indices de la tabla `erp_entidad`
--
ALTER TABLE `erp_entidad`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `erp_estado`
--
ALTER TABLE `erp_estado`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `erp_estado_civil`
--
ALTER TABLE `erp_estado_civil`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `erp_forma_pago`
--
ALTER TABLE `erp_forma_pago`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `erp_kardex`
--
ALTER TABLE `erp_kardex`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Sucursal` (`Id_Sucursal`),
  ADD KEY `Id_Producto` (`Id_Producto`),
  ADD KEY `Id_Tipo_Movimiento` (`Id_Tipo_Movimiento`),
  ADD KEY `Id_Bodega` (`Id_Bodega`);

--
-- Indices de la tabla `erp_laboratorio`
--
ALTER TABLE `erp_laboratorio`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Tipo_Entidad` (`Id_Entidad`),
  ADD KEY `Id_Estado` (`Id_Estado`);

--
-- Indices de la tabla `erp_lote`
--
ALTER TABLE `erp_lote`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `erp_lote_kardex`
--
ALTER TABLE `erp_lote_kardex`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Kardex` (`Id_Kardex`),
  ADD KEY `Id_Lote` (`Id_Lote`);

--
-- Indices de la tabla `erp_menu`
--
ALTER TABLE `erp_menu`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Menu_Padre` (`Id_Menu_Padre`),
  ADD KEY `Id_Modulo` (`Id_Modulo`);

--
-- Indices de la tabla `erp_menu_usuario`
--
ALTER TABLE `erp_menu_usuario`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Usuario` (`Id_Usuario`),
  ADD KEY `Id_Menu` (`Id_Menu`),
  ADD KEY `Id_Entidad` (`Id_Entidad`),
  ADD KEY `Id_Estado` (`Id_Estado`);

--
-- Indices de la tabla `erp_modulo`
--
ALTER TABLE `erp_modulo`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Entidad` (`Id_Entidad`),
  ADD KEY `Id_Estado` (`Id_Estado`);

--
-- Indices de la tabla `erp_movimiento_producto`
--
ALTER TABLE `erp_movimiento_producto`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Tipo_Entidad` (`Id_Entidad`),
  ADD KEY `Id_Tipo_Movimiento` (`Id_Tipo_Movimiento`),
  ADD KEY `Id_Estado` (`Id_Estado`);

--
-- Indices de la tabla `erp_municipio`
--
ALTER TABLE `erp_municipio`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Departamento` (`Id_Departamento`);

--
-- Indices de la tabla `erp_orden_venta`
--
ALTER TABLE `erp_orden_venta`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Sucursal` (`Id_Sucursal`),
  ADD KEY `Id_Tipo_Venta` (`Id_Tipo_Venta`),
  ADD KEY `Id_Tipo_Entidad` (`Id_Entidad`),
  ADD KEY `Id_Cliente` (`Id_Cliente`),
  ADD KEY `Id_Estado` (`Id_Estado`);

--
-- Indices de la tabla `erp_presentacion`
--
ALTER TABLE `erp_presentacion`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Unidad_Medida` (`Id_Unidad_Medida`);

--
-- Indices de la tabla `erp_producto`
--
ALTER TABLE `erp_producto`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Tipo_Entidad` (`Id_Entidad`),
  ADD KEY `Id_Categoria` (`Id_Categoria`),
  ADD KEY `Id_Presentacion` (`Id_Presentacion`),
  ADD KEY `Id_Laboratorio` (`Id_Laboratorio`),
  ADD KEY `Id_Estado` (`Id_Estado`);

--
-- Indices de la tabla `erp_proveedor`
--
ALTER TABLE `erp_proveedor`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Municipio` (`Id_Municipio`),
  ADD KEY `Id_Cuenta_Proveedor` (`Id_Cuenta_Proveedor`),
  ADD KEY `Id_Tipo_Entidad` (`Id_Entidad`),
  ADD KEY `Id_Estado` (`Id_Estado`);

--
-- Indices de la tabla `erp_rol`
--
ALTER TABLE `erp_rol`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `erp_solicitud_bodega`
--
ALTER TABLE `erp_solicitud_bodega`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Sucursal` (`Id_Sucursal`),
  ADD KEY `Id_Bodega` (`Id_Bodega`),
  ADD KEY `Id_Kardex` (`Id_Kardex`),
  ADD KEY `Id_Solicitante` (`Id_Solicitante`),
  ADD KEY `Id_Tipo_Entidad` (`Id_Entidad`),
  ADD KEY `Id_Estado` (`Id_Estado`);

--
-- Indices de la tabla `erp_sucursal`
--
ALTER TABLE `erp_sucursal`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Tipo_Entidad` (`Id_Entidad`),
  ADD KEY `Id_Empleado_Encargado` (`Id_Empleado_Encargado`),
  ADD KEY `Id_Municipio` (`Id_Municipio`),
  ADD KEY `Id_Estado` (`Id_Estado`);

--
-- Indices de la tabla `erp_sucursal_usuario`
--
ALTER TABLE `erp_sucursal_usuario`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Usuario` (`Id_Usuario`),
  ADD KEY `Id_Sucursal` (`Id_Sucursal`);

--
-- Indices de la tabla `erp_tipo_cliente`
--
ALTER TABLE `erp_tipo_cliente`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `erp_tipo_entidad`
--
ALTER TABLE `erp_tipo_entidad`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Estado` (`Id_Estado`),
  ADD KEY `Id_Entidad` (`Id_Entidad`);

--
-- Indices de la tabla `erp_tipo_movimiento`
--
ALTER TABLE `erp_tipo_movimiento`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `erp_tipo_venta`
--
ALTER TABLE `erp_tipo_venta`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `erp_transaccion_kardex`
--
ALTER TABLE `erp_transaccion_kardex`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Kardex` (`Id_Kardex`);

--
-- Indices de la tabla `erp_unidad_medida`
--
ALTER TABLE `erp_unidad_medida`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `erp_usuario`
--
ALTER TABLE `erp_usuario`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Usuario` (`Id_Usuario`),
  ADD KEY `Id_Tipo_Entidad` (`Id_Entidad`),
  ADD KEY `Id_Estado` (`Id_Estado`),
  ADD KEY `Id_Rol` (`Id_Rol`);

--
-- Indices de la tabla `erp_venta`
--
ALTER TABLE `erp_venta`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Forma_Pago` (`Id_Forma_Pago`),
  ADD KEY `Id_Condicion_Pago` (`Id_Condicion_Pago`),
  ADD KEY `Id_Tipo_Movimiento` (`Id_Tipo_Movimiento`),
  ADD KEY `Id_Tipo_Entidad` (`Id_Entidad`),
  ADD KEY `Id_Cliente` (`Id_Cliente`),
  ADD KEY `Id_Estado` (`Id_Estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `erp_bitacora`
--
ALTER TABLE `erp_bitacora`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de la tabla `erp_bodega`
--
ALTER TABLE `erp_bodega`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `erp_categoria`
--
ALTER TABLE `erp_categoria`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `erp_cliente`
--
ALTER TABLE `erp_cliente`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `erp_cobro`
--
ALTER TABLE `erp_cobro`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `erp_compra`
--
ALTER TABLE `erp_compra`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `erp_condicion_pago`
--
ALTER TABLE `erp_condicion_pago`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `erp_cuenta_cliente`
--
ALTER TABLE `erp_cuenta_cliente`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `erp_cuenta_proveedor`
--
ALTER TABLE `erp_cuenta_proveedor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `erp_departamento`
--
ALTER TABLE `erp_departamento`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `erp_detalle_cobro`
--
ALTER TABLE `erp_detalle_cobro`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `erp_detalle_compra`
--
ALTER TABLE `erp_detalle_compra`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `erp_detalle_movimiento_producto`
--
ALTER TABLE `erp_detalle_movimiento_producto`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `erp_detalle_orden_venta`
--
ALTER TABLE `erp_detalle_orden_venta`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `erp_detalle_precio`
--
ALTER TABLE `erp_detalle_precio`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `erp_detalle_solicitud_bodega`
--
ALTER TABLE `erp_detalle_solicitud_bodega`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `erp_detalle_venta`
--
ALTER TABLE `erp_detalle_venta`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `erp_empleado`
--
ALTER TABLE `erp_empleado`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `erp_entidad`
--
ALTER TABLE `erp_entidad`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `erp_estado`
--
ALTER TABLE `erp_estado`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `erp_estado_civil`
--
ALTER TABLE `erp_estado_civil`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `erp_forma_pago`
--
ALTER TABLE `erp_forma_pago`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `erp_kardex`
--
ALTER TABLE `erp_kardex`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `erp_laboratorio`
--
ALTER TABLE `erp_laboratorio`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `erp_lote`
--
ALTER TABLE `erp_lote`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `erp_lote_kardex`
--
ALTER TABLE `erp_lote_kardex`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `erp_menu`
--
ALTER TABLE `erp_menu`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `erp_menu_usuario`
--
ALTER TABLE `erp_menu_usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT de la tabla `erp_modulo`
--
ALTER TABLE `erp_modulo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `erp_movimiento_producto`
--
ALTER TABLE `erp_movimiento_producto`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `erp_municipio`
--
ALTER TABLE `erp_municipio`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT de la tabla `erp_orden_venta`
--
ALTER TABLE `erp_orden_venta`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `erp_presentacion`
--
ALTER TABLE `erp_presentacion`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `erp_producto`
--
ALTER TABLE `erp_producto`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `erp_proveedor`
--
ALTER TABLE `erp_proveedor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `erp_rol`
--
ALTER TABLE `erp_rol`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `erp_solicitud_bodega`
--
ALTER TABLE `erp_solicitud_bodega`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `erp_sucursal`
--
ALTER TABLE `erp_sucursal`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `erp_sucursal_usuario`
--
ALTER TABLE `erp_sucursal_usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `erp_tipo_cliente`
--
ALTER TABLE `erp_tipo_cliente`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `erp_tipo_entidad`
--
ALTER TABLE `erp_tipo_entidad`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `erp_tipo_movimiento`
--
ALTER TABLE `erp_tipo_movimiento`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `erp_tipo_venta`
--
ALTER TABLE `erp_tipo_venta`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `erp_transaccion_kardex`
--
ALTER TABLE `erp_transaccion_kardex`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `erp_unidad_medida`
--
ALTER TABLE `erp_unidad_medida`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `erp_usuario`
--
ALTER TABLE `erp_usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `erp_venta`
--
ALTER TABLE `erp_venta`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `erp_bitacora`
--
ALTER TABLE `erp_bitacora`
  ADD CONSTRAINT `erp_bitacora_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `erp_usuario` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_bodega`
--
ALTER TABLE `erp_bodega`
  ADD CONSTRAINT `erp_bodega_ibfk_1` FOREIGN KEY (`Id_Sucursal`) REFERENCES `erp_sucursal` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_bodega_ibfk_2` FOREIGN KEY (`Id_Entidad`) REFERENCES `erp_entidad` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_bodega_ibfk_3` FOREIGN KEY (`Id_Estado`) REFERENCES `erp_estado` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_cliente`
--
ALTER TABLE `erp_cliente`
  ADD CONSTRAINT `erp_cliente_ibfk_1` FOREIGN KEY (`Id_Cuenta_Cliente`) REFERENCES `erp_cuenta_cliente` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_cliente_ibfk_2` FOREIGN KEY (`Id_Entidad`) REFERENCES `erp_entidad` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_cliente_ibfk_3` FOREIGN KEY (`Id_Estado`) REFERENCES `erp_estado` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_cliente_ibfk_4` FOREIGN KEY (`Id_Tipo_Cliente`) REFERENCES `erp_tipo_cliente` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_cobro`
--
ALTER TABLE `erp_cobro`
  ADD CONSTRAINT `erp_cobro_ibfk_1` FOREIGN KEY (`Id_Receptor`) REFERENCES `erp_usuario` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_cobro_ibfk_2` FOREIGN KEY (`Id_Entidad`) REFERENCES `erp_entidad` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_cobro_ibfk_3` FOREIGN KEY (`Id_Estado`) REFERENCES `erp_estado` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_compra`
--
ALTER TABLE `erp_compra`
  ADD CONSTRAINT `erp_compra_ibfk_1` FOREIGN KEY (`Id_Tipo_Movimiento`) REFERENCES `erp_tipo_movimiento` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_compra_ibfk_3` FOREIGN KEY (`Id_Proveedor`) REFERENCES `erp_proveedor` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_compra_ibfk_4` FOREIGN KEY (`Id_Entidad`) REFERENCES `erp_entidad` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_compra_ibfk_5` FOREIGN KEY (`Id_Estado`) REFERENCES `erp_estado` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_detalle_cobro`
--
ALTER TABLE `erp_detalle_cobro`
  ADD CONSTRAINT `erp_detalle_cobro_ibfk_1` FOREIGN KEY (`Id_Venta`) REFERENCES `erp_venta` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_detalle_cobro_ibfk_2` FOREIGN KEY (`Id_Cobro`) REFERENCES `erp_cobro` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_detalle_compra`
--
ALTER TABLE `erp_detalle_compra`
  ADD CONSTRAINT `erp_detalle_compra_ibfk_1` FOREIGN KEY (`Id_Kardex`) REFERENCES `erp_kardex` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_detalle_compra_ibfk_2` FOREIGN KEY (`Id_Compra`) REFERENCES `erp_compra` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_detalle_movimiento_producto`
--
ALTER TABLE `erp_detalle_movimiento_producto`
  ADD CONSTRAINT `erp_detalle_movimiento_producto_ibfk_1` FOREIGN KEY (`Id_Movimiento_Producto`) REFERENCES `erp_movimiento_producto` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_detalle_movimiento_producto_ibfk_2` FOREIGN KEY (`Id_Kardex`) REFERENCES `erp_kardex` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_detalle_orden_venta`
--
ALTER TABLE `erp_detalle_orden_venta`
  ADD CONSTRAINT `erp_detalle_orden_venta_ibfk_1` FOREIGN KEY (`Id_Orden_Venta`) REFERENCES `erp_orden_venta` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_detalle_orden_venta_ibfk_2` FOREIGN KEY (`Id_Producto`) REFERENCES `erp_producto` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_detalle_orden_venta_ibfk_3` FOREIGN KEY (`Id_Detalle_Precio`) REFERENCES `erp_detalle_precio` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_detalle_precio`
--
ALTER TABLE `erp_detalle_precio`
  ADD CONSTRAINT `erp_detalle_precio_ibfk_1` FOREIGN KEY (`Id_Sucursal`) REFERENCES `erp_sucursal` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_detalle_precio_ibfk_2` FOREIGN KEY (`Id_Producto`) REFERENCES `erp_producto` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_detalle_solicitud_bodega`
--
ALTER TABLE `erp_detalle_solicitud_bodega`
  ADD CONSTRAINT `erp_detalle_solicitud_bodega_ibfk_1` FOREIGN KEY (`Id_Producto`) REFERENCES `erp_producto` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_detalle_solicitud_bodega_ibfk_2` FOREIGN KEY (`Id_Solicitud_Bodega`) REFERENCES `erp_solicitud_bodega` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_detalle_venta`
--
ALTER TABLE `erp_detalle_venta`
  ADD CONSTRAINT `erp_detalle_venta_ibfk_1` FOREIGN KEY (`Id_Venta`) REFERENCES `erp_venta` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_detalle_venta_ibfk_2` FOREIGN KEY (`Id_Detalle_Precio`) REFERENCES `erp_detalle_precio` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_detalle_venta_ibfk_3` FOREIGN KEY (`Id_Kardex`) REFERENCES `erp_kardex` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_empleado`
--
ALTER TABLE `erp_empleado`
  ADD CONSTRAINT `erp_empleado_ibfk_1` FOREIGN KEY (`Id_Estado_Civil`) REFERENCES `erp_estado_civil` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_empleado_ibfk_2` FOREIGN KEY (`Id_Entidad`) REFERENCES `erp_entidad` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_empleado_ibfk_3` FOREIGN KEY (`Id_Estado`) REFERENCES `erp_estado` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_kardex`
--
ALTER TABLE `erp_kardex`
  ADD CONSTRAINT `erp_kardex_ibfk_1` FOREIGN KEY (`Id_Sucursal`) REFERENCES `erp_sucursal` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_kardex_ibfk_2` FOREIGN KEY (`Id_Producto`) REFERENCES `erp_producto` (`Id`) ON DELETE CASCADE,
  ADD CONSTRAINT `erp_kardex_ibfk_3` FOREIGN KEY (`Id_Tipo_Movimiento`) REFERENCES `erp_tipo_movimiento` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_kardex_ibfk_4` FOREIGN KEY (`Id_Bodega`) REFERENCES `erp_bodega` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_laboratorio`
--
ALTER TABLE `erp_laboratorio`
  ADD CONSTRAINT `erp_laboratorio_ibfk_1` FOREIGN KEY (`Id_Entidad`) REFERENCES `erp_entidad` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_laboratorio_ibfk_2` FOREIGN KEY (`Id_Estado`) REFERENCES `erp_estado` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_lote_kardex`
--
ALTER TABLE `erp_lote_kardex`
  ADD CONSTRAINT `erp_lote_kardex_ibfk_1` FOREIGN KEY (`Id_Kardex`) REFERENCES `erp_kardex` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_lote_kardex_ibfk_2` FOREIGN KEY (`Id_Lote`) REFERENCES `erp_lote` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_menu`
--
ALTER TABLE `erp_menu`
  ADD CONSTRAINT `erp_menu_ibfk_1` FOREIGN KEY (`Id_Modulo`) REFERENCES `erp_modulo` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_menu_ibfk_2` FOREIGN KEY (`Id_Menu_Padre`) REFERENCES `erp_menu` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_menu_usuario`
--
ALTER TABLE `erp_menu_usuario`
  ADD CONSTRAINT `erp_menu_usuario_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `erp_usuario` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_menu_usuario_ibfk_3` FOREIGN KEY (`Id_Entidad`) REFERENCES `erp_entidad` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_menu_usuario_ibfk_4` FOREIGN KEY (`Id_Estado`) REFERENCES `erp_estado` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_menu_usuario_ibfk_5` FOREIGN KEY (`Id_Menu`) REFERENCES `erp_menu` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_modulo`
--
ALTER TABLE `erp_modulo`
  ADD CONSTRAINT `erp_modulo_ibfk_1` FOREIGN KEY (`Id_Entidad`) REFERENCES `erp_entidad` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_modulo_ibfk_2` FOREIGN KEY (`Id_Estado`) REFERENCES `erp_estado` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_movimiento_producto`
--
ALTER TABLE `erp_movimiento_producto`
  ADD CONSTRAINT `erp_movimiento_producto_ibfk_2` FOREIGN KEY (`Id_Tipo_Movimiento`) REFERENCES `erp_tipo_movimiento` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_movimiento_producto_ibfk_3` FOREIGN KEY (`Id_Entidad`) REFERENCES `erp_entidad` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_movimiento_producto_ibfk_4` FOREIGN KEY (`Id_Estado`) REFERENCES `erp_estado` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_municipio`
--
ALTER TABLE `erp_municipio`
  ADD CONSTRAINT `erp_municipio_ibfk_1` FOREIGN KEY (`Id_Departamento`) REFERENCES `erp_departamento` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_orden_venta`
--
ALTER TABLE `erp_orden_venta`
  ADD CONSTRAINT `erp_orden_venta_ibfk_1` FOREIGN KEY (`Id_Tipo_Venta`) REFERENCES `erp_tipo_venta` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_orden_venta_ibfk_3` FOREIGN KEY (`Id_Cliente`) REFERENCES `erp_cliente` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_orden_venta_ibfk_4` FOREIGN KEY (`Id_Sucursal`) REFERENCES `erp_sucursal` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_orden_venta_ibfk_5` FOREIGN KEY (`Id_Entidad`) REFERENCES `erp_entidad` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_orden_venta_ibfk_6` FOREIGN KEY (`Id_Estado`) REFERENCES `erp_estado` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_presentacion`
--
ALTER TABLE `erp_presentacion`
  ADD CONSTRAINT `erp_presentacion_ibfk_1` FOREIGN KEY (`Id_Unidad_Medida`) REFERENCES `erp_unidad_medida` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_producto`
--
ALTER TABLE `erp_producto`
  ADD CONSTRAINT `erp_producto_ibfk_1` FOREIGN KEY (`Id_Presentacion`) REFERENCES `erp_presentacion` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_producto_ibfk_3` FOREIGN KEY (`Id_Categoria`) REFERENCES `erp_categoria` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_producto_ibfk_4` FOREIGN KEY (`Id_Entidad`) REFERENCES `erp_entidad` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_producto_ibfk_5` FOREIGN KEY (`Id_Estado`) REFERENCES `erp_estado` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_producto_ibfk_6` FOREIGN KEY (`Id_Laboratorio`) REFERENCES `erp_laboratorio` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_proveedor`
--
ALTER TABLE `erp_proveedor`
  ADD CONSTRAINT `erp_proveedor_ibfk_1` FOREIGN KEY (`Id_Cuenta_Proveedor`) REFERENCES `erp_cuenta_proveedor` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_proveedor_ibfk_3` FOREIGN KEY (`Id_Municipio`) REFERENCES `erp_municipio` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_proveedor_ibfk_4` FOREIGN KEY (`Id_Entidad`) REFERENCES `erp_entidad` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_proveedor_ibfk_5` FOREIGN KEY (`Id_Estado`) REFERENCES `erp_estado` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_solicitud_bodega`
--
ALTER TABLE `erp_solicitud_bodega`
  ADD CONSTRAINT `erp_solicitud_bodega_ibfk_1` FOREIGN KEY (`Id_Sucursal`) REFERENCES `erp_sucursal` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_solicitud_bodega_ibfk_2` FOREIGN KEY (`Id_Kardex`) REFERENCES `erp_kardex` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_solicitud_bodega_ibfk_3` FOREIGN KEY (`Id_Solicitante`) REFERENCES `erp_usuario` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_solicitud_bodega_ibfk_5` FOREIGN KEY (`Id_Bodega`) REFERENCES `erp_bodega` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_solicitud_bodega_ibfk_6` FOREIGN KEY (`Id_Entidad`) REFERENCES `erp_entidad` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_solicitud_bodega_ibfk_7` FOREIGN KEY (`Id_Estado`) REFERENCES `erp_estado` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_sucursal`
--
ALTER TABLE `erp_sucursal`
  ADD CONSTRAINT `erp_sucursal_ibfk_1` FOREIGN KEY (`Id_Municipio`) REFERENCES `erp_municipio` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_sucursal_ibfk_2` FOREIGN KEY (`Id_Empleado_Encargado`) REFERENCES `erp_usuario` (`Id_Usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_sucursal_ibfk_3` FOREIGN KEY (`Id_Entidad`) REFERENCES `erp_entidad` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_sucursal_ibfk_4` FOREIGN KEY (`Id_Estado`) REFERENCES `erp_estado` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_sucursal_usuario`
--
ALTER TABLE `erp_sucursal_usuario`
  ADD CONSTRAINT `erp_sucursal_usuario_ibfk_1` FOREIGN KEY (`Id_Sucursal`) REFERENCES `erp_sucursal` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_sucursal_usuario_ibfk_2` FOREIGN KEY (`Id_Usuario`) REFERENCES `erp_usuario` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_tipo_entidad`
--
ALTER TABLE `erp_tipo_entidad`
  ADD CONSTRAINT `erp_tipo_entidad_ibfk_1` FOREIGN KEY (`Id_Estado`) REFERENCES `erp_estado` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_tipo_entidad_ibfk_2` FOREIGN KEY (`Id_Entidad`) REFERENCES `erp_entidad` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_transaccion_kardex`
--
ALTER TABLE `erp_transaccion_kardex`
  ADD CONSTRAINT `erp_transaccion_kardex_ibfk_1` FOREIGN KEY (`Id_Kardex`) REFERENCES `erp_kardex` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_usuario`
--
ALTER TABLE `erp_usuario`
  ADD CONSTRAINT `erp_usuario_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `erp_empleado` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_usuario_ibfk_2` FOREIGN KEY (`Id_Entidad`) REFERENCES `erp_entidad` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_usuario_ibfk_3` FOREIGN KEY (`Id_Estado`) REFERENCES `erp_estado` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_usuario_ibfk_4` FOREIGN KEY (`Id_Rol`) REFERENCES `erp_rol` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `erp_venta`
--
ALTER TABLE `erp_venta`
  ADD CONSTRAINT `erp_venta_ibfk_1` FOREIGN KEY (`Id_Forma_Pago`) REFERENCES `erp_forma_pago` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_venta_ibfk_3` FOREIGN KEY (`Id_Tipo_Movimiento`) REFERENCES `erp_tipo_movimiento` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_venta_ibfk_4` FOREIGN KEY (`Id_Condicion_Pago`) REFERENCES `erp_condicion_pago` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_venta_ibfk_5` FOREIGN KEY (`Id_Cliente`) REFERENCES `erp_cliente` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_venta_ibfk_6` FOREIGN KEY (`Id_Entidad`) REFERENCES `erp_entidad` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `erp_venta_ibfk_7` FOREIGN KEY (`Id_Estado`) REFERENCES `erp_estado` (`Id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
