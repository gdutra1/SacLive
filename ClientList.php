<?php
        include_once("Connect.php");
        session_start();
    $cnpj = $_SESSION["cnpj"];
    $sql = "SELECT * FROM cliente WHERE cnpj_clinica =" $_POST['$cnpj'] ;
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    echo $sql;    }
    } else {
        echo "Nenhum dado encontrado."
    }
}
?>