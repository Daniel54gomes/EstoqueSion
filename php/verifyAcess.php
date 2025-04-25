<?php
    if(session_status() != PHP_SESSION_ACTIVE){ session_start();}
    include('connection.php');
    $login = stripslashes($_POST['nLogin']);
    $senha = stripslashes($_POST['nSenha']);
    $sql = "SELECT idUsuario,tipoUsuario FROM usuarios WHERE login='".$login."' AND senha='".md5($senha)."';";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
    if(mysqli_num_rows($result)==1){
        $array = array();
        while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            array_push($array,$linha);
        }
        foreach($array as $campo){
            if($campo['tipoUsuario']==1){
                $_SESSION['usuario']=$campo['idUsuario'];
                $_SESSION['tipoUsuario']=$campo['tipoUsuario'];
                header('location:../estoqueAdmin.php');
            }else{
                $_SESSION['usuario']=$campo['idUsuario'];
                $_SESSION['tipoUsuario']=$campo['tipoUsuario'];
                header('location:../estoque.php');
            }
        }
    }else{
        $_SESSION['alertUser'] = 'Email ou senha incorretos. Tente novamente.';
        header('location:../index.php');
        die();
    }
?>