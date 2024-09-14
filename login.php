<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PHP Versátil Ti</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="usuario.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>

            <input type="password" name="senha" placeholder="Senha">
            <br><br>

            <input class="inputSubmit" type="submit" name="submit" value="Acessar">
            <br><br>
            <a href="index.php" class="button">Voltar</a>

        </form>
    </div>
    
</body>
</html>