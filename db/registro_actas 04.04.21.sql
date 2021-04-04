-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2021 a las 07:18:11
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro_actas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actacongre`
--

CREATE TABLE `actacongre` (
  `idactacongre` int(11) NOT NULL,
  `num_acta` varchar(10) NOT NULL,
  `observa` varchar(100) NOT NULL,
  `tipo_acta` varchar(20) NOT NULL,
  `presi0` int(11) NOT NULL,
  `presi1` int(11) NOT NULL,
  `presi2` int(11) NOT NULL,
  `presi3` int(11) NOT NULL,
  `presi4` int(11) NOT NULL,
  `presi5` int(11) NOT NULL,
  `presi6` int(11) NOT NULL,
  `presi7` int(11) NOT NULL,
  `presi8` int(11) NOT NULL,
  `presi9` int(11) NOT NULL,
  `presi10` int(11) NOT NULL,
  `presi11` int(11) NOT NULL,
  `presi12` int(11) NOT NULL,
  `presi13` int(11) NOT NULL,
  `presi14` int(11) NOT NULL,
  `presi15` int(11) NOT NULL,
  `presi16` int(11) NOT NULL,
  `presi17` int(11) NOT NULL,
  `presi18` int(11) NOT NULL,
  `congre01` int(11) NOT NULL,
  `congre02` int(11) NOT NULL,
  `congre03` int(11) NOT NULL,
  `congre04` int(11) NOT NULL,
  `congre11` int(11) NOT NULL,
  `congre12` int(11) NOT NULL,
  `congre13` int(11) NOT NULL,
  `congre14` int(11) NOT NULL,
  `congre21` int(11) NOT NULL,
  `congre22` int(11) NOT NULL,
  `congre23` int(11) NOT NULL,
  `congre24` int(11) NOT NULL,
  `congre31` int(11) NOT NULL,
  `congre32` int(11) NOT NULL,
  `congre33` int(11) NOT NULL,
  `congre34` int(11) NOT NULL,
  `congre41` int(11) NOT NULL,
  `congre42` int(11) NOT NULL,
  `congre43` int(11) NOT NULL,
  `congre44` int(11) NOT NULL,
  `congre51` int(11) NOT NULL,
  `congre52` int(11) NOT NULL,
  `congre53` int(11) NOT NULL,
  `congre54` int(11) NOT NULL,
  `congre61` int(11) NOT NULL,
  `congre62` int(11) NOT NULL,
  `congre63` int(11) NOT NULL,
  `congre64` int(11) NOT NULL,
  `congre71` int(11) NOT NULL,
  `congre72` int(11) NOT NULL,
  `congre73` int(11) NOT NULL,
  `congre74` int(11) NOT NULL,
  `congre81` int(11) NOT NULL,
  `congre82` int(11) NOT NULL,
  `congre83` int(11) NOT NULL,
  `congre84` int(11) NOT NULL,
  `congre91` int(11) NOT NULL,
  `congre92` int(11) NOT NULL,
  `congre93` int(11) NOT NULL,
  `congre94` int(11) NOT NULL,
  `congre101` int(11) NOT NULL,
  `congre102` int(11) NOT NULL,
  `congre103` int(11) NOT NULL,
  `congre104` int(11) NOT NULL,
  `congre111` int(11) NOT NULL,
  `congre112` int(11) NOT NULL,
  `congre113` int(11) NOT NULL,
  `congre114` int(11) NOT NULL,
  `congre121` int(11) NOT NULL,
  `congre122` int(11) NOT NULL,
  `congre123` int(11) NOT NULL,
  `congre124` int(11) NOT NULL,
  `congre131` int(11) NOT NULL,
  `congre132` int(11) NOT NULL,
  `congre133` int(11) NOT NULL,
  `congre134` int(11) NOT NULL,
  `congre141` int(11) NOT NULL,
  `congre142` int(11) NOT NULL,
  `congre143` int(11) NOT NULL,
  `congre144` int(11) NOT NULL,
  `congre151` int(11) NOT NULL,
  `congre152` int(11) NOT NULL,
  `congre153` int(11) NOT NULL,
  `congre154` int(11) NOT NULL,
  `congre161` int(11) NOT NULL,
  `congre162` int(11) NOT NULL,
  `congre163` int(11) NOT NULL,
  `congre164` int(11) NOT NULL,
  `congre171` int(11) NOT NULL,
  `congre172` int(11) NOT NULL,
  `congre173` int(11) NOT NULL,
  `congre174` int(11) NOT NULL,
  `congre181` int(11) NOT NULL,
  `congre182` int(11) NOT NULL,
  `congre183` int(11) NOT NULL,
  `congre184` int(11) NOT NULL,
  `blanco` int(11) NOT NULL,
  `nulo` int(11) NOT NULL,
  `impugnado` int(11) NOT NULL,
  `total_congre` int(11) NOT NULL,
  `condicion` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actacongre`
--

