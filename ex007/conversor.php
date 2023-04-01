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
        $Convertendo_para_reais = $_GET
        ["valor"] / 5.28;
        $Valor_arredondado = number_format($Convertendo_para_reais, 2, '.', '');
            
        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>" . numfmt_format_currency($padrão, $Valor, "BRL") . " convertido em dólar: U$$Valor_arredondado</p>"
    ?>
</body>
</html>