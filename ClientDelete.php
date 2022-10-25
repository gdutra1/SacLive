<?php
    include "Connect.php";
    $sql = "DELETE * FROM cliente WHERE cpf = ".$_GET["cpf"]. " and cnpj_clinica = ".$_GET["cnpj"];
    if ($connect->query($sql) === TRUE) {
        echo "Deletado com sucesso.";
    } else {
        echo "Erro ao deletar:" . $sql . "<br>" . $connect->error;
    }
    $connect->close();
?>