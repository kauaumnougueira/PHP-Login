<?php
require_once 'crud.php';
include('identificacao_banco.php');

if($_POST) {
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    if(createUser($name, $email, $senha)) {
        echo "Usuario foi criado.";
        existeBanco($mysqli, $email, $senha);
    } else{
        echo "Error em: ".$mysqli->error;
    }
}