html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Senac - Curso de PHP</title>
</head>
<body>
<div>
<p> Escreva um programa que leia um numero. O programa deverá verificar se o mesmo é positivo, negativo ou neutro.
    </p>
    <hr/>
    <h2 style="text-align: center">Informações dos Produtos</h2>
    <fieldset>
        <legend>Dados do Produto</legend>
    <?php
    $numero = $_GET["n"];


    if($numero > 0){
        echo "<h1 style='text-align: center'>Positivo!</h1>";
        } else if($numero < 0){
                echo "<h1 style='text-align: center'>Negativo!</h1>";
            } else{
                echo "<h1 style='text-align: center'>Neutro!</h1>";
            }
         
    
    ?>
    <br>
    </fieldset>
    <br>
    <br>
	<a href="prog4.html">Voltar</a>
    
</div>
</body>
</html>