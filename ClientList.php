<?php
    include "Connect.php";
    session_start();
    $cnpj = $_SESSION["cnpj"];
    $list = array();
    $sql = "SELECT cpf, nome, email, telefone  FROM cliente WHERE cnpj_clinica =" $_POST['$cnpj'] ;
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($list, $row[""]);
        }
    } else {
        echo "Nenhum dado encontrado."
    }
}
    $connect->close();
?>