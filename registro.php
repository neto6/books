<?php

require_once('header.php');

?>

<div class="container mt-3">
  <h2>Cadastre-se em books!</h2>
    <form action="salvar_registro.php" method="post">
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Nome:</label>
        <input type="name" class="form-control" id="name" placeholder="Ex. João" name="name">
    </div>
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Ex. joao@email.com" name="email">
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Senha:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Senha" name="pswd">
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
    <br>Já possui conta? <a href="index.php">Entrar</a>
</div>

<?php

require_once('footer.php');

?>