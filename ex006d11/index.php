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
        $preço = $_GET['preço'];
        $porcento = $_GET['porcento'];
    ?>
    <main>
        <h1>Reajuste de preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preço">Preço do produto (R$)</label>
            <input type="number" name="preço" id="ipreço" value="<?$preço?>" step="0.01">
            <label for="porcento">Qual será o percentual de reajuste? (<strong><span>0</span>%</strong>)</label>
            <input type="range" name="porcento" id="iporcento" min=""0 max="100" value="50">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            echo "O produto que custava R$ $preço, com $porcento% de aumento vai custar apartir de agora R$ ".number_format(($preço*(100+$porcento))/100, 2);
        ?>
    </section>
    <script>
        var $range = document.getElementById('iporcento'),
        $value = document.querySelector('span');
        
        $range.addEventListener('input', function() {
          $value.textContent = this.value;
        });
    </script>
</body>
</html>