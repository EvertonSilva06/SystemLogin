<?php
require "../../model/usuario.php";
require "../../config/database.php";

class usuarioController{
    public $usuario;
    public $conexao;

    public function conectarBd() {
        $this->conexao = (new bd())->conectar();
        return $this->conexao;
    }

    public function cadastrar($nome, $dataNasc, $email, $senha, $endereco) {
        $usuario = new Usuario($this->conectarBd());
        $query = $usuario->cadastrar();

        $stmt = $this->conexao->prepare($query);
        $senhahash = password_hash($senha, PASSWORD_BCRYPT);
        $stmt->bind_param("sssss", $nome, $dataNasc, $email, $senhahash, $endereco);
        $stmt->execute();

        $this->conexao->close();
    }
}