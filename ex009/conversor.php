<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilosexs.css">
</head>
<body>
    <h1>
        Resultado
    </h1>
    <?php 
        $Valor = $_GET["valor"];


        $início = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $início .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($url), true);
        $cotação = $dados["value"][0]["cotacaoCompra"];;


        $dólar = $Valor / $cotação;
        
        /* $Valor_arredondado = number_format($Convertendo_para_reais, 2, '.', ''); */
            
        $padrão = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        echo "<p>" . numfmt_format_currency($padrão, $Valor, "BRL") . " convertido em dólar:" . numfmt_format_currency($padrão, $dólar, "USD") . "</p>"
    ?>
</body>
</html>