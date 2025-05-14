<?php 
session_start();

if ($_POST['nome'] === 'Usuario' )


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login: </h1>
    <p>
        <a href="index.php">Home</a> --
        <a href="login.php">Login</a> --
        <a href="privado.php">Privado</a> --
        <a href="logout.php">Sair</a>
    </p>

    <form action="login.php" method="POST">
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <label for="senha">Senha</label>
        <input type="text" name="senha">

        <button>Entrar</button>
    </form>
</body>
</html>