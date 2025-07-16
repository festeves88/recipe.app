-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/07/2025 às 19:05
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
-- Banco de dados: `receita_app`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--
-- Criação: 16/07/2025 às 16:54
--

CREATE TABLE `categoria` (
  `id` varchar(15) NOT NULL,
  `nome` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `categoria`:
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria_receitas`
--
-- Criação: 16/07/2025 às 16:58
--

CREATE TABLE `categoria_receitas` (
  `id` varchar(15) NOT NULL,
  `id_categoria` varchar(15) NOT NULL,
  `id_receitas` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `categoria_receitas`:
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ingredientes`
--
-- Criação: 16/07/2025 às 16:39
--

CREATE TABLE `ingredientes` (
  `id` int(3) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `ingredientes`:
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ingrediente_receitas`
--
-- Criação: 16/07/2025 às 16:47
--

CREATE TABLE `ingrediente_receitas` (
  `id` int(15) NOT NULL,
  `id_ingredientes` varchar(15) NOT NULL,
  `id_receitas` varchar(15) NOT NULL,
  `quantidade_necessária` int(15) NOT NULL,
  `unidade_medida` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `ingrediente_receitas`:
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `receitas`
--
-- Criação: 16/07/2025 às 16:04
--

CREATE TABLE `receitas` (
  `id` int(15) NOT NULL,
  `modo_de_preparação` varchar(10) NOT NULL,
  `tempo_estimado` float NOT NULL,
  `Número_doses` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `receitas`:
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

