<?php
    include_once("Connect.php");
    $id= $_GET["id_animal"];
    $cnpj = $_SESSION["cnpj"];
    $sql = "DELETE FROM animal WHERE id_animal = '$id' AND cnpj_clinica = $cnpj";
    if ($connect->query($sql) === TRUE) {
        echo "<script>alert('Deletado com sucesso');</script>";
        echo "<script>window.location = 'AnimalList.php';</script>";
    } else {
        echo "<script>alert('Erro ao excluir animal');</script>";
    }
?>