<?php
    include_once("Connect.php");
    session_start();
    $cnpj = $_POST["txtCnpj"];
    $nome = $_POST["txtNome"];
    $email = $_POST["txtEmail"];
    $senha = $_POST["txtSenha"];

    $sql = "INSERT INTO clinica (cnpj, nome, email, senha) VALUES ('".$cnpj."','".$nome."','".$email."','".$senha."')";
    if ($connect->query($sql) === TRUE) {
        echo "<script>window.location.href = 'Login.html'</script>";
    } else{
        echo "Erro ao Inserir: " . $sql . "<br>" . $connect->error;
    }
?>