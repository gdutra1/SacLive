<?php
    include ("Connect.php");
    $sql = "DELETE * FROM cliente WHERE cpf = ".$_GET["cpf"];
    if ($connect->query($sql) === TRUE) {
        echo "<script>alert('Deletado com sucesso');</script>";
        echo "<script>window.location = 'ClientList.php';</script>";
    } else {
        echo "<script>alert('Erro ao excluir cliente');</script>";
        echo "<script>window.location = 'ClientList.php';</script>";
    }
    $connect->close();
?>