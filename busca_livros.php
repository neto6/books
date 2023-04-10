<?php

require_once('header.php');
require_once('mysql.php');

$input = $_GET['input'];

$sql = "SELECT livro_id, nome, autor FROM t_livros
WHERE nome LIKE '%$input%'";

$resultados = array();
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $resultados[] = array($row['livro_id'], $row['nome'], $row['autor']);
}

?>

<div class="container mt-3">
  <h2>Resultados</h2>
  <?php foreach($resultados as $res) {
    echo "<h1><a href=\"livro.php?livro_id=$res[0]\">$res[1]</a></h1><h5>$res[2]</h5><br>";
  } ?>
</div>

<?php

require_once('footer.php');

?>