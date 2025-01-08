<?php 
    session_start();
//include("php/function.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuario</title>
</head>
<body>
<form method="POST" action="php/saveUser.php" class="form">
        <div class="logo">
            <p>Monte Sion</p>
        </div>
        <br>
        <p class="ipLogin">
            <label for="usuario">Nome: </label>
            <input type="text" name="nNome" id="iNome" placeholder="Insira seu nome" maxlength="80" required>
        </p>

        <p class="ipLogin">
            <label for="usuario">Usuario: </label>
            <input type="text" name="nLogin" id="iLogin" placeholder="Insira seu email" maxlength="80" required>
        </p>
        <p class="ipSenha">
            <label for="senha">Senha: </label>
            <input type="password" name="nSenha" id="iSenha" placeholder="Senha" maxlength="8" required>
        </p>
        <p class="ipBt">
            <input type="submit" name="btnCadastro" id="btnCadastro" value="Cadastrar">
        </p>
        <p>
            <h6>
                <?php
                    if(isset($_SESSION['alertUser'])){
                        echo $_SESSION['alertUser'];
                        session_destroy();
                    }
                ?>
            </h6>
        </p>
    </form>
    
</body>
</html>