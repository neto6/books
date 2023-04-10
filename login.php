<?php

session_start();
require_once('./class/Usuario.php');

$email = $_POST['email'];
$senha = $_POST['pswd'];

$usuario = new Usuario(0, $email, $senha, '');

$usuario_id = $usuario->logaUsuario();

if ($usuario_id > 0) {
    $_SESSION['usuario_id'] = $usuario_id;
    header('location: painel.php');
} else {
    echo "Erro ao logar usuário.";
}

?>