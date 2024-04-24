<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Sorteio</h1></header>
    <main>
        <?php 
            //var_dump($_REQUEST);//Junta as superglobais: $_GET $_POST $_COOKIES
            $numero = random_int(0,100);
            echo "O numero sorteado foi <strong>$numero</strong>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504;Sortear</button>
    </main>
</body>
</html>