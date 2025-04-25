<?php if(session_status() != PHP_SESSION_ACTIVE){ session_start();} ?>
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
            <label for="iLogin">Usuario: </label>
            <input type="text" name="nLogin" id="iLogin" placeholder="Usuario" maxlength="80" required>
        </p>
        <p class="ipSenha">
            <label for="iSenha">Senha: </label>
            <input type="password" name="nSenha" id="iSenha" placeholder="Senha" maxlength="8" required>
        </p>
        <p class="ipBt">
            <input type="submit" name="btnLogin" id="btnLogin" value="Login">
        </p>
        <p class="RegisterUser">
            <h5>
                Não tem cadastro? Clique <a href="registerUser.php?op=0">AQUI</a> e cadastre-se!
            </h5>
        </p>
        <p>
            <h4>
                <?php if(isset($_SESSION['alertUser'])){ echo $_SESSION['alertUser']; unset($_SESSION['alertUser']);} ?>
            </h4>
        </p>
    </form>
</body>
</html>