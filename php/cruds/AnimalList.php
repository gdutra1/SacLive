<?php
    include "Connect.php";
    session_start();
    $cnpj = $_SESSION["cnpj_clinica"];
    $list = array();
    $sql = "SELECT * FROM animal WHERE cnpj_clinica =" .$cnpj;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($list, $row[""]);
        }
    } else {
        echo "Nenhum dado encontrado."
    }

    $conn->close();
?>