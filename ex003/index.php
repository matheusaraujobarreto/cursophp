<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>
    <h1>Uso de Variaveis</h1>    
    <?php 
        $nome = "Matheus";
        $sobrenome = "Araujo";
        print "Meu nome é $nome $sobrenome";
        $nome = "Sarah";
        print " $nome";
        const PAIS = "Brasil";
        print " Muito prazer $nome você mora no".PAIS;
        //PAIS = "Eua"  Não pode mudar constantes
        
    ?>
</body>
</html>