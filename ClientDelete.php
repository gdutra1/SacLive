<?php
    include_once("Connect.php");
    $cpf = urldecode($_GET[cpf]);
    $sql = "DELETE * FROM cliente WHERE cpf = '$cpf'";
    if ($connect->query($sql) === TRUE) {
        echo "<script>alert('Deletado com sucesso');</script>";
        echo "<script>window.location = 'ClientList.php';</script>";
    } else {
        echo "<script>alert('Erro ao excluir cliente');</script>";
        echo "<script>window.location = 'ClientList.php';</script>";
    }
    $connect->close();
?>