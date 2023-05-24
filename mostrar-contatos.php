<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <title>Mostrar contatos</title>
</head>

<body>
<a href="form.php"><h1>Cadastrar contato</h1></a>

<?php


$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=Agenda", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<br> Connectado com sucesso!";

  $sql = "SELECT * FROM Contatos";
  $sqlPreparado = $conn->prepare($sql);
  $sqlPreparado->execute();
  $contatos = $sqlPreparado->fetchAll(PDO::FETCH_ASSOC);






} catch (PDOException $e) {
  echo "Conexão falhou: " . $e->getMessage();
}



?>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
      <tr>
        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
          ID
        </th>
        <th scope="col" class="px-6 py-3">
          Nome
        </th>
        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
          Telefone
        </th>
        <th scope="col" class="px-6 py-3">
          E-mail
        </th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($contatos as $contato) { ?>
        <tr>
          <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
            <?php echo $contato['id']; ?>
          </td>
          <td class="px-6 py-4">
            <?php echo $contato['nome']; ?>
          </td>
          <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
            <?php echo $contato['telefone']; ?>
          </td>
          <td class="px-6 py-4">
            <?php echo $contato['email']; ?>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>


</body>