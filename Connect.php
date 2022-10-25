<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB', '');
    $connect = new mysqli(HOST, USER, PASSWORD, DB);
    if ($connect->connect_error) {
        die("Erro de Conexão: " . $connect->connect_error);
    }
?>