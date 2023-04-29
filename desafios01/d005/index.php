<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Global $SERVER ['PHP_SELF']</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php
        //capturando os dados de formulário retroalimentado
            $v1 = $_GET['valor1'] ?? 0;
            $v2 = $_GET['valor2'] ?? 0;
            $soma = $v1 + $v2;
        ?>
    <main>
        <h1>Calculadora de somar</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <!--A variável PHP_SELF da super global $_SERVER, permite desenvolver formulários retroalimentares, ou seja, sem a necessidade de terque criar outro arquivo para receber os dados-->
        <!--No PHP quando existe uma super tag apenas com um echo, poderá escrever de forma simplificada conforme o action do form -->
            <label for="valor1">Valor 1:</label>
            <input type="number" name="valor1" id="valor1" value="<?=$v1?>"><br>
            <label for="valor2">Valor 2:</label>
            <input type="number" name="valor2" id="valor2" value="<?=$v2?>">
            <!--No input foi incluída a propriedade "value" e dentro a short tag do php com cada variável para não "apagar o que foi digitado-->
            <input type="submit" value="Somar">
        </form>
    </main>
    
    <section>
        <h1>Resultado soma</h1>
        <?php
            print "A soma entre ".$v1." e ".$v2." é "."<strong>".$soma."</strong>";
        ?>
    </section>

</body>
</html>