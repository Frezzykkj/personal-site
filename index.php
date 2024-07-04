<?php
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: login.php");
        exit;
    }
?>

SEJA BEM VINDO

<form action="logout.php" method="post">
    <button type="submit">Logout</button>
</form>