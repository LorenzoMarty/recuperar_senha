<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <label for="nome">Nome: 
                <input type="text" name="nome" id="nome">
            </label>
            <label for="email">Email: 
                <input type="text" name="email" id="email">
            </label>
            <label for="senha">Senha: 
                <input type="password" name="senha" id="senha">
            </label>
            <input type="submit" value="Enviar">
        </form>
        <div class="links">
            <a href="form-cadastrar.php">Cadastre-se</a> |
            <a href="form-recuperar-senha.php">Recuperar Senha</a>
        </div>
    </div>
    <img src="img/vulcao.webp" class="vulcao">
    <footer>
        <img src="img/ondas.gif" width="1500px" height="140px">
    </footer>
</body>
</html>
