<?php 
    $usuario = 'root';
    $senha = '';
    $database = 'loginphp';
    $host = 'localhost';

    $mysqli = new mysqli($host, $usuario, $senha, $database);

    if($mysqli->error){
        die("Falha ao conectar o Banco de Dados: ".$mysqli->error);
    }