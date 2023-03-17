<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilophp.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
           $Nome = $_GET["nome"] ?? "Sem nome";
           $Sobrenome = $_GET["sobrenome"] ?? "Desconhecido";

           echo "<p>É um prazer te conhecer <strong>$Nome $Sobrenome</strong>! Este é o meu site!";
           $Soma =  + 2;

           echo "<p>$Soma</p>";

        ?>
        <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
    </main>
</body>
</html>