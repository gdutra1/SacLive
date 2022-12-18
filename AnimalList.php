<?php
    include "Connect.php";
    session_start();
    $cnpj = $_SESSION["cnpj"];
    $list = array();
    $sql = "SELECT id_animal, nome, cpf_dono, especie_animal, data_nascimento, peso, altura, largura, observacoes  FROM animal WHERE cnpj_clinica =" .$_POST['cnpj'];
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