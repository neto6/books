<?php

class Livro {
    public $livro_id;
    public $nome;
    public $autor;

    public function __constructor($livro_id, $nome, $autor) {
        $this->livro_id = $livro_id;
        $this->nome = $nome;
        $this->autor = $autor;
    }
}

?>