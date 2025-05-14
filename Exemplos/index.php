<?php 
// inicia a sessão ou disponibiliza a sessão atual
session_start();
    
// superglobal que armazena os dados de sessão
$usuarioLogado = $_SESSION['usuario'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home: todos podem acessar </h1>
    <p>
        <a href="index.php">Inico</a> |
        <a href="login.php">Login</a> |
        <a href="privado.php">Privado</a> |
        <a href="logout.php">Sair</a>
    </p>
    <?php if (!empty($usuarioLogado)): ?>
        <p>Bem vindo <?= $usuarioLogado ?></p>
    <?php endif ?>
</body>
</html>