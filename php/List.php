<?php
    include "Connect.php";
    $list = array()
    $sql = "SELECT , , ,  FROM ";
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($list, $row[""], $row[""], $row[""]);
        }
    } else {
        echo "Nenhum dado encontrado."
    }
}
    $connect->close();
?>