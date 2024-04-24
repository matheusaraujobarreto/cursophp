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
        $anonasci = $_GET['anonasci'];
        $anoidade = $_GET['anoidade'];
    ?>
    <main>
        <h1>Calculando idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Ano de nascimento</label>
            <input type="number" name="anonasci" id="ianonasci" value="<?$anonasci?>">
            <label for="numero">Ano que quer saber sua idade</label>
            <input type="number" name="anoidade" id="ianoidade" value="<?$anoidade?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
            $idade = $anoidade - $anonasci; 
            echo "<p>Quem nasceu em $anonasci vai ter <strong>$idade anos</strong> em $anoidade</p>";
        ?>
    </section>
</body>
</html>