-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: laradock_mysql_1
-- Tempo de geração: 08/06/2020 às 09:49
-- Versão do servidor: 8.0.19
-- Versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `carloc`
--
CREATE DATABASE IF NOT EXISTS `carloc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `carloc`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluguel`
--

CREATE TABLE `aluguel` (
  `id` int NOT NULL,
  `data_locacao` varchar(12) NOT NULL,
  `expiracao_locacao` varchar(12) NOT NULL,
  `cpf_locator` char(11) NOT NULL,
  `placa_veiculo` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `aluguel`
--

INSERT INTO `aluguel` (`id`, `data_locacao`, `expiracao_locacao`, `cpf_locator`, `placa_veiculo`) VALUES
(1, '2020-06-08', '2020-12-22', '12345678900', 'ABC1234'),
(2, '2020-06-08', '2020-12-22', '987654321', 'CBA4321');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `aluguel`
--
ALTER TABLE `aluguel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `aluguel`
--
ALTER TABLE `aluguel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
