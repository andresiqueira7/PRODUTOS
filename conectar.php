<?php
$conn = new mysqli("localhost", "root", "", "sistema_produtos");

if ($conn->connect_error) {
  die("Erro: " . $conn->connect_error);

}
?>