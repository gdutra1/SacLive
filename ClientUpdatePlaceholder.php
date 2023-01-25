<?php
    include_once("Connect.php");

    if (isset($_POST["txtNome"])) {
        $nome = $_POST["txtNome"];
        $email = $_POST["txtEmail"];
        $telefone = $_POST["txtTelefone"];

        $sql = "UPDATE cliente SET nome = '.$nome.', email = '.$email.', telefone = '.$telefone.' WHERE cpf = $cpf";
    
        If ($connect->query($sql) === TRUE) {
            echo "<script>alert('Registro atualizado com sucesso!');</script>";
            echo "<script>window.location = 'ClientList.php';</script>";
        } else{
            echo "<script>alert('Erro ao editar o registro.');</script>";
            echo "<script>window.history.back();</script>";
        }
    }
?>