<?php

session_start();
require_once('./class/ListaLivro.php');

$nome = $_POST['name'];
$usuario_id = $_SESSION['usuario_id'];

$lista = new ListaLivro(0, $usuario_id, '', $nome);

$lista_id = $lista->salvaLista();

header('location: lista.php?lista_id='.$lista_id);

?>