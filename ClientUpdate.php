<?php
    include "Connect.php";
    $sql = "UPDATE cliente SET nome = '".$nome."', email = '".$email."', telefone = ".$telefone." WHERE cpf = ".$_POST["cpf"];
    If ($connect->query($sql) === TRUE) {
        echo "Atualizado com sucesso";
    } else{
        echo "Erro ao atualizar:" . $sql . "<br>" . $connect->error;
    }
    $connect->close();
?>