<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Usuario</title>
    <link rel="stylesheet" href=" ">
</head>
<body>
    <section>
    <div class="wrapper">
        <div class="form-wrapper">
            <form action="../service/cadastrar.php?acao=cadastrar" method="post">
                <h2>Cadastrar Usuario</h2>
    
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required>
                <br><br>
                
                <label for="dataNasc">Data de Nascimento</label>
                <input type="date" name="dataNasc" id="dataNasc" required>
                <br><br>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
                <br><br>
                
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required>
                <br><br>
                
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco" required>
                <br><br>
            
            
                <input type="submit" value="Cadastrar Usuario">


                <p>Já possui cadastro?</p>
                    <a href="../index.php">Clique Aqui!</a>
            </form>
        </div>
    </div>
    </section>
</body>
</html>