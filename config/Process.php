<?php

session_start();
include_once('config/Connection.php');
include_once('config/url.php');
$contatos = [];

$query = "SELECT * FROM contatos";

$stmt = $conn->prepare($query);

$stmt->execute();

$contatos = $stmt->fetchAll();
