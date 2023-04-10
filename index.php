<?php

session_start();
if (isset($_SESSION['usuario_id'])) {header('location: painel.php');}

require_once('header.php');

?>

<div class="container mt-3">
  <h2>Entre em books!</h2>
    <form action="login.php" method="post">
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Ex. joao@email.com" name="email">
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Senha:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Senha" name="pswd">
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
    <br>Não possui conta? <a href="registro.php">Registrar-se</a>
</div>

<?php

require_once('footer.php');

?>