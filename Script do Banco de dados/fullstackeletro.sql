-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Out-2020 às 03:03
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fullstackeletro`
--
CREATE DATABASE IF NOT EXISTS `fullstackeletro` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fullstackeletro`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id_pedido` int NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(50) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `nome_produto` varchar(45) NOT NULL,
  `quantidade` int NOT NULL,
  `valor_unidade` float NOT NULL,
  `valor_total` float NOT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `nome_produto` (`nome_produto`,`id_pedido`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `nome_cliente`, `endereco`, `telefone`, `nome_produto`, `quantidade`, `valor_unidade`, `valor_total`) VALUES
(1, 'Harry Potter', '93/4', '1111-1111', 'Fogão Stone Prata', 2, 1389, 2778),
(2, 'Hermione Granger', 'Londres', '2222-2222', 'Geladeira Digital Max Inteligente', 1, 7289, 7289),
(3, 'Draco Malfoy', 'Irlanda', '3333-3333', 'Geladeira Digital Max Inteligente', 3, 7289, 21867),
(4, 'Severus Snape', 'Hogwarts', '4444-4444', 'Fogão Stone Prata', 1, 1389, 1389),
(5, 'Gina Weasley', 'Londres', '5555-5555', 'Geladeira Digital Max Inteligente', 1, 7289, 7289),
(6, 'Renan Marques', 'Brasil', '6666-6666', 'Microondas Brastemp', 1, 4389, 3389),
(7, 'Rony Weasley', 'Islândia', '7777-7777', 'Microondas Brastemp', 1, 4389, 3389),
(8, 'Tom Riddle', 'Masmorra', '8888-8888', 'Lavadora Colombia Moderna', 1, 4259, 3289),
(9, 'Rubeus Hagrid', 'Hogwarts', '9999-9999', 'Geladeira Moderna Black', 1, 2859, 2089),
(10, 'Minerva Mcgonagall', 'Hogwarts', '1010-1010', 'Geladeira Moderna Black', 1, 2859, 2089),
(11, 'Albus Dumbledore', 'Hogwarts', '0110-1101', 'Geladeira Moderna Black', 1, 2859, 2089);

--
-- Acionadores `pedidos`
--
DROP TRIGGER IF EXISTS `Tgr_ItensVenda_Delete`;
DELIMITER $$
CREATE TRIGGER `Tgr_ItensVenda_Delete` AFTER DELETE ON `pedidos` FOR EACH ROW BEGIN
	UPDATE produtos SET estoque = estoque + OLD.quantidade
WHERE nome = OLD.nome_produto;
END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `Tgr_ItensVenda_Insert`;
DELIMITER $$
CREATE TRIGGER `Tgr_ItensVenda_Insert` AFTER INSERT ON `pedidos` FOR EACH ROW BEGIN
	UPDATE produtos SET estoque = estoque - NEW.quantidade
WHERE nome = NEW.nome_produto;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id_produto` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `estoque` int NOT NULL,
  `preco` float NOT NULL,
  `preco_venda` float NOT NULL,
  `nome_imagem` varchar(50) NOT NULL,
  PRIMARY KEY (`id_produto`),
  KEY `id_pedido_idx` (`nome`,`preco_venda`,`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `descricao`, `estoque`, `preco`, `preco_venda`, `nome_imagem`) VALUES
(1, 'Fogão Stone Prata', NULL, 19, 2389, 1389, '/fogao_stone_prata.jpg'),
(2, 'Fogão Tecnogas Max', NULL, 12, 3259, 2489, '/fogao_tecnogas_max.jpg'),
(3, 'Lava-louças Bosch', NULL, 10, 3259, 2489, '/lavadora_de_louca_bosch.jpg'),
(4, 'Lava-louças Consul', '12 comandos', 12, 3859, 3089, '/lavadora_de_louca_consul.jpg'),
(5, 'Lavadora de Roupas EcoBubble', 'Inox - 12 litros', 10, 3389, 2389, '/lavadora_EcoBubble_Inox.jpg'),
(6, 'Lavadora Colombia Moderna', '20 litros', 9, 4259, 3289, '/lavadora_colombia_moderna.jpg'),
(7, 'Microondas Samsung', 'black 20 litros', 18, 2389, 1889, '/microondas_samsung_black20L.jpg'),
(8, 'Microondas Brastemp', 'Inox 38 litros', 10, 4389, 3389, '/microondas_brastemp_inox38L.jpg'),
(9, 'Microondas Consul', 'Inox 30 litros', 16, 3000, 2289, '/microondas_consul_inox30L.jpg'),
(10, 'Geladeira Frost Free Brastemp Side Inverse', '540 litros', 15, 6389, 5019, '/geladeira_brastemp.jpg'),
(11, 'Geladeira Digital Max Inteligente', NULL, 2, 9259, 7289, '/geladeira_digitalmax.jpg'),
(12, 'Geladeira Moderna Black', NULL, 7, 2859, 2089, '/geladeira_mod_black.jpg');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `produtos` (`id_produto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
