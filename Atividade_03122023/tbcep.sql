-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/12/2023 às 19:17
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdlogin0911`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcep`
--

CREATE TABLE `tbcep` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `logradouro` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `localidade` varchar(100) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcep`
--

INSERT INTO `tbcep` (`id`, `nome`, `logradouro`, `bairro`, `localidade`, `estado`, `cep`) VALUES
(1, 'Mateus Simão', 'Rua José Costa', 'Serpa', 'Caieiras', 'SP', '07716-300'),
(4, 'Gabriel', 'Rua Girassol', 'Villa Verde', 'Franco da Rocha', 'SP', '07813-140'),
(5, 'Sandra', 'Rua José Costa', 'Serpa', 'Caieiras', 'SP', '07716-300'),
(6, 'Mauricio', 'Rua José Costa', 'Serpa', 'Caieiras', 'SP', '07716-300');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbcep`
--
ALTER TABLE `tbcep`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcep`
--
ALTER TABLE `tbcep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
