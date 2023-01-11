<?php 
    include('C:\xampp\htdocs\PHP-Login\model\DAO\crud.php');
    
    if (!isset($_POST['userIds'])) {
        echo json_encode(array('success' => false, 'message' => 'Nenhum usuário selecionado'));
        exit;
    }

    // Capturando IDs dos usuários enviados pelo AJAX
    $userIds = json_decode($_POST['userIds']);
    // Deletando cada usuário selecionado
    foreach ($userIds as $id) {
        deleteUser($id);
    }
    // Retornando resposta de sucesso para o AJAX
    echo json_encode(array('success' => true));