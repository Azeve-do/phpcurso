<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números aleatórios</title>
    <link rel="stylesheet" href="estilosexs.css">
</head>
<body>
    <header><h1>Trabalhando com números aleatórios</h1></header>
    <p>Gerando um número aleatório entre 0 e 100...</p>
    <?php 
        $Número_Aleatório = mt_rand(0, 100);
        echo "<p>Valor gerado é: $Número_Aleatório</p>";
    ?>
    <a id="gerador" href="javascript:history.go(0)">Gerar Outro</a>
</body>
</html>