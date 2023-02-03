<?php
session_start();
    include_once("Connect.php");
    $id= $_GET["id_veterinario"];
    $cnpj = $_SESSION["cnpj"];
    $sql = "DELETE FROM veterinario WHERE id_veterinario = '$id' AND cnpj_clinica = $cnpj "
    if ($connect->query($sql) === TRUE) {
        //echo $sql;
        echo "<script>alert('Deletado com sucesso');</script>";
        echo "<script>window.location = 'VetList.php';</script>";
    } else {
        //echo $sql;
        echo "<script>alert('Erro ao excluir veterinário');</script>";
    }
    $connect->close();
?>