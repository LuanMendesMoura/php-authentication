<?php 
session_start();

require_once 'timer.php';

$usuarioLogado = $_SESSION['email'] ?? null;
$usuarioNome = $_SESSION['nome'] ?? null;
$usuarioPerfil = $_SESSION['perfil'] ?? null;
?>

<pre>
    <?php print_r($_SESSION); ?>
</pre>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isset($_GET['afk'])): ?>
        <p>Foi desconectado por inatividade!</p>
    <?php endif ?>
    <h1>Home: PUBLICO</h1>
    <p>
        <a href="index.php">Home</a> --
        <a href="login.php">Login</a> --
        <a href="logout.php">Sair</a>
    </p>
    <?php if (!empty($usuarioLogado)): ?>
        <p>Boas vindas <?= $usuarioNome ?> </p>
        <p>Seu nivel de usuário: <?= $usuarioPerfil ?> </p>
    <?php endif ?>
</body>
</html>