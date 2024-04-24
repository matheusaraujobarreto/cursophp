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
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'01-01-2024\'&@dataFinalCotacao=\'12-31-2024\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $numero = $_REQUEST["numero"];
            $cotacao = json_decode(file_get_contents($url), true);
            $dolar = $numero/$cotacao["value"][0]["cotacaoCompra"];

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            $usa = numfmt_create("en_US", NumberFormatter::CURRENCY);
            
            echo "Seus <strong>".numfmt_format_currency($padrao,$numero,"BRL") ."</stong></strong> equivalem a <strong>".numfmt_format_currency($usa,$dolar,"USA");
            echo "<p></strong>Dolar hoje está <strong>" .numfmt_format_currency($padrao,$cotacao["value"][0]["cotacaoCompra"],"BRL")."</strong></p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
    </main>
</body>
</html>