<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salário Mínimo!</title>
</head>
<body>
    <?php 
        $minimo = 1_518.00;
        $salario = $_GET['sal'] ?? $minimo;
    ?>
    <main>
        <h1>Por favor, informe seu salário:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($minimo, 2, "," , ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado do salário informado:</h2>
        <?php 
            $tot = intdiv($salario, $minimo);
            $dif = $salario % $minimo;

            echo "<p> Quem recebe um salário de R\$". number_format ($salario, 2, ",", ".")." ganha <strong>$tot salários mínimos</strong> + R\$". number_format($dif, 2, ",", "."). ".</p>";
        ?>
    </section>
        <footer>
        <h5>&copy;ViniFerAlbuquerque</h5>
    </footer>
</body>
</html>