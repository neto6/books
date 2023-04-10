<?php

require_once('mysql.php');

class Usuario {
    public $usuario_id;
    public $email;
    public $senha;
    public $nome;

    public function __construct($usuario_id, $email, $senha, $nome) {
        $this->usuario_id = $usuario_id;
        $this->email = $email;
        $this->senha = $senha;
        $this->nome = $nome;
    }

    public function salvaUsuario() {
        global $conn;
        $nome = $this->nome;
        $email = $this->email;
        $senha = md5($this->senha);

        $sql = "INSERT INTO t_usuarios (email, senha, nome)
        VALUES ('$email', '$senha', '$nome')";

        $conn->query($sql);
        return $conn->insert_id;
    }

    public function logaUsuario() {
        global $conn;
        $email = $this->email;
        $senha = md5($this->senha);

        $sql = "SELECT usuario_id FROM t_usuarios WHERE email = '$email' AND senha = '$senha'";

        $favoritos = array();
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['usuario_id'];
        } else {
            return 0;
        }
        
    }

    public function recuperaFavoritos() {
        global $conn;
        $usuario_id = $this->usuario_id;

        $sql = "SELECT liv.nome FROM t_livros liv
        INNER JOIN t_usuario_livro ul ON liv.livro_id = ul.livro_id
        WHERE ul.usuario_id = '$usuario_id'
        AND ul.favorito = '1'";

        $favoritos = array();
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $favoritos[] = $row['nome'];
        }

        return $favoritos;
    }

    public function recuperaPossui() {
        global $conn;
        $usuario_id = $this->usuario_id;

        $sql = "SELECT liv.nome FROM t_livros liv
        INNER JOIN t_usuario_livro ul ON liv.livro_id = ul.livro_id
        WHERE ul.usuario_id = '$usuario_id'
        AND ul.possui = '1'";

        $possui = array();
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $possui[] = $row['nome'];
        }

        return $possui;
    }

    public function recuperaLeu() {
        global $conn;
        $usuario_id = $this->usuario_id;

        $sql = "SELECT liv.nome FROM t_livros liv
        INNER JOIN t_usuario_livro ul ON liv.livro_id = ul.livro_id
        WHERE ul.usuario_id = '$usuario_id'
        AND ul.leu = '1'";

        $leu = array();
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $leu[] = $row['nome'];
        }

        return $leu;
    }

    public function recuperaQuerLer() {
        global $conn;
        $usuario_id = $this->usuario_id;

        $sql = "SELECT liv.nome FROM t_livros liv
        INNER JOIN t_usuario_livro ul ON liv.livro_id = ul.livro_id
        WHERE ul.usuario_id = '$usuario_id'
        AND ul.quer_ler = '1'";

        $quer_ler = array();
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $quer_ler[] = $row['nome'];
        }

        return $quer_ler;
    }

    public function recuperaListas() {
        global $conn;
        $usuario_id = $this->usuario_id;

        $sql = "SELECT nome, lista_id FROM t_listas
        WHERE usuario_id = '$usuario_id'";

        $listas = array();
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $listas[] = array($row['nome'], $row['lista_id']);
        }

        return $listas;
    }

    public function recuperaAvaliacoes() {
        global $conn;
        $usuario_id = $this->usuario_id;

        $sql = "SELECT liv.nome, ul.avaliacao FROM t_usuario_livro ul
        INNER JOIN t_livros liv ON liv.livro_id = ul.livro_id
        WHERE ul.usuario_id = '$usuario_id' AND avaliacao > 0";

        $avaliacoes = array();
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $avaliacoes[] = array($row['nome'], $row['avaliacao']);
        }

        return $avaliacoes;
    }
}

?>