--
-- Banco de dados: `monte_sion`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL COMMENT 'Identificador de usuário',
  `nome` varchar(40) NOT NULL COMMENT 'nome do usuário',
  `login` varchar(80) NOT NULL COMMENT 'login do usuário',
  `senha` int(8) NOT NULL COMMENT 'senha do usuário',
  `tipoUsuario` tinyint(1) NOT NULL COMMENT 'tipo de usuário (0=comum, 1=administrador).'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin COMMENT='Tabela de usuários';

--
-- Despejando dados para a tabela `usuarios`
--
/*
INSERT INTO `usuarios` (`idUsuario`, `nome`, `login`, `senha`, `tipoUsuario`) VALUES
(1, 'Monte Sion', 'admin@gmail.com', 123, 1),
(2, 'Daniel', 'user@gmail.com', 123, 0),
(3, 'Daniel', 'user1@gmail.com', 123, 0),
(5, 'Daniel', 'user2@gmail.com', 123, 0),
(9, 'Daniel', 'user3@gmail.com', 123, 0);
*/
--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de usuário', AUTO_INCREMENT=0;
COMMIT;
