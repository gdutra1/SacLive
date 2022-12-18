<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "saclive";
    $conn = new mysqli($server, $user, $password, $database);
    if ($conn->connect_error) {
        die("Erro de Conexão: " . $conn->connect_error);
    }
?>