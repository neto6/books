<?php

require_once('header.php');
require_once('./class/Usuario.php');

$usuario_id = $_SESSION['usuario_id'];
$usuario = new Usuario($usuario_id, '', '', '');
$favoritos = $usuario->recuperaFavoritos();
$possui = $usuario->recuperaPossui();
$leu = $usuario->recuperaLeu();
$quer_ler = $usuario->recuperaQuerLer();
$listas = $usuario->recuperaListas();
$avaliacoes = $usuario->recuperaAvaliacoes();

?>

<div class="container mt-3">
  <h2>Seus favoritos</h2>
  <?php foreach($favoritos as $fav) {echo $fav." ";} ?>
  <h2>Livros que possui</h2>
  <?php foreach($possui as $poss) {echo $poss." ";} ?>
  <h2>Livros que leu</h2>
  <?php foreach($leu as $l) {echo $l." ";} ?>
  <h2>Livros que quer ler</h2>
  <?php foreach($quer_ler as $q) {echo $q." ";} ?>
  <h2>Suas listas</h2>
  <?php foreach($listas as $lis) {echo "<a href=\"lista.php?lista_id=$lis[1]\">$lis[0]</a> ";} ?>
  <br><a href="cria_lista.php">Criar Lista</a>
  <h2>Suas avaliações</h2>
  <?php foreach($avaliacoes as $ava) {echo "$ava[0] ($ava[1])<br>";} ?>
</div>

<?php

require_once('footer.php');

?>