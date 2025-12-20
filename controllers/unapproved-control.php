<?php
    include "./../config.php";
    session_start();
    $user = $_GET['user'] ?? '';
    if ($user) {
        $stmt = $conn->prepare("DELETE FROM utilisateur WHERE nom = ?");
        $stmt->bind_param('s', $user);
        $stmt->execute();
        header('Location: ./../auth/login.php');
    }
