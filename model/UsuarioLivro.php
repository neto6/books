<?php

class UsuarioLivro {
    public $usuario_id;
    public $livro_id;
    public $favorito;
    public $possui;
    public $leu;
    public $avaliacao;

    public function __constructor($usuario_id, $livro_id, $favorito, $possui, $leu, $avaliacao) {
        $this->usuario_id = $usuario_id;
        $this->livro_id = $livro_id;
        $this->favorito = $favorito;
        $this->possui = $possui;
        $this->leu = $leu;
        $this->avaliacao = $avaliacao;
    }
}

?>