<?php
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./Styles/home_style.css"> 
</head>
<body>
    <form action="logout.php" method="post">
        <button type="submit">Logout</button>
    </form>
</body>
</html>

