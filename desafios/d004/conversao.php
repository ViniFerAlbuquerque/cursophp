<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas v.2</title>
</head>

<body>
    <main>

        <h1>Conversor de Moedas v2:</h1>

        <?php

        $início = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'05-01-2025\'&@dataFinalCotacao=\'05-08-2025\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        // var_dump($dados);

        $cotação = $dados["value"][0]["cotacaoCompra"];

        $real = $_REQUEST["din"] ?? 0;
        $dólar = $real / $cotação;

        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dólar, "USD"),'*' . "</strong></p>";

        echo " <p class='paragraph' ><strong>*</strong>Cotação obtida diretamente do site do <strong><a href='https://dadosabertos.bcb.gov.br/' target='_blank'>Banco Central do Brasil</a></strong> </p> ";
        ?>
        <button onclick="javascript:history.go(-1)">Retornar</button>
    </main>
</body>

</html>