<?php
    $dbhost = 'localhost';
    $dbUsername = 'root';
    $dbpassword = '';
    $dbname = 'personal-site';

    $conexao = new mysqli($dbhost,$dbUsername,$dbpassword,$dbname);
   
    if ($conexao->connect_error)
    {
        echo "erro";
    }

    else
    {
        echo "Conexão efetuada com sucesso";
    }

?>

