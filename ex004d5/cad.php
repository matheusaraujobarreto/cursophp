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
            $numero = $_REQUEST["numero"]?? 0;
            $inteiro = (int)$numero;
            $decimal = $numero-(int)$numero;
            echo "<p>Você digitou o numero <strong>$numero</strong></p>";
            echo "<p><ul>
                <li>A parte inteira é $inteiro</li>
            </ul></p>";
            echo "<p><ul>
                <li>A parte decimal é ".number_format($decimal , 2, ",", ".")."</li>
            </ul></p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
        
    </main>
</body>
</html>