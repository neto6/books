<?php

require_once('header.php');
require_once('./class/Usuario.php');

$usuario_id = $_SESSION['usuario_id'];
$usuario = new Usuario($usuario_id, '', '', '');
$usuario->recuperaDados();
$favoritos = $usuario->recuperaFavoritos();
$possui = $usuario->recuperaPossui();
$leu = $usuario->recuperaLeu();
$quer_ler = $usuario->recuperaQuerLer();
$listas = $usuario->recuperaListas();
$avaliacoes = $usuario->recuperaAvaliacoes();

?>

<div class="container mt-3">
  <div class="row">
    <div class="col-md-2">
      <h1><?php echo $usuario->nome; ?></h1>
      <h4><?php echo $usuario->email; ?></h4>
    </div>
    <div class="col-md-10">
      <h2>Favoritos</h2>
      <?php if (count($favoritos) == 0) echo "Ainda não possui favoritos."; else foreach($favoritos as $fav) {echo show_book($fav)." ";} ?>
      <div style="clear:both"></div>

      <h2>Possui</h2>
      <?php if (count($possui) == 0) echo "Ainda não marcou nenhuma posse."; else foreach($possui as $poss) {echo show_book($poss)." ";} ?>
      <div style="clear:both"></div>

      <h2>Leu</h2>
      <?php if (count($leu) == 0) echo "Ainda não leu nenhum livro."; else foreach($leu as $l) {echo show_book($l)." ";} ?>
      <div style="clear:both"></div>

      <h2>Quer ler</h2>
      <?php if (count($quer_ler) == 0) echo "Ainda não marcou nenhum como quer ler."; else foreach($quer_ler as $q) {echo show_book($q)." ";} ?>
      <div style="clear:both"></div>

      <h2>Listas</h2>
      <?php if (count($listas) == 0) echo "Ainda não criou listas."; else foreach($listas as $lis) {echo "<a href=\"lista.php?lista_id=$lis[1]\">$lis[0]</a> ";} ?>
      <br><a href="cria_lista.php">Criar Lista</a>

      <h2>Avaliações</h2>
      <?php if (count($avaliacoes) == 0) echo "Ainda não fez avaliações."; else foreach($avaliacoes as $ava) {echo "$ava[0] ($ava[1])<br>";} ?>
    <div>
  </div>
</div>

<?php

require_once('footer.php');

?>