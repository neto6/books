<?php

session_start();
require_once('mysql.php');

$livro_id = $_GET['livro_id'];
$usuario_id = $_SESSION['usuario_id'];
$review = $_POST['review'];

if ($review == "") {echo "Review em branco."; exit();}

$sql = "SELECT * FROM t_reviews WHERE usuario_id = '$usuario_id' AND livro_id = '$livro_id'";

$result = $conn->query($sql);

if ($result->num_rows <= 0) {

    $sql = "INSERT INTO t_reviews (usuario_id, livro_id, texto) VALUES ('$usuario_id', '$livro_id', '$review')";
    $conn->query($sql);
    header('location: livro.php?livro_id='.$livro_id);

} else {

    echo "Um usuário só pode escrever um review por livro.";

}

?>