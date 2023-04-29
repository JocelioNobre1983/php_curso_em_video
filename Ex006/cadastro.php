<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Obrigado!</h1></header>
    <main>
        <?php 
            $nome = $_GET["nome"];
            $snome = $_GET["sobrenome"];
            echo "Seja bem vindo <strong>$nome $snome</strong>!";

        //Variáeis globais de recebimento de formulários
        //$_GET
        //$_POST
        //$_COOKIES
        //$_REQUEST sáo as tres juntas
        ?>
        
    </main>
    <a href="javascript:history.go(-1)">Voltar</a>
        <!--mecanismo para retorna uma página em javascript-->
</body>
</html>