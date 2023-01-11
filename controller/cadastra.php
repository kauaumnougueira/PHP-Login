<?php
include('C:\xampp\htdocs\PHP-Login\model\DAO\crud.php');
include('C:\xampp\htdocs\PHP-Login\model\banco\identificacao_banco.php');

if($_POST) {
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['nome'])){
        if(strlen($_POST['nome']) == 0){
            echo "preencha seu nome";
        }else if(strlen($_POST['email']) == 0){
            echo "preencha sua email";
        }else if(strlen($_POST['senha']) == 0){
            echo "preencha seu senha";
        }else{
            if(createUser($name, $email, $senha)) {
                echo "Usuario foi criado.";
                
                existeBanco($mysqli, $email, $senha);
            } else{
                echo "Error em: ".$mysqli->error;
            }
        
        }
    }

    
}