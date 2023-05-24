<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Cadastro realizado com sucesso</title>
</head>


<?php 
  $email = $_post['email'];
  $telefone = $_post['tel'];
  $name = $_post['username'];
 
  echo 'Contato cadastrado nome é ' . $name  . ' e seu email é ' . $email . ' o seu número de telefone é ' . $telefone;
 

  //echo `Olá $nome. Seu email é $email`;

  $servername = "localhost";
  $username = "root";
  $password = "";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=Agenda", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<br> Connectado com sucesso!";

    $sql = "INSERT INTO Contatos(nome,telefone,email) VALUES 
              ('$name','$telefone','$email')";

    $conn->exec($sql);

  } catch (PDOException $e) {
    echo "Conexão falhou: " . $e->getMessage();
  }


?>