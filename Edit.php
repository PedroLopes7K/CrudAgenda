<?php
include_once('templates/Header.php')
?>

<div class="container">
  <?php include_once('templates/BackBtn.html') ?>
  <h1 id="main-title">Editar Contato</h1>
  <form id="edit-form" action="<?= $BASE_URL ?>config/Process.php" method="POST">
    <input type="hidden" name="type" value="edit">
    <input type="hidden" name="id" value="<?= $contato['id'] ?>">
    <div class="form-group">
      <label for="nome">Nome do contato:</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" value="<?= $contato['nome'] ?>" required>
    </div>
    <div class="form-group">
      <label for="telefone">Telefone do contato:</label>
      <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o número" value="<?= $contato['telefone'] ?>" required>
    </div>

    <div class="form-group">
      <label for="detalhes">Detalhes do contato:</label>
      <textarea type="text" class="form-control" id="detalhes" name="detalhes" placeholder="Detalhes do contato" required rows="3">
      <?= $contato['detalhes'] ?>
      </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
  </form>
</div>

<?php
include_once('templates/Footer.php')
?>