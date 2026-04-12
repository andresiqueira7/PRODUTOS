<?php
$conn = mysqli_connect("localhost", "root", "", "db_usuarios");

if ($conn->connect_error) {
  die("Erro: " . $conn->connect_error);

}

echo "Conexão bem sucedida!";
?>