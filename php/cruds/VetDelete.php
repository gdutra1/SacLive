<?php
    include "Connect.php"

    $SQL = "DELETE FROM veterinario WHERE id_veterinario = " .$_POST["id_veterinario"];

    if ($conn->query($SQL) === TRUE) {
        echo "<script>alert('Veterinário excluído com sucesso!');</script>";
    }
    else{
        echo "<script>alert('Erro ao excluir o veterinário!');</script>";
    }
?>