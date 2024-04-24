<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Resultado do processo</h1></header>
    <main>
        <?php 
            //var_dump($_REQUEST);//Junta as superglobais: $_GET $_POST $_COOKIES
            $nome = $_GET["nome"]?? "Sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "Sem sobrenome";
            echo "É um prazer te conhecer <strong>$nome $sobrenome</strong>";
            
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para login</a></p>
    </main>
</body>
</html>