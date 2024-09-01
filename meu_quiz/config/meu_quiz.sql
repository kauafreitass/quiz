create database meu_quiz;

use meu_quiz;
--
-- Banco de dados: `meu_quiz`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `option_a` varchar(255) NOT NULL,
  `option_b` varchar(255) NOT NULL,
  `option_c` varchar(255) NOT NULL,
  `option_d` varchar(255) NOT NULL,
  `correct_answer` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `quiz`
--

INSERT INTO `quiz` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`) VALUES
(56, 'Qual é a capital do Brasil?', 'São Paulo', 'Rio de Janeiro', 'Brasília', 'Salvador', 'C'),
(57, 'Quem foi o primeiro presidente do Brasil?', 'Getúlio Vargas', 'Juscelino Kubitschek', 'Deodoro da Fonseca', 'Dom Pedro II', 'C'),
(58, 'Qual é o maior estado do Brasil em extensão territorial?', 'Amazonas', 'Pará', 'Mato Grosso', 'Minas Gerais', 'A'),
(59, 'Qual rio é conhecido como o maior rio do Brasil?', 'Rio Tietê', 'Rio Amazonas', 'Rio Paraná', 'Rio São Francisco', 'B'),
(60, 'Qual é a principal festa popular brasileira, famosa por seus desfiles de escolas de samba?', 'Festa Junina', 'Carnaval', 'Réveillon', 'Festa do Peão', 'B'),
(61, 'Quem é o autor da famosa obra literária \"O Guarani\"?', 'Jorge Amado', 'Machado de Assis', 'José de Alencar', 'Manuel Bandeira', 'C'),
(62, 'Em que ano o Brasil foi descoberto pelos portugueses?', '1500', '1492', '1822', '1888', 'A'),
(63, 'Qual é a maior floresta tropical do mundo, localizada no Brasil?', 'Floresta Atlântica', 'Floresta de Araucária', 'Floresta Amazônica', 'Pantanal', 'C'),
(64, 'Qual é a data da independência do Brasil?', '7 de setembro', '15 de novembro', '12 de outubro', '25 de dezembro', 'A'),
(65, 'Qual é o ritmo musical conhecido como patrimônio cultural brasileiro, originário da Bahia?', 'Samba', 'Bossa Nova', 'Axé', 'Forró', 'C');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT de tabela `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

