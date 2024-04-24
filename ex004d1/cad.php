<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Resultado do processo</h1></header>
    <main>
        <?php 
            //var_dump($_REQUEST);//Junta as superglobais: $_GET $_POST $_COOKIES
            $numero = $_GET["numero"];
            echo "O numero escolhido foi <strong>$numero</strong><br>";
            echo "Seu antecessor é ".$numero-1 ."<br>";
            echo "E seu sucessor é ".$numero+1 ."<br>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
    </main>
</body>
</html>