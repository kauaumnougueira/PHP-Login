<?php 
   include('controller\protect.php');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view\style.css">
    <title>Painel</title>
</head>
<body>
    <div id="login" style="color: #fff">
       <div class="card" style="width:700px;">
            <div class="card-header">
                <h2>Painel</h2>
                <h2> Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?></h2>
            </div>
            <div class="card-content">
                <div class="card-content-area">
                    <table>
                        <tr>
                            <th>CLique no botão para sair do Painel</th> 
                            <th>Clique no botão para ver todos os cadastrados</th>
                        </tr>
                        <div class="card-footer">
                            <tr>
                                <th> <a href="http://localhost/PHP-Login/controller/logout.php"><input type="submit" value="SAIR" class="submit"></a></th>
                                <th> <a href="http://localhost/PHP-Login/vertodos.php"><input type="submit" value="VER" class="submit"></a></th>
                            </tr>
                        </div>
                    </table>
                </div>
            </div>
       </div>
    </div>
    
</body>
</html>