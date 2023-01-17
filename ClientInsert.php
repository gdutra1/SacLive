<?php
    include_once("Connect.php");
    session_start();
    $cpf = $_POST["txtCpf"];
    $nome = $_POST["txtNome"];
    $email = $_POST["txtEmail"];
    $telefone = $_POST["txtTelefone"];
    $cnpj = $_SESSION["cnpj"];

    $sql = "INSERT INTO cliente (cpf, nome, email, telefone, cnpj_clinica) VALUES ('".$cpf."','".$nome."','".$email."','".$telefone."','".$cnpj."')";
    if ($connect->query($sql) === TRUE) {
        echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        echo "<script>window.location = 'cadastroClientes.php';</script>";
    } else{
        echo "Erro ao Inserir: " . $sql . "<br>" . $connect->error;
    }
?>