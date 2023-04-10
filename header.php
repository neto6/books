<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Books</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="javascript:void(0)">Books</a>
        <?php if (isset($_SESSION['usuario_id'])) { ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link" href="painel.php">Meu Perfil</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="cadastrar_livro.php">Cadastrar Livro</a>
            </li>
        </ul>
        <form class="d-flex" action="busca_livros.php" method="get">
            <input class="form-control me-2" type="text" placeholder="Livros..." name="input">
            <input class="btn btn-primary" type="submit" value="Buscar">
        </form>
        </div>
        <?php } ?>
    </div>
    </nav>