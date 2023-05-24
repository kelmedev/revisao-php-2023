
<body class="flex h-screen">
    <div
        class="m-auto w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center justify-between mb-4">
            <h2 class="mb-2 text-2xl font-semibold text-gray-900 dark:text-white">Participantes do projeto:</h2>
            <ol class="max-w-md space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
        </div>

        

        <?php
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];

        echo "Olá " . $nome . " .Seu e-mail é " . $email;

        //echo `Olá $nome. Seu email é $email`;
        
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=Agenda", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "<br> Connectado com sucesso successfully";

            $sql = "INSERT INTO Contatos(nome,telefone,email) VALUES 
            ('$nome','$telefone','$email')";

            $conn->exec($sql);

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        
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