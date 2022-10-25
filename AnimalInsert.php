<?php
    include "Connect.php";
    session_start();
    $cpf = $_POST["txtCpf"];
    $nome = $_POST["txtNome"];
    $especie = $_POST["txtEspecie"];
    $nascimento = $_POST["txtNascimento"];
    $peso = $_POST["txtPeso"];
    $altura = $_POST["txtAltura"];
    $largura = $_POST["txtLargura"];
    $obs = $_POST["txtObservacoes"]


    $sql = "INSERT INTO animal (nome, cpf_dono, especie_animal, cnpj_clinica, data_nascimento, peso, altura, largura, observacoes) VALUES ('".$nome."',".$cpf.",'".$especie."',".$cnpj."".$nascimento.",".$peso.",".$altura.",".$largura.",'".$obs."')";
    if ($connect->query($sql) === TRUE) {
        echo "Inserido com sucesso.";
    } else{
        echo "Erro ao Inserir: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
?>