<?php
    include_once("Connect.php");
    //session_start();
    $cpf = $_POST["txtCpf"];
    $nome = $_POST["txtNome"];
    $email = $_POST["txtEmail"];
    $telefone = $_POST["txtTelefone"];
    //$cnpj = $_SESSION["cnpj"];

    $sql = "INSERT INTO cliente (cpf, nome, email, telefone) VALUES (".$cpf.",'".$nome."','".$email."',".$telefone.")";
    if ($connect->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso";
    } else{
        echo "Erro ao Inserir: " . $sql . "<br>" . $connect->error;
    }
?>