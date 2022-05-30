<?php
include_once('templates/Header.php');
$detalhes;
if (!empty($contato['detalhes'])) {
  $detalhes = $contato['detalhes'];
} else {
  $detalhes = "Não há detalhes sobre esse contato.";
}
?>

<div class="container" id="view-contact-container">
  <?php include_once('templates/BackBtn.html') ?>
  <h1 id="main-title"><?= $contato['nome'] ?></h1>
  <p class="bold">Telefone:</p>
  <p><?= $contato['telefone'] ?></p>
  <p class="bold">Detalhes:</p>
  <p><?= $detalhes ?></p>
</div>
<?php
include_once('templates/Footer.php')
?>