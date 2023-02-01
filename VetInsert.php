<?php
    include "Connect.php";
    session_start();
    $nome = $_POST["txtNome"];
    $email = $_POST["txtEmail"];
    $cnpj = $_SESSION["cnpj"];

    $sql = "INSERT INTO veterinario (nome, email, cnpj_clinica) VALUES ('".$nome."','".$email."','".$cnpj."')";
    if ($connect->query($sql) === TRUE) {
        echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        echo "<script>window.location = 'cadastroVeterinario.php';</script>";
    } else{
        echo "Erro ao Inserir: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
?>