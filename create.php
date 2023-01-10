<?php
require_once 'crud.php';

if($_POST) {
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['senha'];
    if(createUser($name, $email, $password)) {
        echo "User was created.";
    } else {
        echo "Error".$mysqli->error;
    }
}