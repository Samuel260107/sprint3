<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Cadastrar Veterinário</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="create">
      <div class="form-group">
        <label for="crmv">CRMV:</label>
        <input type="text" class="form-control" id="crmv" name="crmv" placeholder="Digite o CRMV" required>
      </div>
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome" required>
      </div>
      <div class="form-group">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe o endereco">
      </div>
      <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone">
      </div>
      <div class="form-group">
        <label for="celular">Celular:</label>
        <input type="text" class="form-control" id="celular" name="celular" placeholder="Informe o celular">
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>
