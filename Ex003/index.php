<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>
<body>
    <h1>Variável e constante</h1>
    <?php
        $nome = "Jocélio";
        $_sobrenome = "Nobre";
        const TRABALHO = "Caixa Econômica Federal";
        //A constante não pode ser "coberta".
       
       $nome = "Augusto";/*Como se trata de uma variável, se atribuir na mesma, vai 
       cobrir a anterior*/
       //Regras
       //Variável começa com $ seguido de letra ou _
       //Case sensitive
       
       //Tipos primitivos escalares
       //String - letras e números - "Jocelio Nobre"
       //Float, doble e real - Decimais - Ex.: peso 110.43 kg
       //Boolean - true ou false
       //Int - numero - Ex.: idade - 39

       /*-----------------------------------------*/
       //Tipos primitivos especiais
       //null
       //resource
       //callabe
       //mixed

       /*-------------------------------------------*/
       //Tipos primitivos compostos
       //Arrays
       //object
        echo "Olá! Eu me chamo  $nome $_sobrenome e trabalho na ". TRABALHO;


    ?>
    
</body>
</html>