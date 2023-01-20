-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Out-2016 às 14:20
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--
-- Criação: 04-Out-2016 às 12:11
--

CREATE TABLE `cliente` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `cliente`:
--

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`codigo`, `nome`, `cpf`, `email`, `endereco`) VALUES
(1, 'Genilson Pereira', '21331212332', 'genilson@outlook.com', 'Rua Maria de Nazaré'),
(2, 'Denilson Pereira', '12510243438', 'denilsondasilva98@hotmail.com', 'Rua Maria de Nazaré'),
(3, 'Girlaide Pereira', '10234254329', 'girlaide21@gmail.com', 'Rua Maria de Nazaré');

-- --------------------------------------------------------

--
-- Estrutura da tabela `denilsonpereira`
--
-- Criação: 04-Out-2016 às 12:16
--

CREATE TABLE `denilsonpereira` (
  `codigo` int(11) NOT NULL,
  `primeiroNome` varchar(45) NOT NULL,
  `ultimoNome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `denilsonpereira`:
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--
-- Criação: 04-Out-2016 às 12:08
--

CREATE TABLE `filme` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `valor` decimal(4,0) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `filme`:
--

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`codigo`, `titulo`, `genero`, `valor`, `status`) VALUES
(1, 'Velozes & Furiosos 7', 'Ação', '4', 'Disponível'),
(2, 'A hora do Pesadelo ', 'Terror', '2', 'Locado'),
(4, 'Pets', 'Animação', '5', 'Locado'),
(5, 'Matrix', 'Ação', '4', 'Danificado'),
(6, 'A Culpa é das Estrelas', 'Drama', '3', 'Locado'),
(7, 'Piratas de Silicon Valley', 'Indefinido', '3', 'Disponível'),
(8, 'Fúria em Duas Rodas', 'Ação', '1', 'Disponível'),
(9, 'Cars 2', 'Animação', '3', 'Disponível');

-- --------------------------------------------------------

--
-- Estrutura da tabela `locacao`
--
-- Criação: 04-Out-2016 às 12:14
--

CREATE TABLE `locacao` (
  `codigo` int(11) NOT NULL,
  `dataLocacao` date NOT NULL,
  `dataDevolucao` date NOT NULL,
  `nomeFilme` varchar(45) NOT NULL,
  `nomeCliente` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `locacao`:
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `denilsonpereira`
--
ALTER TABLE `denilsonpereira`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `locacao`
--
ALTER TABLE `locacao`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `denilsonpereira`
--
ALTER TABLE `denilsonpereira`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `locacao`
--
ALTER TABLE `locacao`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for cliente
--

--
-- Metadata for denilsonpereira
--

--
-- Metadata for filme
--

--
-- Metadata for locacao
--

--
-- Metadata for locadora
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
