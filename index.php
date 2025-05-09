<?php 
// inicia a sessão ou disponibiliza a sessão atual
session_start();

// if (empty($_SESSION['contador'])) {
//     $_SESSION['contador'] = 0;
// }

// $_SESSION['contador'] = $_SESSION['contador'] +1;
    
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
        <a href="login.php">Login</a> |
        <a href="private.php">Privado</a>
    </p>
    <?php if (!empty($usuarioLogado)): ?>
        <p>Bem vindo <?= $usuarioLogado ?></p>
    <?php endif ?>
</body>
</html>