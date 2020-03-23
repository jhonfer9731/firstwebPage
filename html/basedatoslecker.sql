-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2019 at 04:04 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basedatoslecker`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos_salones`
--

CREATE TABLE `productos_salones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `Precio` text NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productos_salones`
--

INSERT INTO `productos_salones` (`id`, `nombre`, `Precio`, `imagen`) VALUES
(1, 'El Petret', '$250.000', '../imagenes/restaurante2.jpeg'),
(2, 'La Caira', '$200.000', '../imagenes/sedeNueva.png'),
(3, 'Esplendit', '$ 300.000', '../imagenes/esplendit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservassalones`
--

CREATE TABLE `reservassalones` (
  `Lugar` varchar(50) NOT NULL,
  `Dia` varchar(3) NOT NULL,
  `Mes` varchar(3) NOT NULL,
  `Año` varchar(4) NOT NULL,
  `hora` varchar(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservassalones`
--

--INSERT INTO `reservassalones` (`Lugar`, `Dia`, `Mes`, `Año`, `hora`, `id`) VALUES
--('0', '0', '0', '0', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `pass`) VALUES
(1, 'juan', '123456'),
(2, 'luis', '123456'),
(3, 'sebas', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos_salones`
--
ALTER TABLE `productos_salones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservassalones`
--
ALTER TABLE `reservassalones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos_salones`
--
ALTER TABLE `productos_salones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservassalones`
--
ALTER TABLE `reservassalones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
