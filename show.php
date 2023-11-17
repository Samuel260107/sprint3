<?php
  include_once("templates/header.php");
?>
  <div class="container" id="view-contact-container"> 
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title"><?= $vet["Nome"] ?></h1>
    <p class="bold">CRMV:</p>
    <p class="form-control"><?= $vet["CRMV"] ?></p>
    <p class="bold">Endereço:</p>
    <p class="form-control"><?= $vet["Endereco"] ?></p>
    <p class="bold">Telefone:</p>
    <p class="form-control"><?= $vet["Telefone"] ?></p>
    <p class="bold">Celular:</p>
    <p class="form-control"><?= $vet["Celular"] ?></p>
  </div>
<?php
  include_once("templates/footer.php");
?>