INSERT INTO `actacongre` (`idactacongre`, `num_acta`, `observa`, `tipo_acta`, `presi0`, `presi1`, `presi2`, `presi3`, `presi4`, `presi5`, `presi6`, `presi7`, `presi8`, `presi9`, `presi10`, `presi11`, `presi12`, `presi13`, `presi14`, `presi15`, `presi16`, `presi17`, `presi18`, `congre01`, `congre02`, `congre03`, `congre04`, `congre11`, `congre12`, `congre13`, `congre14`, `congre21`, `congre22`, `congre23`, `congre24`, `congre31`, `congre32`, `congre33`, `congre34`, `congre41`, `congre42`, `congre43`, `congre44`, `congre51`, `congre52`, `congre53`, `congre54`, `congre61`, `congre62`, `congre63`, `congre64`, `congre71`, `congre72`, `congre73`, `congre74`, `congre81`, `congre82`, `congre83`, `congre84`, `congre91`, `congre92`, `congre93`, `congre94`, `congre101`, `congre102`, `congre103`, `congre104`, `congre111`, `congre112`, `congre113`, `congre114`, `congre121`, `congre122`, `congre123`, `congre124`, `congre131`, `congre132`, `congre133`, `congre134`, `congre141`, `congre142`, `congre143`, `congre144`, `congre151`, `congre152`, `congre153`, `congre154`, `congre161`, `congre162`, `congre163`, `congre164`, `congre171`, `congre172`, `congre173`, `congre174`, `congre181`, `congre182`, `congre183`, `congre184`, `blanco`, `nulo`, `impugnado`, `total_congre`, `condicion`) VALUES
(2, '1', '', 'CONGRESAL', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 11, 1, 1),
(3, '2', '', 'CONGRESAL', 10000, 11110, 222220, 3333330, 4444, 55555, 6666, 7777777, 888888, 99999, 101010, 11111111, 12121212, 13131313, 141414, 151515, 161616, 171717, 181818, 1, 2, 3, 4, 11, 12, 13, 14, 21, 22, 23, 24, 31, 32, 33, 34, 41, 42, 43, 44, 51, 52, 53, 54, 61, 62, 63, 64, 71, 72, 73, 74, 81, 82, 83, 84, 91, 92, 93, 94, 101, 102, 103, 104, 111, 112, 113, 114, 121, 122, 123, 124, 131, 132, 133, 134, 141, 142, 143, 144, 151, 152, 153, 154, 161, 162, 163, 164, 171, 172, 173, 174, 181, 182, 183, 184, 0, 0, 0, 123456789, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actapresi`
--

CREATE TABLE `actapresi` (
  `idactapresi` int(11) NOT NULL,
  `num_acta` varchar(10) NOT NULL,
  `observa` varchar(100) NOT NULL,
  `tipo_acta` varchar(20) NOT NULL,
  `presi1` int(11) NOT NULL,
  `presi2` int(11) NOT NULL,
  `presi3` int(11) NOT NULL,
  `presi4` int(11) NOT NULL,
  `presi5` int(11) NOT NULL,
  `presi6` int(11) NOT NULL,
  `presi7` int(11) NOT NULL,
  `presi8` int(11) NOT NULL,
  `presi9` int(11) NOT NULL,
  `presi10` int(11) NOT NULL,
  `presi11` int(11) NOT NULL,
  `presi12` int(11) NOT NULL,
  `presi13` int(11) NOT NULL,
  `presi14` int(11) NOT NULL,
  `presi15` int(11) NOT NULL,
  `presi16` int(11) NOT NULL,
  `presi17` int(11) NOT NULL,
  `presi18` int(11) NOT NULL,
  `blanco` int(11) NOT NULL,
  `nulo` int(11) NOT NULL,
  `impugnado` int(11) NOT NULL,
  `total_presi` int(11) NOT NULL,
  `condicion` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actapresi`
--

INSERT INTO `actapresi` (`idactapresi`, `num_acta`, `observa`, `tipo_acta`, `presi1`, `presi2`, `presi3`, `presi4`, `presi5`, `presi6`, `presi7`, `presi8`, `presi9`, `presi10`, `presi11`, `presi12`, `presi13`, `presi14`, `presi15`, `presi16`, `presi17`, `presi18`, `blanco`, `nulo`, `impugnado`, `total_presi`, `condicion`) VALUES
(1, '0542', 'total no coincide', 'PRESIDENTE', 1, 0, 10, 16, 1, 2, 1, 4, 5, 8, 2, 56, 5, 9, 7, 2, 5, 8, 6, 7, 0, 548, 0),
(2, '4521', '', 'PRESIDENTE', 6, 8, 4, 5, 2, 1, 3, 6, 4, 58, 8, 9, 36, 3, 1, 9, 4, 1, 5, 32, 2, 598, 1),
(5, '02458', '', 'PRESIDENTE', 4, 8, 2, 6, 1, 7, 9, 5, 0, 12, 1, 58, 32, 54, 5, 4, 2, 58, 7, 0, 0, 587, 1),
(6, '154', 'voto 11 borroso', 'PRESIDENTE', 8, 4, 7, 5, 9, 6, 3, 2, 1, 4, 5, 7, 1, 25, 4, 7, 1, 5, 1, 5, 1, 258, 0),
(7, '8574', '', 'PRESIDENTE', 8, 4, 5, 10, 4, 3, 9, 14, 7, 7, 7, 8, 4, 10, 8, 10, 5, 3, 0, 0, 0, 587, 1),
(8, '5874', 'total no coincide', 'PRESIDENTE', 5, 25, 1, 5, 1, 6, 5, 1, 58, 5, 4, 5, 4, 5, 93, 9, 8, 6, 1, 1, 18, 280, 0),
(9, '123', 'total no coincide', 'PRESIDENTE', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 20, 1),
(10, '0987', 'total en acta 22 y conteo 21', 'PRESIDENTE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 22, 1),
(11, '2', '', 'PRESIDENTE', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 0, 0, 0),
(12, '33', '', 'PRESIDENTE', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 3, 11, 0),
(14, '455', 'prueba con tabla', 'PRESIDENTE', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(15, '784', '', 'PRESIDENTE', 8, 5, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 6, 8, 200, 1),
(16, '666', '', 'PRESIDENTE', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 100, 1),
(17, '2588', '', 'PRESIDENTE', 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 1000, 1),
(18, '1', '', 'PRESIDENTE', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `idpermiso` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`idpermiso`, `nombre`) VALUES
(1, 'Escritorio'),
(5, 'Acceso'),
(10, 'Actas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo_documento` varchar(20) NOT NULL,
  `num_documento` varchar(20) NOT NULL,
  `direccion` varchar(70) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `login` varchar(20) NOT NULL,
  `clave` varchar(64) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `tipo_documento`, `num_documento`, `direccion`, `telefono`, `email`, `cargo`, `login`, `clave`, `imagen`, `condicion`) VALUES
(1, 'admin', 'DNI', '47715777', '', '931742904', '', '', 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '1616450476.jpg', 1),
(3, 'SAMO MASTER', 'DNI', '41967920', 'pantoja # 311 - punchana', '965804357', 'samorj1783@gmail.com', 'ADMIN MASTER', 'SAMOADMIN', 'c9fd44649392f5b5797e404bbf5d9fefad55d35195c015ad61aa1d7df955be73', '1616450375.png', 1),
(4, 'SAMO Usuario', 'DNI', '24152646', '', '', '', 'registrador', 'samo1', '548d7ac7f801fb9b781322fd1871b990c1b8a4fb6733c3d2041b99da2c46b2ab', '1616471234.jpg', 1),
(5, 'registro', 'DNI', '256', '', '', '', '', 'registro', 'ddea6da3af0b7fce795deb5c42adf6c28d0381c2eb22cba0e0cea68ef59806e4', '', 1),
(6, 'regcongre', 'DNI', '123456', '', '', '', '', 'congre', '37b0cb37796cee5853c6593fcb0cc897e56bdd3013bfe8debb0eb23ea3649ad3', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_permiso`
--

CREATE TABLE `usuario_permiso` (
  `idusuario_permiso` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idpermiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_permiso`
--

INSERT INTO `usuario_permiso` (`idusuario_permiso`, `idusuario`, `idpermiso`) VALUES
(170, 4, 1),
(171, 4, 5),
(193, 4, 10),
(194, 3, 1),
(198, 3, 5),
(203, 3, 10),
(204, 1, 1),
(208, 1, 5),
(213, 1, 10),
(214, 5, 1),
(215, 5, 10),
(216, 6, 1),
(217, 6, 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actacongre`
--
ALTER TABLE `actacongre`
  ADD PRIMARY KEY (`idactacongre`),
  ADD UNIQUE KEY `num_acta` (`num_acta`);

--
-- Indices de la tabla `actapresi`
--
ALTER TABLE `actapresi`
  ADD PRIMARY KEY (`idactapresi`),
  ADD UNIQUE KEY `num_acta` (`num_acta`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`idpermiso`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `login_UNIQUE` (`login`);

--
-- Indices de la tabla `usuario_permiso`
--
ALTER TABLE `usuario_permiso`
  ADD PRIMARY KEY (`idusuario_permiso`),
  ADD KEY `fk_usuario_permiso_permiso_idx` (`idpermiso`),
  ADD KEY `fk_usuario_permiso_usuario_idx` (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actacongre`
--
ALTER TABLE `actacongre`
  MODIFY `idactacongre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `actapresi`
--
ALTER TABLE `actapresi`
  MODIFY `idactapresi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `idpermiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario_permiso`
--
ALTER TABLE `usuario_permiso`
  MODIFY `idusuario_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario_permiso`
--
ALTER TABLE `usuario_permiso`
  ADD CONSTRAINT `fk_usuario_permiso_permiso` FOREIGN KEY (`idpermiso`) REFERENCES `permiso` (`idpermiso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_permiso_usuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
