<?php
require_once 'config.php';
require_once 'credentials.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'] ?? '';
    $pass = $_POST['pass'] ?? '';

    if ($user === $set_user && $pass === $set_pass) {
        $_SESSION['usuario_logado'] = $set_user;
        $_SESSION['tipo_usuario'] = $set_user_type; 
    } 
    elseif ($user === $set_user2 && $pass === $set_pass2) {
        $_SESSION['usuario_logado'] = $set_user2;
        $_SESSION['tipo_usuario'] = $set_user_type2; 
    } 
    elseif ($user === $set_user3 && $pass === $set_pass3) {
        $_SESSION['usuario_logado'] = $set_user3;
        $_SESSION['tipo_usuario'] = $set_user_type3; 
    }
}

header('Location: index.php');
exit;