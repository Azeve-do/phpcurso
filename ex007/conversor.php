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

        echo "<p>$Valor convertido em dólar: $Convertendo_para_reais</p>";
    ?>
</body>
</html>