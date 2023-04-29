<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media aritmética</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Calculadora de média</h1></header>
    <?php
        $num1 = $_GET['n1'] ?? '';
        $num2 = $_GET['n2'] ?? '';
        $peso1 = $_GET['p1'] ?? '';
        $peso2 = $_GET['p2'] ?? '';

    ?>
    <main>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="n1">Valor 1:</label>
        <input type="number" name="n1" id="n1" required>
        <label for="n2">Valor 2:</label>
        <input type="number" name="n2" id="n2" required>
        <label for="p1">Peso 1:</label>
        <input type="number" name="p1" id="p1" min="1" required>
        <label for="p2">Peso 2:</label>
        <input type="number" name="p2" id="p2" min="1" required>
        <input type="submit" value="Calcular">
    </form>
    </main>
    
    <section>
    <?php
        $media = ($num1 + $num2) / 2;
        $mediap = ($num1 * $peso1 + $num2 * $peso2) / ($peso1 + $peso2);
        echo "A média aritmética simples entre <strong>" .$num1. "</strong> e <strong>" .$num2. "</strong> é <strong>".$media."</strong><br>";
        echo " A média artmética ponderada entre <strong>" .$num1. "</strong> e <strong>" .$num2. "</strong> é <strong>".number_format($mediap, 1)."</strong>";
    ?> 
    </section>
    <main class="tempo">
        <?php
        date_default_timezone_set("America/Sao_Paulo");
        $data = date("d/M/Y à\s H:i:s");
        echo $data."<br>";
        echo date_default_timezone_get();
        echo "\u{231A}";
        ?>
    </main>
</body>
</html>