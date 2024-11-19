<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./view/css/style.css">
</head>
<body>
    <div class="wrapper">  
        <div class="form-wrapper">
            <form action="/systemLogin/service/login.php?acao=login" method="post">
                <h2>Login</h2>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email">
                        <br><br>
                    </div>
                    <div class="input-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha">
                        <br><br>
                    </div>
                    <input type="submit" value="Fazer login">

                    <p>Não possui cadastro?</p>
                    <a href="/systemLogin/view/formCadastro.php">Clique Aqui!</a>
                    
            </form>
        </div>
    </div>
</body>