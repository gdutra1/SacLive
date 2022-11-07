<?php
    $server = "localhost:3307";
    $user = "root";
    $password = "";
    $database = "saclive";
    $connect = new mysqli($server, $user, $password, $database);
    if ($connect->connect_error) {
        die("Erro de Conexão: " . $connect->connect_error);
    }
?>