
<pre>
<?php 

    $início = date ("m-d-Y" , strtotime("-7 days"));
    $fim = date("m-d-Y");

    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'05-01-2025\'&@dataFinalCotacao=\'05-08-2025\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true );

   // var_dump($dados);

    $cotação = $dados["value"] [0] ["cotacaoCompra"];
    echo "A cotação foi $cotação";
?>
</pre>