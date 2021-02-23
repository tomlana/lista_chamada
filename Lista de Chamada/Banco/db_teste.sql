-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 02-Mar-2020 às 02:07
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `ativo` char(1) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `email`, `ativo`, `telefone`) VALUES
(1, 'Thomas Lana', 'tom.lana@outlook.com', 'S','0'),
(3, 'Aluno inativo #1', 'aluno@inativo.com.br', 'N','0'),
(5, 'T2', 't@t.com.br', 'S','0'),
(9, 'O Cara', 'ocara@theman.com.br', 'S','0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `cod_usuario` varchar(32) NOT NULL,
  `des_nome` varchar(100) NOT NULL,
  `des_telefone` varchar(25) NOT NULL,
  `des_email` varchar(150) NOT NULL,
  PRIMARY KEY (`cod_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `des_nome`, `des_telefone`, `des_email`) VALUES
('d80b7040b773199015de6d3b4293c8ff', 'teste12345', '1234856', 'marketdev2019@gmail.com'),
('8232e119d8f59aa83050a741631803a6', 'outro12', '1sd6f851', 'tesse@ddsfsd.com'),
('d7657583058394c828ee150fada65345', 'teste', '123456', 'teste@teste.com'),
('0424d20160a6a558e5bf86a7bc9b67f0', 'testeOutro', '123456789', 'outro@outro.com'),
('b48894a05e964bb8ff703d4205355b25', 'Maria', '987654321', 'sdfsfd@sdfdsfsdf.dsfsdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
