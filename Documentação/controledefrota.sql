-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Abr-2019 às 03:36
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

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
(1, 'comum', NULL),
(2, 'leito', NULL),
(3, 'executivo', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cobrador`
--

CREATE TABLE `cobrador` (
  `id_cobrador` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cobrador`
--

INSERT INTO `cobrador` (`id_cobrador`, `nome`, `cpf`) VALUES
(1, 'Beltrano', '182');

-- --------------------------------------------------------

--
-- Estrutura da tabela `concessaotrajeto`
--

CREATE TABLE `concessaotrajeto` (
  `codConcessao` int(11) NOT NULL,
  `data_inicio` varchar(255) NOT NULL,
  `extensao` varchar(255) NOT NULL,
  `data_fim` varchar(255) NOT NULL,
  `doc_autorizacao` varchar(255) NOT NULL,
  `status_concessao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `concessaotrajeto`
--

INSERT INTO `concessaotrajeto` (`codConcessao`, `data_inicio`, `extensao`, `data_fim`, `doc_autorizacao`, `status_concessao`) VALUES
(3, '111', '1', '1', '1', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estudante`
--

CREATE TABLE `estudante` (
  `id_estudante` int(11) NOT NULL,
  `comprovante_matricula` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'cartão de crédito', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `linha`
--

CREATE TABLE `linha` (
  `id_linha` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `num_trechos` varchar(45) DEFAULT NULL,
  `km` varchar(45) DEFAULT NULL,
  `situacao` tinyint(1) DEFAULT NULL,
  `linhacol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `motorista`
--

CREATE TABLE `motorista` (
  `id_motorista` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `motorista`
--

INSERT INTO `motorista` (`id_motorista`, `nome`, `cpf`) VALUES
(1, 'Fulano', '009');

-- --------------------------------------------------------

--
-- Estrutura da tabela `onibus_linha`
--

CREATE TABLE `onibus_linha` (
  `id_onibus_viagem` int(11) NOT NULL,
  `id_linha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `parada_onibus`
--

CREATE TABLE `parada_onibus` (
  `id_parada` int(11) NOT NULL,
  `numeroParada` varchar(45) DEFAULT NULL,
  `local` varchar(45) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `parada_trajeto`
--

CREATE TABLE `parada_trajeto` (
  `id_parada` int(11) NOT NULL,
  `id_trajeto` int(11) NOT NULL
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
(1, 'admin');

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
  `endereco` varchar(45) DEFAULT NULL,
  `numero_casa` varchar(45) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `id_usuario`, `nome`, `cpf`, `rg`, `endereco`, `numero_casa`, `cep`, `data_nascimento`, `celular`) VALUES
(1, 1, 'teste', '111', '111', 'teste', '11', '11', '0000-00-00', '111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa_com_deficiencia`
--

CREATE TABLE `pessoa_com_deficiencia` (
  `id_pessoa_com_deficiencia` int(11) NOT NULL,
  `tipo_deficiencia` varchar(255) DEFAULT NULL,
  `atestado_medico` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa_idosa`
--

CREATE TABLE `pessoa_idosa` (
  `id_pessoa` int(11) NOT NULL,
  `carteira_idoso` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacao`
--

CREATE TABLE `solicitacao` (
  `id_solicitacao` int(11) NOT NULL,
  `data_solicitacao` varchar(45) DEFAULT NULL,
  `idf_situacao_solicitacao` int(11) NOT NULL,
  `idf_pessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `solicitacao`
--

INSERT INTO `solicitacao` (`id_solicitacao`, `data_solicitacao`, `idf_situacao_solicitacao`, `idf_pessoa`) VALUES
(1, '11', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacaobeneficio`
--

CREATE TABLE `solicitacaobeneficio` (
  `id_beneficio` int(11) NOT NULL,
  `data_solicitacao` varchar(45) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cpf` varchar(255) DEFAULT NULL,
  `rg` varchar(45) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `numero_casa` varchar(45) DEFAULT NULL,
  `data_nascimento` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `idf_situacao_solicitacao` int(11) NOT NULL,
  `idf_pessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `solicitacaobeneficio`
--

INSERT INTO `solicitacaobeneficio` (`id_beneficio`, `data_solicitacao`, `nome`, `cpf`, `rg`, `rua`, `numero_casa`, `data_nascimento`, `celular`, `bairro`, `idf_situacao_solicitacao`, `idf_pessoa`) VALUES
(1, '08/04/2019', 'tete', '111', '222', 'teste', '11', '2322', '111', 'teste', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacao_situacao`
--

CREATE TABLE `solicitacao_situacao` (
  `id_situacao` int(11) NOT NULL,
  `descricao_situacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `solicitacao_situacao`
--

INSERT INTO `solicitacao_situacao` (`id_situacao`, `descricao_situacao`) VALUES
(1, 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarifa`
--

CREATE TABLE `tarifa` (
  `id_tarifa` int(11) NOT NULL,
  `id_trajeto` int(11) NOT NULL,
  `valor` varchar(45) DEFAULT NULL,
  `vigencia` date DEFAULT NULL,
  `situacao` tinyint(1) DEFAULT NULL,
  `contrato` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `trajeto`
--

CREATE TABLE `trajeto` (
  `id_trajeto` int(11) NOT NULL,
  `id_cobrador` int(11) NOT NULL,
  `id_motorista` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `num_paradas` varchar(45) DEFAULT NULL,
  `chegada` varchar(45) DEFAULT NULL,
  `partida` varchar(45) DEFAULT NULL,
  `situacao` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `trajeto`
--

INSERT INTO `trajeto` (`id_trajeto`, `id_cobrador`, `id_motorista`, `nome`, `descricao`, `num_paradas`, `chegada`, `partida`, `situacao`) VALUES
(1, 1, 1, 'teste', 'teste', '4', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `trecho`
--

CREATE TABLE `trecho` (
  `id_trecho` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `chegada` varchar(45) DEFAULT NULL,
  `partida` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 1, 'teste', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `viagem`
--

CREATE TABLE `viagem` (
  `id_trecho` int(11) NOT NULL,
  `id_linha` int(11) NOT NULL,
  `id_motorista` int(11) NOT NULL,
  `km` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria_onibus`
--
ALTER TABLE `categoria_onibus`
  ADD PRIMARY KEY (`id_categoria_onibus`);

--
-- Indexes for table `cobrador`
--
ALTER TABLE `cobrador`
  ADD PRIMARY KEY (`id_cobrador`);

--
-- Indexes for table `concessaotrajeto`
--
ALTER TABLE `concessaotrajeto`
  ADD PRIMARY KEY (`codConcessao`);

--
-- Indexes for table `estudante`
--
ALTER TABLE `estudante`
  ADD PRIMARY KEY (`id_estudante`);

--
-- Indexes for table `forma_pagamento`
--
ALTER TABLE `forma_pagamento`
  ADD PRIMARY KEY (`id_pagamento`);

--
-- Indexes for table `linha`
--
ALTER TABLE `linha`
  ADD PRIMARY KEY (`id_linha`);

--
-- Indexes for table `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`id_motorista`);

--
-- Indexes for table `onibus_linha`
--
ALTER TABLE `onibus_linha`
  ADD PRIMARY KEY (`id_onibus_viagem`,`id_linha`),
  ADD KEY `fk_onibus_viagem_has_linha_linha1_idx` (`id_linha`),
  ADD KEY `fk_onibus_viagem_has_linha_onibus_viagem1_idx` (`id_onibus_viagem`);

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
-- Indexes for table `parada_onibus`
--
ALTER TABLE `parada_onibus`
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
  ADD PRIMARY KEY (`id_pessoa_com_deficiencia`);

--
-- Indexes for table `pessoa_idosa`
--
ALTER TABLE `pessoa_idosa`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- Indexes for table `solicitacao`
--
ALTER TABLE `solicitacao`
  ADD PRIMARY KEY (`id_solicitacao`),
  ADD KEY `fk_solicitacao_solicitacao_situacao1_idx` (`idf_situacao_solicitacao`),
  ADD KEY `fk_solicitacao_pessoa1_idx` (`idf_pessoa`);

--
-- Indexes for table `solicitacaobeneficio`
--
ALTER TABLE `solicitacaobeneficio`
  ADD PRIMARY KEY (`id_beneficio`),
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
  ADD KEY `fk_tarifa_trajeto1_idx` (`id_trajeto`);

--
-- Indexes for table `trajeto`
--
ALTER TABLE `trajeto`
  ADD PRIMARY KEY (`id_trajeto`),
  ADD KEY `fk_trajeto_cobrador1_idx` (`id_cobrador`),
  ADD KEY `fk_trajeto_motorista1_idx` (`id_motorista`);

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
-- Indexes for table `viagem`
--
ALTER TABLE `viagem`
  ADD PRIMARY KEY (`id_trecho`,`id_linha`),
  ADD KEY `fk_trecho_has_linha_linha1_idx` (`id_linha`),
  ADD KEY `fk_trecho_has_linha_trecho1_idx` (`id_trecho`),
  ADD KEY `fk_trecho_linha_motorista1_idx` (`id_motorista`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria_onibus`
--
ALTER TABLE `categoria_onibus`
  MODIFY `id_categoria_onibus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cobrador`
--
ALTER TABLE `cobrador`
  MODIFY `id_cobrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `concessaotrajeto`
--
ALTER TABLE `concessaotrajeto`
  MODIFY `codConcessao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `estudante`
--
ALTER TABLE `estudante`
  MODIFY `id_estudante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forma_pagamento`
--
ALTER TABLE `forma_pagamento`
  MODIFY `id_pagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `linha`
--
ALTER TABLE `linha`
  MODIFY `id_linha` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `motorista`
--
ALTER TABLE `motorista`
  MODIFY `id_motorista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `onibus_urbano`
--
ALTER TABLE `onibus_urbano`
  MODIFY `id_onibus_urbano` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `onibus_viagem`
--
ALTER TABLE `onibus_viagem`
  MODIFY `id_onibus_viagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parada_onibus`
--
ALTER TABLE `parada_onibus`
  MODIFY `id_parada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pessoa_com_deficiencia`
--
ALTER TABLE `pessoa_com_deficiencia`
  MODIFY `id_pessoa_com_deficiencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pessoa_idosa`
--
ALTER TABLE `pessoa_idosa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `solicitacao`
--
ALTER TABLE `solicitacao`
  MODIFY `id_solicitacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `solicitacaobeneficio`
--
ALTER TABLE `solicitacaobeneficio`
  MODIFY `id_beneficio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `solicitacao_situacao`
--
ALTER TABLE `solicitacao_situacao`
  MODIFY `id_situacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tarifa`
--
ALTER TABLE `tarifa`
  MODIFY `id_tarifa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trajeto`
--
ALTER TABLE `trajeto`
  MODIFY `id_trajeto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trecho`
--
ALTER TABLE `trecho`
  MODIFY `id_trecho` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `onibus_linha`
--
ALTER TABLE `onibus_linha`
  ADD CONSTRAINT `fk_onibus_viagem_has_linha_linha1` FOREIGN KEY (`id_linha`) REFERENCES `linha` (`id_linha`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_onibus_viagem_has_linha_onibus_viagem1` FOREIGN KEY (`id_onibus_viagem`) REFERENCES `onibus_viagem` (`id_onibus_viagem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_parada_has_trajeto_parada1` FOREIGN KEY (`id_parada`) REFERENCES `parada_onibus` (`id_parada`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_parada_has_trajeto_trajeto1` FOREIGN KEY (`id_trajeto`) REFERENCES `trajeto` (`id_trajeto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `passagem`
--
ALTER TABLE `passagem`
  ADD CONSTRAINT `fk_pessoa_has_viagem_pessoa1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pessoa_has_viagem_viagem1` FOREIGN KEY (`id_trecho`,`id_linha`) REFERENCES `viagem` (`id_trecho`, `id_linha`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD CONSTRAINT `fk_pessoa_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `solicitacao`
--
ALTER TABLE `solicitacao`
  ADD CONSTRAINT `fk_solicitacao_pessoa1` FOREIGN KEY (`idf_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_solicitacao_solicitacao_situacao1` FOREIGN KEY (`idf_situacao_solicitacao`) REFERENCES `solicitacao_situacao` (`id_situacao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_tarifa_trajeto1` FOREIGN KEY (`id_trajeto`) REFERENCES `trajeto` (`id_trajeto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `trajeto`
--
ALTER TABLE `trajeto`
  ADD CONSTRAINT `fk_trajeto_cobrador1` FOREIGN KEY (`id_cobrador`) REFERENCES `cobrador` (`id_cobrador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trajeto_motorista1` FOREIGN KEY (`id_motorista`) REFERENCES `motorista` (`id_motorista`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_perfil` FOREIGN KEY (`id_perfil`) REFERENCES `perfil` (`id_perfil`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `viagem`
--
ALTER TABLE `viagem`
  ADD CONSTRAINT `fk_trecho_has_linha_linha1` FOREIGN KEY (`id_linha`) REFERENCES `linha` (`id_linha`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trecho_has_linha_trecho1` FOREIGN KEY (`id_trecho`) REFERENCES `trecho` (`id_trecho`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trecho_linha_motorista1` FOREIGN KEY (`id_motorista`) REFERENCES `motorista` (`id_motorista`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
