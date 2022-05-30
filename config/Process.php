<?php

session_start();
include_once('Connection.php');
include_once('url.php');

$data = $_POST;

// modificações no banco
if (!empty($data)) {



  // print_r($data);

  // criar contato
  if ($data["type"] === "create") {
    $nome = $data['nome'];
    $telefone = $data['telefone'];
    $detalhes = $data['detalhes'];

    $query = "INSERT INTO contatos (nome, telefone, detalhes) VALUES (:nome, :telefone, :detalhes)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":telefone", $telefone);
    $stmt->bindParam(":detalhes", $detalhes);

    try {

      $stmt->execute();
      $_SESSION['msg'] = "Contato criado com sucesso!";
    } catch (PDOException $e) {
      $error = $e->getMessage();
      echo "ERRO: " . $error;
    }
  }
  // IR PARA HOME APÓS O CADASTRO
  header("Location:" . $BASE_URL . "../Index.php");
}
// seleção de dados
else {

  $id;
  if (!empty($_GET)) {
    $id = $_GET['id'];
  }

  // retorna apenas um contato
  if (!empty($id)) {
    $query = "SELECT * FROM contatos WHERE id = :id";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $contato = $stmt->fetch();
  } else {
    // retorna todos os contatos
    $contatos = [];

    $query = "SELECT * FROM contatos";

    $stmt = $conn->prepare($query);

    $stmt->execute();

    $contatos = $stmt->fetchAll();
  }
}

//FECHANDO CONEXÃO EM PDO

$conn = null;
