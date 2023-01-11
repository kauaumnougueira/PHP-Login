<?php 
    include('C:\xampp\htdocs\PHP-Login\model\banco\conexao.php');
   
   // Create new user
    function createUser($nome, $email, $senha) {
        global $mysqli;
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        if ($mysqli->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    // Read user
    function readUser($id) {
        global $mysqli;
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        $result = $mysqli->query($sql);
        return $result->fetch_assoc();
    }

    // Update user
    function updateUser($id, $nome, $email, $senha) {
        global $mysqli;
        $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = $id";
        if ($mysqli->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    // Delete user
    function deleteUser($id) {
        global $mysqli;
        $sql = "DELETE FROM usuarios WHERE id = $id";
        if ($mysqli->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }