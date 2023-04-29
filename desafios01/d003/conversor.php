<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor</title>
</head>
<body>
    <h1>PRONTO!!!</h1>
    <main>
        <?php
            $moeda = $_POST["moeda"];
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $final = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $final .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotação = $dados ["value"][0]["cotacaoCompra"];
            $dolar = $moeda / $cotação;
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "Seu valor de ".numfmt_format_currency($padrão, $moeda, "BRL")." equivale a ".numfmt_format_currency($padrão, $dolar, "USD");
            /*echo "Seu valor de R\$ ".number_format($moeda, 2, ",", ".")." equivale a US\$ ".number_format($converter, 2, ",", ".");*/
        ?>
        <!--number_format(variável, num de casas,) formata a quantidade de casas decimais-->
    </main>
    <a href="javascript:history.go(-1)">Voltar</a>
    
</body>
</html>