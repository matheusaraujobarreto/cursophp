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
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        $numero3 = $_GET['numero3'];
        $numero4 = $_GET['numero4'];
    ?>
    <main>
        <h1>Informe os numeros e seus pesos</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">1° Valor </label>
            <input type="number" name="numero1" id="inumero1" value="<?$numero1?>" step="0.01">
            <label for="numero">1° Peso </label>
            <input type="number" name="numero2" id="inumero2" value="<?$numero2?>" step="0.01">
            <label for="numero">2° Valor </label>
            <input type="number" name="numero3" id="inumero3" value="<?$numero3?>" step="0.01">
            <label for="numero">2° Peso </label>
            <input type="number" name="numero4" id="inumero4" value="<?$numero4?>" step="0.01">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Média</h2>
        <?php 
            echo "<p>Analisando os valores <strong>$numero1 e $numero3</strong></p>";
            echo "<ul><li>A média aritimetica simples deles é  ".number_format(($numero1+$numero3)/2 ,2)."</li><li>E a média ponderada é  ".number_format((($numero1*$numero2)+($numero3*$numero4))/($numero2+$numero4), 2)."</li></ul>";
        ?>
    </section>
</body>
</html>