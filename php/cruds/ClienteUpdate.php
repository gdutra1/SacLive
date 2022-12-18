<?php
    include "Connect.php";
    $sql = "UPDATE cliente SET nome = '".$nome."', email = '".$email."', telefone = ".$telefone." WHERE cpf = ".$_POST["cpf"]. " AND cnpj_clinica = " .$_SESSION["cnpj_clinica"];
    If ($conn->query($sql) === TRUE) {
        echo "Atualizado com sucesso";
    } else{
        echo "Erro ao atualizar:" . $sql . "<br>" . $connect->error;
    }
    $conn->close();
?>