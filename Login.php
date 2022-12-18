<?php
    require_once("Connect.php");

    session_start();
    
$email = $conn->real_escape_string($_POST["txtEmail"]);
$senha = $_POST["txtSenha"];
$cnpj = $_POST["txtCnpj"];
$sql = "SELECT * FROM saclive.clinica WHERE email = '$email' and senha = '$senha' and cnpj =  '$cnpj'";
$resultado = $conn->query($sql);

if ($resultado -> num_rows > 0) {
    $dataUsu = $resultado -> fetch_assoc();
    $_SESSION["nome"] = $dataUsu["nome"];
    $_SESSION["cnpj"] = $dataUsu["cnpj"];
    header("location:inner-page.html");
} else {
    echo $sql;
} 
?>