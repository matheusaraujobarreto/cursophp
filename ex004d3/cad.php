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
            $numero = $_REQUEST["numero"];
            $dolar = $numero/5.12;
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            $usa = numfmt_create("en_US", NumberFormatter::CURRENCY);
            echo "Seus <strong>".numfmt_format_currency($padrao,$numero,"BRL") ."</stong></strong> equivalem a <strong>".numfmt_format_currency($usa,$dolar,"USA");
            echo "<p></strong>Dolar hoje está R$5,12</p>"
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
    </main>
</body>
</html>