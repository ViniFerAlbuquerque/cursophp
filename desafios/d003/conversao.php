<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas v.1</title>
</head>
<body>
    <main>

        <h1>Conversor de Moedas:</h1>

        <?php 
        $cotação = 5.75;
        $real = $_REQUEST["din"] ?? 0;
        $dólar = $real/$cotação;

        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dólar, "USD") . "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Retornar</button>
    </main>
</body>
</html>
