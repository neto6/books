<?php

session_start();
require_once('mysql.php');

$livro_id = $_GET['livro_id'];
$usuario_id = $_SESSION['usuario_id'];
$nota = (int)$_POST['nota'];

if ($nota < 1 || $nota > 5) {echo "Apenas entre 1 e 5."; exit();}

$sql = "SELECT * FROM t_usuario_livro WHERE usuario_id = '$usuario_id' AND livro_id = '$livro_id'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    if ($row['leu'] >= 1) {

        $sql = "UPDATE t_usuario_livro SET avaliacao = '$nota' WHERE usuario_id = '$usuario_id' AND livro_id = '$livro_id'";
        $conn->query($sql);
        header('location: livro.php?livro_id='.$livro_id);

    } else {

        echo "Não pode avaliar um livro que não leu.";

    }
    

} else {

    echo "Não pode avaliar um livro que não leu.";

}





?>