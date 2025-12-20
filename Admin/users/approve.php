<?php
    include "./../../config.php";
    session_start();

    $id = $_GET['id'] ?? '';
    $action = $_GET['action'] ?? '';
    echo $action;
    
    if (isset($id) && isset($action)) {
        if ($action == 'approve') {
            $stmt = $conn->prepare("UPDATE utilisateur SET approved = 1 WHERE id_user = ?");
            $stmt->bind_param('i', $id);
            $stmt->execute();
            header('Location: ./users.php');
            exit();
        }
        if ($action == 'reject') {
            $notapproved = 'NOTAPPROVED';
            $stmt = $conn->prepare('UPDATE utilisateur SET `role` = ? WHERE id_user = ? ');
            $stmt->bind_param('si', $notapproved, $id);
            $stmt->execute();
            header('Location : ./users.php');
            exit();
        }
    }
    
?>