<?php

session_start();
require_once('./class/Usuario.php');

$nome = $_POST['name'];
$email = $_POST['email'];
$senha = $_POST['pswd'];

$usuario = new Usuario(0, $email, $senha, $nome);

$usuario_id = $usuario->salvaUsuario();

if ($usuario_id > 0) {
    $_SESSION['usuario_id'] = $usuario_id;
    header('location: painel.php');
} else {
    echo "Erro ao salvar usuário.";
}

?>