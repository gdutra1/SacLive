<?php
    include "Connect.php";
    $cnpj = $_POST["txtCnpj"];
    $nome = $_POST["txtNome"];
    $email = $_POST["txtEmail"];
    $senha = $_POST["txtSenha"];

    $sql = "INSERT INTO veterinario (cnpj, nome, email, telefone) VALUES (".$cnpj.",'".$nome."','".$email."','".$senha."')";
    if ($connect->query($sql) === TRUE) {
        echo "Inserido com sucesso.";
    } else{
        echo "Erro ao Inserir: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
?>