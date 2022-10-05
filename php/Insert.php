<?php
    include "Connect.php";
    $sql = "INSERT INTO X (, , ,) VALUES (, , ,)";
    if ($connect->query($sql) === TRUE) {
        echo "Inserido com sucesso.";
    } else{
        echo "Erro ao Inserir: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
?>