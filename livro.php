<?php

require_once('header.php');
require_once('./class/Livro.php');
require_once('./class/Usuario.php');

$livro_id = $_GET['livro_id'];

$livro = new Livro($livro_id, '', '');
$livro->recuperaLivro();

$nome = $livro->nome;
$autor = $livro->autor;

$usuario_id = $_SESSION['usuario_id'];
$usuario = new Usuario($usuario_id, '', '', '');
$listas = $usuario->recuperaListas();

?>

<div class="container mt-3">
  <h4>Livro</h4>
  <h2><?php echo $nome ?></h2>
  <h4>Autor</h4>
  <h2><?php echo $autor ?></h2>
  <br />
  <a class="btn btn-warning" href="favorito.php?livro_id=<?php echo $livro_id ?>">Favorito</a>
  <a class="btn btn-primary" href="possui.php?livro_id=<?php echo $livro_id ?>">Possuo</a>
  <a class="btn btn-primary" href="leu.php?livro_id=<?php echo $livro_id ?>">Já li</a>
  <a class="btn btn-primary" href="quer_ler.php?livro_id=<?php echo $livro_id ?>">Quero ler</a>
  <a class="btn btn-primary" href="avaliar.php?livro_id=<?php echo $livro_id ?>">Avaliar</a>
  <br />
  <?php foreach($listas as $lis) {echo "<br><a class=\"btn btn-secondary\" href=\"adicionar_lista.php?lista_id=$lis[1]&livro_id=$livro_id\">Adicionar a $lis[0]</a>";} ?>
  <br />
  <br />

  <h4>Reviews</h4>

  <form action="salvar_review.php" method="post">
    <textarea name="review"></textarea>
    <br />
    <input type="submit" value="Adicionar Review"/>
  </form>

</div>

<?php

require_once('footer.php');

?>