<?php

require_once('header.php');

?>

<div class="container mt-3">
  <h2>Criar Lista</h2>
    <form action="salvar_lista.php" method="post">
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Nome:</label>
        <input type="name" class="form-control" id="name" placeholder="Ex. Minha Lista de Auto Ajuda" name="name">
    </div>
    <button type="submit" class="btn btn-primary">Criar</button>
    </form>
</div>

<?php

require_once('footer.php');

?>