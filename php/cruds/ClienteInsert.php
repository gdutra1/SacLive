<?php
    include "Connect.php";

    session_start();
    $cpf = $_POST["txtCpf"];
    $nome = $_POST["txtNome"];
    $email = $_POST["txtEmail"];
    $telefone = $_POST["txtTelefone"];
    $cnpj = $_SESSION["cnpj_clinica"];

    $sql = "INSERT INTO cliente (cpf, nome, email, telefone, cnpj_clinica) VALUES ('".$cpf."','".$nome."','".$email."','".$telefone."','".$cnpj."')";
    if ($conn->query($sql) === TRUE) {
        echo  echo "<script>alert('Cliente cadastrado com sucesso!');</script>";
    } else{
        echo "Erro ao cadastrar: " . $sql . "<br>" . $conn->error;
    }
?>