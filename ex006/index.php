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
        $v1 = $_GET['v1']?? null;
        $v2 = $_GET['v2']?? null;
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="iv1" value="<?=$v1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="iv2" value="<?=$v2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $soma = $v1 + $v2;
            echo "<p>A soma de $v1 e $v2 é $soma</p>";
        ?>
    </section>
</body>
</html>