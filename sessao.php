<?php 
    function manage_session(){
        session_start();
        if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
            header('Location: index.php');
            exit;
        }
    }