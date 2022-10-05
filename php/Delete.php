<?php
    include "Connect.php";
    $sql = "DELETE FROM X WHERE Y ";
    if ($connect->query($sql) === TRUE) {
        echo "Deletado com sucesso.";
    } else {
        echo "Erro ao deletar:" . $sql . "<br>" . $connect->error;
    }
    $connect->close();
?>