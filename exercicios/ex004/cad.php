<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado!</title>
</head>
<body>
    <header>
        <h1>Resultado do procesamento :</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["nome"] ?? "sem nome";
            $s = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>É uma honra receber sua visita, <strong>$n $s</strong>! Este é o site dos associados!</p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior!</a></p>
    </main>
</body>
</html>