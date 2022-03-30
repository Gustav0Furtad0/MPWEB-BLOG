<?php
    session_start();   
    unset($_SESSION['usuarioUser']);
    unset($_SESSION['usuarioPass']);      
    session_destroy();
    header("Location: ../login/login.php");
?>