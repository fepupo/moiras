-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Abr-2021 às 14:48
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `moiras`
--
CREATE DATABASE IF NOT EXISTS `moiras` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `moiras`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `Cod_Usuario` int NOT NULL,
  `Nome_Usuario` varchar(100) NOT NULL,
  `User` varchar(100) NOT NULL,
  `Senha` varchar(12) NOT NULL,
  `img_pequena` varchar(100) NOT NULL,
  `img_grande` varchar(100) NOT NULL,
  `Data_Nascimento` date NOT NULL,
  `Informacoes_Alma` longtext NOT NULL,
  PRIMARY KEY (`Cod_Usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
