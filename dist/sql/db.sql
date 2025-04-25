/* Banco de Dados */

SELECT `p`.`idProduto`, `p`.`nome` AS `pnome`, `p_t`.`idTamanho`, `p_t`.`quantidade`, `t`.`sigla`, `t`.`descricao` AS `tdescricao`
                FROM `produtos` AS `p`
                    LEFT JOIN `produtos_tamanhos` AS `p_t` ON `p_t`.`idProduto` = `p`.`idProduto`
                    LEFT JOIN `tamanhos` AS `t` ON `p_t`.`idTamanho` = `t`.`idTamanho`
                WHERE `p_t`.`idProduto` = `p`.`idProduto` AND `t`.`idTamanho` = `p_t`.`idTamanho`;



INSERT INTO `produtos` (`idProduto`, `nome`) VALUES (NULL, '$nome');

INSERT INTO `produtos` (`idProduto`, `nome`, `descricao`) VALUES (NULL, '$nome', '$desc');

SELECT * FROM `produtos`;

SELECT idUsuario,tipoUsuario FROM usuarios WHERE login='$login' AND senha='md5($senha)';

INSERT INTO `usuarios` (`idUsuario`,`nome`,`login`,`senha`,`tipoUsuario`) VALUES (NULL,'$nome','$email','md5($senha)',$tipoUser);

SELECT idUsuario FROM usuarios WHERE login='$email';

UPDATE `usuarios` SET `senha` = 'md5($senha)' WHERE `usuarios`.`idUsuario` = $user;

SELECT `senha`,`tipoUsuario` FROM `usuarios` WHERE `idUsuario`= $idLogado;

ALTER TABLE `produtos` auto_increment = 12;