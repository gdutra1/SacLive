<?php
    include "Connect.php";
    $sql = "UPDATE X SET A = B WHERE C = D";
    If ($connect->query($sql) === TRUE) {
        echo "Atualizado com sucesso";
    } else{
        echo "Erro ao atualizar:" . $sql . "<br>" . $connect->error;
    }
    $connect->close();
?>