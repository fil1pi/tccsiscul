-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Jul-2020 às 03:24
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siscul`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_alpha`
--

CREATE TABLE `produtos_alpha` (
  `id` int(11) NOT NULL,
  `nome` varchar(222) NOT NULL,
  `Preco_producao` double NOT NULL,
  `quantidade` int(11) NOT NULL,
  `Total_gasto` double NOT NULL,
  `produtor` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos_alpha`
--

INSERT INTO `produtos_alpha` (`id`, `nome`, `Preco_producao`, `quantidade`, `Total_gasto`, `produtor`) VALUES
(1, 'jkhjkh', 567.756, 4, 2271.024, ''),
(2, 'sdgsdgfsg', 25.5, 10, 255, ''),
(3, 'hgfhgfghfgh', 30, 3, 90, ''),
(4, 'gfjfjfj', 50.3, 3, 150.89999999999998, ''),
(5, '56456456', 54, 6, 324, 'felipe'),
(6, 'dfsfsfsd', 54, 2, 108, 'felipe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_omega`
--

CREATE TABLE `produtos_omega` (
  `idproduto` int(11) NOT NULL,
  `nome` varchar(222) NOT NULL,
  `Preco_producao` double NOT NULL,
  `quantidade` int(11) NOT NULL,
  `Total_gasto` double NOT NULL,
  `Preco_venda` double NOT NULL,
  `quantida_Venda` int(11) NOT NULL,
  `total_venda` double NOT NULL,
  `Total_Final` double NOT NULL,
  `produtor` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos_omega`
--

INSERT INTO `produtos_omega` (`idproduto`, `nome`, `Preco_producao`, `quantidade`, `Total_gasto`, `Preco_venda`, `quantida_Venda`, `total_venda`, `Total_Final`, `produtor`) VALUES
(3417, 'sdgsdgfsg', 25.5, 10, 255, 50, 7, 350, 95, ''),
(3418, 'sdgsdgfsg', 25.5, 10, 255, 50, 7, 350, 95, ''),
(3419, 'sdgsdgfsg', 25.5, 10, 255, 50, 7, 350, 95, ''),
(3420, 'sdgsdgfsg', 25.5, 10, 255, 50, 7, 350, 95, ''),
(3421, 'sdgsdgfsg', 25.5, 10, 255, 50, 7, 350, 95, ''),
(3422, 'sdgsdgfsg', 25.5, 10, 255, 50, 7, 350, 95, ''),
(3423, 'sdgsdgfsg', 25.5, 10, 255, 50, 7, 350, 95, ''),
(3424, 'sdgsdgfsg', 25.5, 10, 255, 50, 7, 350, 95, ''),
(3425, 'sdgsdgfsg', 25.5, 10, 255, 50, 7, 350, 95, ''),
(3426, 'sdgsdgfsg', 25.5, 10, 255, 50, 7, 350, 95, ''),
(3427, 'sdgsdgfsg', 25.5, 10, 255, 50, 7, 350, 95, ''),
(3428, 'sdgsdgfsg', 25.5, 10, 255, 50, 7, 350, 95, ''),
(3429, 'sdgsdgfsg', 25.5, 10, 255, 50, 7, 350, 95, ''),
(3430, 'sdgsdgfsg', 25.5, 10, 255, 50, 7, 350, 95, ''),
(3431, 'sdgsdgfsg', 25.5, 10, 255, 50, 7, 350, 95, ''),
(3432, 'sdgsdgfsg', 25.5, 10, 255, 50, 7, 350, 95, ''),
(3433, 'sdgsdgfsg', 25.5, 10, 255, 50, 7, 350, 95, ''),
(3434, 'sdgsdgfsg', 25.5, 10, 255, 50, 7, 350, 95, ''),
(3435, '56456456', 54, 6, 324, 6565, 1, 6565, 6241, 'felipe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacao`
--

CREATE TABLE `publicacao` (
  `idpubli` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `conteudo` varchar(255) NOT NULL,
  `img` varchar(100) NOT NULL,
  `lermais` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `publicacao`
--

INSERT INTO `publicacao` (`idpubli`, `titulo`, `conteudo`, `img`, `lermais`) VALUES
(1, 'Temor de prejuÃ­zos com imagem negativa do governo no exterior racha agronegÃ³cio', ' \r\n                  Desentendimentos entre lideranÃ§as do setor comeÃ§aram em 2019 e ganharam corpo apÃ³s declaraÃ§Ã£o do ministro Ricardo Salles sobre â€˜passar a boiadaâ€™\r\n                  ', '108584246.png', 'https://www.infomoney.com.br/mercados/temor-de-prejuizos-com-imagem-negativa-do-governo-no-exterior-racha-agronegocio/'),
(2, 'Apesar de pandemia, exportaÃ§Ãµes do agronegÃ³cio brasileiro crescem em 2020', ' \r\n                  Apesar de a economia nacional ter sido abalada pela pandemia do novo CoronavÃ­rus, o saldo da balanÃ§a comercial do agronegÃ³cio brasileiro nos meses de janeiro a maio de 2020 registrou superÃ¡vit de US$ 36,6 bilhÃµes.\r\n              ', '392243893.png', 'https://ocp.news/economia/apesar-de-pandemia-exportacoes-do-agronegocio-brasileiro-crescem-em-2020'),
(3, 'Governo regulamenta cadastro para incentivar aÃ§Ãµes anti-corrupÃ§Ã£o no agronegÃ³cio', ' \r\n                  O MinistÃ©rio da Agricultura aprovou regulamento para um cadastro que visa incentivar a adoÃ§Ã£o pelo agronegÃ³cio de prÃ¡ticas de integridade e de prevenÃ§Ã£o contra corrupÃ§Ã£o, segundo publicaÃ§Ã£o no DiÃ¡rio Oficial da UniÃ£o dest', '527752298.png', 'https://www.moneytimes.com.br/governo-regulamenta-cadastro-para-incentivar-acoes-anti-corrupcao-no-agronegocio/'),
(4, 'ExportaÃ§Ãµes do agronegÃ³cio batem recorde em 2020', ' ExportaÃ§Ãµes do agronegÃ³cio batem recorde em 2020\r\n                  \r\n                  ', '996302707.png', 'https://www.cbnmaringa.com.br/noticia/pib-do-agronegocio-brasileiro-teve-expansao-de-24-nos-dois-primeiros-meses-de-2020');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `adm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `adm`) VALUES
(2, 'felipe', 'felipe@teste.com', '12345678', 0),
(4, 'Felipe Schmitz', 'abacaxidoce@fruta.com', '12345678', 1),
(5, 'filipin', 'usuario@teste.com', '12345678', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos_alpha`
--
ALTER TABLE `produtos_alpha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos_omega`
--
ALTER TABLE `produtos_omega`
  ADD PRIMARY KEY (`idproduto`);

--
-- Indexes for table `publicacao`
--
ALTER TABLE `publicacao`
  ADD PRIMARY KEY (`idpubli`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos_alpha`
--
ALTER TABLE `produtos_alpha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produtos_omega`
--
ALTER TABLE `produtos_omega`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3436;

--
-- AUTO_INCREMENT for table `publicacao`
--
ALTER TABLE `publicacao`
  MODIFY `idpubli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
