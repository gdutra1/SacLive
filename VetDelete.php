<?php
    include ("Connect.php");
    $sql = "DELETE * FROM veterinario WHERE id_veterinario = ".$_GET["id_veterinario"];
    if ($connect->query($sql) === TRUE) {
        echo "<script>alert('Deletado com sucesso');</script>";
        echo "<script>window.location = 'VetList.php';</script>";
    } else {
        echo "<script>alert('Erro ao excluir veterinário');</script>";
    }
    $connect->close();
?>