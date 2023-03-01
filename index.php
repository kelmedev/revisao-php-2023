<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Arrays em PHP</title>
</head>

<body class="flex h-screen">
    <div
        class="m-auto w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center justify-between mb-4">
            <h2 class="mb-2 text-2xl font-semibold text-gray-900 dark:text-white">Participantes do projeto:s</h2>
            <ol class="max-w-md space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
        </div>



        <?php

        $names = array("Ana Claúdia", "Diego Kelme", "Vitória Kétura", "Marlon");

        $ages = array("17", "17", "16", "41");




        $iNames = count($names);

        $iAges = count($ages);


        for ($num = 0; $num < $iNames; $num += 1)
            for ($num = 0; $num < $iAges; $num += 1) {
                echo ('<li> <span class="font-semibold text-gray-900 dark:text-white">' . $names[$num] . '</span> tem <span class="font-semibold text-gray-900 dark:text-white">' . $ages[$num] . '</span></li>'
                );
            }
        ?>



        </ol>
    </div>


</body>

</html>