<?php

    include('connection.php');
    $login = stripslashes($_POST['nLogin']);
    $senha = stripslashes($_POST['nSenha']);

    $sql = "SELECT idUsuario,tipoUsuario FROM usuarios WHERE login='".$login."' AND senha=".$senha.";";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
    if(mysqli_num_rows($result)==1){
        echo "Entrou";
        die();
    }else{
        echo "Não entrou";
        die();
    }
    
?>