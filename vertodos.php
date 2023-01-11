<?php
    include('C:\xampp\htdocs\PHP-Login\model\DAO\crud.php');
    include('controller\protect.php');
    
    $users = readUsers();
    echo '<div id="login">';
    echo '<div class="card" style="width:400px">';
    echo '<h1 style="font-size: 22px">Selecione abaixo os que deseja deletar</h1>';
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Selecionar</th>';
    echo '<th>ID</th>';
    echo '<th>Nome</th>';
    echo '<th>E-mail</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($users as $user) {
        echo '<tr>';
        echo '<td><input type="checkbox" class="user-checkbox" value="' . $user["id"] . '"></td>';
        echo '<td>' . $user['id'] . '</td>';
        echo '<td>' . $user['nome'] . '</td>';
        echo '<td>' . $user['email'] . '</td>';
        echo '</tr>'; 
    }

    echo '</tbody>';
    echo '</table>';
    echo '<input type="submit" value="Deletar" id="delete-button"  class="submit" style="margin-right: 150px">';
    echo '<a href="http://localhost/PHP-Login/controller/logout.php"><input type="submit" value="Sair" id="saida"  class="submit" style="margin-left: 150px"></a>';
    echo '</div>';
    echo '</div>';
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view\style.css">
    <title>Tabela</title>
</head>
<body style="color: #fff" class="#login">
    <script>
        document.getElementById('delete-button').addEventListener('click', function() {
            // Step 2: Capturando IDs dos usuários selecionados
            var selectedUserIds = [];
            var checkboxes = document.getElementsByClassName('user-checkbox');
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    selectedUserIds.push(checkboxes[i].value);
                }
            }

            // Step 3: Enviando IDs dos usuários selecionados para o PHP usando AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', './controller/deleta.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        // Atualizar a página para refletir as mudanças
                        location.reload();
                    } else {
                        console.log(response.message);
                    }
                }
            };
            xhr.send('userIds=' + JSON.stringify(selectedUserIds));
        });
    </script>
</body>
</html>