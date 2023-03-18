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
    <?php 
        $Resposta = $_GET["número"];
        $Antecessor = $_GET["número"] - 1;
        $Sucessor = $_GET["número"] + 1;
        echo "<p> Escolhido o número $Resposta</p>";
        echo "<p> Seu antecessor é $Antecessor</p>";    
        echo "<p> Seu sucessor é $Sucessor</p>";
    ?>
</body>
</html>