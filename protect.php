<?php 

     if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id'])){
        die("Você não pode acessar pois não esta logado. <p><a href=\"index.php\"><button>Entrar</button></a></p>");
    }