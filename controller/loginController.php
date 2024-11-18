<?php

require_once '../config/database.php';
require_once '../model/usuario.php';

class LoginController{
    protected $banco;

    public function __construct()
    {
        $this->banco = new Banco();
    }
    
    public function login($email, $senha)
    {
        $conexao = $this->banco->conectar();
        $stmt = $conexao->prepare("SELECT senha FROM usuario WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($senhaArmazenada);
            $stmt->fetch();

            // Comparando a senha diretamente
            if ($senha === $senhaArmazenada) {
                include '../view/home.php';
            } else {
                echo "Senha incorreta.";
            }
        } else {
            echo "Email não encontrado.";
        }

        $stmt->close();
        $this->banco->fecharConexao();
    }
}


