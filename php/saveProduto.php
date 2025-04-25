<?php 
    if(session_status() != PHP_SESSION_ACTIVE){ session_start();}
    //Salvar produto cadastrado.
    $nome= stripslashes($_POST['nNome']);
    $desc= stripslashes($_POST['nDesc']);
    if($desc!='' && $nome!=''){
        $sql="INSERT INTO `produtos` (`idProduto`, `nome`, `descricao`) VALUES (NULL, '".$nome."', '".$desc."');";
    }elseif($nome!=''){
        //Sem descrição
        $sql="INSERT INTO `produtos` (`idProduto`, `nome`) VALUES (NULL, '".$nome."');";
    }
    
    include 'connection.php';
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header('location:../cadastrarProduto.php');
?>