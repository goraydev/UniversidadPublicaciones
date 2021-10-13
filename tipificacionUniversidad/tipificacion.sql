-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 12, 2021 at 11:26 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tipificacion`
--

-- --------------------------------------------------------

--
-- Table structure for table `archivo`
--

DROP TABLE IF EXISTS `archivo`;
CREATE TABLE `archivo` (
  `codarchivo` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `numpag` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `fk_obser` int(11) NOT NULL,
  `fk_archcateg` int(11) NOT NULL,
  `fk_creaa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `archivocategoria`
--

DROP TABLE IF EXISTS `archivocategoria`;
CREATE TABLE `archivocategoria` (
  `codarchcateg` int(11) NOT NULL,
  `formato` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `crea`
--

DROP TABLE IF EXISTS `crea`;
CREATE TABLE `crea` (
  `codcrea` int(11) NOT NULL,
  `fk_direc` varchar(10) NOT NULL,
  `fk_comision` varchar(10) NOT NULL,
  `fecha_crea` date NOT NULL,
  `fecha_culmina` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cuentas`
--

DROP TABLE IF EXISTS `cuentas`;
CREATE TABLE `cuentas` (
  `idcuenta` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 0,
  `fk_rol` int(11) NOT NULL,
  `fk_per` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuentas`
--

INSERT INTO `cuentas` (`idcuenta`, `usuario`, `password`, `estado`, `fk_rol`, `fk_per`) VALUES
(1, 'ger', '1234', 1, 1, 'D001'),
(2, 'jan', '1234', 1, 3, 'D002'),
(3, 'Enrique', '1234', 1, 2, 'D003');

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

DROP TABLE IF EXISTS `director`;
CREATE TABLE `director` (
  `codigodirector` varchar(10) NOT NULL,
  `fk_escuelas` varchar(10) NOT NULL,
  `fk_perso` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `docentes`
--

DROP TABLE IF EXISTS `docentes`;
CREATE TABLE `docentes` (
  `coddocent` varchar(10) NOT NULL,
  `fk_personas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `escuelas`
--

DROP TABLE IF EXISTS `escuelas`;
CREATE TABLE `escuelas` (
  `codescuela` varchar(10) NOT NULL,
  `nomescuela` varchar(50) NOT NULL,
  `fk_facultad` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `facultades`
--

DROP TABLE IF EXISTS `facultades`;
CREATE TABLE `facultades` (
  `codfaculta` varchar(10) NOT NULL,
  `nombrefacu` varchar(50) NOT NULL,
  `decano` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grupocomision`
--

DROP TABLE IF EXISTS `grupocomision`;
CREATE TABLE `grupocomision` (
  `codcomision` varchar(10) NOT NULL,
  `fk_docentess` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `maneja`
--

DROP TABLE IF EXISTS `maneja`;
CREATE TABLE `maneja` (
  `codmaneja` int(11) NOT NULL,
  `fk_docentes` varchar(10) NOT NULL,
  `fk_escue` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `observacion`
--

DROP TABLE IF EXISTS `observacion`;
CREATE TABLE `observacion` (
  `codobserva` int(11) NOT NULL,
  `razonsocial` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personas`
--

DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas` (
  `codidentificacion` varchar(10) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `apellidop` varchar(50) NOT NULL,
  `apellidom` varchar(50) NOT NULL,
  `celular` varchar(12) NOT NULL,
  `fechanaci` date NOT NULL,
  `genero` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personas`
--

INSERT INTO `personas` (`codidentificacion`, `Nombres`, `apellidop`, `apellidom`, `celular`, `fechanaci`, `genero`) VALUES
('D001', 'Gerson', 'Pantoja', 'Marin', '999999999', '2011-02-01', 'M'),
('D002', 'Janci', 'Urdanivia', 'Coral', '987654321', '2012-11-07', 'M'),
('D003', 'Enrique', 'Aparicio', 'Lunarejo', '963852741', '2000-10-20', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `publicarachivo`
--

DROP TABLE IF EXISTS `publicarachivo`;
CREATE TABLE `publicarachivo` (
  `codpublica` varchar(10) NOT NULL,
  `fecha_sub_archivo` date NOT NULL,
  `fk_docen` varchar(10) NOT NULL,
  `fk_arch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`id_rol`, `tipo`) VALUES
(1, 'Director'),
(2, 'Revisor'),
(3, 'Docente');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archivo`
--
ALTER TABLE `archivo`
  ADD PRIMARY KEY (`codarchivo`),
  ADD KEY `fk_observ` (`fk_obser`),
  ADD KEY `fk_archcat` (`fk_archcateg`),
  ADD KEY `fk_creea` (`fk_creaa`);

--
-- Indexes for table `archivocategoria`
--
ALTER TABLE `archivocategoria`
  ADD PRIMARY KEY (`codarchcateg`);

--
-- Indexes for table `crea`
--
ALTER TABLE `crea`
  ADD PRIMARY KEY (`codcrea`),
  ADD KEY `crea_fk0` (`fk_direc`),
  ADD KEY `crea_fk1` (`fk_comision`);

--
-- Indexes for table `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`idcuenta`),
  ADD KEY `cuentas_fk0` (`fk_rol`),
  ADD KEY `cuentas_fk1` (`fk_per`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`codigodirector`),
  ADD KEY `director_fk0` (`fk_escuelas`),
  ADD KEY `director_fk1` (`fk_perso`);

--
-- Indexes for table `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`coddocent`),
  ADD KEY `docentes_fk0` (`fk_personas`);

--
-- Indexes for table `escuelas`
--
ALTER TABLE `escuelas`
  ADD PRIMARY KEY (`codescuela`),
  ADD KEY `escuelas_fk0` (`fk_facultad`);

--
-- Indexes for table `facultades`
--
ALTER TABLE `facultades`
  ADD PRIMARY KEY (`codfaculta`);

--
-- Indexes for table `grupocomision`
--
ALTER TABLE `grupocomision`
  ADD PRIMARY KEY (`codcomision`),
  ADD KEY `grupocomision_fk0` (`fk_docentess`);

--
-- Indexes for table `maneja`
--
ALTER TABLE `maneja`
  ADD PRIMARY KEY (`codmaneja`),
  ADD KEY `Maneja_fk0` (`fk_docentes`),
  ADD KEY `Maneja_fk1` (`fk_escue`);

--
-- Indexes for table `observacion`
--
ALTER TABLE `observacion`
  ADD PRIMARY KEY (`codobserva`);

--
-- Indexes for table `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`codidentificacion`);

--
-- Indexes for table `publicarachivo`
--
ALTER TABLE `publicarachivo`
  ADD PRIMARY KEY (`codpublica`),
  ADD KEY `fk_dcent` (`fk_docen`),
  ADD KEY `fk_darch` (`fk_arch`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `archivo`
--
ALTER TABLE `archivo`
  ADD CONSTRAINT `fk_archcat` FOREIGN KEY (`fk_archcateg`) REFERENCES `archivocategoria` (`codarchcateg`),
  ADD CONSTRAINT `fk_creea` FOREIGN KEY (`fk_creaa`) REFERENCES `crea` (`codcrea`),
  ADD CONSTRAINT `fk_observ` FOREIGN KEY (`fk_obser`) REFERENCES `observacion` (`codobserva`);

--
-- Constraints for table `crea`
--
ALTER TABLE `crea`
  ADD CONSTRAINT `crea_fk0` FOREIGN KEY (`fk_direc`) REFERENCES `director` (`codigodirector`),
  ADD CONSTRAINT `crea_fk1` FOREIGN KEY (`fk_comision`) REFERENCES `grupocomision` (`codcomision`);

--
-- Constraints for table `cuentas`
--
ALTER TABLE `cuentas`
  ADD CONSTRAINT `cuentas_fk0` FOREIGN KEY (`fk_rol`) REFERENCES `rol` (`id_rol`),
  ADD CONSTRAINT `cuentas_fk1` FOREIGN KEY (`fk_per`) REFERENCES `personas` (`codidentificacion`);

--
-- Constraints for table `director`
--
ALTER TABLE `director`
  ADD CONSTRAINT `director_fk0` FOREIGN KEY (`fk_escuelas`) REFERENCES `escuelas` (`codescuela`),
  ADD CONSTRAINT `director_fk1` FOREIGN KEY (`fk_perso`) REFERENCES `personas` (`codidentificacion`);

--
-- Constraints for table `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `docentes_fk0` FOREIGN KEY (`fk_personas`) REFERENCES `personas` (`codidentificacion`);

--
-- Constraints for table `escuelas`
--
ALTER TABLE `escuelas`
  ADD CONSTRAINT `escuelas_fk0` FOREIGN KEY (`fk_facultad`) REFERENCES `facultades` (`codfaculta`);

--
-- Constraints for table `grupocomision`
--
ALTER TABLE `grupocomision`
  ADD CONSTRAINT `grupocomision_fk0` FOREIGN KEY (`fk_docentess`) REFERENCES `docentes` (`coddocent`);

--
-- Constraints for table `maneja`
--
ALTER TABLE `maneja`
  ADD CONSTRAINT `Maneja_fk0` FOREIGN KEY (`fk_docentes`) REFERENCES `docentes` (`coddocent`),
  ADD CONSTRAINT `Maneja_fk1` FOREIGN KEY (`fk_escue`) REFERENCES `escuelas` (`codescuela`);

--
-- Constraints for table `publicarachivo`
--
ALTER TABLE `publicarachivo`
  ADD CONSTRAINT `fk_darch` FOREIGN KEY (`fk_arch`) REFERENCES `archivo` (`codarchivo`),
  ADD CONSTRAINT `fk_dcent` FOREIGN KEY (`fk_docen`) REFERENCES `docentes` (`coddocent`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
