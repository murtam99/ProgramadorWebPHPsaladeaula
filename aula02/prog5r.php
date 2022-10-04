<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Senac - Curso de PHP</title>
</head>
<body>
<div>
<p> Escreva um programa que leia o preço e a quantidade de produtos comprados. O programa deverá calcular um desconto de 10% no valor total a ser pago se o valor do produto for maior que 300. O programa deverá calcular um desconto de 7% no valor total a ser pago se o número de produtos comprados for maior que 5. O programa deverá calcular e imprimir o valor total a ser pago com os possíveis descontos. </p>
    <hr/>
    <h2 style="text-align: center">Informações dos Produtos</h2>
    <fieldset>
        <legend>Dados do Produto</legend>
    <?php
    $valor = $_GET["valor"];
    $quantidade = $_GET["quantidade"];

    $total = $valor * $quantidade; //if = condição
    $desconto1 = 0 ($total * 10) = 300; 
    $desconto2 = 0 ($quantidade < 5) /7;
    $valor_total_desconto = 0;

    if($valor > 300){
        $desconto1 = ($valor * 10) / 100;
    }

    if($quantidade > 5){
        $desconto2 = $valor * .07;
    }

    $valor_total_desconto =  $total - $desconto1 - $desconto2;

    
    echo "********************* Formas de Pagamento **********************<br>";
    echo "Valor do Produto: R$ ". number_format($valor, 2, ",",".");
    echo "<br>Valor de desconto pagando à vista R$". number_format($desconto, 2, ",",".");
    echo "<br>Valor do Produto à vista: R$ ". number_format($valor_a_vista, 2, ",",".");
    echo "<br>Valor Acrescido em Pagamento parcelado: R$ " . number_format($acrescimo, 2, ",",".");
    echo "<br>Valor das 10 parcelas: R$ " . number_format($valor_parcerlas, 2, ",", ".");
    echo "<br>Valor total parcelado: R$ " . number_format($valor_total_parcelado, 2, ",", ".");

    ?>
    <br>
    </fieldset>
    <br>
    <br>
	<a href="prog5.php">Voltar</a>
    
</div>
</body>
</html>