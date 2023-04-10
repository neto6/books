<?php

require_once('mysql.php');

class ListaLivro {
    public $lista_id;
    public $usuario_id;
    public $livros;
    public $nome_lista;

    public function __construct($lista_id, $usuario_id, $livros, $nome_lista) {
        $this->lista_id = $lista_id;
        $this->usuario_id = $usuario_id;
        $this->livros = $livros;
        $this->nome_lista = $nome_lista;
    }

    public function salvaLista() {
        global $conn;
        $nome = $this->nome_lista;
        $usuario_id = $this->usuario_id;

        $sql = "INSERT INTO t_listas (nome, usuario_id)
        VALUES ('$nome', '$usuario_id')";

        $conn->query($sql);
        return $conn->insert_id;
    }

    public function recuperaLista() {
        global $conn;
        $lista_id = $this->lista_id;

        $sql = "SELECT nome, usuario_id FROM t_listas
        WHERE lista_id = '$lista_id'";

        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        $this->nome_lista = $row['nome'];
        $this->usuario_id = $row['usuario_id'];

        $livros = array();

        $sql = "SELECT liv.nome, liv.autor
        FROM t_lista_livro ll
        INNER JOIN t_livros liv ON ll.livro_id = liv.livro_id
        WHERE ll.lista_id = '$lista_id'";

        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            $livros[] = array($row['nome'], $row['autor']);
        }

        $this->livros = $livros;
    }
}

?>