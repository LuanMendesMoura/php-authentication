<?php 
session_start();

$usuarioLogado = $_SESSION['usuario'] ?? null;
if (empty($usuarioLogado)) {
    return header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Privado: Somente com login e senha </h1>
    <p>
        <a href="index.php">Inico</a> |
        <a href="login.php">Login</a> |
        <a href="privado.php">Privado</a> |
        <a href="logout.php">Sair</a>
    </p>
    <?php if (!empty($usuarioLogado)): ?>
        <p>Bem vindo <?= $usuarioLogado ?></p>
        <p>Seu perfil no sistema é <?= $_SESSION['perfil'] ?></p>

        <?php if ($_SESSION['perfil'] === 'Administrador'): ?>
            <button>Excluisivo ADM</button>
        <?php endif ?>
    <?php endif ?>
</body>
</html>