<?php

require_once('header.php');

?>

<div class="container mt-3">
  <h2>Cadastrar Livro</h2>
    <form action="salvar_livro.php" method="post">
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Nome:</label>
        <input type="name" class="form-control" id="name" placeholder="Ex. Harry Potter" name="name">
    </div>
    <div class="mb-3 mt-3">
        <label for="autor" class="form-label">Autor:</label>
        <input type="text" class="form-control" id="autor" placeholder="Ex. JK" name="autor">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<?php

require_once('footer.php');

?>