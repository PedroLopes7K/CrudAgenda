<?php
include_once('templates/Header.php')
?>

<div class="container">

  <?php if (isset($printMsg)) : ?>
    <?php if ($printMsg == 'Contato criado com sucesso!') : ?>
      <p id="msgGreen"> <?= $printMsg ?></p>
    <?php endif; ?>
    <?php if ($printMsg == 'Contato atualizado com sucesso!') : ?>
      <p id="msgBlue"> <?= $printMsg ?></p>
    <?php endif; ?>
    <?php if ($printMsg == 'Contato excluido com sucesso!') : ?>
      <p id="msgRed"> <?= $printMsg ?></p>
    <?php endif; ?>
  <?php endif; ?>



  <h1 id="main-title">Agenda De Contatos</h1>
  <?php if (count($contatos) > 0) : ?>
    <table class="table" id="contacts-table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Telefone</th>
          <th scope="col"></th>
          <!-- <th scope="col">Detalhes</th> -->
        </tr>
      </thead>
      <tbody>
        <?php foreach ($contatos as $contato) : ?>

          <?php
          // print_r($contato);
          $num = $contato['telefone'];
          $telefone = str_replace(' ', '', $num);
          ?>
          <tr>
            <td id="col-id" scope="row"> <?= $contato['id'] ?></td>
            <td scope="row"> <?= $contato['nome'] ?></td>
            <td scope="row"> <?= $telefone ?></td>
            <!-- <td scope="row">$contato'id' </td>  -->
            <td class="actions">
              <a href="<?= $BASE_URL ?>Show.php?id=<?= $contato['id'] ?>"> <i class="fas fa-eye check-icon"></i></a>
              <a href="<?= $BASE_URL ?>Edit.php?id=<?= $contato['id'] ?>"> <i class=" far fa-edit edit-icon"></i></a>

              <form class="delete-form" action="<?= $BASE_URL ?>/config/Process.php" method="POST">
                <input type="hidden" name="type" value="delete">
                <input type="hidden" name="id" value="<?= $contato['id'] ?>">
                <button type="submit"> <i class="fas fa-times delete-icon"></i></button>
              </form>

            </td>
          </tr>
        <?php endforeach ?>
      </tbody>

    </table>
  <?php else : ?>
    <p id="empty-list-text">NÃO HÁ CONTATOS NA AGENDA</p>
    <p>Adicione um novo contato <a href="<?= $BASE_URL ?>Create.php"> clicando aqui</a>>
    <?php endif; ?>

</div>
<?php
include_once('templates/Footer.php')
?>