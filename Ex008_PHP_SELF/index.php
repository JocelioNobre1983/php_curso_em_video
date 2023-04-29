<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Retroalimentação de formulário</title>
</head>
<body>
        <?php
            $real = $_GET["valor1"] ?? 0; //operador de coalecência
            $dolar = 5.05;
            $converção = $real / $dolar;
        ?>

    <h1>Estudo da variável global PHP_SELF - Retroalimentação</h1>
    <h2>Conversor de real para dólar</h2>
    <Main>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="$_GET">
            <label for="valor1">Valor 1:</label>
            <input type="number" name="valor1" id="valor1" value="<?= $real ?>">
            <input type="submit" value="Coverter">
        </form>
    </Main>
    <section>
        <?php
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p>O seu valor de <strong>".numfmt_format_currency($padrão, $real, "BRL")."</strong> equivale a <strong>".numfmt_format_currency($padrão, $converção, "USD")."</strong>.</p>";
        ?>
    </section>
    
    
</body>
</html>