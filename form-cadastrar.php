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
        <h1>Cadastrar</h1>
        <form action="cadastrar.php" method="post">
            <label for="nome">Nome: 
                <input type="text" name="nome">
            </label>
            <label for="email">Email: 
                <input type="text" name="email">
            </label>
            <label for="senha">Senha: 
                <input type="password" name="senha">
            </label>
            <input type="submit" value="Enviar">
        </form>
        <div class="links">
            <a href="index.php">Login</a>
        </div>
    </div>
    <img src="img/vulcao.webp" class="vulcao">
    <footer>
        <img src="img/ondas.gif" width="1500px" height="140px">
        </footer>
</body>
</html>
