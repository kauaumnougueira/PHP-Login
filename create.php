<?php 
    include('conexao.php');
   
    if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        $result = mysqli_query($mysqli, $sql);
        if ($result) {
            header("Location: index.php");
        } else {
            echo "Falha ao criar usuário";
        }
    }