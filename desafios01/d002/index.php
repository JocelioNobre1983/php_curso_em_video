<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <header><h1>Rifa de um <strong><EM>CARNEIROOOO</EM></strong> e uma <strong><EM>CAIXA DE CERVEJA</EM></strong></h1></header>
        <h1>O sorteio será entre os números de <mark>1</mark> a <mark>100</mark>.</h1>
            <?php 
            $num = mt_rand(1, 100);
            echo "O número sorteado foi "."<strong>".$num."</strong>"."<br>";
        ?>
        <button onclick="javascript:document.location.reload()">Novo número</button>
    </main>
    <img src="carneiro.png" alt="carneiro">
    <img src="cerveja.png" alt="cerveja">
</body>
</html>