<?php
    include "Connect.php"

    $SQL = "DELETE FROM consulta WHERE id_consulta = " .$_POST["id_consulta"];

    if ($conn->query($SQL) === TRUE) {
        echo "<script>alert('Consulta excluída com sucesso!');</script>";
    }
    else{
        echo "<script>alert('Erro ao excluir a consulta!');</script>";
    }
?>