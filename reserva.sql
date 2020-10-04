-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Ago-2020 às 04:25
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `reserva`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cautela`
--

CREATE TABLE `cautela` (
  `id` int(5) NOT NULL,
  `militar` int(4) NOT NULL,
  `material` int(4) NOT NULL,
  `quantidade` int(4) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cautela`
--

INSERT INTO `cautela` (`id`, `militar`, `material`, `quantidade`, `data`) VALUES
(52, 7, 4, 1, '2020-07-28'),
(54, 7, 6, 1, '2020-07-28'),
(56, 7, 3, 23, '2020-07-28'),
(57, 7, 4, 3, '2020-07-28'),
(59, 7, 6, 5, '2020-07-28'),
(115, 23, 2, 1, '2020-08-04'),
(116, 26, 2, 1, '2020-08-15'),
(117, 26, 3, 1, '2020-08-15'),
(118, 26, 4, 1, '2020-08-15'),
(119, 26, 6, 1, '2020-08-15'),
(120, 26, 12, 1, '2020-08-15'),
(121, 7, 2, 1, '2020-08-15'),
(122, 7, 3, 1, '2020-08-15'),
(123, 7, 4, 1, '2020-08-15'),
(124, 7, 6, 1, '2020-08-15'),
(125, 7, 12, 1, '2020-08-15'),
(126, 7, 2, 1, '2020-08-15'),
(127, 7, 3, 1, '2020-08-15'),
(128, 7, 4, 1, '2020-08-15'),
(129, 7, 6, 1, '2020-08-15'),
(130, 7, 12, 1, '2020-08-15'),
(131, 7, 2, 2, '2020-08-15'),
(132, 7, 3, 2, '2020-08-15'),
(133, 7, 4, 2, '2020-08-15'),
(134, 7, 6, 2, '2020-08-15'),
(135, 7, 12, 2, '2020-08-15'),
(136, 7, 2, 1, '2020-08-15'),
(137, 7, 3, 2, '2020-08-15'),
(138, 7, 4, 1, '2020-08-15'),
(139, 7, 6, 1, '2020-08-15'),
(140, 7, 12, 1, '2020-08-15'),
(141, 7, 2, 1, '2020-08-15'),
(142, 7, 3, 1, '2020-08-15'),
(143, 7, 4, 1, '2020-08-15'),
(144, 7, 6, 1, '2020-08-15'),
(145, 7, 12, 1, '2020-08-15'),
(146, 7, 2, 1, '2020-08-15'),
(147, 7, 3, 1, '2020-08-15'),
(148, 7, 4, 1, '2020-08-15'),
(149, 7, 6, 1, '2020-08-15'),
(150, 7, 12, 1, '2020-08-15'),
(151, 7, 2, 1, '2020-08-15'),
(152, 7, 3, 1, '2020-08-15'),
(153, 7, 4, 1, '2020-08-15'),
(154, 7, 6, 1, '2020-08-15'),
(155, 7, 12, 1, '2020-08-15'),
(156, 7, 2, 1, '2020-08-15'),
(157, 7, 3, 1, '2020-08-15'),
(158, 7, 4, 1, '2020-08-15'),
(159, 7, 6, 1, '2020-08-15'),
(160, 7, 12, 1, '2020-08-15'),
(161, 7, 2, 1, '2020-08-15'),
(162, 7, 6, 1, '2020-08-15'),
(163, 7, 3, 1, '2020-08-15'),
(164, 26, 12, 2, '2020-08-16'),
(165, 29, 2, 1, '2020-08-16'),
(166, 29, 3, 1, '2020-08-16'),
(167, 29, 4, 1, '2020-08-16'),
(168, 29, 6, 1, '2020-08-16'),
(170, 23, 2, 1, '2020-08-16'),
(172, 29, 2, 1, '2020-08-16'),
(173, 25, 6, 1, '2020-08-16'),
(174, 25, 3, 1, '2020-08-16'),
(175, 26, 3, 1, '2020-08-16'),
(176, 7, 2, 1, '2020-08-16'),
(177, 23, 6, 1, '2020-08-16'),
(178, 29, 6, 1, '2020-08-16');

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `consultacau`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `consultacau` (
`id_mat` int(5)
,`tipo` int(5)
,`descri` varchar(100)
,`quantidade` int(10)
,`necessidade` int(4)
,`obs` varchar(200)
,`posto` varchar(20)
,`id_mil` int(2)
,`nome` varchar(50)
,`nomeg` varchar(30)
,`id_cau` int(5)
,`caumil` int(4)
,`caumat` int(4)
,`cauquant` int(4)
,`caudata` date
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE `dados` (
  `Sub1` varchar(40) NOT NULL,
  `Sub2` varchar(40) NOT NULL,
  `Sub3` varchar(40) NOT NULL,
  `Sub4` varchar(40) NOT NULL,
  `Sub5` varchar(40) NOT NULL,
  `cmtbia` varchar(40) NOT NULL,
  `encmat` varchar(50) NOT NULL,
  `abrevsu` varchar(30) NOT NULL,
  `imagem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`Sub1`, `Sub2`, `Sub3`, `Sub4`, `Sub5`, `cmtbia`, `encmat`, `abrevsu`, `imagem`) VALUES
('MINISTÃ‰RIO DA DEFESA', 'EXÃ‰RCITO BRASILEIRO', '3Â° GRUPO DE ARTILHARIA ANTIAÃ‰REA', '(GRUPO CONDE DE CAXIAS)', 'Bateria de Comando e ServiÃ§os', 'LAURINDO PEREIRA NETO - CAP', 'FABIO LUIS TITON - S Ten', 'BCSv', 'aguia');

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `listamat`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `listamat` (
`ordem` int(2)
,`tipo` varchar(30)
,`id` int(5)
,`descri` varchar(100)
,`quanti` int(10)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `listamil`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `listamil` (
`ordem` int(11)
,`pstgrad` varchar(20)
,`id` int(2)
,`nome` varchar(50)
,`nomeg` varchar(30)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `acao` varchar(200) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `log`
--

INSERT INTO `log` (`id`, `usuario`, `acao`, `data`) VALUES
(1, 'nvo', 'entraga de gas', '2020-08-02 10:48:31'),
(2, '', '', '2020-08-01 11:14:19'),
(3, '7', '', '2020-08-02 11:15:38'),
(4, '', '', '2020-08-02 11:17:40'),
(5, 'meu nome', 'incluiu militar', '2020-08-02 11:19:44'),
(6, 'meu nome', 'incluiu militar - 4 - CUECA5', '2020-08-02 11:23:40'),
(7, 'meu nome', '\r\neditou dados militar - 4 - CUECA5', '2020-07-22 11:28:15'),
(8, 'meu nome', 'editou dados militar - 4 - CUECA9', '2020-08-02 11:30:08'),
(9, 'meu nome', 'excluiu militar -  - ', '2020-08-02 11:32:07'),
(10, 'meu nome', 'excluiu militar - ', '2020-08-02 11:35:58'),
(11, 'meu nome', 'excluiu militar - CUECA4', '2020-08-02 11:39:09'),
(12, 'meu nome', 'Incluido material - Gorro amuflado', '2020-08-02 11:43:05'),
(13, 'meu nome', 'Incluido material - Gorro Liso - 25', '2020-08-02 11:44:17'),
(14, 'meu nome', 'Alterado material - Gorro Liso - 42', '2020-08-02 11:47:52'),
(15, 'meu nome', 'ExclusÃ£o de material - Gorro amuflado', '2020-08-02 12:14:02'),
(22, 'meu nome', 'InclusÃ£o Mat Cautela -  - ', '2020-08-02 12:27:33'),
(23, 'meu nome', 'InclusÃ£o Mat Cautela -  - ', '2020-08-02 12:28:55'),
(24, 'meu nome', 'InclusÃ£o Mat Cautela -  - ', '2020-08-02 12:29:33'),
(25, 'meu nome', 'InclusÃ£o Mat Cautela - Ten Cel - ', '2020-08-02 12:33:56'),
(26, 'meu nome', 'InclusÃ£o Mat Cautela - Ten Cel - ', '2020-08-02 12:35:03'),
(27, 'meu nome', 'InclusÃ£o Mat Cautela - Ten Cel - ', '2020-08-02 12:35:03'),
(28, 'meu nome', 'InclusÃ£o Mat Cautela - Ten Cel - JUNIOR', '2020-08-02 12:35:30'),
(29, 'meu nome', 'InclusÃ£o Mat Cautela - Ten Cel - JUNIOR', '2020-08-02 12:35:30'),
(30, 'meu nome', 'InclusÃ£o Mat Cautela - Ten Cel - JUNIOR- Gandola - 5', '2020-08-02 12:46:30'),
(31, 'meu nome', 'InclusÃ£o Mat Cautela - Ten Cel - JUNIOR- Gandola - 1', '2020-08-02 12:46:30'),
(32, 'meu nome', 'InclusÃ£o Mat Cautela - Ten Cel - JUNIOR- Gandola - 5', '2020-08-02 12:46:56'),
(33, 'meu nome', 'InclusÃ£o Mat Cautela - Ten Cel - JUNIOR- Gandola - 1', '2020-08-02 12:46:56'),
(34, 'meu nome', 'InclusÃ£o Mat Cautela - Ten Cel - JUNIOR- Gorro - 2', '2020-08-02 12:47:32'),
(35, 'meu nome', 'InclusÃ£o Mat Cautela - Ten Cel - JUNIOR- Gandola - teste3', '2020-08-02 12:51:32'),
(36, 'meu nome', 'InclusÃ£o Mat Cautela - Ten Cel - JUNIOR- Gorro - teste2', '2020-08-02 12:51:32'),
(37, 'meu nome', 'InclusÃ£o Mat Cautela - Ten Cel - JUNIOR- Gandola - 1', '2020-08-02 12:53:29'),
(38, 'meu nome', 'InclusÃ£o Mat Cautela - Ten Cel - JUNIOR- Manta - 1', '2020-08-02 12:54:30'),
(39, 'meu nome', 'excluiu militar - SANTOS', '2020-08-02 12:55:19'),
(40, 'meu nome', 'excluiu militar - CUECA3', '2020-08-02 12:55:28'),
(41, 'meu nome', 'InclusÃ£o Mat Cautela - 2Âº Sgt - JORGE- Gandola - 1', '2020-08-02 12:55:40'),
(42, 'meu nome', 'InclusÃ£o Mat Cautela - 2Âº Sgt - JORGE- Gandola - 1', '2020-08-02 12:59:30'),
(43, 'meu nome', 'InclusÃ£o Mat Cautela - Ten Cel - JUNIOR- Gandola - 1', '2020-08-02 13:00:11'),
(44, 'meu nome', 'InclusÃ£o Mat Cautela - Ten Cel - JUNIOR- Gorro - 1', '2020-08-02 13:00:11'),
(45, 'meu nome', 'InclusÃ£o Mat Cautela - 2Âº Sgt - JORGE- Gandola - 1', '2020-08-02 13:00:26'),
(46, 'meu nome', 'InclusÃ£o Mat Cautela - 2Âº Sgt - JORGE- Gorro - 1', '2020-08-02 13:00:26'),
(47, 'meu nome', 'InclusÃ£o Mat Cautela - 2Âº Sgt - JORGE- Gandola - 1', '2020-08-02 13:01:17'),
(48, 'meu nome', 'InclusÃ£o Mat Cautela - 2Âº Sgt - JORGE-  - 1', '2020-08-02 13:03:36'),
(49, 'meu nome', 'InclusÃ£o Mat Cautela - Maj - OITENTA- Gandola - 1', '2020-08-02 13:04:07'),
(50, 'meu nome', 'InclusÃ£o Mat Cautela - Cap - NOME G- Gandola Camuflada - 2', '2020-08-02 13:06:35'),
(51, '', 'InclusÃ£o Mat Cautela -  - -  - ', '2020-08-02 13:29:19'),
(52, '', 'ExclusÃ£o Mat Cautela - ', '2020-08-02 13:30:09'),
(53, 'meu nome', 'ExclusÃ£o Mat Cautela - ', '2020-08-02 13:31:33'),
(54, 'meu nome', 'ExclusÃ£o Mat Cautela - ', '2020-08-02 13:31:51'),
(55, 'meu nome', 'ExclusÃ£o Mat Cautela - ', '2020-08-02 13:33:13'),
(56, 'meu nome', 'ExclusÃ£o Mat Cautela - ', '2020-08-02 13:34:58'),
(57, 'meu nome', 'ExclusÃ£o Mat Cautela - Ten Cel - JUNIOR - Gorro Liso - 1', '2020-08-02 13:37:08'),
(58, 'meu nome', 'ExclusÃ£o Mat Cautela - Ten Cel - JUNIOR - Gorro Liso - 1', '2020-08-02 13:39:09'),
(59, 'meu nome', 'ExclusÃ£o Mat Cautela - Ten Cel - JUNIOR - Gorro Liso - 1', '2020-08-02 13:39:36'),
(60, 'meu nome', 'ExclusÃ£o Mat Cautela -  -  -  - ', '2020-08-02 13:51:00'),
(61, 'meu nome', 'ExclusÃ£o Mat Cautela -  -  -  - ', '2020-08-02 13:54:18'),
(62, 'meu nome', 'ExclusÃ£o Mat Cautela -  -  -  - ', '2020-08-02 13:55:06'),
(63, 'meu nome', 'ExclusÃ£o Mat Cautela - undefined -  -  - ', '2020-08-02 13:55:31'),
(64, 'meu nome', 'ExclusÃ£o Mat Cautela - undefined -  -  - ', '2020-08-02 13:56:51'),
(65, 'meu nome', 'ExclusÃ£o Mat Cautela - undefined -  -  - ', '2020-08-02 13:58:37'),
(66, 'meu nome', 'ExclusÃ£o Mat Cautela -  -  -  - ', '2020-08-02 14:06:19'),
(67, 'meu nome', 'ExclusÃ£o Mat Cautela - 2 -  -  - ', '2020-08-02 14:06:38'),
(68, 'meu nome', 'ExclusÃ£o Mat Cautela - 97 -  -  - ', '2020-08-02 14:15:16'),
(69, 'meu nome', 'ExclusÃ£o Mat Cautela - 1 -  -  - ', '2020-08-02 14:15:40'),
(70, 'meu nome', 'ExclusÃ£o Mat Cautela -  -  -  - ', '2020-08-02 14:36:06'),
(71, 'meu nome', 'ExclusÃ£o Mat Cautela -  -  -  - ', '2020-08-02 14:37:26'),
(72, 'meu nome', 'ExclusÃ£o Mat Cautela -  -  -  - ', '2020-08-02 14:38:04'),
(73, 'meu nome', 'ExclusÃ£o Mat Cautela - 6 -  -  - ', '2020-08-02 14:38:31'),
(74, 'meu nome', 'ExclusÃ£o Mat Cautela - 6 -  -  - ', '2020-08-02 14:39:23'),
(75, 'meu nome', 'ExclusÃ£o Mat Cautela - 6 -  -  - ', '2020-08-02 14:40:44'),
(76, 'meu nome', 'ExclusÃ£o Mat Cautela - 6 -  -  - ', '2020-08-02 14:41:59'),
(77, 'meu nome', 'ExclusÃ£o Mat Cautela - Cap - NOME G - Manta VO  - ', '2020-08-02 15:16:20'),
(78, 'meu nome', 'ExclusÃ£o Mat Cautela - Cap - NOME G - Cantil  - 1', '2020-08-02 15:18:36'),
(79, 'meu nome', 'ExclusÃ£o Mat Cautela - Cap - NOME G - Manta VO  - 62 - 2011', '2020-08-02 15:21:54'),
(80, 'meu nome', 'ExclusÃ£o Mat Cautela - Cap - NOME G - Cantil caneco - 41 - 01/08/2020', '2020-08-02 15:28:24'),
(81, 'meu nome', 'ExclusÃ£o Mat Cautela - Cap - NOME G - Gandola Camuflada - 2 - 02/08/2020', '2020-08-02 15:29:40'),
(82, 'meu nome', 'excluiu militar - NOME G', '2020-08-02 15:29:45'),
(83, 'meu nome', 'Incluido material - adad - 12', '2020-08-03 19:49:03'),
(84, 'meu nome', 'ExclusÃ£o Mat Cautela - Cap - CUECA9 - Gandola Camuflada - 1 - 02/08/2020', '2020-08-03 22:35:02'),
(85, 'meu nome', 'excluiu militar - ', '2020-08-03 22:37:58'),
(86, 'meu nome', 'ExclusÃ£o Mat Cautela - Ten Cel - JUNIOR - Gandola Camuflada - 1 - 02/08/2020', '2020-08-03 22:40:56'),
(87, 'meu nome', 'excluiu militar - Ten Cel-JUNIOR', '2020-08-03 22:41:02'),
(88, 'meu nome', 'ExclusÃ£o Mat Cautela - Maj - OITENTA - Manta VO  - 1 - 01/08/2020', '2020-08-03 22:46:56'),
(89, 'meu nome', 'ExclusÃ£o Mat Cautela - Maj - OITENTA - Gandola verde - 1 - 02/08/2020', '2020-08-03 22:46:58'),
(90, 'meu nome', 'excluiu militar - Maj-OITENTA', '2020-08-03 22:47:04'),
(91, 'meu nome', 'ExclusÃ£o Mat Cautela - 1Âº Sgt - DE MILUS - Cantil  - 62 - 01/08/2020', '2020-08-03 22:47:15'),
(92, 'meu nome', 'ExclusÃ£o Mat Cautela - 1Âº Sgt - DE MILUS - Gandola Camuflada - 12 - 01/08/2020', '2020-08-03 22:47:17'),
(93, 'meu nome', 'ExclusÃ£o Mat Cautela - 1Âº Sgt - DE MILUS - Gandola verde - 36 - 01/08/2020', '2020-08-03 22:47:18'),
(94, 'meu nome', 'ExclusÃ£o Mat Cautela - 1Âº Sgt - DE MILUS - Gandola verde - 2 - 02/08/2020', '2020-08-03 22:47:21'),
(95, 'meu nome', 'excluiu militar - 1Âº Sgt-DE MILUS', '2020-08-03 22:47:26'),
(96, 'meu nome', 'ExclusÃ£o Mat Cautela - 2Âº Sgt - JORGE - Cantil  - 1 - 02/08/2020', '2020-08-03 22:48:44'),
(97, 'meu nome', 'ExclusÃ£o Mat Cautela - 2Âº Sgt - JORGE - Gandola verde - 1 - 02/08/2020', '2020-08-03 22:48:46'),
(98, 'meu nome', 'ExclusÃ£o Mat Cautela - 2Âº Sgt - JORGE - Gandola Camuflada - 1 - 02/08/2020', '2020-08-03 22:48:47'),
(99, 'meu nome', 'ExclusÃ£o Mat Cautela - 2Âº Sgt - JORGE - Gandola verde - 1 - 02/08/2020', '2020-08-03 22:48:49'),
(100, 'meu nome', 'ExclusÃ£o Mat Cautela - 2Âº Sgt - JORGE - Gorro Liso - 1 - 02/08/2020', '2020-08-03 22:48:50'),
(101, 'meu nome', 'ExclusÃ£o Mat Cautela - 2Âº Sgt - JORGE - Gandola verde - 1 - 02/08/2020', '2020-08-03 22:48:52'),
(102, 'meu nome', 'ExclusÃ£o Mat Cautela - 2Âº Sgt - JORGE - Gorro Liso - 1 - 02/08/2020', '2020-08-03 22:48:54'),
(103, 'meu nome', 'excluiu militar - 2Âº Sgt-JORGE', '2020-08-03 22:49:00'),
(104, 'meu nome', 'ExclusÃ£o Mat Cautela - Cel - SILVA - Cantil  - 1 - 28/07/2020', '2020-08-03 22:52:59'),
(105, 'meu nome', 'ExclusÃ£o Mat Cautela - Cel - SILVA - Cantil caneco - 2 - 28/07/2020', '2020-08-03 22:53:01'),
(106, 'meu nome', 'ExclusÃ£o Mat Cautela - Cel - SILVA - Manta VO  - 6 - 28/07/2020', '2020-08-03 22:53:03'),
(107, 'meu nome', 'ExclusÃ£o Mat Cautela - Cel - SILVA - Gandola Camuflada - 4 - 28/07/2020', '2020-08-03 22:53:04'),
(108, 'meu nome', 'ExclusÃ£o Mat Cautela - Cel - SILVA - Manta VO  - 3 - 28/07/2020', '2020-08-03 22:53:06'),
(109, 'meu nome', 'ExclusÃ£o Mat Cautela - Cel - SILVA - Gandola Camuflada - 5 - 28/07/2020', '2020-08-03 22:53:07'),
(110, 'meu nome', 'ExclusÃ£o Mat Cautela - Cel - SILVA - Gandola verde - 7 - 28/07/2020', '2020-08-03 22:53:09'),
(111, 'meu nome', 'ExclusÃ£o Mat Cautela - Cel - SILVA - Manta VO  - 1 - 02/08/2020', '2020-08-03 22:53:11'),
(112, 'meu nome', 'ExclusÃ£o Mat Cautela - Cel - SILVA - Gandola Camuflada - 1 - 02/08/2020', '2020-08-03 22:53:12'),
(113, 'meu nome', 'excluiu militar - Cel-SILVA', '2020-08-03 22:53:20'),
(114, 'meu nome', 'excluiu militar - Cel-SILVA', '2020-08-03 22:54:06'),
(115, 'meu nome', 'excluiu militar - Cel-SILVA', '2020-08-03 22:54:08'),
(116, 'meu nome', 'excluiu militar - Cel-SILVA', '2020-08-03 22:54:30'),
(117, 'meu nome', 'excluiu militar - Cel-SILVA', '2020-08-03 22:54:32'),
(118, 'meu nome', 'excluiu militar - Cel-SILVA', '2020-08-03 22:54:35'),
(119, 'meu nome', 'excluiu militar - Cel-SILVA', '2020-08-03 22:54:38'),
(120, 'meu nome', 'ExclusÃ£o de material - Gorro Liso', '2020-08-03 22:55:58'),
(121, 'meu nome', 'ExclusÃ£o de material - adad', '2020-08-03 22:56:03'),
(122, 'meu nome', 'excluiu militar - Cel-SILVA', '2020-08-03 22:58:18'),
(123, 'meu nome', 'excluiu militar - Cel-SILVA', '2020-08-03 22:58:21'),
(124, 'meu nome', 'excluiu militar - Cel-SILVA', '2020-08-03 22:58:23'),
(125, 'meu nome', 'ExclusÃ£o Mat Cautela - S Ten - CARVALHO - Cantil  - 1 - 28/07/2020', '2020-08-03 23:04:32'),
(126, 'meu nome', 'ExclusÃ£o Mat Cautela - S Ten - CARVALHO - Gandola Camuflada - 4 - 28/07/2020', '2020-08-03 23:04:37'),
(127, 'meu nome', 'excluiu militar - ', '2020-08-03 23:32:37'),
(128, 'meu nome', 'ExclusÃ£o Militar - CelSILVA', '2020-08-03 23:36:20'),
(129, 'meu nome', 'incluiu militar - 1 - SANTOS', '2020-08-03 23:37:05'),
(130, 'meu nome', 'ExclusÃ£o Militar - CelSANTOS', '2020-08-03 23:37:42'),
(131, 'meu nome', 'incluiu militar - 1 - CEKSO', '2020-08-03 23:39:02'),
(132, 'meu nome', 'ExclusÃ£o Militar - CelCEKSO', '2020-08-03 23:39:09'),
(133, 'meu nome', 'incluiu militar - 15 - CARLOS', '2020-08-03 23:40:03'),
(134, 'meu nome', 'InclusÃ£o Mat Cautela - Sd EV - CARLOS- Cantil  - 1', '2020-08-03 23:40:15'),
(135, 'meu nome', 'ExclusÃ£o Mat Cautela - S Ten - CARVALHO - Gandola Camuflada - 1 - 28/07/2020', '2020-08-03 23:40:55'),
(136, 'meu nome', 'ExclusÃ£o Mat Cautela - S Ten - CARVALHO - Gandola Camuflada - 1 - 28/07/2020', '2020-08-03 23:40:58'),
(137, 'meu nome', 'ExclusÃ£o Material - Gandola Camuflada', '2020-08-03 23:47:38'),
(138, 'meu nome', 'Incluido material - novo material - 34', '2020-08-05 22:23:42'),
(139, 'meu nome', 'Incluido de tipo de  material - cama', '2020-08-05 22:42:24'),
(140, 'meu nome', 'Incluido de tipo de  material - novo tipo', '2020-08-05 22:43:15'),
(141, 'meu nome', 'Incluido de tipo de  material - tipo3', '2020-08-05 22:46:45'),
(142, 'meu nome', 'Incluido material - tertretret - 12', '2020-08-05 22:47:06'),
(143, 'meu nome', 'ExclusÃ£o Material - tertretret', '2020-08-05 22:47:19'),
(144, 'meu nome', 'ExclusÃ£o Material - novo material', '2020-08-05 22:47:23'),
(145, 'meu nome', 'incluiu UsuÃ¡rio - 3Âº FEIJAO', '2020-08-12 20:48:37'),
(146, 'meu nome', 'incluiu UsuÃ¡rio - 1Âº MARCOS', '2020-08-12 20:51:06'),
(147, 'meu nome', 'incluiu UsuÃ¡rio - S CARVALHO', '2020-08-12 20:52:09'),
(148, 'meu nome', 'incluiu UsuÃ¡rio - S CARVALHO', '2020-08-12 20:52:30'),
(149, 'S CARVALHO', 'ExclusÃ£o UsuÃ¡rio - 11', '2020-08-12 21:31:41'),
(150, 'S CARVALHO', 'ExclusÃ£o UsuÃ¡rio - 8', '2020-08-12 21:31:46'),
(151, 'S CARVALHO', 'ExclusÃ£o UsuÃ¡rio - 7', '2020-08-12 21:52:55'),
(152, 'S CARVALHO', 'ExclusÃ£o UsuÃ¡rio - 5', '2020-08-12 21:52:57'),
(153, 'S CARVALHO', 'ExclusÃ£o UsuÃ¡rio - 10', '2020-08-12 21:52:59'),
(154, 'S CARVALHO', 'ExclusÃ£o UsuÃ¡rio - 12', '2020-08-12 21:53:01'),
(155, 'S CARVALHO', 'ExclusÃ£o UsuÃ¡rio - 13', '2020-08-12 21:53:05'),
(156, 'S CARVALHO', 'ExclusÃ£o UsuÃ¡rio - 14', '2020-08-12 21:53:07'),
(157, 'S CARVALHO', 'incluiu UsuÃ¡rio - Asp CARLOS', '2020-08-12 21:53:32'),
(158, 'S CARVALHO', 'incluiu UsuÃ¡rio - Ten CHAGAS', '2020-08-12 22:34:01'),
(159, 'S CARVALHO', 'incluiu UsuÃ¡rio - Ten Cel CHAVES', '2020-08-12 22:34:35'),
(160, 'S CARVALHO', 'ExclusÃ£o UsuÃ¡rio - 18', '2020-08-12 22:34:46'),
(161, 'S CARVALHO', 'incluiu UsuÃ¡rio - S Ten TITON', '2020-08-12 22:35:01'),
(162, 'S CARVALHO', 'incluiu UsuÃ¡rio - Cel TWSTE', '2020-08-13 15:30:32'),
(163, 'Cel TWSTE', 'ExclusÃ£o Mat Cautela - S Ten - CARVALHO - Gandola verde - 1 - 28/07/2020', '2020-08-13 16:04:59'),
(164, 'Cel TWSTE', 'ExclusÃ£o Mat Cautela - S Ten - CARVALHO - Cantil caneco - 1 - 28/07/2020', '2020-08-13 16:05:02'),
(165, 'S CARVALHO', 'incluiu militar - 1 - QWREWR', '2020-08-13 16:13:13'),
(166, 'S CARVALHO', 'ExclusÃ£o Militar - CelQWREWR', '2020-08-13 16:13:18'),
(167, 'S CARVALHO', 'Incluido material - q2eqw - 12', '2020-08-13 16:13:27'),
(168, 'S CARVALHO', 'incluiu militar - 1 - PAULO SANTOS', '2020-08-14 19:01:38'),
(169, 'S CARVALHO', 'incluiu militar - 2 - CELSO', '2020-08-14 22:25:25'),
(170, 'S CARVALHO', 'InclusÃ£o Mat Cautela - Ten Cel - CELSO- Cantil  - 1', '2020-08-14 22:25:36'),
(171, 'S CARVALHO', 'InclusÃ£o Mat Cautela - Ten Cel - CELSO- Cantil caneco - 1', '2020-08-14 22:25:36'),
(172, 'S CARVALHO', 'InclusÃ£o Mat Cautela - Ten Cel - CELSO- Manta VO  - 1', '2020-08-14 22:25:36'),
(173, 'S CARVALHO', 'InclusÃ£o Mat Cautela - Ten Cel - CELSO- Gandola verde - 1', '2020-08-14 22:25:36'),
(174, 'S CARVALHO', 'InclusÃ£o Mat Cautela - Ten Cel - CELSO- q2eqw - 1', '2020-08-14 22:25:36'),
(175, 'S CARVALHO', 'Alterado material - Cantil caneco - 80', '2020-08-14 23:26:40'),
(176, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Cantil  - 1', '2020-08-14 23:38:47'),
(177, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Cantil caneco - 1', '2020-08-14 23:38:47'),
(178, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Manta VO  - 1', '2020-08-14 23:38:47'),
(179, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Gandola verde - 1', '2020-08-14 23:38:47'),
(180, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- q2eqw - 1', '2020-08-14 23:38:47'),
(181, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Cantil  - 1', '2020-08-14 23:39:02'),
(182, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Cantil caneco - 1', '2020-08-14 23:39:02'),
(183, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Manta VO  - 1', '2020-08-14 23:39:02'),
(184, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Gandola verde - 1', '2020-08-14 23:39:02'),
(185, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- q2eqw - 1', '2020-08-14 23:39:02'),
(186, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Cantil  - 2', '2020-08-15 08:49:03'),
(187, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Cantil caneco - 2', '2020-08-15 08:49:03'),
(188, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Manta VO  - 2', '2020-08-15 08:49:03'),
(189, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Gandola verde - 2', '2020-08-15 08:49:03'),
(190, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- q2eqw - 2', '2020-08-15 08:49:03'),
(191, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Cantil  - 1', '2020-08-15 08:49:14'),
(192, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Cantil caneco - 2', '2020-08-15 08:49:15'),
(193, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Manta VO  - 1', '2020-08-15 08:49:15'),
(194, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Gandola verde - 1', '2020-08-15 08:49:15'),
(195, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- q2eqw - 1', '2020-08-15 08:49:15'),
(196, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Cantil  - 1', '2020-08-15 08:49:25'),
(197, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Cantil caneco - 1', '2020-08-15 08:49:25'),
(198, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Manta VO  - 1', '2020-08-15 08:49:25'),
(199, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Gandola verde - 1', '2020-08-15 08:49:25'),
(200, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- q2eqw - 1', '2020-08-15 08:49:25'),
(201, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Cantil  - 1', '2020-08-15 08:51:51'),
(202, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Cantil caneco - 1', '2020-08-15 08:51:51'),
(203, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Manta VO  - 1', '2020-08-15 08:51:51'),
(204, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Gandola verde - 1', '2020-08-15 08:51:51'),
(205, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- q2eqw - 1', '2020-08-15 08:51:51'),
(206, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Cantil  - 1', '2020-08-15 08:52:00'),
(207, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Cantil caneco - 1', '2020-08-15 08:52:00'),
(208, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Manta VO  - 1', '2020-08-15 08:52:01'),
(209, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Gandola verde - 1', '2020-08-15 08:52:01'),
(210, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- q2eqw - 1', '2020-08-15 08:52:01'),
(211, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Cantil  - 1', '2020-08-15 08:52:09'),
(212, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Cantil caneco - 1', '2020-08-15 08:52:09'),
(213, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Manta VO  - 1', '2020-08-15 08:52:09'),
(214, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Gandola verde - 1', '2020-08-15 08:52:09'),
(215, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- q2eqw - 1', '2020-08-15 08:52:09'),
(216, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Cantil  - 1', '2020-08-15 09:07:10'),
(217, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Gandola verde - 1', '2020-08-15 09:09:00'),
(218, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Cantil caneco - 1', '2020-08-15 09:12:48'),
(219, 'S CARVALHO', 'ExclusÃ£o Mat Cautela - S Ten - CARVALHO - Cantil  - 1 - 28/07/2020', '2020-08-15 09:16:24'),
(220, 'S CARVALHO', 'incluiu UsuÃ¡rio - Cel NOVO USER', '2020-08-15 11:58:07'),
(221, 'S CARVALHO', 'ExclusÃ£o UsuÃ¡rio - 21', '2020-08-15 11:58:15'),
(222, 'S CARVALHO', 'incluiu militar - 15 - TOMCAT', '2020-08-15 12:06:39'),
(223, 'S CARVALHO', 'ExclusÃ£o Militar - Sd EVTOMCAT', '2020-08-15 12:06:59'),
(224, 'S CARVALHO', 'Alterado material - Nova desriÃ§ao de 02 caratcteres - 12', '2020-08-15 12:27:25'),
(225, 'S CARVALHO', 'Incluido material - cinto na - 50', '2020-08-15 12:30:47'),
(226, 'S CARVALHO', 'Incluido de tipo de  material - cobertor', '2020-08-15 12:33:06'),
(227, 'S CARVALHO', 'InclusÃ£o Mat Cautela - Ten Cel - CELSO- Nova desriÃ§ao de 02 caratcteres - 2', '2020-08-15 19:16:58'),
(228, 'S CARVALHO', 'incluiu militar - 15 - SOUZA', '2020-08-15 21:56:47'),
(229, 'S CARVALHO', 'incluiu militar - 15 - NOVO', '2020-08-15 21:59:56'),
(230, 'S CARVALHO', 'incluiu militar - 15 - NOVO', '2020-08-15 22:01:43'),
(231, 'S CARVALHO', 'InclusÃ£o Mat Cautela - Sd EV - NOVO- Cantil  - 1', '2020-08-15 22:02:17'),
(232, 'S CARVALHO', 'InclusÃ£o Mat Cautela - Sd EV - NOVO- Cantil caneco - 1', '2020-08-15 22:02:17'),
(233, 'S CARVALHO', 'InclusÃ£o Mat Cautela - Sd EV - NOVO- Manta VO  - 1', '2020-08-15 22:02:17'),
(234, 'S CARVALHO', 'InclusÃ£o Mat Cautela - Sd EV - NOVO- Gandola verde - 1', '2020-08-15 22:02:17'),
(235, 'S CARVALHO', 'InclusÃ£o Mat Cautela - Sd EV - NOVO- cinto na - 1', '2020-08-15 22:02:17'),
(236, 'S CARVALHO', 'InclusÃ£o Mat Cautela -  - -  - ', '2020-08-15 22:27:18'),
(237, 'S CARVALHO', 'InclusÃ£o Mat Cautela -  - -  - ', '2020-08-15 22:27:35'),
(238, 'S CARVALHO', 'InclusÃ£o Mat Cautela -  - -  - ', '2020-08-15 22:28:50'),
(239, 'S CARVALHO', 'InclusÃ£o Mat Cautela -  - -  - ', '2020-08-15 22:29:25'),
(240, 'S CARVALHO', 'InclusÃ£o Mat Cautela -  - -  - ', '2020-08-15 22:29:52'),
(241, 'S CARVALHO', 'InclusÃ£o Mat Cautela Automatico - ', '2020-08-15 23:18:45'),
(242, 'S CARVALHO', 'incluiu UsuÃ¡rio - 1Âº Sgt BORA', '2020-08-16 11:00:20'),
(243, 'S CARVALHO', 'ExclusÃ£o Mat Cautela - Sd EV - SOUZA - Cantil  - 1 - 16/08/2020', '2020-08-16 16:24:28'),
(244, 'S CARVALHO', 'ExclusÃ£o Militar - Sd EVSOUZA', '2020-08-16 16:24:44'),
(245, 'S CARVALHO', 'ExclusÃ£o Mat Cautela - S Ten - CARVALHO - Cantil  - 1 - 28/07/2020', '2020-08-16 16:43:10'),
(246, 'S CARVALHO', 'ExclusÃ£o Mat Cautela - S Ten - CARVALHO - Manta VO  - 1 - 28/07/2020', '2020-08-16 16:43:18'),
(247, 'S CARVALHO', 'InclusÃ£o Mat Cautela - S Ten - CARVALHO- Cantil  - 1', '2020-08-16 16:50:28'),
(248, 'S CARVALHO', 'Incluido material -  - 1', '2020-08-16 16:57:09'),
(249, 'S CARVALHO', 'ExclusÃ£o Material - ', '2020-08-16 16:58:00'),
(250, 'S CARVALHO', 'ExclusÃ£o Mat Cautela - Sd EV - NOVO - cinto na - 1 - 16/08/2020', '2020-08-16 17:17:40'),
(251, 'S CARVALHO', 'InclusÃ£o Mat Cautela Automatico - ', '2020-08-16 17:36:51'),
(252, 'S CARVALHO', 'ALTERAÃ‡ÃƒO tipo de  material - cobertoreeeEE', '2020-08-16 17:58:56'),
(253, 'S CARVALHO', 'ALTERAÃ‡ÃƒO tipo de  material - cobertor555D', '2020-08-16 17:59:01'),
(254, 'S CARVALHO', 'ALTERAÃ‡ÃƒO tipo de  material - cobertor555Deee', '2020-08-16 18:01:40'),
(255, 'S CARVALHO', 'ALTERAÃ‡ÃƒO tipo de  material - cobertor555555', '2020-08-16 18:02:42'),
(256, 'S CARVALHO', 'ALTERAÃ‡ÃƒO tipo de  material - cobertor555555666', '2020-08-16 18:02:51'),
(257, 'S CARVALHO', 'ALTERAÃ‡ÃƒO tipo de  material - cobertor555777', '2020-08-16 18:04:07'),
(258, 'S CARVALHO', 'ALTERAÃ‡ÃƒO tipo de  material - cobertor555111', '2020-08-16 18:04:41'),
(259, 'S CARVALHO', 'ALTERAÃ‡ÃƒO tipo de  material - cobertor555111555', '2020-08-16 18:04:49'),
(260, 'S CARVALHO', 'ALTERAÃ‡ÃƒO tipo de  material - cobertor9', '2020-08-16 18:05:03'),
(261, 'S CARVALHO', 'ALTERAÃ‡ÃƒO tipo de  material - cobertor', '2020-08-16 18:05:08'),
(262, 'S CARVALHO', 'ALTERAÃ‡ÃƒO tipo de  material - cobertores', '2020-08-16 18:05:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `material`
--

CREATE TABLE `material` (
  `id` int(5) NOT NULL,
  `tipo` int(5) NOT NULL,
  `descri` varchar(100) NOT NULL,
  `quantidade` int(10) NOT NULL,
  `necessi` int(4) NOT NULL,
  `obs` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `material`
--

INSERT INTO `material` (`id`, `tipo`, `descri`, `quantidade`, `necessi`, `obs`) VALUES
(1, 1, 'wdewqeqewqddeww wq', 12, 122, 'dasdsad 12'),
(2, 4, 'Cantil ', 80, 180, 'observaÃ§Ã£o'),
(3, 5, 'Cantil caneco', 80, 182, 'observaÃ§Ã£o'),
(4, 4, 'Manta VO ', 85, 200, 'Tipo 1'),
(6, 3, 'Gandola verde', 150, 300, 'obsv'),
(12, 3, 'Nova desriÃ§ao de 02 caratcteres', 12, 12, ''),
(13, 5, 'cinto na', 50, 199, 'Novo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `militar`
--

CREATE TABLE `militar` (
  `id` int(2) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nomeg` varchar(30) NOT NULL,
  `pstgrad` int(2) NOT NULL,
  `ant` int(2) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `militar`
--

INSERT INTO `militar` (`id`, `nome`, `nomeg`, `pstgrad`, `ant`, `senha`) VALUES
(7, 'JORGE CARVALHO', 'CARVALHO', 8, 1, '741d0b5201c5f9dfb7dbb0e112d3b3c3e7f71ca6'),
(23, 'CARLOS SANTANA', 'CARLOS', 15, 1, ''),
(25, 'PAULO ROSA SANTOS', 'PAULO SANTOS', 1, 1, ''),
(26, 'MARCOS CELSO DE SOUZA', 'CELSO', 2, 1, '8cb2237d0679ca88db6464eac60da96345513964'),
(29, 'SOLDADO NOVO EB', 'NOVO', 15, 1, '8cb2237d0679ca88db6464eac60da96345513964');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pg`
--

CREATE TABLE `pg` (
  `id` int(11) NOT NULL,
  `pg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pg`
--

INSERT INTO `pg` (`id`, `pg`) VALUES
(1, 'Cel'),
(2, 'Ten Cel'),
(3, 'Maj'),
(4, 'Cap'),
(5, '1Âº Ten'),
(6, '2Âº Ten'),
(7, 'Asp Of'),
(8, 'S Ten'),
(9, '1Âº Sgt'),
(10, '2Âº Sgt'),
(11, '3Âº Sgt'),
(12, 'Cb NB'),
(13, 'Sd NB'),
(14, 'Cb EV'),
(15, 'Sd EV');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipomat`
--

CREATE TABLE `tipomat` (
  `id` int(2) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipomat`
--

INSERT INTO `tipomat` (`id`, `tipo`) VALUES
(3, 'Fardamento'),
(4, 'Cama e Banho'),
(5, 'Equipamento e Estacionamento'),
(8, 'cobertores');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `usuario` varchar(25) COLLATE utf8_swedish_ci NOT NULL,
  `senha` varchar(40) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `nivel` int(1) UNSIGNED NOT NULL DEFAULT 1,
  `ativo` tinyint(1) NOT NULL DEFAULT 1,
  `cadastro` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `email`, `nivel`, `ativo`, `cadastro`) VALUES
(22, '1Âº Sgt BORA', 'bora', '803ad839741b7f1760661c1cc6aad0380c8e0d08', '1', 2, 1, '2020-08-16 04:00:20'),
(20, 'Cel TWSTE', 'teste', '8cb2237d0679ca88db6464eac60da96345513964', '1', 2, 1, '2020-08-13 08:30:32'),
(19, 'S Ten TITON', 'titon', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1', 2, 1, '2020-08-13 03:35:01'),
(17, 'Ten CHAGAS', 'chagas', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1', 2, 1, '2020-08-13 03:34:01'),
(16, 'Asp CARLOS', 'carlos', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1', 3, 1, '2020-08-13 02:53:32'),
(15, 'S CARVALHO', 'carvalho', '741d0b5201c5f9dfb7dbb0e112d3b3c3e7f71ca6', '1', 3, 1, '2020-08-13 01:52:09');

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `vcautela`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `vcautela` (
`material` varchar(100)
,`tipo` int(5)
);

-- --------------------------------------------------------

--
-- Estrutura para vista `consultacau`
--
DROP TABLE IF EXISTS `consultacau`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `consultacau`  AS  select `material`.`id` AS `id_mat`,`material`.`tipo` AS `tipo`,`material`.`descri` AS `descri`,`material`.`quantidade` AS `quantidade`,`material`.`necessi` AS `necessidade`,`material`.`obs` AS `obs`,`listamil`.`pstgrad` AS `posto`,`listamil`.`id` AS `id_mil`,`listamil`.`nome` AS `nome`,`listamil`.`nomeg` AS `nomeg`,`cautela`.`id` AS `id_cau`,`cautela`.`militar` AS `caumil`,`cautela`.`material` AS `caumat`,`cautela`.`quantidade` AS `cauquant`,`cautela`.`data` AS `caudata` from ((`cautela` left join `listamil` on(`cautela`.`militar` = `listamil`.`id`)) left join `material` on(`cautela`.`material` = `material`.`id`)) ;

-- --------------------------------------------------------

--
-- Estrutura para vista `listamat`
--
DROP TABLE IF EXISTS `listamat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `listamat`  AS  select `t`.`id` AS `ordem`,`t`.`tipo` AS `tipo`,`m`.`id` AS `id`,`m`.`descri` AS `descri`,`m`.`quantidade` AS `quanti` from (`material` `m` join `tipomat` `t` on(`t`.`id` = `m`.`tipo`)) ;

-- --------------------------------------------------------

--
-- Estrutura para vista `listamil`
--
DROP TABLE IF EXISTS `listamil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `listamil`  AS  select `p`.`id` AS `ordem`,`p`.`pg` AS `pstgrad`,`m`.`id` AS `id`,`m`.`nome` AS `nome`,`m`.`nomeg` AS `nomeg` from (`militar` `m` join `pg` `p` on(`p`.`id` = `m`.`pstgrad`)) ;

-- --------------------------------------------------------

--
-- Estrutura para vista `vcautela`
--
DROP TABLE IF EXISTS `vcautela`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vcautela`  AS  select `m`.`descri` AS `material`,`m`.`tipo` AS `tipo` from `material` `m` ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cautela`
--
ALTER TABLE `cautela`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `militar`
--
ALTER TABLE `militar`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pg`
--
ALTER TABLE `pg`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipomat`
--
ALTER TABLE `tipomat`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `nivel` (`nivel`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cautela`
--
ALTER TABLE `cautela`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT de tabela `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT de tabela `material`
--
ALTER TABLE `material`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `militar`
--
ALTER TABLE `militar`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `pg`
--
ALTER TABLE `pg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tipomat`
--
ALTER TABLE `tipomat`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
