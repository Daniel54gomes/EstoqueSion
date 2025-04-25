<?php
    //Desenha uma tabela com os produtos presentes no estoque.
    function tabelaEstoque(){
        // Buscar infos no BD: produto/tamanho/quantidade
        $sql = "SELECT `p`.`idProduto`, `p`.`nome` AS `pnome`, `p_t`.`idTamanho`, `p_t`.`quantidade`, `t`.`sigla`, `t`.`descricao` AS `tdescricao`".
                "FROM `produtos` AS `p`".
                    "LEFT JOIN `produtos_tamanhos` AS `p_t` ON `p_t`.`idProduto` = `p`.`idProduto`".
                    "LEFT JOIN `tamanhos` AS `t` ON `p_t`.`idTamanho` = `t`.`idTamanho`".
                "WHERE `p_t`.`idProduto` = `p`.`idProduto` AND `t`.`idTamanho` = `p_t`.`idTamanho`;";
        include("connection.php");
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        if(mysqli_num_rows($result)>0){
            $html="<p><table border=1><tr><td>Produto</td><td>Tamanho</td><td>Quantidade</td></tr>";
            $array = array();
            while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                array_push($array,$linha);
            }
            foreach($array as $campo){
                $html.= "<tr><td>".$campo["pnome"]."</td><td align='center'>".$campo["sigla"]."</td><td align='center'>".$campo["quantidade"]."</td><td><button><a href=''>Alterar Produto</a></button></td>";
            }
            $html.= "</tr></table></p>";
            return $html;
        }
    }
?>