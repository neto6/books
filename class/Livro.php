<?php

require_once('mysql.php');

class Livro {
    public $livro_id;
    public $nome;
    public $autor;

    public function __construct($livro_id, $nome, $autor) {
        $this->livro_id = $livro_id;
        $this->nome = $nome;
        $this->autor = $autor;
    }

    public function salvaLivro() {
        global $conn;
        $nome = $this->nome;
        $autor = $this->autor;

        $sql = "INSERT INTO t_livros (nome, autor)
        VALUES ('$nome', '$autor')";

        $conn->query($sql);
        return $conn->insert_id;
    }

    public function recuperaLivro() {
        global $conn;
        $livro_id = $this->livro_id;

        $sql = "SELECT nome, autor FROM t_livros
        WHERE livro_id = '$livro_id'";

        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        $this->nome = $row['nome'];
        $this->autor = $row['autor'];
    }
}

?>