<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view\style.css">
    <title>Cadstro</title>
</head>
<body>
    <div id="login">
        <form action="http://localhost/PHP-Login/controller/cadastra.php" method="POST" class="card">
            <div class="card-header">
                    <h2>Cadastro</h2>
            </div>
            <div class="card-content">
                <div class="card-content-area">
                    <label>Nome</label>
                    <input type="text" name="nome" id="name"> 
                </div>
                <div class="card-content-area">
                    <label>Email</label>
                    <input type="text" name="email" id="email"> 
                </div>
                <div class="card-content-area">
                    <label>Senha</label>
                    <input type="password" name="senha" id="password"> 
                </div>
            </div>    
            <div class="card-footer">
                <input type="submit" value="Cadastrar" class="submit">
            </div>
        </form>
    </div>
</body>
</html>