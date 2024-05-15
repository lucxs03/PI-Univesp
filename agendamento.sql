-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/05/2024 às 00:26
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agendamento`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tab_cadastro`
--

CREATE TABLE `tab_cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `rua` varchar(32) NOT NULL,
  `numero` int(20) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(32) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `consulta` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tab_cadastro`
--

INSERT INTO `tab_cadastro` (`id`, `nome`, `email`, `telefone`, `rua`, `numero`, `bairro`, `cidade`, `cpf`, `consulta`, `data`, `senha`) VALUES
(1, 'Luiz', 'Luiz@gmail.com', '24856345464685', 'sao carlos', 567, 'sao joao', 'campinas', '4365745799', 'Psiquiatria', '2024-05-01', 'luiz123'),
(2, 'Lucas manara', 'lucas@gmail.com', '19991962536', 'sao carlos', 100, 'sao joao', 'mogi guacu', '1234567890', 'Cardiologia', '2024-03-21', 'lucas123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tab_cadastro`
--
ALTER TABLE `tab_cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tab_cadastro`
--
ALTER TABLE `tab_cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
