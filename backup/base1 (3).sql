-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2022 a las 19:46:16
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `mail` varchar(70) DEFAULT NULL,
  `codigocurso` int(11) DEFAULT NULL,
  `contraseña` varchar(10) NOT NULL,
  `fechanac` date DEFAULT NULL,
  `genero` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`codigo`, `nombre`, `mail`, `codigocurso`, `contraseña`, `fechanac`, `genero`) VALUES
(1, 'Luis Alberto', 'beto123@gmail.com', 1, 'admin1', '1992-02-22', 'M'),
(2, 'Felipe', 'pipe1@gmail.com', 1, 'admin2', '2022-05-08', 'M'),
(3, 'admin', 'admin@admin.com', 8, 'admin3', '2020-03-31', 'F'),
(4, 'Camila', 'cami@admin.com', 9, 'ADMIN4', '2014-05-09', 'F'),
(5, 'Winner', 'winner@winner.com', 12, '12345', '2022-09-16', 'M');

--
-- Disparadores `alumnos`
--
DELIMITER $$
CREATE TRIGGER `before_usuarios_update` BEFORE UPDATE ON `alumnos` FOR EACH ROW begin
  insert into mailantiguo(codigoAlumno, nombre, mail) values (old.codigo, old.nombre, old.mail); 
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `codigo` int(11) NOT NULL,
  `nombrecurso` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`codigo`, `nombrecurso`) VALUES
(1, 'PHP'),
(2, 'Literatua'),
(3, 'Laravel'),
(4, 'Sistemas'),
(5, 'CSS'),
(6, 'HTML'),
(8, 'Sistemas 2 '),
(9, 'Sistemas 5'),
(12, 'Ingles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mailantiguo`
--

CREATE TABLE `mailantiguo` (
  `codigoAlumno` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `mail` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mailantiguo`
--

INSERT INTO `mailantiguo` (`codigoAlumno`, `nombre`, `mail`) VALUES
(8, 'ana2', 'ana2@gmail.com'),
(10, 'ana4', 'ole@gmail.com'),
(8, 'ana2', 'ana33@gmail.com'),
(10, 'ana4', 'ole4@gmail.com'),
(10, 'ana44', 'ole44@gmail.com'),
(11, 'ole', 'ana.2@gmail.com'),
(15, 'Anna', 'ana6@gmail.com'),
(11, 'ole3', 'ana.23@gmail.com'),
(14, 'toreto', 'luisa@google.co'),
(20, 'Lorena', 'fgsg'),
(11, 'ole3', 'ana.23@gmail.com'),
(11, 'ole3', 'ana.23@gmail.com'),
(13, 'Maximiliano', 'mm@hotmail.com'),
(16, 'Lorena', 'lore@gmail.com'),
(11, 'ole3', 'ana.23@gmail.com'),
(1, 'Luis Alberto', 'beto123@gmail.com'),
(2, 'Felipe', 'pipe1@gmail.com'),
(3, 'admin', 'admin@admin.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
