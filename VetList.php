<?php
    include "Connect.php";
    session_start();
    $cnpj = $_SESSION["cnpj"];
    $sql = "SELECT id_veterinario, nome, email, telefone  FROM veterinario WHERE cnpj_clinica =" $_POST['$cnpj'] ;
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
         
        ?>
        <table class=>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>

        <?php
        while($row = $result->fetch_assoc()) {
        ?>
         <tr>
                <td><?php echo $row["id_veterinario"] ?></td>
                <td><?php echo $row["nome"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["telefone"] ?></td>
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