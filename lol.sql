-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2024 a las 19:30:28
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `build`
--

CREATE TABLE `build` (
  `id_build` int(3) NOT NULL,
  `idcamp` int(11) NOT NULL,
  `obj1` int(3) NOT NULL,
  `obj2` int(3) NOT NULL,
  `obj3` int(3) NOT NULL,
  `obj4` int(3) NOT NULL,
  `obj5` int(3) NOT NULL,
  `obj6` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `build`
--

INSERT INTO `build` (`id_build`, `idcamp`, `obj1`, `obj2`, `obj3`, `obj4`, `obj5`, `obj6`) VALUES
(15, 9, 14, 27, 23, 16, 16, 72),
(16, 12, 16, 16, 16, 16, 16, 69);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campeon`
--

CREATE TABLE `campeon` (
  `id_c` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `k` int(11) NOT NULL,
  `d` int(11) NOT NULL,
  `a` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `campeon`
--

INSERT INTO `campeon` (`id_c`, `nombre`, `k`, `d`, `a`) VALUES
(9, 'Vayne', 0, 0, 0),
(10, 'Kaisa', 0, 0, 0),
(11, 'Caitlyn', 0, 0, 0),
(12, 'Ekko', 0, 0, 0),
(14, 'Akali', 0, 0, 0),
(15, 'Zeri', 0, 0, 0),
(16, 'Leblanc', 0, 0, 0),
(17, 'Yasuo', 0, 0, 0),
(18, 'Samira', 0, 0, 0),
(19, 'Katarina', 0, 0, 0),
(20, 'Lucian', 0, 0, 0),
(22, 'Zoe', 0, 0, 0),
(23, 'Teemo', 0, 0, 0),
(24, 'Jinx', 0, 0, 0),
(25, 'Jhin', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `id_j` int(3) NOT NULL,
  `nick` varchar(10) NOT NULL,
  `k` int(11) NOT NULL,
  `d` int(11) NOT NULL,
  `a` int(11) NOT NULL,
  `main` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`id_j`, `nick`, `k`, `d`, `a`, `main`) VALUES
(37, 'Pablo', 3, 3, 2, 9),
(42, 'sacacacaca', 0, 0, 0, 14),
(44, 'dasdssacca', 0, 0, 0, 10),
(48, 'ddfh', 0, 0, 0, 20),
(49, 'fwfw', 0, 0, 0, 24),
(51, 'dvvd', 0, 0, 0, 14),
(52, 'vvsdvsdv', 0, 0, 0, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetos`
--

CREATE TABLE `objetos` (
  `id_obj` int(3) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `coste` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `objetos`
--

INSERT INTO `objetos` (`id_obj`, `nombre`, `tipo`, `coste`) VALUES
(1, 'Guantelete de hielo', 'Luchador', 2600),
(2, 'Final del ingenio', 'Luchador', 2800),
(3, 'Eclipse', 'Luchador', 2800),
(4, 'Mecanoespada Punki', 'Luchador', 2800),
(5, 'Manamune', 'Luchador', 2900),
(6, 'Coraza del muerto', 'Luchador', 2900),
(7, 'El final', 'Luchador', 3000),
(8, 'Experimento del hexarmadura', 'Luchador', 3000),
(9, 'Rompecascos', 'Luchador', 3000),
(10, 'Cuchilla negra', 'Luchador', 3000),
(11, 'Fauces de Malmortius', 'Luchador', 3100),
(12, 'Lanza de shojin', 'Luchador', 3100),
(13, 'Firmamento Desgarrado', 'Luchador', 3100),
(14, 'Hoja del rey arruinado', 'Luchador', 3200),
(15, 'Baile de la muerte', 'Luchador', 3200),
(16, 'Ángel de la guarda', 'Luchador', 3200),
(17, 'Calibrado de Sterak', 'Luchador', 3200),
(18, 'Cortasendas', 'Luchador', 3300),
(19, 'Hidra voraz', 'Luchador', 3300),
(20, 'Hidra titánica', 'Luchador', 3300),
(21, 'Fuerza de trinidad', 'Luchador', 3333),
(22, 'Huracán de Runaan', 'Tirador', 2800),
(23, 'Bailarín Espectral', 'Tirador', 2800),
(24, 'Puñal de Statik', 'Tirador', 2900),
(25, 'Segador de esencia', 'Tirador', 2900),
(26, 'Diente de Nashor', 'Tirador', 3000),
(27, 'Hoja de Furia de Guinsoo', 'Tirador', 3000),
(28, 'Verdugo de krakens', 'Tirador', 3000),
(29, 'Cañón de fuego rápido', 'Tirador', 3000),
(30, 'Arcoescudo Inmortal', 'Tirador', 3000),
(31, 'Cimitarra Mercurial', 'Tirador', 3000),
(32, 'Recordatorio Letal', 'Tirador', 3000),
(33, 'Recuerdos de Lord Dominik', 'Tirador', 3000),
(34, 'Recaudadora', 'Tirador', 3100),
(35, 'Navaja de asalto', 'Tirador', 3100),
(36, 'Filoveloz de navori', 'Tirador', 3300),
(37, 'Filo infinito', 'Tirador', 3300),
(38, 'Sanguinaria', 'Tirador', 3400),
(39, 'Colmillo de serpiente', 'Asesino', 2500),
(40, 'Guja Sombria', 'Asesino', 2600),
(41, 'Filo fantasmal de Youmuu', 'Asesino', 2700),
(42, 'Oportunidades', 'Asesino', 2700),
(43, 'Filo de la noche', 'Asesino', 2800),
(44, 'Espada ciclovoltaica', 'Asesino', 2900),
(45, 'Soberbia', 'Asesino', 3000),
(46, 'Arco axiómatico', 'Asesino', 3000),
(47, 'Rencor de Serylda', 'Asesino', 3200),
(48, 'Hidra Profana', 'Asesino', 3300),
(49, 'Robaalmas de Mejai', 'Mago', 1500),
(50, 'Morellonomicón', 'Mago', 2200),
(51, 'Vara de las edades', 'Mago', 2600),
(52, 'Cetro de Cristal de Rylai', 'Mago', 2600),
(53, 'Cintomisil hextech', 'Mago', 2600),
(54, 'Malignidad', 'Mago', 2700),
(55, 'Precisión infalible', 'Mago', 2700),
(56, 'Florescencia sepulcral', 'Mago', 2850),
(57, 'Compañera de Luden', 'Mago', 2900),
(58, 'Bastón del arcangel', 'Mago', 2900),
(59, 'Sobrecarga tormentosa', 'Mago', 2900),
(60, 'Tormento de Liandry', 'Mago', 3000),
(61, 'Impulso cósmico', 'Mago', 3000),
(62, 'Bastón del Vacio', 'Mago', 3000),
(63, 'Velo del hada de la Muerte', 'Mago', 3100),
(64, 'Perdición del Liche', 'Mago', 3100),
(65, 'Creagrietas', 'Mago', 3100),
(66, 'Llamasombría', 'Mago', 3200),
(67, 'Reloj de arena de Zhonya', 'Mago', 3250),
(68, 'Sombrero mortal del Rabadon', 'Mago', 3600),
(69, 'Botas jonias de la lucidez', 'Botas', 900),
(70, 'Botas de rapidez', 'Botas', 900),
(71, 'Botas de movilidad', 'Botas', 1000),
(72, 'Grebas de berserker', 'Botas', 1100),
(73, 'Botas de Mercurio', 'Botas', 1100),
(74, 'Botas Blindadas', 'Botas', 1100),
(75, 'Botas de hechizero', 'Botas', 1100);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `build`
--
ALTER TABLE `build`
  ADD PRIMARY KEY (`id_build`),
  ADD KEY `nombrecamp` (`idcamp`),
  ADD KEY `nombreobj` (`obj1`),
  ADD KEY `idcamp` (`idcamp`),
  ADD KEY `obj2` (`obj2`),
  ADD KEY `obj3` (`obj3`),
  ADD KEY `obj4` (`obj4`),
  ADD KEY `obj5` (`obj5`),
  ADD KEY `obj6` (`obj6`);

--
-- Indices de la tabla `campeon`
--
ALTER TABLE `campeon`
  ADD PRIMARY KEY (`id_c`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`id_j`),
  ADD KEY `main` (`main`) USING BTREE;

--
-- Indices de la tabla `objetos`
--
ALTER TABLE `objetos`
  ADD PRIMARY KEY (`id_obj`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `build`
--
ALTER TABLE `build`
  MODIFY `id_build` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `campeon`
--
ALTER TABLE `campeon`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `jugador`
--
ALTER TABLE `jugador`
  MODIFY `id_j` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `objetos`
--
ALTER TABLE `objetos`
  MODIFY `id_obj` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `build`
--
ALTER TABLE `build`
  ADD CONSTRAINT `build_ibfk_1` FOREIGN KEY (`obj1`) REFERENCES `objetos` (`id_obj`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `build_ibfk_2` FOREIGN KEY (`obj2`) REFERENCES `objetos` (`id_obj`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `build_ibfk_3` FOREIGN KEY (`obj3`) REFERENCES `objetos` (`id_obj`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `build_ibfk_4` FOREIGN KEY (`obj4`) REFERENCES `objetos` (`id_obj`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `build_ibfk_5` FOREIGN KEY (`obj5`) REFERENCES `objetos` (`id_obj`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `build_ibfk_6` FOREIGN KEY (`obj6`) REFERENCES `objetos` (`id_obj`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `build_ibfk_7` FOREIGN KEY (`idcamp`) REFERENCES `campeon` (`id_c`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD CONSTRAINT `jugador_ibfk_1` FOREIGN KEY (`main`) REFERENCES `campeon` (`id_c`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
