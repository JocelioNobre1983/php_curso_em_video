<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $dividendo = $_GET["dividendo"] ?? 0;
    $divisor = $_GET["divisor"] ?? 1;//quando se tratar de uma divisão o divisor não pode ser zero.
    $quociente = intdiv($dividendo, $divisor);
    $resto = $dividendo % $divisor;
    ?>
    <section>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="dividendo">Dividendo:</label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="<?= $dividendo ?>">
            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="dividor" min="1" value="<?= $divisor ?>"><!--quando se tratar de uma divisão o divisor não pode ser zero-->
            <input type="submit" value="Calcular">
        </form>
    </section>
    <main>
        <h2>Estrura da divisão</h2>
        <table class="divisao"> 
            <tr><!--linha-->
                <td><?= $dividendo ?></td><!--celula/coluna-->
                <td><?= $divisor ?></td>
            </tr>
            <tr>
                <td><?= $resto ?></td>
                <td><?= $quociente ?></td>
            </tr>
        </table>
    </main>
    
    
</body>
</html>
