<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Pega as credenciais do form login
    $emailForm = $_POST['email'];
    $senhaForm = $_POST['senha'];
    if (!empty($emailForm) && !empty($senhaForm)) {

        $emailCorreto = 'adm@mail.com';
        $senhaCorreto = '123';

        // Verificar se as credenciais estao corretas
        if ($emailForm === $emailCorreto && $senhaForm === $senhaCorreto) {

            // Posso logar o usuario e salvar na sessao
            $_SESSION['usuario'] = $emailForm;

            return header('location: privado.php');
        }
    }
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
    <h1>Login: todos podem acessar </h1>
    <form action="login.php" method="POST">
        <label for="email">Email</label>
        <input type="text" name="email" >

        <label for="senha"></label>
        <input type="text" name="senha" >

        <button>Entrar</button>
    </form>
</body>
</html>