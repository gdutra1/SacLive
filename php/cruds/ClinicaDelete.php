<?php
    include "Connect.php"

    $SQL = "DELETE FROM clinica WHERE cnpj = " .$_POST["cnpj"];

    if ($conn->query($SQL) === TRUE) {
        echo "<script>alert('Clínica excluído com sucesso!');</script>";
    }
    else{
        echo "<script>alert('Erro ao excluir a clínica!');</script>";
    }
?>