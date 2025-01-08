<?php 

session_start();
//include("php/function.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/dist/css/style.css">
    <title>Login Sion</title>
</head>
<body>
    <form method="POST" action="php/verifyAcess.php" class="form">
        <div class="logo">
            <p>Monte Sion</p>
        </div>
        <br>
        <p class="ipLogin">
            <label for="usuario">Usuario: </label>
            <input type="text" name="nLogin" id="iLogin" placeholder="Usuario" maxlength="80" required>
        </p>
        <p class="ipSenha">
            <label for="senha">Senha: </label>
            <input type="password" name="nSenha" id="iSenha" placeholder="Senha" maxlength="8" required>
        </p>
        <p class="ipBt">
            <input type="submit" name="btnLogin" id="btnLogin" value="Login">
        </p>
        <p class="RegisterUser">
            <h5>
                Não tem cadastro? Clique <a href="registerUser.php">AQUI</a> e cadastre-se!
            </h5>
        </p>
        <p>
            <h6>
                <?php
                    //Mensagens de aviso login
                ?>
            </h6>
        </p>
    </form>
</body>
</html>