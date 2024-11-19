<?php
// Inclui a classe Banco
require_once "../config/database.php";

// Cria uma instância da classe Banco
$banco = new Banco();

// Conecta ao banco de dados
$conexao = $banco->conectar();

// Consulta para pegar todos os usuários
$query = "SELECT id, nome, email, endereco FROM usuario   ";
$stmt = $conexao->prepare($query);  // Prepara a consulta
$stmt->execute();  // Executa a consulta

// Obtém o resultado
$resultado = $stmt->get_result();

// Verifica se existem usuários e exibe a lista
if ($resultado->num_rows > 0) {
    echo "<h1>Usuários Cadastrados</h1>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Endereço</th></tr>";
    
    // Exibe cada usuário
    while ($usuario = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($usuario['id']) . "</td>";
        echo "<td>" . htmlspecialchars($usuario['nome']) . "</td>";
        echo "<td>" . htmlspecialchars($usuario['email']) . "</td>";
        echo "<td>" . htmlspecialchars($usuario['endereco']) . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "Nenhum usuário encontrado.";
}

// Fecha a conexão com o banco de dados
$banco->fecharConexao();
?>
