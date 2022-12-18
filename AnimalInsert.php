<?php
    include "Connect.php";
    //session_start();
    $cpf = $_POST["txtCpfDono"];
    $nome = $_POST["txtNomeAnimal"];
    //$especie = $_POST["txtEspecie"];
    $nascimento = $_POST["dataNascimento"];
    //$peso = $_POST["txtPeso"];
    //$altura = $_POST["txtAltura"];
    //$largura = $_POST["txtLargura"];
    $obs = $_POST["textarea"];
    //$cnpj =$_SESSION["cnpj"];


    $sql = "INSERT INTO animal (nome, cpf_dono, data_nascimento, observacoes) VALUES ('".$nome."',".$cpf.",'".$cnpj."',".$nascimento.",'".$obs."')";
    if ($connect->query($sql) === TRUE) {
        echo "Inserido com sucesso.";
    } else{
        echo "Erro ao Inserir: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
?>