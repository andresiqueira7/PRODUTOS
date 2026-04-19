<?php
include("conectar.php");

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];

$sql = "INSERT INTO produtos (nome, descricao, preco) 
VALUES ('$nome', '$descricao', $preco)";

if($conn->query($sql) === TRUE) {
  echo "Produto cadastrado com sucesso!";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}
?>