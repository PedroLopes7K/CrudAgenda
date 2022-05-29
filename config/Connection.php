<?php

$host = "localhost";
$dbname = "agenda";
$user = "root";
$pass = '';


try {

  $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

  // MODO DE ERROS ATIVADO
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  $error = $e->getMessage();
  echo "ERRO: " . $error;
}
