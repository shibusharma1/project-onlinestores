<?php
    $title = "Logout Page";
    $active = "logout";
    require('includes/header.php');
    session_start();
    session_unset();
    session_destroy();
    header("location: /onlinestores/login.php");   
    
    ?>

   

    <?php require('includes/footer.php');?>