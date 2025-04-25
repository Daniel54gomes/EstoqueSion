<?php
    //Desenhar tabela de produtos
    function tabelaProdutos(){
        $sql="SELECT * FROM `produtos`;";
        include("connection.php");
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        if(mysqli_num_rows($result)>0){
            $html='<p><table border="1"><tr><td>N°</td><td hidden><button>Mostrar imagem</button></td><td>Nome</td><td align="center">Descrição</td></tr>';
            $array=array();
            while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                array_push($array,$linha);
            }
            foreach($array as $campo){
                $html.='<tr><td>'.$campo["idProduto"].'</td><td class="img" hidden></td><td>'.$campo["nome"].'</td><td>'.$campo["descricao"].'</td><td><button name"'.$campo["idProduto"].'">Alterar/Deletar</button></td></tr>';
            }
            $html.="</table></p>";
            return $html;
        }
    }
?>