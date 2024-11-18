<?php

require_once '../config/database.php';
require_once '../model/usuario.php';

class usuarioController {
    public function cadastrar($nome, $dataNasc ,$email, $senha, $endereco) {
        $database = new Banco();
        $bd = $database->conectar();

        $usuario = new Usuario($bd);
        $usuario->nome = $nome;
        $usuario->dataNasc = $dataNasc;
        $usuario->email = $email;
        $usuario->senha = password_hash($senha, PASSWORD_DEFAULT); // Hash da senha
        $usuario->endereco = $endereco;

        if ($usuario->cadastrar()) {
            $bd->close();
             header('Location:../index.php');
            exit; 
        } else {
            echo "Erro ao cadastrar usuario";
        } 
    }
}