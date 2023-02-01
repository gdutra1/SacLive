<?php
    include "Connect.php";
    session_start();
    $nome = $_POST["txtNomeAnimal"];
    $cpf = $_POST["txtCpfDono"];
    $especie = $_POST["txtEspecie"];
    $cnpj =$_SESSION["cnpj"];
    $nascimento = $_POST["dataNascimento"];
    $peso = $_POST["txtPeso"];
    $altura = $_POST["txtAltura"];
    $largura = $_POST["txtLargura"];
    $obs = $_POST["textarea"];


    $sql = "INSERT INTO animal (nome, cpf_dono, especie_animal, cnpj_clinica, data_nascimento, peso, altura, largura, observacoes) VALUES ('".$nome."','".$cpf."','".$especie."','".$cnpj."','".$nascimento."','".$peso."','".$altura."','".$largura."','".$obs."')";
    if ($connect->query($sql) === TRUE) {
        echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        echo "<script>window.location = 'cadastroAnimal.php';</script>";
    } else{
        echo "Erro ao Inserir: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
?>