<?php 
   include('controller\protect.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?>
    <p>
        <a href="http://localhost/PHP-Login/controller/logout.php"><button>Sair</button></a>
    </p>
    <p>Clique no botão para ver todos os cadastrados</p>
    <a href="http://localhost/PHP-Login/vertodos.php"><button>VER</button></a>
</body>
</html>