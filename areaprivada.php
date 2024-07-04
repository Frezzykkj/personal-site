<?php
    session_start();
    if(!isset($_SESSION['id-usuario']))
    {
        header("location: index.php");
        exit;
    }
?>

SEJA BEM VINDO