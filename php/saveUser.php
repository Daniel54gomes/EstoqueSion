<?php
    if(session_status() != PHP_SESSION_ACTIVE){ session_start();}
    if(isset($_GET['op'])){
        //Salvar senha nova
        $senha1=stripslashes($_POST["nSenha1"]);
        $senha2=stripslashes($_POST["nSenha2"]);
        if(isset($_SESSION['usuario'])){
            //Logado
            $user = $_SESSION['usuario'];
            if($senha1==$senha2){
                //Senhas iguais.
                $sql="SELECT `senha`,`tipoUsuario` FROM `usuarios` WHERE `idUsuario`=".$_SESSION['usuario'].";" ;
                include('connection.php');
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)==1){
                    $array = array();
                    while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        array_push($array,$linha);
                    }
                    foreach($array as $campo){
                        if($campo['senha']!=md5($senha1)){
                            $sqlInsert="UPDATE `usuarios` SET `senha` = '".md5($senha1)."' WHERE `usuarios`.`idUsuario` = ".$user.";";
                            mysqli_query($conn,$sqlInsert);
                            mysqli_close($conn);
                            if($campo['tipoUsuario']==0){
                                //Alert
                                header("location:../estoque.php");
                            }else{
                                //Alert
                                header("location:../estoqueAdmin.php");
                            }
                        }
                    }
                }
            }else{
                //Senhas diferentes.
                header("location:../registerUser.php?op=1");
            }
        }else{
            //Perda da identificação do usuario. Re-logar.
            //Alert
            header("location:../index.php");
        }
    }else{
        //Salvar usuario novo
        //Pegar dados inseridos pelo usuario.
        $nome = stripslashes($_POST['nNome']);
        $email = stripslashes($_POST['nLogin']);
        $senha = stripslashes($_POST['nSenha']);
        //Sql para verificar se usuario existe
        $sql = "SELECT idUsuario FROM usuarios WHERE login='".$email."';";
        include('connection.php');
        //Se não tiver 1 ou mais resultados, os dados podem ser cadastrados.
        if(mysqli_num_rows(mysqli_query($conn,$sql))<1){
            $sqlInsert = "INSERT INTO `usuarios` (`idUsuario`,`nome`,`login`,`senha`,`tipoUsuario`) "
                        ."VALUES (NULL,'".$nome."','".$email."','".md5($senha)."',0);";
            mysqli_query($conn,$sqlInsert);
            mysqli_close($conn);
            $_SESSION["alertUser"]="Usuario Cadastrado com sucesso.";
            header('location:../index.php');
        }else{
            //Dados já registrados, os dados não podem ser cadastrados.
            //Mensagem de alerta de usuario já existente.
            $_SESSION['alertUser']= 'Usuario existente.';
            header('location:../registerUser.php?op=0');
        }
    }
?>