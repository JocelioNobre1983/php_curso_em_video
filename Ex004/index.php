<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste tipos primitivo</title>
</head>
<body>
    <h1>Teste Tipos primitivos PHP</h1>
    <?php
        $Nome = "Jocélio";
        $altura = 1.86;
        $peso = 110;
        $peso2 = (string) 110; //coerção
        $casado = true;

        var_dump($Nome, $altura, $peso, $peso2, $casado)
        //var_dump() retorna o tipo da variável.
        //No print ou echo o valor true na tela é 1 e false é vazio.    

    ?>
    
</body>
</html>