<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadstro</title>
</head>
<body>
    <h1>CADASTRE-SE AQUI</h1>
    <form action="http://localhost/PHP-Login/controller/create.php" method="POST">

        <p>
            <label>Nome</label>
            <input type="text" name="nome"> 
        </p>

        <p>
            <label>Email</label>
            <input type="text" name="email"> 
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha"> 
        </p>
        <p>
            <button type="submit">Cadastrar</button>
        </p>
    </form>
</body>
</html>