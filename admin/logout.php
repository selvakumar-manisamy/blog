<?php
    include('../config/autoload.php'); 
    session_destroy();
    header('Location: http://localhost/somefolder/login.php');
?>