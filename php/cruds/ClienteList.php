<?php
        include("Connect.php");
        session_start();
        $cnpj = $_SESSION["cnpj_clinica"];
        $sql = "SELECT * FROM cliente WHERE cnpj_clinica =" $cnpj ;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        echo $sql;    }
        } else {
            echo "Nenhum dado encontrado."
        }
?>