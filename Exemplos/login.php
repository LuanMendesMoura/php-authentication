<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Pega as credenciais do form login
    $emailForm = $_POST['email'];
    $senhaForm = $_POST['senha'];
    if (!empty($emailForm) && !empty($senhaForm)) {

        $emailCorreto = 'adm@mail.com';
        $senhaCorreto = password_hash('123', PASSWORD_BCRYPT);
        // perfil ou função do usuario no sistema Administrador (RBAC)
        $perfil = 'Gestor'; 
        
        // Verificar se as credenciais estao corretas
        if ($emailForm === $emailCorreto 
            && password_verify($senhaForm, $senhaCorreto)) {

            // Posso logar o usuario e salvar na sessao
            $_SESSION['usuario'] = $emailForm;
            $_SESSION['perfil'] = $perfil;

            header('Location: privado.php');
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
    <p>
        <a href="index.php">Inico</a> |
        <a href="login.php">Login</a> |
        <a href="privado.php">Privado</a> |
        <a href="logout.php">Sair</a>
    </p>
    <form action="login.php" method="POST">
        <label for="email">Email</label>
        <input type="text" name="email" >

        <label for="senha"></label>
        <input type="text" name="senha" >

        <button>Entrar</button>
    </form>
</body>
</html>