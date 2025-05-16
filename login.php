<?php 
session_start();

require_once 'timer.php';

$maxTentativas = 3;
if (!isset($_SESSION['tentativas'])) {
    $_SESSION['tentativas'] = 1;
}
if ($_SESSION['tentativas'] > $maxTentativas) {
    echo "Você atingiu o número máximo de tentativas, espere 2 minutos e tente novamente!";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $_SESSION['tentativas']++;

    $emailForm = $_POST['email'];
    $senhaForm = $_POST['senha'];
    if (!empty($emailForm) && !empty($senhaForm)) {
        $usuarios = [

            [
                'email' => 'adm@email.com',
                'senha' => password_hash('123',PASSWORD_BCRYPT),
                'perfil' => 'Administrador',
                'nome' => 'Luan',
            ],
            [
                'email' => 'gerente@email.com',
                'senha' => password_hash('123',PASSWORD_BCRYPT),
                'perfil' => 'Gerente',
                'nome' => 'Luan',
            ],
            [
                'email' => 'funcionario@email.com',
                'senha' => password_hash('123',PASSWORD_BCRYPT),
                'perfil' => 'Funcionário',
                'nome' => 'Luan',
            ],
        ];
        foreach ($usuarios as $usuario) {
            if ($usuario['email'] === $emailForm && password_verify($senhaForm, $usuario['senha'])) {
                $_SESSION['email'] = $usuario['email'];
                $_SESSION['perfil'] = $usuario['perfil'];
                $_SESSION['nome'] = $usuario['nome'];
                session_regenerate_id(true);

                header ('Location: index.php');
            }
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
    <?php if (isset($_GET['afk'])): ?>
        <p>Foi desconectado por inatividade!</p>
    <?php endif ?>
    <h1>Login: </h1>
    <p>
        <a href="index.php">Home</a> --
        <a href="login.php">Login</a> --
        <a href="logout.php">Sair</a>
    </p>

    <form action="login.php" method="POST">
        <label for="email">Email</label>
        <input type="text" name="email">
        <label for="senha">Senha</label>
        <input type="text" name="senha">

        <button>Entrar</button>
    </form>
</body>
</html>