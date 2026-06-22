<?php
    session_start();
    
    unset($_SESSION['login']);

    Header("location: /Locadora/view/index.php"); 
?>