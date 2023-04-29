<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotação</title>
</head>
<body>
    <Section>
        <?php
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $final = date("m-d-Y");
            //usando a função date() para estabelecer uma atulização diária, inserindo ela no link no local onde tem a data e no mesmo formato.
            //strtotime() A função espera que seja informada uma string contendo um formato de data em inglês US
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $final .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            //url no formato json dentro de aspas simples porque existe cifrão na url e, em aspas duplas, vai ser interpretado como variável.
            //Usar o caracter de escape \ antes das aspas simples das datas pra não criticar. Normalmente utiliza-se antes e depois das datas.
            $dados = json_decode(file_get_contents($url), true);
            //Função json_decode trata dados em json
            //file_get_contents - lê todo o conteúdo de um arquivo para uma string

            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            $cotação = $dados ["value"][0]["cotacaoCompra"];
            echo " A cotação foi ".numfmt_format_currency($padrão, $cotação, "BRL");

            //var_dump($dados); - para verificar o conteúdo e se esta tudo ok.
            ?>
    </Section>
    
</body>
</html>