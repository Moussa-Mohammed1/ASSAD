<?php 
    session_destroy();
    header("Location: /ASSAD/auth/login.php");
    exit();
?>