<?php
    
    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }
    
    include('connection.php');
    //include('function.php');
    //echo 'Tentativa de conexão BD sucesso';

    $_SESSION['alertUser'] = '';

    $nome = stripslashes($_POST['nNome']);
    $email = stripslashes($_POST['nLogin']);
    $senha = stripslashes($_POST['nSenha']);
    //echo 'Nome: '.$name.'<br>Email: '. $email .'<br>Senha: '. $senha;
    
    //verificar se usuario existe
    $sql = "SELECT idUsuario FROM usuarios WHERE login='".$email."';";
    $result = mysqli_query($conn,$sql);
    //mysqli_close($conn);
    //echo mysqli_num_rows($result);

    if(mysqli_num_rows($result)<1){
        include('connection.php');
        $sqlInsert = "INSERT INTO `usuarios` (`idUsuario`,`nome`,`login`,`senha`,`tipoUsuario`) VALUES (NULL,'".$nome."','".$email."',".$senha.",0);";
        mysqli_query($conn,$sqlInsert);
        mysqli_close($conn);
        echo "Usuario cadastrado: ".$nome.",".$email.",".$senha;
    }else{
        mysqli_close($conn);
        //Mensagem de alerta de usuario já existente.
        $_SESSION['alertUser']= 'Usuario existente.';
        header('location:../registerUser.php');
    }

    
?>