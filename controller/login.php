<?php
    include('../model/banco/conexao.php');
    include('../model/banco/identificacao_banco.php');

    if(isset($_POST['email']) || isset($_POST['senha'])){
        if(strlen($_POST['email']) == 0){
            echo "<script>alert('preencha sua email'); window.location.replace('http://localhost/PHP-Login/index.php');</script>";
        }else if(strlen($_POST['senha']) == 0){
            echo "<script>alert('preencha seu senha'); window.location.replace('http://localhost/PHP-Login/index.php');</script>";
        }else{
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            existeBanco($mysqli, $email, $senha);
            
        }
    }