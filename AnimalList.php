<?php
    include "Connect.php";
    session_start();
    $cnpj = $_SESSION["cnpj"];
    $sql = "SELECT id_animal, nome, cpf_dono, especie_animal, data_nascimento, peso, altura, largura, observacoes  FROM animal WHERE cnpj_clinica =" .$_POST['cnpj'];
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        
        ?>
        <table class=>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF Dono</th>
                <th>Espécie</th>
                <th>Data Nascimento</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>Largura</th>
                <th>Observações</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>

        <?php
        while($row = $result->fetch_assoc()) {
        ?>
         <tr>
                <td><?php echo $row["id_animal"] ?></td>
                <td><?php echo $row["nome"] ?></td>
                <td><?php echo $row["cpf_dono"] ?></td>
                <td><?php echo $row["especie_animal"] ?></td>
                <td><?php echo $row["data_nascimento"] ?></td>
                <td><?php echo $row["peso"] ?></td>
                <td><?php echo $row["altura"] ?></td>
                <td><?php echo $row["largura"] ?></td>
                <td><?php echo $row["observacoes"] ?></td>
                <td><a href="">Editar</a></td>
                <td><a href="">Excluir</a></td>
            </tr>

            <?php
                }
            ?>
            </table>
        <?php
            } else {
                echo "Nenhum dado encontrado."
            }
            $connect->close();
        ?>