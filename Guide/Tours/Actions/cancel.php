<?php

    include "./../../../config.php";
    session_start();
    $id = $_GET['tour'] ?? '';

    $stmt = $conn->prepare("UPDATE visitesguidees SET `status` = 'CANCELED' WHERE id_visite = ?");
    $stmt->bind_param('i',$id);
    $stmt->execute();
    header('Location: ./../tours.php');
    exit;