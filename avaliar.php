<?php

require_once('header.php');

?>

<div class="container mt-3">
  <h2>Digite sua nota</h2>
    <form action="salvar_avaliacao.php?livro_id=<?php echo $_GET['livro_id'] ?>" method="post">
    <div class="mb-3 mt-3">
        <label for="nota" class="form-label">De 1 a 5:</label>
        <input type="nota" class="form-control" id="nota" name="nota">
    </div>
    <button type="submit" class="btn btn-primary">Avaliar</button>
    </form>
</div>

<?php

require_once('footer.php');

?>