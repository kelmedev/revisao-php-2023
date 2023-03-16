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
  $email = $_GET['email'];
  $password = $_GET['password'];
  $username = $_GET['username'];
 
  echo ' O nome é ' . $username . ' e seu email é ' . $email . ' a senha é ' . $password;



?>