<?php
    session_start();
    include_once("Connect.php");
    $cpf = urldecode($_GET['cpf']);
    $cnpj = $_SESSION['cnpj'];
    $sql = "DELETE FROM cliente WHERE cpf = '$cpf' AND cnpj_clinica = '$cnpj'";

    if ($connect->query($sql) === TRUE) {
        //echo $sql;
        echo "<script>alert('Deletado com sucesso');</script>";
        echo "<script>window.location = 'ClientList.php';</script>";
    } else {
        //echo $sql;
        echo "<script>alert('Erro ao excluir cliente');</script>";
        echo "<script>window.location = 'ClientList.php';</script>";
    }
?>