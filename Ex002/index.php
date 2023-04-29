<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data e hora - PHP</title>
</head>
<body>
    <h2>Exemplo em PHP</h2>
    <?php
        date_default_timezone_set("America/Sao_Paulo"); //configurar para datas e hora local.
        echo "Hoje é dia " . date("d/M/Y");
        //d - dia, M - mês, Y - ano
        echo " e a hora certa: " . date("G:i:s");
        //G - hora, i - minutos, s - segundos.
    ?>
    </body>
</html>