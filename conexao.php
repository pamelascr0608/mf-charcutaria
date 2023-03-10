<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'contato';

    $conn = mysqli_connect($host, $user, $password, $dbname);

    if (!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    }
    echo "Conexão realizada com sucesso";
?>