<?php if(session_status() != PHP_SESSION_ACTIVE){ session_start();} ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuario</title>
</head>
<body>
    <?php
        if($_GET["op"]==0){
            echo '<form method="POST" action="php/saveUser.php" class="form">'
            .'    <div class="logo">'
            .'        <p>Monte Sion</p>'
            .'    </div>'
            .'    <br>'
            .'    <p class="ipLogin">'
            .'        <label for="iNome">Nome: </label>'
            .'        <input type="text" name="nNome" id="iNome" placeholder="Insira seu nome" maxlength="80" required>'
            .'    </p>'
            .'    <p class="ipLogin">'
            .'        <label for="iLogin">Usuario: </label>'
            .'        <input type="text" name="nLogin" id="iLogin" placeholder="Insira seu email" maxlength="80" required>'
            .'    </p>'
            .'    <p class="ipSenha">'
            .'        <label for="iSenha">Senha: </label>'
            .'        <input type="password" name="nSenha" id="iSenha" placeholder="Senha" maxlength="8" required>'
            .'    </p>'
            .'    <p class="ipBt">'
            .'        <input type="submit" name="btnCadastro" id="btnCadastro" value="Cadastrar">'
            .'    </p>'
            .'    <p>'
            .'        <h6>';
                        if(isset($_SESSION["alertUser"])){ echo $_SESSION["alertUser"]; unset($_SESSION["alertUser"]);}          
            echo '    </h6>'
            .'    </p>'
            .'</form>';
        }else{
            echo '<form action="php/saveUser.php?op=1" method="post">'
            .'    <p>'
            .'        <label for="iSenha1">Nova Senha:</label>'
            .'        <input name="nSenha1" id="iSenha1" type="text" placeholder="Nova senha">'
            .'    </p>'
            .'    <p>'
            .'        <label for="iSenha2">Repetir Senha:</label>'
            .'        <input name="nSenha2" id="iSenha2" type="text" placeholder="Repetir senha">'
            .'    </p>'
            .'    <p>'
            .'        <input type="submit" name="nsalvar" id="isalvar" value="Salvar">'
            .'    </p>'
            .'    <p>'
            .'        <h6>';
                        if(isset($_SESSION["alertUser"])){ echo $_SESSION["alertUser"]; unset($_SESSION["alertUser"]);} 
            echo '    </h6>'
            .'    </p>'
            .'</form>';
        }
    ?>
</body>
</html>