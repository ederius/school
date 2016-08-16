-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2016 a las 05:48:40
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `school`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acudiente`
--

CREATE TABLE IF NOT EXISTS `acudiente` (
`idacudiente` int(11) NOT NULL,
  `nombreAcudiente` text NOT NULL,
  `celularAcudiente` bigint(20) NOT NULL,
  `telefonoAcudiente` int(11) NOT NULL,
  `direccionAcudiente` varchar(20) NOT NULL,
  `direccionTrabajoAcudiente` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `idalumno` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acudiente`
--

INSERT INTO `acudiente` (`idacudiente`, `nombreAcudiente`, `celularAcudiente`, `telefonoAcudiente`, `direccionAcudiente`, `direccionTrabajoAcudiente`, `email`, `idalumno`) VALUES
(1, 'Carmen Alicia Diaz TOro', 2147483647, 7280228, 'calle 50 #12c 39', 'Carrera 45 #12 54', 'ederdiaz_@hotmail.com', 1),
(2, 'xcv', 513, 123, 'xcv', 'cv', 'ederitodiaz@gmail.com', 1),
(4, 'Eder Alberto Diaz Toro', 3006343860, 7282560, 'Calle 20 #12c- 39', 'calle 21# 21 - 07', 'ederdiaz_@hotmail.com', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `idadministrador` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `celular` int(11) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
`idalumno` int(11) NOT NULL,
  `nombreAlumno` text NOT NULL,
  `direccionAlumno` varchar(20) NOT NULL,
  `celularAlumno` bigint(20) NOT NULL,
  `telefonoAlumno` int(11) NOT NULL,
  `idcurso` int(11) NOT NULL,
  `idjornada` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idalumno`, `nombreAlumno`, `direccionAlumno`, `celularAlumno`, `telefonoAlumno`, `idcurso`, `idjornada`) VALUES
(1, 'Maria Jose Diaz Toro', 'calle 20 #12c 45', 302548787, 7292929, 1, 2),
(6, 'Maira Alejandra Diaz Toro', 'Calle 40 #23 - 23', 3025478967, 7288547, 2, 1),
(10, 'Carmen Alicia Diaz', 'Calle 45 # 56 - 56', 3004504074, 7290229, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areademateria`
--

CREATE TABLE IF NOT EXISTS `areademateria` (
`idarea` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
`idcurso` int(11) NOT NULL,
  `gradoCurso` int(11) NOT NULL,
  `nombreCurso` text NOT NULL,
  `ubicacionCurso` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idcurso`, `gradoCurso`, `nombreCurso`, `ubicacionCurso`) VALUES
(1, 6, '6-02', 'zona 1'),
(2, 6, '6-03', 'zona 1'),
(3, 7, '7-01', 'zona 2'),
(4, 7, '7-02', 'zona 2'),
(5, 8, '8-01', 'zona3'),
(6, 8, '8-02', 'zona 3'),
(7, 9, '9-01', 'zona 4'),
(8, 9, '9-02', 'zona 4\r\n'),
(9, 10, '10-01', 'zona5'),
(10, 10, '10-02', 'zona 5'),
(11, 11, '11-01', 'zona 6'),
(12, 11, '11-02', 'zona 6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursoxmateria`
--

CREATE TABLE IF NOT EXISTS `cursoxmateria` (
  `idcurso` int(11) NOT NULL,
  `idmateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cursoxmateria`
--

INSERT INTO `cursoxmateria` (`idcurso`, `idmateria`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 7),
(4, 8),
(4, 9),
(4, 10),
(4, 11),
(4, 12),
(4, 13),
(4, 14),
(5, 2),
(5, 3),
(5, 4),
(5, 7),
(5, 8),
(5, 9),
(5, 11),
(5, 12),
(5, 13),
(5, 14),
(5, 15),
(5, 16),
(5, 17),
(5, 18),
(5, 23),
(6, 2),
(6, 3),
(6, 4),
(6, 7),
(6, 8),
(6, 9),
(6, 12),
(6, 13),
(6, 14),
(6, 15),
(6, 16),
(6, 17),
(6, 18),
(6, 23),
(7, 2),
(7, 3),
(7, 4),
(7, 7),
(7, 8),
(7, 9),
(7, 11),
(7, 12),
(7, 13),
(7, 14),
(7, 15),
(7, 16),
(7, 17),
(7, 18),
(7, 23),
(8, 2),
(8, 3),
(8, 4),
(8, 7),
(8, 8),
(8, 9),
(8, 11),
(8, 12),
(8, 13),
(8, 14),
(8, 15),
(8, 16),
(8, 17),
(8, 18),
(8, 23),
(9, 8),
(9, 9),
(9, 11),
(9, 13),
(9, 14),
(9, 15),
(9, 16),
(9, 17),
(9, 18),
(9, 19),
(9, 20),
(9, 21),
(10, 8),
(10, 9),
(10, 11),
(10, 13),
(10, 14),
(10, 15),
(10, 16),
(10, 17),
(10, 18),
(10, 19),
(10, 20),
(10, 21),
(11, 1),
(11, 3),
(11, 7),
(11, 8),
(11, 9),
(11, 11),
(11, 13),
(11, 14),
(11, 22),
(11, 24),
(12, 1),
(12, 3),
(12, 7),
(12, 8),
(12, 9),
(12, 11),
(12, 13),
(12, 14),
(12, 22),
(12, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursoxprofesor`
--

CREATE TABLE IF NOT EXISTS `cursoxprofesor` (
  `idcurso` int(11) NOT NULL,
  `idprofesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
`idhorario` int(11) NOT NULL,
  `idcurso` int(11) NOT NULL,
  `idjornada` int(11) NOT NULL,
  `f11` text,
  `f12` text,
  `f13` text,
  `f14` text,
  `f15` text,
  `f16` text,
  `f17` text,
  `f21` text,
  `f22` text,
  `f23` text,
  `f24` text,
  `f25` text,
  `f26` text,
  `f27` text,
  `f31` text,
  `f32` text,
  `f33` text,
  `f34` text,
  `f35` text,
  `f36` text,
  `f37` text,
  `f41` text,
  `f42` text,
  `f43` text,
  `f44` text,
  `f45` text,
  `f46` text,
  `f47` text,
  `f61` text,
  `f62` text,
  `f63` text,
  `f64` text,
  `f65` text,
  `f66` text,
  `f67` text,
  `f71` text,
  `f72` text,
  `f73` text,
  `f74` text,
  `f75` text,
  `f76` text,
  `f77` text
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`idhorario`, `idcurso`, `idjornada`, `f11`, `f12`, `f13`, `f14`, `f15`, `f16`, `f17`, `f21`, `f22`, `f23`, `f24`, `f25`, `f26`, `f27`, `f31`, `f32`, `f33`, `f34`, `f35`, `f36`, `f37`, `f41`, `f42`, `f43`, `f44`, `f45`, `f46`, `f47`, `f61`, `f62`, `f63`, `f64`, `f65`, `f66`, `f67`, `f71`, `f72`, `f73`, `f74`, `f75`, `f76`, `f77`) VALUES
(4, 2, 1, 'Geometria - Anselma Pinto', 'Geometria - Anselma Pinto', 'Geometria - Anselma Pinto', 'Geometria - Anselma Pinto', 'Geometria - Anselma Pinto', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 4, 1, 'Estadistica - Gisela Franco Lechuga', 'Estadistica - Gisela Franco Lechuga', 'Estadistica - Gisela Franco Lechuga', 'Estadistica - Gisela Franco Lechuga', 'Geometria - Anselma Pinto', '', '', 'Geometria - Anselma Pinto', 'Geometria - Anselma Pinto', 'Geometria - Anselma Pinto', 'Geometria - Anselma Pinto', 'Geometria - Anselma Pinto', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, 1, 2, 'Geometria - Anselma Pinto', 'Estadistica - Gisela Franco Lechuga', 'Estadistica - Gisela Franco Lechuga', 'Estadistica - Gisela Franco Lechuga', 'Geometria - Anselma Pinto', 'Estadistica - Gisela Franco Lechuga', 'Estadistica - Gisela Franco Lechuga', 'Geometria - Anselma Pinto', '', '', '', '', '', '', 'Geometria - Anselma Pinto', '', '', '', '', '', '', 'Geometria - Anselma Pinto', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada`
--

CREATE TABLE IF NOT EXISTS `jornada` (
`idjornada` int(11) NOT NULL,
  `nombreJornada` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `jornada`
--

INSERT INTO `jornada` (`idjornada`, `nombreJornada`) VALUES
(1, 'Mañana'),
(2, 'Tarde'),
(3, 'Noche');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
`idmateria` int(11) NOT NULL,
  `nombreMateria` text NOT NULL,
  `credito` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`idmateria`, `nombreMateria`, `credito`) VALUES
(1, 'Matematicas', 4),
(2, 'Estadistica', 4),
(3, 'Geografia', 3),
(4, 'Geometria', 3),
(7, 'Historia', 3),
(8, 'Espanol', 4),
(9, 'Ingles', 4),
(10, 'Informatica', 3),
(11, 'Arte', 3),
(12, 'Urbanidad', 2),
(13, 'Deportes', 4),
(14, 'Etica', 4),
(15, 'Biologia', 4),
(16, 'Quimica', 4),
(17, 'Fisica', 4),
(18, 'Religion', 4),
(19, 'Trigonometria', 4),
(20, 'CienciasPoliticas', 4),
(21, 'Emprendimiento', 3),
(22, 'Democracia', 4),
(23, 'Algebra', 4),
(24, 'Naturales', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
`idnota` int(11) NOT NULL,
  `idalumno` int(11) NOT NULL,
  `idcurso` int(11) NOT NULL,
  `idperiodo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`idnota`, `idalumno`, `idcurso`, `idperiodo`) VALUES
(78, 1, 1, 1),
(79, 1, 1, 1),
(80, 1, 1, 2),
(81, 1, 1, 3),
(82, 1, 1, 4),
(83, 6, 6, 2),
(84, 6, 6, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notaxmateria`
--

CREATE TABLE IF NOT EXISTS `notaxmateria` (
  `idnota` int(11) NOT NULL,
  `notaMatematicas` int(11) DEFAULT NULL,
  `descripcionMatematicas` text,
  `notaEstadistica` int(11) DEFAULT NULL,
  `descripcionEstadistica` text,
  `notaGeografia` int(11) DEFAULT NULL,
  `descripcionGeografia` text,
  `notaGeometria` int(11) DEFAULT NULL,
  `descripcionGeometria` text,
  `notaHistoria` int(11) DEFAULT NULL,
  `descripcionHistoria` text,
  `notaEspanol` int(11) DEFAULT NULL,
  `descripcionEspanol` text,
  `notaIngles` int(11) DEFAULT NULL,
  `descripcionIngles` text,
  `notaInformatica` int(11) DEFAULT NULL,
  `descripcionInformatica` text,
  `notaArte` int(11) DEFAULT NULL,
  `descripcionArte` text,
  `notaUrbanidad` int(11) DEFAULT NULL,
  `descripcionUrbanidad` text,
  `notaDeportes` int(11) DEFAULT NULL,
  `descripcionDeportes` text,
  `notaEtica` int(11) DEFAULT NULL,
  `descripcionEtica` text,
  `notaBiologia` int(11) DEFAULT NULL,
  `descripcionBiologia` text,
  `notaQuimica` int(11) DEFAULT NULL,
  `descripcionQuimica` text,
  `notaFisica` int(11) DEFAULT NULL,
  `descripcionFisica` text,
  `notaReligion` int(11) DEFAULT NULL,
  `descripcionReligion` text,
  `notaTrigonometria` int(11) DEFAULT NULL,
  `descripcionTrigonometria` text,
  `notaCienciasPoliticas` int(11) DEFAULT NULL,
  `descripcionCienciasPoliticas` text,
  `notaEmprendimiento` int(11) DEFAULT NULL,
  `descripcionEmprendimiento` text,
  `notaDemocracia` int(11) DEFAULT NULL,
  `descripcionDemocracia` text,
  `notaAlgebra` int(11) DEFAULT NULL,
  `descripcionAlgebra` text,
  `notaNaturales` int(11) DEFAULT NULL,
  `descripcionNaturales` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `notaxmateria`
--

INSERT INTO `notaxmateria` (`idnota`, `notaMatematicas`, `descripcionMatematicas`, `notaEstadistica`, `descripcionEstadistica`, `notaGeografia`, `descripcionGeografia`, `notaGeometria`, `descripcionGeometria`, `notaHistoria`, `descripcionHistoria`, `notaEspanol`, `descripcionEspanol`, `notaIngles`, `descripcionIngles`, `notaInformatica`, `descripcionInformatica`, `notaArte`, `descripcionArte`, `notaUrbanidad`, `descripcionUrbanidad`, `notaDeportes`, `descripcionDeportes`, `notaEtica`, `descripcionEtica`, `notaBiologia`, `descripcionBiologia`, `notaQuimica`, `descripcionQuimica`, `notaFisica`, `descripcionFisica`, `notaReligion`, `descripcionReligion`, `notaTrigonometria`, `descripcionTrigonometria`, `notaCienciasPoliticas`, `descripcionCienciasPoliticas`, `notaEmprendimiento`, `descripcionEmprendimiento`, `notaDemocracia`, `descripcionDemocracia`, `notaAlgebra`, `descripcionAlgebra`, `notaNaturales`, `descripcionNaturales`) VALUES
(79, 0, 'undefined', 0, 'undefined', 0, 'undefined', 1, '1', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined'),
(80, 0, 'undefined', 0, 'undefined', 0, 'undefined', 1, '1', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined'),
(81, 0, 'undefined', 0, 'undefined', 0, 'undefined', 10, '1000000000000000', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined'),
(82, 0, 'undefined', 0, 'undefined', 0, 'undefined', 4, '4444', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined'),
(84, 0, 'undefined', 0, 'undefined', 0, 'undefined', 1, '1', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined', 0, 'undefined');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE IF NOT EXISTS `periodos` (
`idperiodo` int(11) NOT NULL,
  `nombrePeriodos` text NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechafinal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `periodos`
--

INSERT INTO `periodos` (`idperiodo`, `nombrePeriodos`, `fechaInicio`, `fechafinal`) VALUES
(1, 'Primer Periodo', '2015-02-04', '2016-05-30'),
(2, 'Segundo Periodo', '2016-06-01', '2016-08-31'),
(3, 'Tercer Periodo', '2016-07-20', '2016-10-10'),
(4, 'Cuarto Periodo', '2016-08-18', '2016-11-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE IF NOT EXISTS `profesor` (
`idprofesor` int(11) NOT NULL,
  `nombreProfesor` text NOT NULL,
  `direccionProfesor` varchar(20) NOT NULL,
  `celularProfesor` bigint(20) NOT NULL,
  `telefonoProfesor` int(11) NOT NULL,
  `idmateria` int(11) NOT NULL,
  `Matematicas` varchar(3) DEFAULT NULL,
  `Estadistica` varchar(3) DEFAULT NULL,
  `Geografia` varchar(3) DEFAULT NULL,
  `Geometria` varchar(3) DEFAULT NULL,
  `Historia` varchar(3) DEFAULT NULL,
  `Espanol` varchar(3) DEFAULT NULL,
  `Ingles` varchar(3) DEFAULT NULL,
  `Informatica` varchar(3) DEFAULT NULL,
  `Arte` varchar(3) DEFAULT NULL,
  `Urbanidad` varchar(3) DEFAULT NULL,
  `Deportes` varchar(3) DEFAULT NULL,
  `Etica` varchar(3) DEFAULT NULL,
  `Biologia` varchar(3) DEFAULT NULL,
  `Quimica` varchar(3) DEFAULT NULL,
  `Fisica` varchar(3) DEFAULT NULL,
  `Religion` varchar(3) DEFAULT NULL,
  `Trigonometria` varchar(3) DEFAULT NULL,
  `CienciasPoliticas` varchar(3) DEFAULT NULL,
  `Emprendimiento` varchar(3) DEFAULT NULL,
  `Democracia` varchar(3) DEFAULT NULL,
  `Algebra` varchar(3) DEFAULT NULL,
  `Naturales` varchar(3) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`idprofesor`, `nombreProfesor`, `direccionProfesor`, `celularProfesor`, `telefonoProfesor`, `idmateria`, `Matematicas`, `Estadistica`, `Geografia`, `Geometria`, `Historia`, `Espanol`, `Ingles`, `Informatica`, `Arte`, `Urbanidad`, `Deportes`, `Etica`, `Biologia`, `Quimica`, `Fisica`, `Religion`, `Trigonometria`, `CienciasPoliticas`, `Emprendimiento`, `Democracia`, `Algebra`, `Naturales`) VALUES
(2, 'Anselma Pinto', 'calle 45 #34 -4', 3002587412, 7281474, 4, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Gisela Franco Lechuga', 'calle 20 #12c 45', 302456978, 7285874, 2, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE IF NOT EXISTS `tareas` (
`idtareas` int(11) NOT NULL,
  `idprofesor` int(11) NOT NULL,
  `idcurso` int(11) NOT NULL,
  `idjornada` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `contenidoTarea` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`idtareas`, `idprofesor`, `idcurso`, `idjornada`, `titulo`, `contenidoTarea`, `fecha`) VALUES
(6, 2, 2, 2, 'dfgdfgdg', '<p>sdfsdfsdfsf</p>', '2016-02-13'),
(11, 3, 3, 2, 'Ejempo', 'zxczxczc asdfsdfsd ssdsdsc dc', '2016-02-03'),
(13, 2, 1, 2, 'La hipotenusa', '<p><span style="color: #252525; font-family: sans-serif; font-size: 14px; line-height: 22.4px;">La', '2016-08-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`idusuario` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `roll` int(11) NOT NULL,
  `ididentidad` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `usuario`, `contrasena`, `roll`, `ididentidad`) VALUES
(1, 'ederius', '12345', 4, 1),
(4, 'mtoro1', '1234', 1, 1),
(5, 'ctoro', '12345', 2, 1),
(6, 'apinto', '12345', 3, 2),
(7, 'majo', '1111', 1, 1),
(8, 'maleja', '1111', 1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`idusuarios` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nombre`) VALUES
(1, 'Alumno'),
(2, 'Acudiente'),
(3, 'Profesor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acudiente`
--
ALTER TABLE `acudiente`
 ADD PRIMARY KEY (`idacudiente`), ADD KEY `idalumno` (`idalumno`);

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
 ADD PRIMARY KEY (`idadministrador`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
 ADD PRIMARY KEY (`idalumno`), ADD KEY `idjornada` (`idjornada`), ADD KEY `idcurso` (`idcurso`);

--
-- Indices de la tabla `areademateria`
--
ALTER TABLE `areademateria`
 ADD PRIMARY KEY (`idarea`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
 ADD PRIMARY KEY (`idcurso`), ADD KEY `grado` (`gradoCurso`);

--
-- Indices de la tabla `cursoxmateria`
--
ALTER TABLE `cursoxmateria`
 ADD KEY `idcurso` (`idcurso`,`idmateria`), ADD KEY `idcurso_2` (`idcurso`), ADD KEY `idmateria` (`idmateria`), ADD KEY `idmateria_2` (`idmateria`);

--
-- Indices de la tabla `cursoxprofesor`
--
ALTER TABLE `cursoxprofesor`
 ADD KEY `idcurso` (`idcurso`), ADD KEY `idprofesor` (`idprofesor`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
 ADD PRIMARY KEY (`idhorario`), ADD KEY `idcurso` (`idcurso`,`idjornada`);

--
-- Indices de la tabla `jornada`
--
ALTER TABLE `jornada`
 ADD PRIMARY KEY (`idjornada`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
 ADD PRIMARY KEY (`idmateria`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
 ADD PRIMARY KEY (`idnota`), ADD KEY `idalumno` (`idalumno`,`idcurso`), ADD KEY `idperiodo` (`idperiodo`), ADD KEY `idcurso` (`idcurso`);

--
-- Indices de la tabla `notaxmateria`
--
ALTER TABLE `notaxmateria`
 ADD UNIQUE KEY `idnota_3` (`idnota`), ADD KEY `idnota` (`idnota`), ADD KEY `idnota_2` (`idnota`);

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
 ADD PRIMARY KEY (`idperiodo`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
 ADD PRIMARY KEY (`idprofesor`), ADD KEY `idmateria` (`idmateria`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
 ADD PRIMARY KEY (`idtareas`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`idusuario`), ADD UNIQUE KEY `idusuario` (`idusuario`), ADD KEY `roll` (`roll`), ADD KEY `ididentidad` (`ididentidad`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`idusuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acudiente`
--
ALTER TABLE `acudiente`
MODIFY `idacudiente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
MODIFY `idalumno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `areademateria`
--
ALTER TABLE `areademateria`
MODIFY `idarea` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
MODIFY `idhorario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT de la tabla `jornada`
--
ALTER TABLE `jornada`
MODIFY `idjornada` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
MODIFY `idmateria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
MODIFY `idnota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
MODIFY `idperiodo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
MODIFY `idprofesor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
MODIFY `idtareas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acudiente`
--
ALTER TABLE `acudiente`
ADD CONSTRAINT `acudiente_ibfk_1` FOREIGN KEY (`idalumno`) REFERENCES `alumno` (`idalumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cursoxmateria`
--
ALTER TABLE `cursoxmateria`
ADD CONSTRAINT `cursoxmateria_ibfk_1` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `juk` FOREIGN KEY (`idmateria`) REFERENCES `materias` (`idmateria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
ADD CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`idperiodo`) REFERENCES `periodos` (`idperiodo`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `notas_ibfk_2` FOREIGN KEY (`idalumno`) REFERENCES `alumno` (`idalumno`),
ADD CONSTRAINT `notas_ibfk_3` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`);

--
-- Filtros para la tabla `notaxmateria`
--
ALTER TABLE `notaxmateria`
ADD CONSTRAINT `notaxmateria_ibfk_1` FOREIGN KEY (`idnota`) REFERENCES `notas` (`idnota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
ADD CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`idmateria`) REFERENCES `materias` (`idmateria`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
