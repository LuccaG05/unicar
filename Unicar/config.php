<?php

    $dbHost = 'localhost:3308';
    $dbUsername = 'root';
    $dbPassword = 'root';
    $dbName = 'unicarDB';

    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    /*if($conn->connect_errno)
    {
        echo 'Erro';
    }
    else
    {
        echo 'Deu bom';
    }*/

    


?>