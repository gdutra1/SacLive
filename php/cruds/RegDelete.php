<?php
    include "Connect.php"

    $SQL = "DELETE FROM registro WHERE id_registro = " .$_POST["id_registro"];

    if ($conn->query($SQL) === TRUE) {
        echo "<script>alert('Registro excluído com sucesso!');</script>";
    }
    else{
        echo "<script>alert('Erro ao excluir o registro!');</script>";
    }
?>