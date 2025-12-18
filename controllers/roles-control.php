<?php
    include "./../config.php";
    session_start();
    $role =$_POST['role'];
    $currentuser = $_SESSION['currentuser'];
    
    $stmt= $conn->prepare("UPDATE utilisateur SET role = ? WHERE nom = ?");
    $stmt->bind_param('ss', $role, $currentuser);
    $stmt->execute();

    
    header('Location: ./../auth/approval.php');
    exit();

?>