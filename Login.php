<?php
    require_once("Connect.php");

    //session_start();    

$email = $_POST["txtEmail"];
$senha = $_POST["txtSenha"];
$cnpj = $_POST["txtCnpj"];
$sql = "SELECT * from saclive.clinica where email = '$email' and senha = '$senha' and cnpj =  '$cnpj'" ;
$resultado = $connect->query($sql);

if ($resultado -> num_rows > 0) {
    echo $sql;
    /*$dataUsu = $resultado -> fetch_assoc();
    $_SESSION["nome"] = $dataUsu["nome"];
    $_SESSION["cnpj"] = $dataUsu["cnpj"];
    header("location: inner-page.html");*/
} else {
    $_SESSION["Error"] = "Error";
}
?>