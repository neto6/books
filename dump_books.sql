-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Abr-2023 às 02:08
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_listas`
--

CREATE TABLE `t_listas` (
  `lista_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_lista_livro`
--

CREATE TABLE `t_lista_livro` (
  `lista_livro_id` int(11) NOT NULL,
  `lista_id` int(11) NOT NULL,
  `livro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_livros`
--

CREATE TABLE `t_livros` (
  `livro_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_livros`
--

INSERT INTO `t_livros` (`livro_id`, `nome`, `autor`) VALUES
(1, 'HP', 'JK'),
(3, 'HP2', 'JK'),
(5, 'GOT', 'RR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `usuario_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_usuarios`
--

INSERT INTO `t_usuarios` (`usuario_id`, `email`, `senha`, `nome`) VALUES
(1, 'neto@email.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Neto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_usuario_livro`
--

CREATE TABLE `t_usuario_livro` (
  `usuario_livro_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `livro_id` int(11) NOT NULL,
  `favorito` int(11) NOT NULL,
  `possui` int(11) NOT NULL,
  `leu` int(11) NOT NULL,
  `avaliacao` int(11) NOT NULL,
  `quer_ler` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_usuario_livro`
--

INSERT INTO `t_usuario_livro` (`usuario_livro_id`, `usuario_id`, `livro_id`, `favorito`, `possui`, `leu`, `avaliacao`, `quer_ler`) VALUES
(1, 1, 3, 1, 0, 1, 0, 0),
(2, 1, 1, 0, 0, 1, 4, 0),
(3, 1, 5, 0, 1, 1, 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_listas`
--
ALTER TABLE `t_listas`
  ADD PRIMARY KEY (`lista_id`);

--
-- Indexes for table `t_lista_livro`
--
ALTER TABLE `t_lista_livro`
  ADD PRIMARY KEY (`lista_livro_id`);

--
-- Indexes for table `t_livros`
--
ALTER TABLE `t_livros`
  ADD PRIMARY KEY (`livro_id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Indexes for table `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `t_usuario_livro`
--
ALTER TABLE `t_usuario_livro`
  ADD PRIMARY KEY (`usuario_livro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_listas`
--
ALTER TABLE `t_listas`
  MODIFY `lista_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_lista_livro`
--
ALTER TABLE `t_lista_livro`
  MODIFY `lista_livro_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_livros`
--
ALTER TABLE `t_livros`
  MODIFY `livro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_usuario_livro`
--
ALTER TABLE `t_usuario_livro`
  MODIFY `usuario_livro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
