<?php
    include('php/function.php');
    if(session_status() != PHP_SESSION_ACTIVE){ session_start();}
    if(isset($_SESSION['usuario'])!=true||$_SESSION['tipoUsuario']==0){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produto</title>
</head>
<body>
    <p>
        <button><a href="estoqueAdmin.php">Home</a></button>
        <button><a href="perfilUser.php">Perfil</a></button>
        <button><a href="config.php">Configurações</a></button>
    </p>
    <p>
        <label>Cadastro de Produto</label>
    </p>
    <form method="POST" action="php/saveProduto.php"  class="form">
        <p hidden>
            <input type="image" src="" alt="">
        </p>
        <p>
            <label for="iNome">Produto: </label>
            <input type="text" name="nNome" id="iNome" required>
        </p>
        <p>
            <label for="iDesc">Descrição: </label>
            <input type="text" name="nDesc" id="iDesc">
        </p>
        <p>
            <input type="submit" value="Salvar">
        </p>
    </form>
    <p>
        <h4>
            <?php if(isset($_SESSION['alertUser'])){ echo $_SESSION['alertUser']; unset($_SESSION['alertUser']);} ?>
        </h4>
    </p>
    <?php echo tabelaProdutos(); ?>
</body>
</html>