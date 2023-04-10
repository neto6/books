<?php

session_start();
require_once('./class/Livro.php');

$nome = $_POST['name'];
$autor = $_POST['autor'];

$livro = new Livro(0, $nome, $autor);

$livro_id = $livro->salvaLivro();

if ($livro_id > 0) {
    header('location: livro.php?livro_id='.$livro_id);
} else {
    echo "Erro ao salvar livro.";
}

?>