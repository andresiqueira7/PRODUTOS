<?php include('conectar.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>

     <div class="container">
        <h1>Lista de Produtos</h1>
        <p>Gerencie seus produtos cadastrados no sistema</p>

        <div class ="botoes">
            <a href="cadastrar.php" class="btn">CADASTRAR NOVO PRODUTO</a>
        

        <div class="botoes">
            <a href="index.php" class="btn">VOLTAR AO MENU ANTERIOR</a>
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>

            <?php
            $sql = "SELECT * FROM produtos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nome"] . "</td>";
                    echo "<td>" . $row["descricao"] . "</td>";
                    echo "<td>R$ " . number_format($row["preco"], 2, ',', '.') . "</td>";
                    echo "<td>";
                    echo "<a href='editar.php?id=" . $row["id"] . "' class='btn-acao'>Editar</a> | ";
                    echo "<a href='excluir.php?id=" . $row["id"] . "' class='btn-acao'>Excluir</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Nenhum produto encontrado.</td></tr>";
            }
            ?>
        </table>
    </div>

</body>
</html>
