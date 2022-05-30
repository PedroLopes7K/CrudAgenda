<?php
include_once('templates/Header.php')
?>

<div class="container">
  <?php include_once('templates/BackBtn.html') ?>
  <h1 id="main-title">Criar Contato</h1>
  <form id="create-form" action="<?= $BASE_URL ?>config/Process.php" method="POST">
    <input type="hidden" name="type" value="create">
    <div class="form-group">
      <label for="nome">Nome do contato:</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required>
    </div>
    <div class="form-group">
      <label for="telefone">Telefone do contato:</label>
      <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o número" required>
    </div>

    <div class="form-group">
      <label for="detalhes">Detalhes do contato:</label>
      <textarea type="text" class="form-control" id="detalhes" name="detalhes" placeholder="Detalhes do contato" required rows="3">
      </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>

<?php
include_once('templates/Footer.php')
?>