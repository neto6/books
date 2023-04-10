<?php

require_once('header.php');
require_once('./class/ListaLivro.php');

$lista_id = $_GET['lista_id'];

$lista = new ListaLivro($lista_id, '', '', '');
$lista->recuperaLista();

$nome = $lista->nome_lista;
$livros = $lista->livros;

?>

<div class="container mt-3">
  <h2><?php echo $nome ?></h2>
  <h5>Livros</h5>
  <?php foreach($livros as $liv) {echo "$liv[0] ($liv[1])<br>";} ?>
</div>

<?php

require_once('footer.php');

?>