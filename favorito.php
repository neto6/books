<?php

session_start();
require_once('mysql.php');

$livro_id = $_GET['livro_id'];
$usuario_id = $_SESSION['usuario_id'];

$sql = "SELECT * FROM t_usuario_livro WHERE usuario_id = '$usuario_id' AND livro_id = '$livro_id'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    if ($row['leu'] >= 1) {

        $sql = "UPDATE t_usuario_livro SET favorito = '1' WHERE usuario_id = '$usuario_id' AND livro_id = '$livro_id'";
        $conn->query($sql);
        header('location: livro.php?livro_id='.$livro_id);

    } else {

        echo "Não pode favoritar um livro que não leu.";

    }
    

} else {

    echo "Não pode favoritar um livro que não leu.";

}





?>