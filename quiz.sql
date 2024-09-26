-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/09/2024 às 15:21
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `quiz`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `texto_pergunta` varchar(255) NOT NULL,
  `resposta_correta` varchar(255) NOT NULL,
  `opcao_1` varchar(255) NOT NULL,
  `opcao_2` varchar(255) NOT NULL,
  `opcao_3` varchar(255) NOT NULL,
  `opcao_4` varchar(255) NOT NULL,
  `total_perguntas` int(11) NOT NULL,
  `pergunta_atual_id` int(11) NOT NULL,
  `pontuacao_time_1` int(11) NOT NULL,
  `pontuacao_time_2` int(11) NOT NULL,
  `perguntas_restantes` varchar(255) NOT NULL,
  `vencedor` varchar(255) NOT NULL,
  `pontuacao_final_time_1` int(11) NOT NULL,
  `pontuacao_final_time_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `quiz`
--

INSERT INTO `quiz` (`id`, `tipo`, `texto_pergunta`, `resposta_correta`, `opcao_1`, `opcao_2`, `opcao_3`, `opcao_4`, `total_perguntas`, `pergunta_atual_id`, `pontuacao_time_1`, `pontuacao_time_2`, `perguntas_restantes`, `vencedor`, `pontuacao_final_time_1`, `pontuacao_final_time_2`) VALUES
(1, 'pergunta', 'Qual é a capital do Brasil?', 'B', 'São Paulo', 'Brasília', 'Rio de Janeiro', 'Salvador', 0, 0, 0, 0, '', '', 0, 0),
(2, 'pergunta', 'Qual é o maior estado do Brasil em extensão territorial?', 'A', 'Amazonas', 'Pará', 'Mato Grosso', 'Minas Gerais', 0, 0, 0, 0, '', '', 0, 0),
(3, 'pergunta', 'Qual é o rio mais extenso do Brasil?', 'D', 'Rio São Francisco', 'Rio Paraná', 'Rio Amazonas', 'Rio Tocantins', 0, 0, 0, 0, '', '', 0, 0),
(4, 'pergunta', 'Qual é o bioma que ocupa a maior parte do território brasileiro?', 'C', 'Pantanal', 'Amazônia', 'Caatinga', 'Cerrado', 0, 0, 0, 0, '', '', 0, 0),
(5, 'pergunta', 'Qual foi o primeiro produto agrícola exportado pelo Brasil em grande escala?', 'D', 'Milho', 'Soja', 'Café', 'Cana-de-açúcar', 0, 0, 0, 0, '', '', 0, 0),
(6, 'pergunta', 'Qual destes é um dos pratos típicos da culinária brasileira?', 'A', 'Feijoada', 'Sushi', 'Pizza', 'Lasanha', 0, 0, 0, 0, '', '', 0, 0),
(7, 'pergunta', 'Qual é a maior cidade do Brasil em população?', 'A', 'São Paulo', 'Rio de Janeiro', 'Brasília', 'Belo Horizonte', 0, 0, 0, 0, '', '', 0, 0),
(8, 'pergunta', 'Em qual ano o Brasil se tornou independente de Portugal?', 'C', '1494', '1808', '1822', '1889', 0, 0, 0, 0, '', '', 0, 0),
(9, 'pergunta', 'Quem foi o primeiro presidente do Brasil?', 'C', 'Getúlio Vargas', 'Juscelino Kubitschek', 'Marechal Deodoro da Fonseca', 'Dom Pedro I', 0, 0, 0, 0, '', '', 0, 0),
(10, 'pergunta', 'Qual é a dança típica do carnaval brasileiro?', 'C', 'Frevo', 'Maracatu', 'Samba', 'Forró', 0, 0, 0, 0, '', '', 0, 0),
(11, 'pergunta', 'Qual é o ponto mais alto do Brasil?', 'C', 'Pico das Agulhas Negras', 'Pico do Itatiaia', 'Pico da Neblina', 'Monte Roraima', 0, 0, 0, 0, '', '', 0, 0),
(12, 'pergunta', 'Qual destes países faz fronteira com o Brasil?', 'D', 'Chile', 'México', 'Espanha', 'Argentina', 0, 0, 0, 0, '', '', 0, 0),
(13, 'pergunta', 'Qual é a maior floresta tropical do mundo?', 'C', 'Floresta do Congo', 'Floresta de Borneo', 'Floresta Amazônica', 'Taiga', 0, 0, 0, 0, '', '', 0, 0),
(14, 'pergunta', 'Quem é o autor do livro \"Dom Casmurro\"?', 'C', 'Clarice Lispector', 'Graciliano Ramos', 'Machado de Assis', 'Jorge Amado', 0, 0, 0, 0, '', '', 0, 0),
(15, 'pergunta', 'Qual é o hino oficial do Brasil?', 'C', 'Hino da Independência', 'Hino da Proclamação da República', 'Hino Nacional Brasileiro', 'Hino à Bandeira', 0, 0, 0, 0, '', '', 0, 0),
(16, 'pergunta', 'Em que cidade está localizado o Cristo Redentor?', 'D', 'Salvador', 'Belo Horizonte', 'São Paulo', 'Rio de Janeiro', 0, 0, 0, 0, '', '', 0, 0),
(17, 'pergunta', 'Qual é a principal língua falada no Brasil?', 'D', 'Espanhol', 'Inglês', 'Francês', 'Português', 0, 0, 0, 0, '', '', 0, 0),
(18, 'pergunta', 'Qual destes é um importante festival de música realizado no Brasil?', 'D', 'Coachella', 'Tomorrowland', 'Glastonbury', 'Rock in Rio', 0, 0, 0, 0, '', '', 0, 0),
(19, 'pergunta', 'Qual é o nome da moeda oficial do Brasil?', 'D', 'Cruzeiro', 'Peso', 'Dólar', 'Real', 0, 0, 0, 0, '', '', 0, 0),
(20, 'pergunta', 'Qual destes animais é símbolo da Amazônia?', 'A', 'Onça-pintada', 'Lobo-guará', 'Capivara', 'Arara-azul', 0, 0, 0, 0, '', '', 0, 0),
(21, 'pergunta', 'Qual foi o primeiro time brasileiro a vencer a Copa Libertadores da América?', 'C', 'Palmeiras', 'Grêmio', 'Flamengo', 'Santos', 0, 0, 0, 0, '', '', 0, 0),
(22, 'pergunta', 'Qual é o nome do famoso estádio de futebol localizado no Rio de Janeiro?', 'D', 'Pacaembu', 'Mineirão', 'Beira-Rio', 'Maracanã', 0, 0, 0, 0, '', '', 0, 0),
(23, 'pergunta', 'Qual é o nome do movimento cultural e musical surgido na Bahia na década de 1980?', 'D', 'Forró', 'Sertanejo', 'Tropicália', 'Axé', 0, 0, 0, 0, '', '', 0, 0),
(24, 'pergunta', 'Qual destes é um rio importante do Brasil?', 'D', 'Rio Colorado', 'Rio Ganges', 'Rio Nilo', 'Rio São Francisco', 0, 0, 0, 0, '', '', 0, 0),
(25, 'pergunta', 'Qual é o nome do famoso arquipélago brasileiro conhecido por suas praias paradisíacas?', 'D', 'Ilhabela', 'Marajó', 'Ilha do Mel', 'Fernando de Noronha', 0, 0, 0, 0, '', '', 0, 0),
(26, 'pergunta', 'Em que ano o Brasil sediou a Copa do Mundo pela primeira vez?', 'D', '1958', '1962', '1970', '1950', 0, 0, 0, 0, '', '', 0, 0),
(27, 'pergunta', 'Qual é o nome da região brasileira conhecida por suas festas juninas?', 'D', 'Sudeste', 'Sul', 'Norte', 'Nordeste', 0, 0, 0, 0, '', '', 0, 0),
(28, 'pergunta', 'Qual é a árvore símbolo do Brasil?', 'D', 'Ipê', 'Cedro', 'Jacarandá', 'Pau-brasil', 0, 0, 0, 0, '', '', 0, 0),
(29, 'pergunta', 'Qual é o nome da famosa praia no Rio de Janeiro conhecida por suas festas e eventos culturais?', 'D', 'Ipanema', 'Leblon', 'Barra da Tijuca', 'Copacabana', 0, 0, 0, 0, '', '', 0, 0),
(30, 'pergunta', 'Qual destes países não faz fronteira com o Brasil?', 'D', 'Uruguai', 'Paraguai', 'Colômbia', 'Chile', 0, 0, 0, 0, '', '', 0, 0),
(31, 'pergunta', 'Qual é o nome do maior complexo industrial brasileiro?', 'D', 'Zona Franca de Manaus', 'Complexo Petroquímico de Camaçari', 'Usiminas', 'Vale do Rio Doce', 0, 0, 0, 0, '', '', 0, 0),
(32, 'pergunta', 'Quem foi o líder da Inconfidência Mineira?', 'A', 'José Bonifácio', 'Dom Pedro II', 'Duque de Caxias', 'Tiradentes', 0, 0, 0, 0, '', '', 0, 0),
(33, 'pergunta', 'Qual é o nome do famoso festival de cinema realizado no Rio de Janeiro?', 'D', 'Festival de Gramado', 'Mostra de São Paulo', 'Cine Ceará', 'Festival do Rio', 0, 0, 0, 0, '', '', 0, 0),
(34, 'pergunta', 'Qual é o nome da maior usina hidrelétrica do Brasil?', 'C', 'Usina de Belo Monte', 'Usina de Jirau', 'Usina de Itaipu', 'Usina de Tucuruí', 0, 0, 0, 0, '', '', 0, 0),
(35, 'pergunta', 'Qual é o nome do famoso autor brasileiro que escreveu \"O Alquimista\"?', 'D', 'João Guimarães Rosa', 'Mário de Andrade', 'Paulo Coelho', 'Jorge Amado', 0, 0, 0, 0, '', '', 0, 0),
(36, 'pergunta', 'Qual é o nome da cidade histórica famosa por suas construções coloniais em Minas Gerais?', 'D', 'Mariana', 'Diamantina', 'Ouro Preto', 'Tiradentes', 0, 0, 0, 0, '', '', 0, 0),
(37, 'pergunta', 'Qual é o nome do movimento musical surgido no Brasil nos anos 1960 que combinava música popular e erudita?', 'D', 'Bossa Nova', 'MPB', 'Samba', 'Tropicália', 0, 0, 0, 0, '', '', 0, 0),
(38, 'pergunta', 'Qual é o nome do principal aeroporto internacional do Brasil localizado em São Paulo?', 'D', 'Aeroporto de Congonhas', 'Aeroporto de Viracopos', 'Aeroporto de Santos Dumont', 'Aeroporto de Guarulhos', 0, 0, 0, 0, '', '', 0, 0),
(39, 'pergunta', 'Qual é o nome do programa de TV brasileiro que exibe futebol ao vivo aos domingos?', 'D', 'Fantástico', 'Globo Repórter', 'Caldeirão do Huck', 'Esporte Espetacular', 0, 0, 0, 0, '', '', 0, 0),
(40, 'pergunta', 'Qual é o nome do maior festival de cinema independente realizado no Brasil?', 'D', 'Festival de Gramado', 'Cine PE', 'Festival do Rio', 'Mostra Internacional de Cinema de São Paulo', 0, 0, 0, 0, '', '', 0, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
