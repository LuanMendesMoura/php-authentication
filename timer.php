<?php 
if (isset($_SESSION['ultima_interacao']) && (time() - $_SESSION['ultima_interacao'] > 300)) {
    session_unset();
    session_destroy();   
    header('Location: login.php?afk');
    exit;
}
$_SESSION['ultima_interacao'] = time();
?>