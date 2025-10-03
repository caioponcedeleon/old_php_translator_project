-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 03, 2025 at 06:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antigo_trazubbettor`
--

-- --------------------------------------------------------

--
-- Table structure for table `camkportuitese`
--

CREATE TABLE `camkportuitese` (
  `id` int(11) NOT NULL,
  `camks` varchar(200) NOT NULL,
  `portuitese` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `camkportuitese`
--

INSERT INTO `camkportuitese` (`id`, `camks`, `portuitese`) VALUES
(1, 'casona', 'casa'),
(2, 'casonas', 'casas'),
(3, 'ina', 'em'),
(4, 'jim', 'eu'),
(5, 'vyu', 'n&oacute;s'),
(6, 'soiam', 'sou'),
(7, 'v&oacute;t&eacute;r', '&aacute;gua'),
(8, 'ghrall', 'alto'),
(9, 'ghralla', 'alta'),
(10, '&ecirc;tudde', 'estudante'),
(11, 'heppliz', 'feliz'),
(12, 'estou', 'soiam'),
(13, 'vok', 'voc&ecirc;'),
(14, 'tyu', 'tu'),
(15, 'mi', 'me'),
(16, 'j&rsquo;appeleave', 'chamo'),
(17, 'j&rsquo;appeler', 'chamar'),
(18, 'manjar', 'comer'),
(19, 'panno', 'p&atilde;o'),
(20, 'manjave', 'como'),
(21, 'zaker', 'gostar'),
(22, 'zakeave', 'gosto'),
(23, 'dof', 'de'),
(24, 'lhe', 'o'),
(25, 'vee', 'ver'),
(26, 'veeave', 'vejo'),
(27, 'voiat&uacute;ra', 'carro'),
(28, 'gharcino', 'menino'),
(29, 'gharcina', 'menina'),
(30, 'zriter', 'escrever'),
(31, 'zriteave', 'escrevo'),
(32, 'unna', 'uma'),
(33, 'unne', 'um'),
(34, 'carttre', 'carta'),
(35, 'homma', 'homem'),
(36, 'famma', 'mulher'),
(37, 'l&rsquo;hummani', 'humano'),
(38, 'pirsoni', 'pessoa'),
(39, 'trizte', 'triste'),
(40, 'vliever', 'viver'),
(41, 'vlieveave', 'vivo'),
(42, '&uacute;', 'onde'),
(43, 'bresilino', 'brasileiro'),
(44, 'bresilina', 'brasileira'),
(45, 'Bresil', 'Brasil'),
(46, 'parlar', 'falar'),
(47, 'parlave', 'falo'),
(48, 'camks', 'campaquiano'),
(49, 'portuitese', 'portugu&ecirc;s'),
(50, 'anglishese', 'ingl&ecirc;s'),
(51, 'franchese', 'franc&ecirc;s'),
(52, 'b&ecirc;do', 'n&atilde;o'),
(53, 'bet', 'mas'),
(54, 'annyear', 'ano'),
(55, 'annyears', 'anos'),
(56, 'thave', 'tenho'),
(57, 'th&uacute;ar', 'ter'),
(58, 'c&ocirc;ff&aacute;', 'caf&eacute;'),
(59, 'libro', 'livro'),
(60, 'b&ocirc;', 'beber'),
(61, 'b&ocirc;ave', 'bebo'),
(62, 'lha', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`) VALUES
(1, 'admin', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camkportuitese`
--
ALTER TABLE `camkportuitese`
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
-- AUTO_INCREMENT for table `camkportuitese`
--
ALTER TABLE `camkportuitese`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
