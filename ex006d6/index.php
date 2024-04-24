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
        $divden = $_GET['v1']?? 0;
        $divsor = $_GET['v2']?? 1;
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="iv1" value="<?=$v1?>" min="0">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="iv2" value="<?=$v2?>" min="1">
            <input type="submit" value="Dividir">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            echo "<table class='divisao'>
            <tr>
                <td>$divden</td>
                <td>$divsor</td>
            </tr>
            <tr>
                <td>".$divden%$divsor."</td>
                <td>".floor($divden/$divsor)."</td>
            </tr>
        </table>";
        ?>
    </section>

</body>
</html>
