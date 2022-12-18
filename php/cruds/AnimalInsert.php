<?php
    include "Connect.php";

    $nome = $_POST["txtNome"];
    $cpf_dono = $_POST["txtCpfDono"];
    $especie_animal = $_POST["txtEspecieAnimal"];
    $cnpj_clinica = $_POST["txtCnpjClinica"];
    $data_nascimento = date("'Y-m-d H:i:s'", strtotime($_POST["dtDataNascimento"]));
    $peso = $_POST["nbPeso"];
    $altura = $_POST["nbAltura"];
    $largura = $_POST["nbLargura"];
    $observacoes = $_POST["taObservacoes"];

    $sql = "INSERT INTO animal(nome, cpf_dono, especie_animal, 
                        cnpj_clinica, data_nascimento, peso, altura, largura, observacoes) 
                        VALUES ('".$nome."', '".$cpf_dono."','".$especie_animal."', '".$cnpj_clinica."', ".$data_nascimento.", 
                        ".$peso.", ".$altura.", ".$largura.", '".$observacoes."');";

    if($conn->query($sql) === TRUE){
            echo "<script>alert('Animal inserido com sucesso.');</script>";
    }
    else{
            echo "<script>alert('Erro ao inserir animal.');</script>";
    }

    $conn->close();
?>