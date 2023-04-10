<?php

session_start();
require_once('mysql.php');

$livro_id = $_GET['livro_id'];
$usuario_id = $_SESSION['usuario_id'];

$sql = "SELECT * FROM t_usuario_livro WHERE usuario_id = '$usuario_id' AND livro_id = '$livro_id'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $sql = "UPDATE t_usuario_livro SET possui = '1' WHERE usuario_id = '$usuario_id' AND livro_id = '$livro_id'";

} else {

    $sql = "INSERT INTO t_usuario_livro (possui, usuario_id, livro_id) VALUES ('1', '$usuario_id', '$livro_id')";

}

$conn->query($sql);

header('location: livro.php?livro_id='.$livro_id);

?>