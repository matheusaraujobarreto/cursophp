<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //Pegando os valores do formulário
        $dinheiro = $_GET['dinheiro']?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dinheiro">Quanto deseja sacar? (R$)</label>
            <input type="number" name="dinheiro" id="idinheiro" value="<?$dinheiro?>" step="5">
            <input type="submit" value="Sacar">
            <p>*O caixa tem notas de R$100,R$50,R$10 e R$5.</p>
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $resto = $dinheiro;
            $c100 = floor($resto / 100);
            $resto %= 100;

            $c50 = floor($resto / 50);
            $resto %= 50;

            $c10 = floor($resto / 10);
            $resto %= 10;

            $c5 = floor($resto / 5);
            $resto %= 5;
            echo "<h1>Saque de R$".number_format($dinheiro,2,",","."). "realizado</h1>
            <ul>
            <li><img src='100-reais.jpg'>$c100 x</li>
            <li><img src='50-reais.jpg'>$c50 x</li>
            <li><img src='10-reais.jpg'>$c10 x</li>
            <li><img src='5-reais.jpg'>$c5 x</li>
            </ul>";
        ?>
    </section>
</body>
</html>
