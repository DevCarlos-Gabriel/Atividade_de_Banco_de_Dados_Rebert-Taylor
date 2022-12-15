-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Dez-2022 às 14:00
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbmatricula`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbaluno`
--

CREATE TABLE `tbaluno` (
  `codaluno` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `sexo` char(1) NOT NULL,
  `nascimento` date NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `fone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbaluno`
--

INSERT INTO `tbaluno` (`codaluno`, `nome`, `sexo`, `nascimento`, `endereco`, `fone`) VALUES
(2, 'Rebeca Lucas Souza', 'F', '2009-03-06', 'Rua Pedro Viana Madeira', '(88)994278478'),
(4, 'Ruan Caleb Girão', 'M', '2006-09-13', 'Rua Do Império', '(88)78980920'),
(5, 'Maria Sofia Andrade', 'F', '2007-06-30', 'Rua Doutor Eusébio', '(88)997738267'),
(6, 'Robes Pierre', 'M', '2000-04-23', 'França,Rua Bonno', '(88)99532416'),
(9, 'Amanda Marques lima', 'F', '2006-01-31', 'rua santo isidoro, cohab 2', '(88)994274929'),
(10, '[value-2]', '[', '0000-00-00', '[value-5]', '[value-6]'),
(11, '[value-2]', '[', '0000-00-00', '[value-5]', '[value-6]');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcursos`
--

CREATE TABLE `tbcursos` (
  `codcurso` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `turno` varchar(10) DEFAULT NULL,
  `cargahoraria` double(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcursos`
--

INSERT INTO `tbcursos` (`codcurso`, `nome`, `turno`, `cargahoraria`) VALUES
(1, 'Enfermagem', 'Tarde', 1800.00),
(2, 'Finanças', 'Manhã', 1300.00),
(3, 'Informática', 'Noite', 1160.00),
(4, 'Designer Gráfico', 'Noite', 900.00),
(7, 'Podologia', 'Manhã', 1350.00),
(9, '[value-2]', '[value-3]', 0.00),
(10, '[value-2]', '[value-3]', 0.00);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmatriculas`
--

CREATE TABLE `tbmatriculas` (
  `codmat` int(11) NOT NULL,
  `codcurso` int(11) NOT NULL,
  `codaluno` int(11) NOT NULL,
  `codusu` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbmatriculas`
--

INSERT INTO `tbmatriculas` (`codmat`, `codcurso`, `codaluno`, `codusu`, `data`, `hora`) VALUES
(2, 3, 2, 1, '2022-12-14', '13:16:31'),
(3, 2, 4, 1, '2022-12-14', '13:16:36'),
(4, 4, 5, 1, '2022-12-14', '13:16:45'),
(5, 1, 6, 1, '2022-12-14', '13:16:52'),
(6, 2, 9, 1, '2022-12-14', '16:35:48'),
(7, 0, 0, 0, '0000-00-00', '00:00:00'),
(8, 0, 0, 0, '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusu`
--

CREATE TABLE `tbusu` (
  `codusu` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbusu`
--

INSERT INTO `tbusu` (`codusu`, `nome`, `email`, `senha`) VALUES
(1, 'admin', 'admin@admin.com', '123'),
(5, 'rebeca', 'rebecasants@gmail.com', '1234'),
(16, 'Carlos', 'carlosgabriel@gmail.com', '123'),
(18, '[value-2]', '[value-3]', '[value-4]'),
(19, '[value-2]', '[value-3]', '[value-4]');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbaluno`
--
ALTER TABLE `tbaluno`
  ADD PRIMARY KEY (`codaluno`);

--
-- Índices para tabela `tbcursos`
--
ALTER TABLE `tbcursos`
  ADD PRIMARY KEY (`codcurso`);

--
-- Índices para tabela `tbmatriculas`
--
ALTER TABLE `tbmatriculas`
  ADD PRIMARY KEY (`codmat`,`codcurso`,`codaluno`,`codusu`);

--
-- Índices para tabela `tbusu`
--
ALTER TABLE `tbusu`
  ADD PRIMARY KEY (`codusu`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbaluno`
--
ALTER TABLE `tbaluno`
  MODIFY `codaluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tbcursos`
--
ALTER TABLE `tbcursos`
  MODIFY `codcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbmatriculas`
--
ALTER TABLE `tbmatriculas`
  MODIFY `codmat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbusu`
--
ALTER TABLE `tbusu`
  MODIFY `codusu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
