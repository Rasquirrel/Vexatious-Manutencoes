-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jun-2023 às 14:57
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vexatious_manutencoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `cliente_id` int(12) UNSIGNED NOT NULL,
  `cliente_nome` varchar(60) NOT NULL,
  `cliente_nascimento` date NOT NULL,
  `cliente_telefone` varchar(14) NOT NULL,
  `cliente_endereco` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_computadores`
--

CREATE TABLE `tb_computadores` (
  `computador_id` int(12) UNSIGNED NOT NULL,
  `computador_cliente_id` int(12) UNSIGNED NOT NULL,
  `computador_problema` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionarios`
--

CREATE TABLE `tb_funcionarios` (
  `funcionario_id` int(12) UNSIGNED NOT NULL,
  `funcionario_setor_id` int(12) UNSIGNED NOT NULL,
  `funcionario_nome` varchar(60) NOT NULL,
  `funcionario_email` varchar(60) NOT NULL,
  `funcionario_cpf` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pedidos`
--

CREATE TABLE `tb_pedidos` (
  `pedido_id` int(12) UNSIGNED NOT NULL,
  `pedido_funcionario_id` int(12) UNSIGNED NOT NULL,
  `pedido_cliente_id` int(12) UNSIGNED NOT NULL,
  `pedido_computador_id` int(12) UNSIGNED NOT NULL,
  `pedido_data_inicial` date NOT NULL,
  `pedido_data_final` date NOT NULL,
  `pedido_resolvido` char(1) NOT NULL,
  `pedido_usuario_id` int(12) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_setores`
--

CREATE TABLE `tb_setores` (
  `setor_id` int(12) UNSIGNED NOT NULL,
  `setor_nome` varchar(60) NOT NULL,
  `setor_endereco` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `usuario_id` int(12) UNSIGNED NOT NULL,
  `usuario_nome` varchar(60) NOT NULL,
  `usuario_email` varchar(60) NOT NULL,
  `usuario_senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Índices para tabela `tb_computadores`
--
ALTER TABLE `tb_computadores`
  ADD PRIMARY KEY (`computador_id`),
  ADD KEY `computador_cliente_id` (`computador_cliente_id`);

--
-- Índices para tabela `tb_funcionarios`
--
ALTER TABLE `tb_funcionarios`
  ADD PRIMARY KEY (`funcionario_id`),
  ADD UNIQUE KEY `funcionario_email` (`funcionario_email`),
  ADD UNIQUE KEY `funcionario_cpf` (`funcionario_cpf`),
  ADD KEY `funcionario_setor_id` (`funcionario_setor_id`);

--
-- Índices para tabela `tb_pedidos`
--
ALTER TABLE `tb_pedidos`
  ADD PRIMARY KEY (`pedido_id`),
  ADD KEY `pedido_funcionario_id` (`pedido_funcionario_id`),
  ADD KEY `pedido_cliente_id` (`pedido_cliente_id`),
  ADD KEY `pedido_computador_id` (`pedido_computador_id`),
  ADD KEY `pedido_usuario_id` (`pedido_usuario_id`);

--
-- Índices para tabela `tb_setores`
--
ALTER TABLE `tb_setores`
  ADD PRIMARY KEY (`setor_id`),
  ADD UNIQUE KEY `setor_nome` (`setor_nome`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `usuario_email` (`usuario_email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `cliente_id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_computadores`
--
ALTER TABLE `tb_computadores`
  MODIFY `computador_id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_funcionarios`
--
ALTER TABLE `tb_funcionarios`
  MODIFY `funcionario_id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_pedidos`
--
ALTER TABLE `tb_pedidos`
  MODIFY `pedido_id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_setores`
--
ALTER TABLE `tb_setores`
  MODIFY `setor_id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `usuario_id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_computadores`
--
ALTER TABLE `tb_computadores`
  ADD CONSTRAINT `tb_computadores_ibfk_1` FOREIGN KEY (`computador_cliente_id`) REFERENCES `tb_clientes` (`cliente_id`);

--
-- Limitadores para a tabela `tb_funcionarios`
--
ALTER TABLE `tb_funcionarios`
  ADD CONSTRAINT `tb_funcionarios_ibfk_1` FOREIGN KEY (`funcionario_setor_id`) REFERENCES `tb_setores` (`setor_id`);

--
-- Limitadores para a tabela `tb_pedidos`
--
ALTER TABLE `tb_pedidos`
  ADD CONSTRAINT `tb_pedidos_ibfk_1` FOREIGN KEY (`pedido_funcionario_id`) REFERENCES `tb_funcionarios` (`funcionario_id`),
  ADD CONSTRAINT `tb_pedidos_ibfk_2` FOREIGN KEY (`pedido_cliente_id`) REFERENCES `tb_clientes` (`cliente_id`),
  ADD CONSTRAINT `tb_pedidos_ibfk_3` FOREIGN KEY (`pedido_computador_id`) REFERENCES `tb_computadores` (`computador_id`),
  ADD CONSTRAINT `tb_pedidos_ibfk_4` FOREIGN KEY (`pedido_usuario_id`) REFERENCES `tb_usuarios` (`usuario_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
