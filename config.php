<?php
    $dbhost = 'localhost';
    $dbUsername = 'root';
    $dbpassword = '12345';
    $dbname = 'personal-site';

    $conexao = new mysqli($dbhost,$dbUsername,$dbpassword,$dbname)

    if($conexao->connect_errno)
    {
        echo "erro";
    }
    else
    {
        echo "conexão efetuada com sucesso"
    }   
?>