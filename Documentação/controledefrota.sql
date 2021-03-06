-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Maio-2019 às 15:12
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `controledefrota`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apolice`
--

CREATE TABLE `apolice` (
  `id_apolice` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `data_inicio` varchar(45) DEFAULT NULL,
  `data_fim` varchar(45) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `apolice`
--

INSERT INTO `apolice` (`id_apolice`, `descricao`, `data_inicio`, `data_fim`, `valor`) VALUES
(44, '', '30/04/2019', '30/04/2019', ''),
(46, 'Seguro Total', '02/05/2019', '02/05/2019', '40,000'),
(48, 'Seguro Total', '06/05/2019', '07/05/2020', '2.000'),
(49, 'Seguro que cobre totalmente', '14/05/2019', '14/05/2020', '100,00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `apolice_urbano`
--

CREATE TABLE `apolice_urbano` (
  `id_apolice_urbano` int(11) NOT NULL,
  `id_apolice` int(11) NOT NULL,
  `id_onibus_urbano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `apolice_urbano`
--

INSERT INTO `apolice_urbano` (`id_apolice_urbano`, `id_apolice`, `id_onibus_urbano`) VALUES
(29, 44, 7),
(30, 46, 7),
(34, 48, 7),
(35, 48, 1),
(36, 49, 7),
(37, 49, 2),
(38, 49, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `apolice_viagem`
--

CREATE TABLE `apolice_viagem` (
  `id_apolice_viagem` int(11) NOT NULL,
  `id_apolice` int(11) NOT NULL,
  `id_onibus_viagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `apolice_viagem`
--

INSERT INTO `apolice_viagem` (`id_apolice_viagem`, `id_apolice`, `id_onibus_viagem`) VALUES
(5, 44, 501),
(6, 46, 501),
(7, 49, 501);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartao`
--

CREATE TABLE `cartao` (
  `id_cartao` int(11) NOT NULL,
  `codigo` varchar(45) DEFAULT NULL,
  `bandeira` varchar(45) DEFAULT NULL,
  `validade` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_onibus`
--

CREATE TABLE `categoria_onibus` (
  `id_categoria_onibus` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `tarifa` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria_onibus`
--

INSERT INTO `categoria_onibus` (`id_categoria_onibus`, `descricao`, `tarifa`) VALUES
(1, 'comum', '2,00'),
(2, 'leito', '2,50'),
(3, 'executivo', '3,00'),
(4, 'lero lero', '2.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `id_cidade` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id_cidade`, `nome`) VALUES
(1, 'Alegrete'),
(2, 'Uruguaiana'),
(3, 'Santa Maria'),
(4, 'Durasnal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cobrador`
--

CREATE TABLE `cobrador` (
  `id_cobrador` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `rg` varchar(255) DEFAULT NULL,
  `carteiraTrabalho` varchar(255) DEFAULT NULL,
  `pis` varchar(255) DEFAULT NULL,
  `dataAdmissao` varchar(255) DEFAULT NULL,
  `cnh` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ativo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cobrador`
--

INSERT INTO `cobrador` (`id_cobrador`, `nome`, `cpf`, `rg`, `carteiraTrabalho`, `pis`, `dataAdmissao`, `cnh`, `telefone`, `email`, `ativo`) VALUES
(1, 'Leo Banks', '009182750-75', '23423423432', '342342342342', '3423423424', '2019-04-24', '543535345345', '4234234234234232', '423423423423', 'INATIVO'),
(2, 'Encaminhado', '345435345-34', '54353454353', '345435345', '345345345', '2019-04-12', '34534534534', '3454353453', 'gbdfbdf', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `id_poltrona` int(11) NOT NULL,
  `seguro` varchar(45) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL,
  `forma_pagamento` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra_cartao`
--

CREATE TABLE `compra_cartao` (
  `id_compra` int(11) NOT NULL,
  `id_cartao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra_pontos`
--

CREATE TABLE `compra_pontos` (
  `id_compra` int(11) NOT NULL,
  `id_pontos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `concessaotrajeto`
--

CREATE TABLE `concessaotrajeto` (
  `codConcessao` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `data_inicio` varchar(255) NOT NULL,
  `extensao` varchar(255) DEFAULT NULL,
  `data_fim` varchar(45) DEFAULT NULL,
  `doc_autorizacao` varchar(45) DEFAULT NULL,
  `status_concessao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `concessaotrajeto`
--

INSERT INTO `concessaotrajeto` (`codConcessao`, `descricao`, `data_inicio`, `extensao`, `data_fim`, `doc_autorizacao`, `status_concessao`) VALUES
(1, '', '', NULL, NULL, NULL, 'INATIVO'),
(2, '', 'leo viado', NULL, NULL, NULL, 'ATIVO'),
(3, '', '02/04/2019', 'larho', '04/04/2019', 'C:\\fakepath\\comprovanteMatricula.pdf', 'ATIVO'),
(4, '', '16/04/2019', '22', '30/04/2019', 'C:\\fakepath\\concurso.pdf', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dia`
--

CREATE TABLE `dia` (
  `id_dia` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estudante`
--

CREATE TABLE `estudante` (
  `id_estudante` int(11) NOT NULL,
  `comprovante_matricula` varchar(255) DEFAULT NULL,
  `idf_pessoa` int(11) NOT NULL,
  `comprovante_residencia` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estudante`
--

INSERT INTO `estudante` (`id_estudante`, `comprovante_matricula`, `idf_pessoa`, `comprovante_residencia`) VALUES
(1, 'comprovantematricula.pdf', 2, 'comprovanteresidencia.pdf'),
(2, 'C:\\fakepath\\MEI.png', 7, 'C:\\fakepath\\MEI.png'),
(3, 'C:\\fakepath\\Chrysanthemum.jpg', 9, 'C:\\fakepath\\MEI.png'),
(4, '', 16, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forma_pagamento`
--

CREATE TABLE `forma_pagamento` (
  `id_pagamento` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `forma_pagamento`
--

INSERT INTO `forma_pagamento` (`id_pagamento`, `descricao`, `status`) VALUES
(1, 'Débito', 'ATIVO'),
(2, 'teste', 'INATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_funcionario` int(11) NOT NULL,
  `id_cidade` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `rg` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `dataN` varchar(45) DEFAULT NULL,
  `ctps` varchar(45) DEFAULT NULL,
  `pis` varchar(45) DEFAULT NULL,
  `cnh` varchar(45) DEFAULT NULL,
  `salario` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `dataAdmissao` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `numCasa` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id_funcionario`, `id_cidade`, `id_usuario`, `nome`, `cpf`, `rg`, `telefone`, `dataN`, `ctps`, `pis`, `cnh`, `salario`, `email`, `dataAdmissao`, `endereco`, `numCasa`, `bairro`) VALUES
(1, 2, 16, 'teste', '242.342.343-43', '3454353453', '(34) 53453-45', '2019-05-14', '4534543 5345', '345.43543.534', '345435435', '998', 'mauriciosescobar@gmail.com', '2019-05-14', 'avenida euripedes brasil milan', '1', 'Centro'),
(2, 2, 17, 'teste', '342.3423', '42342342', '(23) 42342-3423', '2019-05-14', '4234234 2', '423.42342', '234234', '998', '2342342', '2019-05-14', 'avenida euripedes brasil milan', '2', 'Centro'),
(4, 2, 19, 'Joao da Silva', '222.222.222-22', '8888888888', '(51) 94545-4545', '2019-05-01', '8888888 88888 RS', '555.55555.55-5', '44444444444', '7000', 'jao@gmail.com', '2019-05-14', 'Rua borges de medeiros', '660', 'Centro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `dia_semana` varchar(45) DEFAULT NULL,
  `horario_inicio` varchar(45) DEFAULT NULL,
  `horario_chegada` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `idoso`
--

CREATE TABLE `idoso` (
  `id_idoso` int(11) NOT NULL,
  `carteira_idoso` varchar(45) DEFAULT NULL,
  `idf_pessoa` int(11) NOT NULL,
  `comprovante_residencia` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `idoso`
--

INSERT INTO `idoso` (`id_idoso`, `carteira_idoso`, `idf_pessoa`, `comprovante_residencia`) VALUES
(1, 'carteiradoisoso.pdf', 4, 'contaluz.pdf'),
(2, 'carteira.pdf', 6, 'comssk.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `linha`
--

CREATE TABLE `linha` (
  `id_linha` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `origem` varchar(45) DEFAULT NULL,
  `destino` varchar(45) DEFAULT NULL,
  `tempo` varchar(45) DEFAULT NULL,
  `num_trechos` varchar(45) DEFAULT NULL,
  `km` varchar(255) NOT NULL,
  `situacao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `linha`
--

INSERT INTO `linha` (`id_linha`, `descricao`, `origem`, `destino`, `tempo`, `num_trechos`, `km`, `situacao`) VALUES
(1, 'UruguaianaxDurasnal', 'Uruguaiana', NULL, '00:30', '2', '30', 'ATIVO'),
(2, 'DurasnalxSanta Maria', 'Durasnal', NULL, '00:45', '3', '4', 'ATIVO'),
(3, 'teste agora', 'Durasnal', NULL, '00:33', '2', '33', 'ATIVO'),
(4, 'teste agora', 'Durasnal', NULL, '00:33', '2', '33', 'ATIVO'),
(5, 'kkk', 'Santa Maria', NULL, '00:25', '2', '224', 'ATIVO'),
(6, 'simples', 'Durasnal', NULL, '07:46', '2', '66', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `linha_dia`
--

CREATE TABLE `linha_dia` (
  `id_dia` int(11) NOT NULL,
  `id_linha` int(11) NOT NULL,
  `id_motorista` int(11) NOT NULL,
  `id_onibus_viagem` int(11) NOT NULL,
  `km` varchar(255) NOT NULL,
  `horario_inicio` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `linha_trecho`
--

CREATE TABLE `linha_trecho` (
  `id_trecho` int(11) NOT NULL,
  `id_linha` int(11) NOT NULL,
  `local` varchar(45) DEFAULT NULL,
  `tempo` varchar(45) DEFAULT NULL,
  `km` varchar(255) NOT NULL,
  `situacao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `linha_trecho`
--

INSERT INTO `linha_trecho` (`id_trecho`, `id_linha`, `local`, `tempo`, `km`, `situacao`) VALUES
(3, 6, NULL, '444', '44', 'ATIVO'),
(5, 6, NULL, '22', '22', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `manutencao`
--

CREATE TABLE `manutencao` (
  `id_manutencao` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `data_inicio` varchar(45) DEFAULT NULL,
  `data_fim` varchar(45) DEFAULT NULL,
  `valor_inicio` varchar(45) DEFAULT NULL,
  `valor_final` varchar(255) NOT NULL,
  `motivo` varchar(45) DEFAULT NULL,
  `oficina` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `manutencao`
--

INSERT INTO `manutencao` (`id_manutencao`, `descricao`, `data_inicio`, `data_fim`, `valor_inicio`, `valor_final`, `motivo`, `oficina`) VALUES
(1, 'teste', '16/05/2019', '16/05/2019', '11.1', '11.11', 'teste', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `manutencao_urbano`
--

CREATE TABLE `manutencao_urbano` (
  `id_manutencao_urbano` int(11) NOT NULL,
  `id_onibus_urbano` int(11) NOT NULL,
  `id_manutencao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `manutencao_urbano`
--

INSERT INTO `manutencao_urbano` (`id_manutencao_urbano`, `id_onibus_urbano`, `id_manutencao`) VALUES
(0, 7, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `manutencao_viagem`
--

CREATE TABLE `manutencao_viagem` (
  `id_manutencao_viagem` int(11) NOT NULL,
  `id_onibus_viagem` int(11) NOT NULL,
  `id_manutencao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `manutencao_viagem`
--

INSERT INTO `manutencao_viagem` (`id_manutencao_viagem`, `id_onibus_viagem`, `id_manutencao`) VALUES
(1, 501, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `motorista`
--

CREATE TABLE `motorista` (
  `id_motorista` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `rg` varchar(255) NOT NULL,
  `carteiraTrabalho` varchar(255) NOT NULL,
  `pis` varchar(255) NOT NULL,
  `dataAdmissao` varchar(255) NOT NULL,
  `cnh` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ativo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `motorista`
--

INSERT INTO `motorista` (`id_motorista`, `nome`, `cpf`, `rg`, `carteiraTrabalho`, `pis`, `dataAdmissao`, `cnh`, `telefone`, `email`, `ativo`) VALUES
(1, 'Mauricio', '1111', '', '', '', '', '', '', '', 'INATIVO'),
(2, 'teste', '234234234-23', '2423423', '2342342423', '423424242', '2019-04-24', '234234234234', '23423423424', '24234234234', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `onibus_trajeto`
--

CREATE TABLE `onibus_trajeto` (
  `id_onibus_urbano` int(11) NOT NULL,
  `id_trajeto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `onibus_urbano`
--

CREATE TABLE `onibus_urbano` (
  `id_onibus_urbano` int(11) NOT NULL,
  `placa` varchar(45) DEFAULT NULL,
  `ano` varchar(45) DEFAULT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `chassi` varchar(45) DEFAULT NULL,
  `renavam` varchar(45) DEFAULT NULL,
  `cor` varchar(45) DEFAULT NULL,
  `situacao` varchar(255) DEFAULT NULL,
  `km` varchar(255) DEFAULT NULL,
  `numero_assentos` varchar(255) DEFAULT NULL,
  `numero_passageiros` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `onibus_urbano`
--

INSERT INTO `onibus_urbano` (`id_onibus_urbano`, `placa`, `ano`, `marca`, `modelo`, `chassi`, `renavam`, `cor`, `situacao`, `km`, `numero_assentos`, `numero_passageiros`) VALUES
(1, 'ist9086', '2000', 'marco', 'marco89', '22453453534543535', '00034534534', 'amare', 'ATIVO', '240000', '40', '40'),
(2, 'irt6y89', '2011', 'Volkswagen', 'volks2257', '45435345345345345', '56576533432', 'azul', 'ATIVO', '200000', '40', '40'),
(3, 'ivt5j79', '2005', 'volkswagen', 'volks9871', '34534543534543534', '86786786786', 'azul', 'ATIVO', '200000', '40', '44'),
(4, 'ivt5j79', '2005', 'volkswagen', 'volks9871', '34534543534543534', '86786786786', 'azul', 'ATIVO', '200000', '40', '44'),
(5, 'ity6789', '2005', 'Volkswagen', 'volks9765', '34578954355477676', '34343436565', 'verde', 'ATIVO', '2000000', '45', '45'),
(6, 'ity6789', '2005', 'Volkswagen', 'volks9765', '34578954355477676', '34343436565', 'verde', 'ATIVO', '2000000', '45', '45'),
(7, 'defe345', '2019', 'marcopolo', 'marcopoloamanha', '34567568678678686', '43434645645', 'roxo', 'ATIVO', '200000', '40', '40'),
(8, 'sdfgsdf', '2342', 'fghfgh', 'kkkkkk', '23423423423423424', '23423423423', 'fdhfghgfh', 'ATIVO', '222222', '44', '44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `onibus_viagem`
--

CREATE TABLE `onibus_viagem` (
  `id_onibus_viagem` int(11) NOT NULL,
  `id_categoria_onibus` int(11) NOT NULL,
  `placa` varchar(45) DEFAULT NULL,
  `ano` varchar(45) DEFAULT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `chassi` varchar(45) DEFAULT NULL,
  `renavam` varchar(45) DEFAULT NULL,
  `cor` varchar(45) DEFAULT NULL,
  `situacao` varchar(255) DEFAULT NULL,
  `km` varchar(255) DEFAULT NULL,
  `numero_assentos` varchar(255) DEFAULT NULL,
  `numero_passageiros` varchar(255) DEFAULT NULL,
  `banheiro` varchar(255) DEFAULT NULL,
  `arcondicionado` varchar(255) DEFAULT NULL,
  `numero_andares` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `onibus_viagem`
--

INSERT INTO `onibus_viagem` (`id_onibus_viagem`, `id_categoria_onibus`, `placa`, `ano`, `marca`, `modelo`, `chassi`, `renavam`, `cor`, `situacao`, `km`, `numero_assentos`, `numero_passageiros`, `banheiro`, `arcondicionado`, `numero_andares`) VALUES
(501, 2, 'dfsdfsd', '5345', 'dfgdfgdf', 'dfvdfvd', '45345345345345453', '43543543534', 'fdvdfvdv', 'INATIVO', '45435345', '44', '44', '4', '4', '4'),
(502, 1, 'ivt5f78', '2011', 'marcopolo', 'marcopolo9000', '33454353454364564', '33423534543', 'vermelho', 'ATIVO', '20000', '50', '50', '2', '2', '2'),
(503, 1, 'ivt6j89', '2011', 'Volkswagen', 'volks3434', '44373453453453453', '43434534525', 'branco', 'ATIVO', '200000', '70', '70', '2', '2', '2'),
(504, 3, 'ivg6f78', '2009', 'marcopolo', 'marcopolo3344', '32423534645765756', '23524645645', 'prata', 'ATIVO', '200000', '55', '55', '2', '2', '2'),
(505, 1, 'ivo4045', '2011', 'volkswagen', 'volks1044', '34546456745645645', '34534543346', 'verde', 'ATIVO', '2000', '30', '30', '2', '2', '2'),
(506, 1, 'yrthtrh', '6456', 'fghghfghf', 'kkkkkkk', '54645645645645645', '64564564654', 'rhrtfhf', 'INATIVO', '45645645', '55', '55', '54', '4', '4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `parada`
--

CREATE TABLE `parada` (
  `id_parada` int(11) NOT NULL,
  `numeroParada` varchar(45) DEFAULT NULL,
  `local` varchar(45) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `parada`
--

INSERT INTO `parada` (`id_parada`, `numeroParada`, `local`, `complemento`) VALUES
(1, '1', 'Cidade Alta', 'perto do presidio'),
(2, '2', 'Cidade Alta', 'Praça Nova'),
(3, '3', 'Cidade Alta', 'Dr. Lauro Dornelles'),
(4, '4', 'tt', 'teste'),
(5, '22', 'teste', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `parada_trajeto`
--

CREATE TABLE `parada_trajeto` (
  `id_parada` int(11) NOT NULL,
  `id_trajeto` int(11) NOT NULL,
  `horario` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `passagem`
--

CREATE TABLE `passagem` (
  `id_pessoa` int(11) NOT NULL,
  `id_trecho` int(11) NOT NULL,
  `id_linha` int(11) NOT NULL,
  `data_hora` varchar(45) DEFAULT NULL,
  `valor` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `descricao`) VALUES
(1, 'Administrador Local'),
(2, 'Administrador Geral'),
(3, 'Secretario'),
(4, 'Gerente de RH'),
(5, 'Cobrador'),
(6, 'Motorista'),
(7, 'Vendedor'),
(8, 'Estudante'),
(9, 'Idoso'),
(10, 'Deficiente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id_pessoa` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `rg` varchar(45) DEFAULT NULL,
  `numero_casa` varchar(45) DEFAULT NULL,
  `data_nascimento` varchar(255) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `beneficio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `id_usuario`, `nome`, `cpf`, `rg`, `numero_casa`, `data_nascimento`, `celular`, `rua`, `bairro`, `beneficio`) VALUES
(1, 1, 'Vagner Quincozes', '040.451.180-52', '5102526582', '150', '14/04/1989', '(55 999825041', 'Barão do Amazonas', 'Centro', 'Isencao'),
(2, 2, 'Mauricio Parara', '280.360.905-40', '5106859074', '196', '14/04/1998', '55 996051452', 'Barão do Cerro Largo', 'Santo Antônio', 'Meia Passagem'),
(3, 3, 'Leonardo', '050.505.404-90', '9050807042', '525', '14/04/1999', '55 996085041', 'Barão daads', 'Centro', 'Isencao'),
(4, 4, 'Seco', '850.400.525-40', '8050406090', '654', '14/04/1997', '55 996504090', 'Joaquim Antonio', 'Santo Antônio', ''),
(5, 5, 'Torres', '042.866.151-50', '5040607129', '15', '14/04/1987', '55 999969685', 'Rua tftft', 'Centro', 'Meia Passagem'),
(6, 6, 'Jorginho', '040.500.415-80', '5104958410', '152', '14/04/1986', '55 999807054', 'Mariz e Barros', 'Santa Rosa', ''),
(7, 7, 'Vagner Ereno Quincozes', '040.451.190-27', '5050505050', '780', '1998-06-14', '55-997018411', 'Barão do Amazonas', 'Centro', 'Nenhum'),
(8, 8, 'Vagner Ereno Quincozes', '040.451.190-27', '5050505050', '780', '1998-06-14', '55-997018411', 'Barão do Amazonas', 'Centro', 'Nenhum'),
(9, 9, 'Mauricio Escobar', '505.426.896-02', '5124699960', '329', '1990-05-10', '55-999970000', 'Barão do Amazonas', 'Centro', 'Nenhum'),
(10, 10, 'Mauricio Escobar', '505.426.896-02', '5124699960', '329', '1990-05-10', '55-999970000', 'Barão do Amazonas', 'Centro', 'Nenhum'),
(11, 11, 'Rafael Mardegan', '040.451.190-28', '3453454354', '1115', '1959-08-01', '55-909090909', 'avenida euripedes brasil milano', 'Centro', 'Nenhum'),
(12, 12, 'Rafael Mardegan', '040.655.656-56', '0505065645', '142', '1985-12-05', '55-997979797', 'Barão do Amazonas', 'Centro', 'Nenhum'),
(13, 13, 'Rafael Mardegan', '040.655.656-56', '0505065645', '142', '1985-12-05', '55-997979797', 'Barão do Amazonas', 'Centro', 'Nenhum'),
(14, 14, 'Vagner Ereno Quincozes', '050.652.369-10', '1051515151', '2689', '1990-05-05', '55-997000000', 'avenida euripedes brasil milano', 'Centro', 'Nenhum'),
(15, 15, 'Vagner Ereno Quincozes', '050.652.369-10', '1051515151', '2689', '1990-05-05', '55-997000000', 'avenida euripedes brasil milano', 'Centro', 'Nenhum'),
(16, 20, '', '', '', '', '', '', '', '', 'Nenhum'),
(17, 21, '', '', '', '', '', '', '', '', 'Nenhum');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa_com_deficiencia`
--

CREATE TABLE `pessoa_com_deficiencia` (
  `id_pessoa_com_deficiencia` int(11) NOT NULL,
  `tipo_deficiencia` varchar(255) DEFAULT NULL,
  `atestado_medico` varchar(255) DEFAULT NULL,
  `idf_pessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoa_com_deficiencia`
--

INSERT INTO `pessoa_com_deficiencia` (`id_pessoa_com_deficiencia`, `tipo_deficiencia`, `atestado_medico`, `idf_pessoa`) VALUES
(1, 'Perna quebrada', 'ahah.pdf', 1),
(2, 'Mental', 'hasiadhu.pdf', 5),
(3, '', '', 17);

-- --------------------------------------------------------

--
-- Estrutura da tabela `poltrona`
--

CREATE TABLE `poltrona` (
  `id_poltrona` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos`
--

CREATE TABLE `pontos` (
  `id_pontos` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `quantidade` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rodoviaria`
--

CREATE TABLE `rodoviaria` (
  `codRodoviaria` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `responsavel` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `data_inicio` varchar(255) NOT NULL,
  `status_rodoviaria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `rodoviaria`
--

INSERT INTO `rodoviaria` (`codRodoviaria`, `nome`, `responsavel`, `cidade`, `estado`, `data_inicio`, `status_rodoviaria`) VALUES
(1, 'Estação', 'Prefeitura', 'Alegrete', 'Rio Grande do Sul', '09/05/2019', 'INATIVO'),
(2, 'Lero Lero', 'Eu', 'alegrete', 'RS', '2019-05-14', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `seguro`
--

CREATE TABLE `seguro` (
  `id_seguro` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `numero_apolice` varchar(45) DEFAULT NULL,
  `data_inicial` varchar(45) DEFAULT NULL,
  `data_final` varchar(45) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sinistro`
--

CREATE TABLE `sinistro` (
  `id_sinistro` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `custo` varchar(45) DEFAULT NULL,
  `culpado` varchar(255) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL,
  `pagante` varchar(255) DEFAULT NULL,
  `data` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sinistro_urbano`
--

CREATE TABLE `sinistro_urbano` (
  `id_sinistro` int(11) NOT NULL,
  `id_onibus_urbano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sinistro_viagem`
--

CREATE TABLE `sinistro_viagem` (
  `id_sinistro` int(11) NOT NULL,
  `id_onibus_viagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacaobeneficio`
--

CREATE TABLE `solicitacaobeneficio` (
  `id_solicitacao` int(11) NOT NULL,
  `data_solicitacao` varchar(45) DEFAULT NULL,
  `idf_situacao_solicitacao` int(11) NOT NULL,
  `idf_pessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `solicitacaobeneficio`
--

INSERT INTO `solicitacaobeneficio` (`id_solicitacao`, `data_solicitacao`, `idf_situacao_solicitacao`, `idf_pessoa`) VALUES
(1, '16/04/2019', 0, 1),
(2, '16/04/2019', 0, 2),
(3, '16/04/2019', 0, 3),
(4, '16/04/2019', 0, 4),
(5, '16/04/2019', 0, 5),
(6, '16/04/2019', 0, 6),
(7, '14 de Maio de 2019 às 18:55', 2, 7),
(8, '14 de Maio de 2019 às 19:00', 0, 9),
(9, '14 de Maio de 2019 às 21:06', 0, 16),
(10, '14 de Maio de 2019 às 21:08', 2, 17);

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacao_situacao`
--

CREATE TABLE `solicitacao_situacao` (
  `id_situacao` int(11) NOT NULL,
  `descricao_situacao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `solicitacao_situacao`
--

INSERT INTO `solicitacao_situacao` (`id_situacao`, `descricao_situacao`) VALUES
(0, 'Pendente'),
(1, 'Aprovado'),
(2, 'Reprovado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarifa`
--

CREATE TABLE `tarifa` (
  `id_tarifa` int(11) NOT NULL,
  `id_linha` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL,
  `vigencia_inicial` varchar(45) DEFAULT NULL,
  `vigencia_final` varchar(45) DEFAULT NULL,
  `situacao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tarifa`
--

INSERT INTO `tarifa` (`id_tarifa`, `id_linha`, `descricao`, `valor`, `vigencia_inicial`, `vigencia_final`, `situacao`) VALUES
(18, 0, NULL, '10', NULL, NULL, '1'),
(19, 0, NULL, '2', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_beneficio`
--

CREATE TABLE `tipo_beneficio` (
  `id_tipo` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_beneficio`
--

INSERT INTO `tipo_beneficio` (`id_tipo`, `descricao`) VALUES
(0, 'Nenhum'),
(1, 'Meia Passagem'),
(2, 'Isencao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `trajeto`
--

CREATE TABLE `trajeto` (
  `id_trajeto` int(11) NOT NULL,
  `id_trajetocobrador` int(11) NOT NULL,
  `id_trajetomotorista` int(11) NOT NULL,
  `id_trajetoonibus` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `nome` varchar(255) NOT NULL,
  `num_paradas` varchar(45) DEFAULT NULL,
  `situacao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `trajeto`
--

INSERT INTO `trajeto` (`id_trajeto`, `id_trajetocobrador`, `id_trajetomotorista`, `id_trajetoonibus`, `descricao`, `nome`, `num_paradas`, `situacao`) VALUES
(2, 1, 1, 1, 'MedianeiraXNova Brasília', '', '12', 'ATIVO'),
(3, 1, 1, 2, 'Vera CruzXSantos Dumount', '', '12', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `trecho`
--

CREATE TABLE `trecho` (
  `id_trecho` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `situacao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `trecho`
--

INSERT INTO `trecho` (`id_trecho`, `descricao`, `situacao`) VALUES
(1, 'Alegrete', 'ATIVO'),
(2, 'Uruguaiana', 'ATIVO'),
(3, 'Manoel Viana', 'ATIVO'),
(4, 'Santa Maria', 'ATIVO'),
(5, 'Durasnal', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL,
  `nome_usuario` varchar(45) DEFAULT NULL,
  `senha` char(56) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_perfil`, `nome_usuario`, `senha`) VALUES
(1, 1, 'Vagnerz', 'vagner'),
(2, 2, 'Mauricio', 'mauricio99'),
(3, 2, 'Rafael Torres', 'rafael9'),
(4, 2, 'Leo', 'ha92'),
(5, 2, 'Rafael Mardegon', 'rakrka99'),
(6, 2, 'usuarioteste', 'senhateste'),
(7, 8, 'vagnerereno', 'vagner'),
(8, 8, 'vagnerereno', 'vagner'),
(9, 8, 'mauricioescobar', '123456'),
(10, 8, 'mauricioescobar', '123456'),
(11, 8, 'Rafael Mardegan', '050505'),
(12, 8, 'rafaelmardegan', '050505'),
(13, 8, 'rafaelmardegan', '050505'),
(14, 8, 'hauahuahau', 'hahaha'),
(15, 8, 'hauahuahau', 'hahaha'),
(16, 4, 'teste', '123'),
(17, 4, 'teste', '123'),
(18, 4, '', ''),
(19, 4, 'funcionario', '12345'),
(20, 8, 'leo banks rpv', '123'),
(21, 8, 'dsfsfsfsdfs', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apolice`
--
ALTER TABLE `apolice`
  ADD PRIMARY KEY (`id_apolice`);

--
-- Indexes for table `apolice_urbano`
--
ALTER TABLE `apolice_urbano`
  ADD PRIMARY KEY (`id_apolice_urbano`),
  ADD KEY `fk_apolice_urbano_apolice1_idx` (`id_apolice`),
  ADD KEY `fk_apolice_urbano_onibus_urbano1_idx` (`id_onibus_urbano`);

--
-- Indexes for table `apolice_viagem`
--
ALTER TABLE `apolice_viagem`
  ADD PRIMARY KEY (`id_apolice_viagem`),
  ADD KEY `fk_apolice_viagem_onibus_viagem1_idx` (`id_onibus_viagem`),
  ADD KEY `fk_apolice_viagem_apolice1_idx` (`id_apolice`);

--
-- Indexes for table `cartao`
--
ALTER TABLE `cartao`
  ADD PRIMARY KEY (`id_cartao`);

--
-- Indexes for table `categoria_onibus`
--
ALTER TABLE `categoria_onibus`
  ADD PRIMARY KEY (`id_categoria_onibus`);

--
-- Indexes for table `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`id_cidade`);

--
-- Indexes for table `cobrador`
--
ALTER TABLE `cobrador`
  ADD PRIMARY KEY (`id_cobrador`);

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `fk_compra_poltrona1_idx` (`id_poltrona`);

--
-- Indexes for table `compra_cartao`
--
ALTER TABLE `compra_cartao`
  ADD PRIMARY KEY (`id_compra`,`id_cartao`),
  ADD KEY `fk_compra_cartao_cartao1_idx` (`id_cartao`);

--
-- Indexes for table `compra_pontos`
--
ALTER TABLE `compra_pontos`
  ADD PRIMARY KEY (`id_compra`,`id_pontos`),
  ADD KEY `fk_compra_pontos_pontos1_idx` (`id_pontos`);

--
-- Indexes for table `concessaotrajeto`
--
ALTER TABLE `concessaotrajeto`
  ADD PRIMARY KEY (`codConcessao`);

--
-- Indexes for table `dia`
--
ALTER TABLE `dia`
  ADD PRIMARY KEY (`id_dia`);

--
-- Indexes for table `estudante`
--
ALTER TABLE `estudante`
  ADD PRIMARY KEY (`id_estudante`),
  ADD KEY `fk_estudante_pessoa1_idx` (`idf_pessoa`);

--
-- Indexes for table `forma_pagamento`
--
ALTER TABLE `forma_pagamento`
  ADD PRIMARY KEY (`id_pagamento`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`),
  ADD KEY `fk_funcionario_cidade1_idx` (`id_cidade`),
  ADD KEY `fk_funcionario_usuario1_idx` (`id_usuario`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indexes for table `idoso`
--
ALTER TABLE `idoso`
  ADD PRIMARY KEY (`id_idoso`),
  ADD KEY `idf_pessoa` (`idf_pessoa`) USING BTREE;

--
-- Indexes for table `linha`
--
ALTER TABLE `linha`
  ADD PRIMARY KEY (`id_linha`);

--
-- Indexes for table `linha_dia`
--
ALTER TABLE `linha_dia`
  ADD PRIMARY KEY (`id_dia`,`id_linha`),
  ADD KEY `fk_linha_dia_linha1_idx` (`id_linha`),
  ADD KEY `fk_linha_dia_motorista1_idx` (`id_motorista`),
  ADD KEY `fk_linha_dia_onibus_viagem1_idx` (`id_onibus_viagem`);

--
-- Indexes for table `linha_trecho`
--
ALTER TABLE `linha_trecho`
  ADD PRIMARY KEY (`id_trecho`,`id_linha`),
  ADD KEY `fk_trecho_has_linha_linha1_idx` (`id_linha`),
  ADD KEY `fk_trecho_has_linha_trecho1_idx` (`id_trecho`);

--
-- Indexes for table `manutencao`
--
ALTER TABLE `manutencao`
  ADD PRIMARY KEY (`id_manutencao`);

--
-- Indexes for table `manutencao_urbano`
--
ALTER TABLE `manutencao_urbano`
  ADD PRIMARY KEY (`id_manutencao_urbano`),
  ADD KEY `fk_manutencao_urbano_onibus_urbano1_idx` (`id_onibus_urbano`),
  ADD KEY `fk_manutencao_urbano_manutencao1_idx` (`id_manutencao`);

--
-- Indexes for table `manutencao_viagem`
--
ALTER TABLE `manutencao_viagem`
  ADD PRIMARY KEY (`id_manutencao_viagem`),
  ADD KEY `fk_manutencao_viagem_onibus_viagem1_idx` (`id_onibus_viagem`),
  ADD KEY `fk_manutencao_viagem_manutencao1_idx` (`id_manutencao`);

--
-- Indexes for table `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`id_motorista`);

--
-- Indexes for table `onibus_trajeto`
--
ALTER TABLE `onibus_trajeto`
  ADD PRIMARY KEY (`id_onibus_urbano`,`id_trajeto`),
  ADD KEY `fk_onibus_urbano_has_trajeto_trajeto1_idx` (`id_trajeto`),
  ADD KEY `fk_onibus_urbano_has_trajeto_onibus_urbano1_idx` (`id_onibus_urbano`);

--
-- Indexes for table `onibus_urbano`
--
ALTER TABLE `onibus_urbano`
  ADD PRIMARY KEY (`id_onibus_urbano`);

--
-- Indexes for table `onibus_viagem`
--
ALTER TABLE `onibus_viagem`
  ADD PRIMARY KEY (`id_onibus_viagem`),
  ADD KEY `fk_onibus_viagem_tipo_onibus1_idx` (`id_categoria_onibus`);

--
-- Indexes for table `parada`
--
ALTER TABLE `parada`
  ADD PRIMARY KEY (`id_parada`);

--
-- Indexes for table `parada_trajeto`
--
ALTER TABLE `parada_trajeto`
  ADD PRIMARY KEY (`id_parada`,`id_trajeto`),
  ADD KEY `fk_parada_has_trajeto_trajeto1_idx` (`id_trajeto`),
  ADD KEY `fk_parada_has_trajeto_parada1_idx` (`id_parada`);

--
-- Indexes for table `passagem`
--
ALTER TABLE `passagem`
  ADD PRIMARY KEY (`id_pessoa`,`id_trecho`,`id_linha`),
  ADD KEY `fk_pessoa_has_viagem_viagem1_idx` (`id_trecho`,`id_linha`),
  ADD KEY `fk_pessoa_has_viagem_pessoa1_idx` (`id_pessoa`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id_pessoa`),
  ADD KEY `fk_pessoa_usuario1_idx` (`id_usuario`);

--
-- Indexes for table `pessoa_com_deficiencia`
--
ALTER TABLE `pessoa_com_deficiencia`
  ADD PRIMARY KEY (`id_pessoa_com_deficiencia`),
  ADD KEY `fk_pessoa_com_deficiencia_pessoa1_idx` (`idf_pessoa`);

--
-- Indexes for table `poltrona`
--
ALTER TABLE `poltrona`
  ADD PRIMARY KEY (`id_poltrona`);

--
-- Indexes for table `pontos`
--
ALTER TABLE `pontos`
  ADD PRIMARY KEY (`id_pontos`),
  ADD KEY `fk_pontos_usuario1_idx` (`id_usuario`);

--
-- Indexes for table `rodoviaria`
--
ALTER TABLE `rodoviaria`
  ADD PRIMARY KEY (`codRodoviaria`);

--
-- Indexes for table `seguro`
--
ALTER TABLE `seguro`
  ADD PRIMARY KEY (`id_seguro`),
  ADD KEY `fk_Seguro_funcionario1_idx` (`id_funcionario`);

--
-- Indexes for table `sinistro`
--
ALTER TABLE `sinistro`
  ADD PRIMARY KEY (`id_sinistro`);

--
-- Indexes for table `sinistro_urbano`
--
ALTER TABLE `sinistro_urbano`
  ADD PRIMARY KEY (`id_sinistro`,`id_onibus_urbano`),
  ADD KEY `fk_sinistro_urbano_onibus_urbano1_idx` (`id_onibus_urbano`);

--
-- Indexes for table `sinistro_viagem`
--
ALTER TABLE `sinistro_viagem`
  ADD PRIMARY KEY (`id_sinistro`,`id_onibus_viagem`),
  ADD KEY `fk_sinistro_viagem_onibus_viagem1_idx` (`id_onibus_viagem`);

--
-- Indexes for table `solicitacaobeneficio`
--
ALTER TABLE `solicitacaobeneficio`
  ADD PRIMARY KEY (`id_solicitacao`),
  ADD KEY `fk_solicitacaobeneficio_solicitacao_situacao1_idx` (`idf_situacao_solicitacao`),
  ADD KEY `fk_solicitacaobeneficio_pessoa1_idx` (`idf_pessoa`);

--
-- Indexes for table `solicitacao_situacao`
--
ALTER TABLE `solicitacao_situacao`
  ADD PRIMARY KEY (`id_situacao`);

--
-- Indexes for table `tarifa`
--
ALTER TABLE `tarifa`
  ADD PRIMARY KEY (`id_tarifa`),
  ADD KEY `fk_tarifa_linha1_idx` (`id_linha`);

--
-- Indexes for table `tipo_beneficio`
--
ALTER TABLE `tipo_beneficio`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indexes for table `trajeto`
--
ALTER TABLE `trajeto`
  ADD PRIMARY KEY (`id_trajeto`),
  ADD KEY `fk_trajeto_cobrador1_idx` (`id_trajetocobrador`),
  ADD KEY `fk_trajeto_motorista1_idx` (`id_trajetomotorista`),
  ADD KEY `fk_trajeto_onibus_urbano1_idx` (`id_trajetoonibus`);

--
-- Indexes for table `trecho`
--
ALTER TABLE `trecho`
  ADD PRIMARY KEY (`id_trecho`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_usuario_perfil_idx` (`id_perfil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apolice`
--
ALTER TABLE `apolice`
  MODIFY `id_apolice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `apolice_urbano`
--
ALTER TABLE `apolice_urbano`
  MODIFY `id_apolice_urbano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `apolice_viagem`
--
ALTER TABLE `apolice_viagem`
  MODIFY `id_apolice_viagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cartao`
--
ALTER TABLE `cartao`
  MODIFY `id_cartao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categoria_onibus`
--
ALTER TABLE `categoria_onibus`
  MODIFY `id_categoria_onibus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `id_cidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cobrador`
--
ALTER TABLE `cobrador`
  MODIFY `id_cobrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `concessaotrajeto`
--
ALTER TABLE `concessaotrajeto`
  MODIFY `codConcessao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dia`
--
ALTER TABLE `dia`
  MODIFY `id_dia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estudante`
--
ALTER TABLE `estudante`
  MODIFY `id_estudante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `forma_pagamento`
--
ALTER TABLE `forma_pagamento`
  MODIFY `id_pagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `idoso`
--
ALTER TABLE `idoso`
  MODIFY `id_idoso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `linha`
--
ALTER TABLE `linha`
  MODIFY `id_linha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `manutencao`
--
ALTER TABLE `manutencao`
  MODIFY `id_manutencao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manutencao_viagem`
--
ALTER TABLE `manutencao_viagem`
  MODIFY `id_manutencao_viagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `motorista`
--
ALTER TABLE `motorista`
  MODIFY `id_motorista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `onibus_urbano`
--
ALTER TABLE `onibus_urbano`
  MODIFY `id_onibus_urbano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `onibus_viagem`
--
ALTER TABLE `onibus_viagem`
  MODIFY `id_onibus_viagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=507;

--
-- AUTO_INCREMENT for table `parada`
--
ALTER TABLE `parada`
  MODIFY `id_parada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pessoa_com_deficiencia`
--
ALTER TABLE `pessoa_com_deficiencia`
  MODIFY `id_pessoa_com_deficiencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `poltrona`
--
ALTER TABLE `poltrona`
  MODIFY `id_poltrona` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pontos`
--
ALTER TABLE `pontos`
  MODIFY `id_pontos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rodoviaria`
--
ALTER TABLE `rodoviaria`
  MODIFY `codRodoviaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seguro`
--
ALTER TABLE `seguro`
  MODIFY `id_seguro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sinistro`
--
ALTER TABLE `sinistro`
  MODIFY `id_sinistro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `solicitacaobeneficio`
--
ALTER TABLE `solicitacaobeneficio`
  MODIFY `id_solicitacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `solicitacao_situacao`
--
ALTER TABLE `solicitacao_situacao`
  MODIFY `id_situacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tarifa`
--
ALTER TABLE `tarifa`
  MODIFY `id_tarifa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tipo_beneficio`
--
ALTER TABLE `tipo_beneficio`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trajeto`
--
ALTER TABLE `trajeto`
  MODIFY `id_trajeto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trecho`
--
ALTER TABLE `trecho`
  MODIFY `id_trecho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `apolice_urbano`
--
ALTER TABLE `apolice_urbano`
  ADD CONSTRAINT `fk_apolice_urbano_apolice1` FOREIGN KEY (`id_apolice`) REFERENCES `apolice` (`id_apolice`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_apolice_urbano_onibus_urbano1` FOREIGN KEY (`id_onibus_urbano`) REFERENCES `onibus_urbano` (`id_onibus_urbano`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `apolice_viagem`
--
ALTER TABLE `apolice_viagem`
  ADD CONSTRAINT `fk_apolice_viagem_apolice1` FOREIGN KEY (`id_apolice`) REFERENCES `apolice` (`id_apolice`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_apolice_viagem_onibus_viagem1` FOREIGN KEY (`id_onibus_viagem`) REFERENCES `onibus_viagem` (`id_onibus_viagem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_compra_poltrona1` FOREIGN KEY (`id_poltrona`) REFERENCES `poltrona` (`id_poltrona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `compra_cartao`
--
ALTER TABLE `compra_cartao`
  ADD CONSTRAINT `fk_compra_cartao_cartao1` FOREIGN KEY (`id_cartao`) REFERENCES `cartao` (`id_cartao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compra_cartao_teste1` FOREIGN KEY (`id_compra`) REFERENCES `compra` (`id_compra`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `compra_pontos`
--
ALTER TABLE `compra_pontos`
  ADD CONSTRAINT `fk_compra_pontos_pontos1` FOREIGN KEY (`id_pontos`) REFERENCES `pontos` (`id_pontos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compra_pontos_teste1` FOREIGN KEY (`id_compra`) REFERENCES `compra` (`id_compra`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estudante`
--
ALTER TABLE `estudante`
  ADD CONSTRAINT `fk_estudante_pessoa1` FOREIGN KEY (`idf_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `fk_funcionario_cidade1` FOREIGN KEY (`id_cidade`) REFERENCES `cidade` (`id_cidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_funcionario_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `idoso`
--
ALTER TABLE `idoso`
  ADD CONSTRAINT `fk_pessoa_idosa_pessoa1` FOREIGN KEY (`idf_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `linha_dia`
--
ALTER TABLE `linha_dia`
  ADD CONSTRAINT `fk_linha_dia_dia1` FOREIGN KEY (`id_dia`) REFERENCES `dia` (`id_dia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_linha_dia_linha1` FOREIGN KEY (`id_linha`) REFERENCES `linha` (`id_linha`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_linha_dia_motorista1` FOREIGN KEY (`id_motorista`) REFERENCES `motorista` (`id_motorista`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_linha_dia_onibus_viagem1` FOREIGN KEY (`id_onibus_viagem`) REFERENCES `onibus_viagem` (`id_onibus_viagem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `linha_trecho`
--
ALTER TABLE `linha_trecho`
  ADD CONSTRAINT `fk_trecho_has_linha_linha1` FOREIGN KEY (`id_linha`) REFERENCES `linha` (`id_linha`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trecho_has_linha_trecho1` FOREIGN KEY (`id_trecho`) REFERENCES `trecho` (`id_trecho`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `manutencao_urbano`
--
ALTER TABLE `manutencao_urbano`
  ADD CONSTRAINT `fk_manutencao_urbano_manutencao1` FOREIGN KEY (`id_manutencao`) REFERENCES `manutencao` (`id_manutencao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_manutencao_urbano_onibus_urbano1` FOREIGN KEY (`id_onibus_urbano`) REFERENCES `onibus_urbano` (`id_onibus_urbano`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `manutencao_viagem`
--
ALTER TABLE `manutencao_viagem`
  ADD CONSTRAINT `fk_manutencao_viagem_manutencao1` FOREIGN KEY (`id_manutencao`) REFERENCES `manutencao` (`id_manutencao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_manutencao_viagem_onibus_viagem1` FOREIGN KEY (`id_onibus_viagem`) REFERENCES `onibus_viagem` (`id_onibus_viagem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `onibus_trajeto`
--
ALTER TABLE `onibus_trajeto`
  ADD CONSTRAINT `fk_onibus_urbano_has_trajeto_onibus_urbano1` FOREIGN KEY (`id_onibus_urbano`) REFERENCES `onibus_urbano` (`id_onibus_urbano`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_onibus_urbano_has_trajeto_trajeto1` FOREIGN KEY (`id_trajeto`) REFERENCES `trajeto` (`id_trajeto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `onibus_viagem`
--
ALTER TABLE `onibus_viagem`
  ADD CONSTRAINT `fk_onibus_viagem_tipo_onibus1` FOREIGN KEY (`id_categoria_onibus`) REFERENCES `categoria_onibus` (`id_categoria_onibus`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `parada_trajeto`
--
ALTER TABLE `parada_trajeto`
  ADD CONSTRAINT `fk_parada_has_trajeto_parada1` FOREIGN KEY (`id_parada`) REFERENCES `parada` (`id_parada`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_parada_has_trajeto_trajeto1` FOREIGN KEY (`id_trajeto`) REFERENCES `trajeto` (`id_trajeto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `passagem`
--
ALTER TABLE `passagem`
  ADD CONSTRAINT `fk_pessoa_has_viagem_pessoa1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD CONSTRAINT `fk_pessoa_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pessoa_com_deficiencia`
--
ALTER TABLE `pessoa_com_deficiencia`
  ADD CONSTRAINT `fk_pessoa_com_deficiencia_pessoa1` FOREIGN KEY (`idf_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pontos`
--
ALTER TABLE `pontos`
  ADD CONSTRAINT `fk_pontos_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `seguro`
--
ALTER TABLE `seguro`
  ADD CONSTRAINT `fk_Seguro_funcionario1` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionario` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `sinistro_urbano`
--
ALTER TABLE `sinistro_urbano`
  ADD CONSTRAINT `fk_sinistro_urbano_onibus_urbano1` FOREIGN KEY (`id_onibus_urbano`) REFERENCES `onibus_urbano` (`id_onibus_urbano`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sinistro_urbano_sinistro1` FOREIGN KEY (`id_sinistro`) REFERENCES `sinistro` (`id_sinistro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `sinistro_viagem`
--
ALTER TABLE `sinistro_viagem`
  ADD CONSTRAINT `fk_sinistro_viagem_onibus_viagem1` FOREIGN KEY (`id_onibus_viagem`) REFERENCES `onibus_viagem` (`id_onibus_viagem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sinistro_viagem_sinistro1` FOREIGN KEY (`id_sinistro`) REFERENCES `sinistro` (`id_sinistro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `solicitacaobeneficio`
--
ALTER TABLE `solicitacaobeneficio`
  ADD CONSTRAINT `fk_solicitacaobeneficio_pessoa1` FOREIGN KEY (`idf_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_solicitacaobeneficio_solicitacao_situacao1` FOREIGN KEY (`idf_situacao_solicitacao`) REFERENCES `solicitacao_situacao` (`id_situacao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tarifa`
--
ALTER TABLE `tarifa`
  ADD CONSTRAINT `fk_tarifa_linha1` FOREIGN KEY (`id_linha`) REFERENCES `linha` (`id_linha`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `trajeto`
--
ALTER TABLE `trajeto`
  ADD CONSTRAINT `fk_trajeto_cobrador1` FOREIGN KEY (`id_trajetocobrador`) REFERENCES `cobrador` (`id_cobrador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trajeto_motorista1` FOREIGN KEY (`id_trajetomotorista`) REFERENCES `motorista` (`id_motorista`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trajeto_onibus_urbano1` FOREIGN KEY (`id_trajetoonibus`) REFERENCES `onibus_urbano` (`id_onibus_urbano`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_perfil` FOREIGN KEY (`id_perfil`) REFERENCES `perfil` (`id_perfil`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
