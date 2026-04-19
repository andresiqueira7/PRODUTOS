<?php
include('conectar.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM produtos WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: cadastros.php");
        exit();
    } else {
        echo "Erro ao excluir: " . $conn->error;
    }
}
?>