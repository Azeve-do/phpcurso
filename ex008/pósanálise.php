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
    <h1>Resultado</h1>
    
    <?php 
        $Número_real = $_GET["número"];
        $Número_inteiro = number_format($Número_real, 0);
        $Número_sem_inteiro = fmod($Número_real, 1);
        $Número_flutuante = number_format($Número_real, 3, '.', '');
    
        echo "<p>Número real é: $Número_real</p>";
        echo "<p>Número inteiro: $Número_inteiro</p>";
        echo "<p>Número flutuante: $Número_sem_inteiro</p>";

    ?>
</body>
</html>