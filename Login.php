<?php
    require_once("Connect.php");

    session_start();
    
$email = $connect->real_escape_string($_POST["txtEmail"]);
$senha = $_POST["txtSenha"];
$cnpj = $_POST["txtCnpj"];
$sql = "SELECT * FROM saclive.clinica WHERE email = '$email' and senha = '$senha' and cnpj =  '$cnpj'";
$resultado = $connect->query($sql);

if ($resultado -> num_rows > 0) {
    $dataUsu = $resultado -> fetch_assoc();
    $_SESSION["nome"] = $dataUsu["nome"];
    $_SESSION["cnpj"] = $dataUsu["cnpj"];
    header("location:inner-page.php");
} else {
    echo "<script>alert('Ocorreu um erro. Verifique os dados inseridos e tente novamente.')</script>";
    echo "<script>window.location.replace('Login.html')</script>";
}
?>
