-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2018 at 02:41 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infotec`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `nome_categoria` varchar(40) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`nome_categoria`, `id_categoria`) VALUES
('Teclado', 18),
('Computador', 19),
('Mouse', 20),
('Monitor', 21),
('Smartphones ', 23),
('Placa de VÃ­deo ', 24),
('Jogos', 26),
('Notebook', 28),
('hd', 29),
('Processador', 30),
('carros', 33);

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `foto_produto` varchar(100) NOT NULL,
  `nome_produto` varchar(50) NOT NULL,
  `preco` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`id_produto`, `id_usuario`, `id_categoria`, `foto_produto`, `nome_produto`, `preco`) VALUES
(42, NULL, 18, '75202_index_gg.jpg', 'Teclado', '650.00'),
(44, NULL, 18, 'teclado03.jpg', 'Teclado Gamer  Tech Multimidia', '24.00'),
(45, NULL, 18, 'telcado_mouse.jpg', 'Teclado e Mouse Ã“ptico Logitec', '78.00'),
(46, NULL, 18, 'teclado06.jpg', 'Teclado Gamer Coolermaster', '206.00'),
(47, NULL, 18, 'teclado07.jpg', 'Teclado Gamer Dazz Rapidfire', '69.00'),
(48, NULL, 18, '64038_index_gg.jpg', 'Teclado e Mouse Lightning', '105.00'),
(49, NULL, 18, '86095_index_gg.jpg', 'Teclado Gamer MecÃ¢nico HyperX', '599.00'),
(50, NULL, 18, '86043_index_gg.jpg', 'Teclado Gamer Multilaser', '160.00'),
(51, NULL, 18, '84177_index_gg.jpg', 'Teclado Fortrek Gamer', '45.00'),
(52, NULL, 18, '62396_index_gg.jpg', 'Teclado PadrÃ£o Multilaser USB', '20.00'),
(53, NULL, 18, '54923_index_gg.jpg', 'Teclado Fortrek Black Hawk', '38.00'),
(54, NULL, 18, '15031_index_gg.jpg', 'Teclado e Mouse Gamer Razer', '209.00'),
(55, NULL, 19, '90657_index_gg.jpg', 'Computador HP Intel Core i5', '2295.00'),
(56, NULL, 19, '85325_index_gg.jpg', 'Computador NTC Intel Core i3', '1450.00'),
(57, NULL, 19, '86835_index_gg.jpg', 'Computador Lenovo', '2000.00'),
(58, NULL, 19, '92303_index_gg.jpg', 'Computador PC Gamer G-Fire', '1293.00'),
(59, NULL, 19, '92222_index_gg.jpg', 'Computador Megaware', '1212.00'),
(60, NULL, 19, '90872_index_gg.jpg', 'All in One Samsung', '3451.00'),
(61, NULL, 19, '90871_index_gg.jpg', 'All in One LG', '2616.00'),
(62, NULL, 19, '91399_index_gg.jpg', 'Computador Positivo', '1056.00'),
(63, NULL, 19, '90522_index_gg.jpg', 'Computador Movva', '998.00'),
(64, NULL, 19, '2799_99_001gabinete.jpg', 'Computador Intel Core i5', '2999.00'),
(65, NULL, 19, '2806_1_00000.jpg', 'Computador Intel Core i3 Kaby', '2968.00'),
(66, NULL, 19, '2816_99_002.png', 'Computador Intel Core i7', '5029.00'),
(67, NULL, 20, 'mouse07.jpg', 'Mouse Gamer Redragon Centropho', '130.00'),
(68, NULL, 20, 'mouse08.jpg', 'Mouse C3 Tech', '30.00'),
(69, NULL, 20, 'mouse04.jpg', 'Mouse Gamer Razer Deathadder', '255.00'),
(70, NULL, 20, 'mouse11.jpg', 'Mouse Multilaser Profissional', '150.00'),
(71, NULL, 20, 'mouse02.jpg', 'Mouse Gamer Fortrek Ã“ptico', '29.00'),
(72, NULL, 20, 'mouse03.jpg', 'Mouse Ã“ptico Microsoft', '44.00'),
(73, NULL, 20, 'mouse06.jpg', 'Mouse Gamer HyperX Pulsefire', '249.00'),
(74, NULL, 20, 'mouse09.jpg', 'Mouse Ã“ptico Laser HP', '29.00'),
(75, NULL, 20, '85648_index_gg.jpg', 'Mouse Gamer Corsair Harpoon', '157.00'),
(76, NULL, 21, 'monitor01.jpg', 'Monitor LG LED', '629.00'),
(77, NULL, 21, 'monitor02.jpg', 'Monitor AOC LED', '349.00'),
(78, NULL, 21, 'monitor03.jpg', 'Monitor LG LED UltraWide', '729.00'),
(79, NULL, 21, 'monitor04.jpg', 'Monitor Gamer LED ASUS', '779.00'),
(80, NULL, 21, 'monitor12.jpg', 'Monitor Gamer AOC Led', '710.00'),
(81, NULL, 21, 'monitor05.jpg', 'Monitor Samsung HD LED', '439.00'),
(82, NULL, 21, 'monitor06.jpg', 'Monitor Gaming Benq ZOWIE LED', '2059.00'),
(83, NULL, 21, 'monitor07.jpg', 'Monitor Philips LED', '608.00'),
(84, NULL, 21, 'monitor08.jpg', 'Monitor Gamer LED IPS ASUS', '4269.00'),
(85, NULL, 21, 'monitor10.jpg', 'Monitor LED ASUS', '1549.00'),
(86, NULL, 21, 'monitor09.jpg', 'Monitor ACER', '709.00'),
(87, NULL, 21, '74173_index_gg.jpg', 'Monitor Gamer BenQ', '2058.00'),
(88, NULL, 23, '90473_index_gg.jpg', 'Samsung Galaxy J5', '756.00'),
(89, NULL, 23, '79861_index_gg.jpg', 'Asus Zenfone Go', '594.00'),
(90, NULL, 23, '88249_index_gg.jpg', 'LG K4 Novo', '428.00'),
(91, NULL, 23, '80024_index_gg.jpg', ' LG X Power', '589.00'),
(92, NULL, 23, '83941_index_gg.jpg', 'Samsung Galaxy J7', '966.00'),
(93, NULL, 23, '79858_index_gg.jpg', 'Asus Zenfone Go Live', '594.00'),
(94, NULL, 23, '91644_index_gg.jpg', 'Alcatel Pixi 4', '294.00'),
(95, NULL, 23, '81241_index_gg.jpg', 'Motorola Moto G4', '659.00'),
(96, NULL, 23, '90663_index_gg.jpg', 'Asus Zenfone 3 Max', '956.00'),
(97, NULL, 23, '80057_index_gg.jpg', 'TP-LINK Neffos', '646.00'),
(98, NULL, 23, '86842_index_gg.jpg', 'Motorola Moto G5 Plus', '1079.00'),
(99, NULL, 23, '88295_index_gg.jpg', 'Samsung Galaxy J2', '509.00'),
(100, NULL, 23, '90506_index_gg.jpg', 'Motorola Moto C PLUS', '499.00'),
(101, NULL, 23, '88386_index_gg.jpg', 'Samsung Galaxy S8', '2703.00'),
(102, NULL, 23, '86456_index_gg.jpg', 'Positivo Twist Mini', '240.00'),
(103, NULL, 24, '84137_index_gg.jpg', 'VGA NVIDIA GIGABYTE GEFORCE', '811.00'),
(104, NULL, 24, '85798_index_gg.jpg', 'VGA NVIDIA MSI GEFORCE', '699.00'),
(105, NULL, 24, '90390_index_gg.jpg', 'VGA NVIDIA ASUS GEFORCE', '1435.00'),
(106, NULL, 24, '85074_index_gg.jpg', 'VGA NVIDIA PcYes', '109.00'),
(107, NULL, 24, '80910_index_gg.jpg', 'VGA NVIDIA Zotac', '959.00'),
(108, NULL, 24, '88625_index_gg.jpg', 'VGA AMD ASUS RADEON', '574.00'),
(109, NULL, 24, '84540_index_gg.jpg', 'VGA NVIDIA EVGA', '660.00'),
(110, NULL, 24, '88750_index_gg.jpg', 'VGA AMD GIGABYTE RADEON RX', '526.00'),
(111, NULL, 24, '79462_index_gg.jpg', 'VGA NVIDIA GIGABYTE GEFORCE GT', '1627.00'),
(112, NULL, 24, '81058_index_gg.jpg', 'VGA NVIDIA ASUS GEFORCE  DUAL', '2099.00'),
(113, NULL, 24, '88747_index_gg.jpg', 'VGA AMD RADEON  AORUS ', '1244.00'),
(114, NULL, 24, '91633_index_gg.jpg', 'VGA NVIDIA MSI GEFORCE GTX 105', '815.00'),
(116, NULL, 26, '76650_index_gg.jpg', 'Joystick', '245.99'),
(117, NULL, 26, '63932_index_gg.jpg', 'teste roberto 2', '55.00'),
(120, NULL, 18, '76650_index_gg.jpg', 'Pedal e Volante ', '300.00'),
(121, NULL, 28, '75202_index_gg.jpg', 'Dell', '500.50'),
(122, NULL, 29, '80507_index_gg.jpg', 'samsung', '122.10'),
(123, NULL, 30, '88076_index_gg.jpg', 'i3', '700.00');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `Nome` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `data_nasc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `Nome`, `email`, `senha`, `data_nasc`) VALUES
(3, 'lucas bessa 1 ', 'lucasbessa708@gmail.com', '$2y$10$h1H2kPtL2av14sUraXOFR.VNwosugs1D3zsAJEyW/TaobnvqnwBba', '1998-09-18'),
(5, 'monise candido ', 'moni@gmail.com', '$2y$10$xqAsgBDd5dsQKKxwnIIkbucdwHnWQcfVmGuNhgLh2EouaNnaFvXXi', '1998-05-16'),
(7, 'Francisco do Nascimento Jr', 'fnascimento@gmail.com', '$2y$10$lTHCEyMUUYxTuDDoa1vpVO5uynVEPmC3iHmsCE2GU/XAb95lHbHZy', '1980-12-20'),
(8, 'Cristina Silva', 'cristina.silva@jaboatao.ifpe.edu.br', '$2y$10$xPg.N5fDtxq3rw0Vx40Aj.UrrbhMQ7ml9l0Opb9.kIn6k.wpvLYtO', '1982-06-21'),
(9, 'EVELLYN LAPA FALCAO DE CARVALHO', 'evellynlapa@hotmail.com', '$2y$10$BUmxWROA/J9FI6q/0uTXNODhKLiLTP0kMR8PE8ZKjXyVWzkwrKgyq', '1987-11-06'),
(11, 'Raphael Bessa do Nascimento', 'raphaelbn.adv@gmail.com', '$2y$10$xN583zw625GLZvacShbaa.VmLYBvgVLJiM1r2jwBJ54LRjSLGh6CG', '1984-10-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `produto_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
