<!DOCTYPE html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <title>Form em PHP</title>
</head>

<body class="flex h-screen">
  <div
    class="m-auto w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    <form action="cadastro.php" method="post" class="items-center block mb-4">
      <h1 class="block textmb-2 text-3xl font-bold text-gray-900 dark:text-white"> Cadastrar contato</h1>

      <br>

      <label class="block textmb-2 text-xl font-medium text-gray-900 dark:text-white">
        <h1>
          Email</h1>
      </label>

      <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          <i class="ri-mail-fill"></i>
        </div>
        <input id="email-address" type="email" name="email"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="name@domain.com">
      </div>

      <br>

      <label class="block textmb-2 text-xl font-medium text-gray-900 dark:text-white">
        <h1>
          Nome</h1>
      </label>

      <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          <i class="ri-user-fill"></i>
        </div>
        <input id="name" type="text" name="username"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="username">
      </div>

      <br>

      <label class="block textmb-2 text-xl font-medium text-gray-900 dark:text-white">
        <h1>
          Telefone</h1>
      </label>

      <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          <i class="ri-phone-fill"></i>
        </div>

        <input id="name" type="tel" name="tel"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="+xx (xx) xxxxx-xxxx">
      </div>

      <br>

     
      <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar contato</button>

    </form>
  </div>


</body>

</!DOCTYPE>