<?php

class ListaLivro {
    public $usuario_id;
    public $livros_ids;
    public $nome_lista;

    public function __constructor($usuario_id, $livros_ids, $nome_lista) {
        $this->usuario_id = $usuario_id;
        $this->livros_ids = $livros_ids;
        $this->nome_lista = $nome_lista;
    }
}

?>