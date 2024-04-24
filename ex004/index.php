<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h1>Manipulação de strings</h1>
    <?php 
        $nome  = "Matheus";
        $sobrenome = "Araujo";
        $apelido = "xuxu";
        echo "$nome \"$apelido\" de $sobrenome \<br> sempre foi lindo";//forma de concatenar as parada no php

        $ano = date('Y');
        echo <<< FRASE
            \<br>o meu mano $nome de $sobrenome faz 20 anos no ano de $ano
        FRASE;//Usa as parada em varias linhas com interpretação

        echo <<< 'FRASE'
            \<br>o meu mano $nome de $sobrenome faz 20 anos no ano de $ano
        FRASE;//Usa as parada em varias linhas sem interpretação
    ?>
</body>
</html>