<?php
    include('../model/banco/conexao.php');
    include('../model/banco/identificacao_banco.php');

    if(isset($_POST['email']) || isset($_POST['senha'])){
        if(strlen($_POST['email']) == 0){
            echo "preencha seu email";
        }else if(strlen($_POST['senha']) == 0){
            echo "preencha sua senha";
        }else{
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            existeBanco($mysqli, $email, $senha);
            
        }
    }