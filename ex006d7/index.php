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
        $salario = $_GET['salario'];
    ?>
    <main>
        <h1>Informe seu salario</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salario (R$)</label>
            <input type="number" name="salario" id="isalario" value="<?$salario?>" step="0.01">
            <p>Considerando o salário minimo atual como <strong>R$1412,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $salmin = 1412.00; 
            $quantsal = floor($salario/$salmin);
            $valextra = $salario-($quantsal * $salmin);
            echo "Quem recebe R$ $salario ganha $quantsal salarios minimo + R$ $valextra";
        ?>
    </section>
</body>
</html>