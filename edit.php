<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Editar contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="edit">
      <input type="hidden" name="crmv" value="<?= $vet['CRMV'] ?>">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome" value="<?= $vet['Nome'] ?>" required>
      </div>
      <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe o endereco" value="<?= $vet['Endereco'] ?>">
      </div>
      <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Informe o telefone" value="<?= $vet['Telefone'] ?>">
      </div>
      <div class="form-group">
        <label for="celular">Celular:</label>
        <input type="text" class="form-control" id="celular" name="celular" placeholder="Informe o celular" value="<?= $vet['Celular'] ?>">
      </div>
      <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>
