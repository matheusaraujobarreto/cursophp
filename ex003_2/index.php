<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Tipos primitivos</h1>
    <?php 
        //0x = hexadecimal 0b = binário 0 = octal
        //$num = 010;

        //$v = true; var_dump($v); mostra o tipo

        //$num = (int) 3e2; print $num; var_dump($num); Da pra forçar o tipo da variavel

        //$num = (int) "500"; var_dump($num);

        /*$casado = true; var_dump($casado);
        echo "ele é $casado";*/

        /*$vet = [6,2,1,4];
        var_dump($vet);*/

        class pessoa {
            private string $nome;
        }
        $p = new pessoa;
        var_dump($p);
    ?>
</body>
</html>