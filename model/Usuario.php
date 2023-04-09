<?php

class Usuario {
    public $usuario_id;
    public $email;
    public $senha;
    public $nome;

    public function __constructor($usuario_id, $email, $senha, $nome) {
        $this->usuario_id = $usuario_id;
        $this->email = $email;
        $this->senha = $senha;
        $this->nome = $nome;
    }
}

?>