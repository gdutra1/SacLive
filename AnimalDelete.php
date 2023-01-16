<?php
    include ("Connect.php");
    $sql = "DELETE * FROM animal WHERE id_animal = ".$_GET["id_animal"];
    if ($connect->query($sql) === TRUE) {
        echo "<script>alert('Deletado com sucesso');</script>";
        echo "<script>window.location = 'AnimalList.php';</script>";
    } else {
        echo "<script>alert('Erro ao excluir animal');</script>";
    }
    $connect->close();
?>