<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos:</h1>
    <?php 
        // $num = 0x1A;
        // echo "O valor da variável é $num";

        // $v = "Vinicius Fernando Albuquerque!";
        // var_dump($v);

        ///$num = (integer) 3e2; // 3 x 10(2) coerção
        //  echo "O valor é $num";
        //var_dump($num);

        // $num = (int) "950";
        // var_dump($num)

        // $vet = [6, 2.5, 9, "Maria", false];
        // var_dump($vet);

        // class Pessoa {
        //     private string $nome;
        // }
        // $p = new Pessoa;
        // var_dump($p);

        // $nome = "Vinicius";
        // $sobrenome = "Albuquerque";
        // echo "$nome $sobrenome \u{1F680}";

        // const ESTADO = "RJ";
        // echo "Moro no " . ESTADO;

        // echo "Estamos no ano de " . date('Y')

        // $nom = "Vinicius";
        // $snom = "Albuquerque";
        // echo "$nom \"Fernando\" $snom";

        $canal = "Curso em Vídeo";
        $ano = date('Y');
        echo <<< TESTE

        Olá galera do $canal!
            Tudo bem com vocês? \n
        Como está sendo esse ano de $ano? 
            Abraços! \u{1F596}

        TESTE;

    ?>

</body>
</html>

