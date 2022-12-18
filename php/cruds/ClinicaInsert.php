<?php
    include_once("Connect.php");
    session_start();
    $cnpj = $_POST["txtCnpj"];
    $nome = $_POST["txtNome"];
    $email = $_POST["txtEmail"];
    $senha = $_POST["txtSenha"];

    $sql = "INSERT INTO clinica (cnpj, nome, email, senha) VALUES ('".$cnpj."','".$nome."','".$email."','".$senha."')";
    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso";
    } else{
        echo "Erro ao Inserir: " . $sql . "<br>" . $conn->error;
    }
?>