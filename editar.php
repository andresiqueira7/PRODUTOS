<?php
include('conectar.php');

$id = $_GET['id'];

$sql = "SELECT * FROM produtos WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    $sql = "UPDATE produtos 
            SET nome='$nome', descricao='$descricao', preco='$preco' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: cadastros.php");
        exit();
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Editar Produto</h1>

    <form method="POST">
        <input type="text" name="nome" value="<?php echo $row['nome']; ?>" required>

        <input type="text" name="descricao" value="<?php echo $row['descricao']; ?>" required>

        <input type="number" step="0.01" name="preco" value="<?php echo $row['preco']; ?>" required>

        <button type="submit">Salvar Alterações</button>
    </form>

    <div class="botoes" style="margin-top: 20px;">
        <a href="editar.php" class="btn">Voltar</a>
    </div>
</div>

</body>
</html>