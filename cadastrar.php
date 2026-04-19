<?php include('conectar.php'); ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    $sql = "INSERT INTO produtos (nome, descricao, preco) VALUES ('$nome', '$descricao', '$preco')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Produto cadastrado com sucesso!');</script>";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Cadastrar Produto</h1>
        <p>Preencha os dados abaixo para adicionar um novo produto</p>

        <form method="POST">
            <input type="text" name="nome" placeholder="Nome do produto" required>

            <input type="text" name="descricao" placeholder="Descrição do produto" required>

            <input type="number" step="0.01" name="preco" placeholder="Preço do produto" required>

            <button type="submit">Salvar Produto</button>
        </form>

        <div class="botoes" style="margin-top: 20px;">
            <a href="index.php" class="btn">Voltar ao Menu Principal</a>
        </div>
    </div>

</body>
</html>
