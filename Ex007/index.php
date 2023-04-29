<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo do PHP</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <Header>
        <h1>Operadores Aritméticos</h1>
        <h2>Soma</h2>
        <h3>Operador utilizado é o +</h3>
            <?php 
            echo 2 + 2;
            ?>
        <hr>
        <h2>Subtração</h2>
        <h3>Utiliza-se o operador artimético -</h3>
            <?php
                echo 5-4;
            ?>
        <hr>
        <h2>Mutiplicação</h2>
        <h3>Operador utilizado é o *</h3>
            <?php 
            echo 2 * 9;
            ?>
        <hr>
        <h2>Divisão</h2>
        <h3>Operador utilizado <i>é o /</i></h3>
            <?php 
            echo 10 / 3;
            ?>
        <hr>
        <h2>Exponenciação</h2>
        <h3>Operador utilizado é <strong>o **</strong></h3>
            <?php 
            echo 9 ** 2;
            ?>
        <hr>
        <h2>Módulo</h2>
        <h3>Operador utilizado <EM>é o %</EM></h3>
            <?php 
            echo 12 % 3;
            ?>
        <hr>
        <h2>Todas as operações em uma</h2>
        <h3>Expressão composta por <b>vários operadores aritiméticos</b></h3>
            <?php 
            echo (2 + 2)-3**1*10/5;
            ?>
            <!-- as tags <i> e <EM> deixam as palavras em itálicos sem que a primeira está em desuso. Já as tags <strong></strong> e <b></b> deixam os textos em negrito e este último está em desuso.-->
    </Header>
    <?php
    
    ?>
</body>
</html>