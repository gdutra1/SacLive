<?php
    //Verificar se isso aqui tá funcionando depois
    include "Connect.php";

    $sql = "DELETE * FROM animal WHERE id_animal = " .$_POST["txtIdAnimal"];

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Animal excluído com sucesso!');</script>";
    }
    else{
        echo "<script>alert('Erro ao excluir o animal!');</script>";
    }
?>