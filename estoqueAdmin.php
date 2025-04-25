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
    <title>Estoque</title>
</head>
<body>
    <p>
        <button><a href="estoqueAdmin.php">Home</a></button>
        <button><a href="perfilUser.php">Perfil</a></button>
        <button><a href="config.php">Configurações</a></button>
        <button><a href="index.php">Sair</a></button>
    </p>
    <p>
        <input type="text" placeholder="Pesquisar"><button>Pesquisar</button>
    </p>
    <p>
        <button><a href="controleEstoque.php?tip=0">Entrada</a></button>
        <button><a href="controleEstoque.php?tip=1">Saida</a></button>
    </p>
    <p>
        <button><a href="cadastrarProduto.php">Cadastrar Produto</a></button>
    </p>
    <?php echo tabelaEstoque(); ?>
</body>
</html>