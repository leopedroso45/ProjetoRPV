-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Mar-2019 às 02:57
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

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
  `taxa` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_passegeiro`
--

CREATE TABLE `categoria_passegeiro` (
  `id_categoria_passegeiro` int(11) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cobrador`
--

CREATE TABLE `cobrador` (
  `id_cobrador` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `situacao` tinyint(1) DEFAULT NULL,
  `km` double DEFAULT NULL,
  `numero_acentos` int(11) DEFAULT NULL,
  `passageiros_de_pe` int(11) DEFAULT NULL
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
  `situacao` tinyint(1) DEFAULT NULL,
  `km` double DEFAULT NULL,
  `numero_acentos` int(11) DEFAULT NULL,
  `passageiros_de_pe` int(11) DEFAULT NULL,
  `banheiro` tinyint(1) DEFAULT NULL,
  `ar_condicionado` tinyint(1) DEFAULT NULL,
  `numero_de_andares` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `parada`
--

CREATE TABLE `parada` (
  `id_parada` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id_pessoa` int(11) NOT NULL,
  `id_categoria_passegeiro` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarifa`
--

CREATE TABLE `tarifa` (
  `id_tarifa` int(11) NOT NULL,
  `valor` varchar(45) DEFAULT NULL,
  `vigencia` date DEFAULT NULL,
  `situacao` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `trajeto`
--

CREATE TABLE `trajeto` (
  `id_trajeto` int(11) NOT NULL,
  `id_cobrador` int(11) NOT NULL,
  `id_motorista` int(11) NOT NULL,
  `id_tarifa` int(11) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `num_paradas` varchar(45) DEFAULT NULL,
  `chegada` varchar(45) DEFAULT NULL,
  `partida` varchar(45) DEFAULT NULL,
  `situacao` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `categoria_passegeiro`
--
ALTER TABLE `categoria_passegeiro`
  ADD PRIMARY KEY (`id_categoria_passegeiro`);

--
-- Indexes for table `cobrador`
--
ALTER TABLE `cobrador`
  ADD PRIMARY KEY (`id_cobrador`);

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
  ADD KEY `fk_pessoa_categoria_passegeiro1_idx` (`id_categoria_passegeiro`),
  ADD KEY `fk_pessoa_usuario1_idx` (`id_usuario`);

--
-- Indexes for table `tarifa`
--
ALTER TABLE `tarifa`
  ADD PRIMARY KEY (`id_tarifa`);

--
-- Indexes for table `trajeto`
--
ALTER TABLE `trajeto`
  ADD PRIMARY KEY (`id_trajeto`),
  ADD KEY `fk_trajeto_cobrador1_idx` (`id_cobrador`),
  ADD KEY `fk_trajeto_motorista1_idx` (`id_motorista`),
  ADD KEY `fk_trajeto_tarifa1_idx` (`id_tarifa`);

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
  MODIFY `id_categoria_onibus` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categoria_passegeiro`
--
ALTER TABLE `categoria_passegeiro`
  MODIFY `id_categoria_passegeiro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cobrador`
--
ALTER TABLE `cobrador`
  MODIFY `id_cobrador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `linha`
--
ALTER TABLE `linha`
  MODIFY `id_linha` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `motorista`
--
ALTER TABLE `motorista`
  MODIFY `id_motorista` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `parada`
--
ALTER TABLE `parada`
  MODIFY `id_parada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tarifa`
--
ALTER TABLE `tarifa`
  MODIFY `id_tarifa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trajeto`
--
ALTER TABLE `trajeto`
  MODIFY `id_trajeto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trecho`
--
ALTER TABLE `trecho`
  MODIFY `id_trecho` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `fk_parada_has_trajeto_parada1` FOREIGN KEY (`id_parada`) REFERENCES `parada` (`id_parada`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
  ADD CONSTRAINT `fk_pessoa_categoria_passegeiro1` FOREIGN KEY (`id_categoria_passegeiro`) REFERENCES `categoria_passegeiro` (`id_categoria_passegeiro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pessoa_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `trajeto`
--
ALTER TABLE `trajeto`
  ADD CONSTRAINT `fk_trajeto_cobrador1` FOREIGN KEY (`id_cobrador`) REFERENCES `cobrador` (`id_cobrador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trajeto_motorista1` FOREIGN KEY (`id_motorista`) REFERENCES `motorista` (`id_motorista`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trajeto_tarifa1` FOREIGN KEY (`id_tarifa`) REFERENCES `tarifa` (`id_tarifa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
