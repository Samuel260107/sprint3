<?php

  session_start();

  include_once("connection.php");
  include_once("url.php");

  $data = $_POST;

  // MODIFICAÇÕES NO BANCO
  if(!empty($data)) {

    // Criar contato
    if($data["type"] === "create") {

      $crmv = $data["crmv"];
      $nome = $data["nome"];
      $endereco = $data["endereco"];
      $telefone = $data["telefone"];
      $celular = $data["celular"];

      $query = "INSERT INTO Veterinario (CRMV, Nome, Endereco, Telefone, Celular) VALUES (:crmv, :nome, :endereco, :telefone, :celular)";

      // $_SESSION["msg"] = $crmv. ' - ' .$nome;

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":crmv", $crmv);
      $stmt->bindParam(":nome", $nome);
      $stmt->bindParam(":endereco", $endereco);
      $stmt->bindParam(":telefone", $telefone);
      $stmt->bindParam(":celular", $celular);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Veterinário cadastrado com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
        $_SESSION["msg"] = $error;
      }

    } else if($data["type"] === "edit") {

      $nome = $data["nome"];
      $endereco = $data["endereco"];
      $telefone = $data["telefone"];
      $celular = $data["celular"];
      $crmv = $data["crmv"];

      $query = "UPDATE Veterinario 
                SET Nome = :nome, Endereco = :endereco, Telefone = :telefone, Celular = :celular 
                WHERE CRMV = :crmv";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":nome", $nome);
      $stmt->bindParam(":endereco", $endereco);
      $stmt->bindParam(":telefone", $telefone);
      $stmt->bindParam(":celular", $celular);
      $stmt->bindParam(":crmv", $crmv);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Veterinário atualizado com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    } else if($data["type"] === "delete") {

      $crmv = $data["crmv"];

      $query = "DELETE FROM Veterinario WHERE CRMV = :crmv";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":crmv", $crmv);
      
      try {

        $stmt->execute();
        $_SESSION["msg"] = "Veterinário removido do banco de dados!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        //echo "Erro: $error";
        $_SESSION["msg"] = "Erro: $error";
      }

    }

    // Redirect HOME
    header("Location:" . $BASE_URL . "../index.php");

  // SELEÇÃO DE DADOS
  } else {
    
    $crmv;

    if(!empty($_GET)) {
      $crmv = $_GET["id"];
    }

    // Retorna o dado de um contato
    if(!empty($crmv)) {

      $query = "SELECT * FROM Veterinario WHERE CRMV = :crmv";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":crmv", $crmv);

      $stmt->execute();

      $vet = $stmt->fetch();

    } else {

      // Retorna todos os contatos
      $vets = [];

      $query = "SELECT * FROM Veterinario";

      $stmt = $conn->prepare($query);

      $stmt->execute();
      
      $vets = $stmt->fetchAll();

    }

  }

  // FECHAR CONEXÃO
  $conn = null;