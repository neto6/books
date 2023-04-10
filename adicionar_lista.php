<?php

session_start();
require_once('mysql.php');

$lista_id = $_GET['lista_id'];
$livro_id = $_GET['livro_id'];

$sql = "SELECT * FROM t_lista_livro WHERE lista_id = '$lista_id' AND livro_id = '$livro_id'";

$result = $conn->query($sql);

if ($result->num_rows <= 0) {

    $sql = "INSERT INTO t_lista_livro (lista_id, livro_id) VALUES ('$lista_id', '$livro_id')";

}

$conn->query($sql);


header('location: lista.php?lista_id='.$lista_id);

?>