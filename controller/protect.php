<?php 

     if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id'])){
        die("<script>alert('Você não pode acessar pois não esta logado.'); window.location.replace('http://localhost/PHP-Login/index.php');</script>");
    }