<?php
    include "Connect.php"

    $SQL = "DELETE * FROM cliente WHERE cpf = " .$_POST["cpf"]. " AND cnpj_clinica =" .$_SESSION["cnpj_clinica"];

    if ($conn->query($SQL) === TRUE) {
        echo "<script>alert('Cliente excluído com sucesso!');</script>";
    }
    else{
        echo "<script>alert('Erro ao excluir o cliente!');</script>";
    }
?>