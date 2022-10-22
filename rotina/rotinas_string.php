<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css" />
    <title>Senac - Curso de PHP</title>
</head>

<body>
    <div>
        <h1 style="text-align: center;">
            Procedimentos, Funções e Métodos.
        </h1>
        <h4 style="text-align: center;">Funções com String</h4>
        <hr>
        <br>
      
        <?php
        
     require_once "funcoes_string.php";
     echo "Teste de quebra de linha com wordwrap";
     pulaLinha(0);
     $texto = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque eveniet adipisci beatae praesentium dolorem similique autem,
      ex nulla quisquam consequuntur exercitationem animi modi, perferendis repudiandae in voluptatum, doloribus provident ipsa! Lorem ipsum dolor 
      sit amet consectetur, adipisicing elit.";
     //$resposta = wordwrap($texto, 10, "<br>", false); //Quebra por palavra
    //$resposta = wordwrap($texto, 10, "<br>", true); //Quebra por letras

    $resposta = wordwrap($texto, 60, "<br>");
    echo $resposta;
    pulaLinha(2);

    echo "Quantidade de letras no texto com a função strlen: ". strlen($texto);
    pulaLinha(2);

    echo "Utilização do: trim() - para remoção de espaçõs...";
    $nome = "         Matheus Murta da Mota  ";
    pulaLinha(0);
    echo $nome;
    pulaLinha(0);
    echo "Quantidade de letras: " . strlen($nome);
    pulaLinha(0);
    echo "Quantidade de letras: " . strlen($nome);
    pulaLinha(0);
    // $nome_sem_espacos = trim($nome);
    echo "Quantidade de letras depois do trim(): " . strlen(trim($nome));



    echo "Quantidade de palavras em uma string com: str_world_count()";
    pulaLinha(0);
    $teste = str_world_count($nome, 0);
    echo "Qtd de palavras - com a opção: 0 " . $teste;
    pulaLinha(0);
    $teste = str_world_count($nome, 1);
    echo "Qtd de palavras - com a opção: 0 ";
    print_r($teste);
    pulaLinha(0);
    $teste = str_world_count($nome, 2);
    echo "Qtd de palavras - com a opção: 0 ";
    print_r($teste);
    pulaLinha(2);

    echo "Função explode()";
    $data_nascimento = "15/12/1978";
    $vetor = explode("/", $data_nascimento);
    pulaLinha(0);
    print_r($vetor);
    pulaLinha(2);

    echo "Função implode()";
    $data_nascimento2 = implode("-", $vetor);
    pulaLinha(0);
    echo $data_nascimento2;
    pulaLinha(2);

    echo "Função str_split()";
    $novo_vetor = str_split("Marcio");
    pulaLinha(0);
    print_r($novo_vetor);
    pulaLinha(2);

    echo "Função chr()";
    pulaLinha(0);
    echo "A letra de código 77 é " . chr(77);
    pulaLinha(2);

    echo "Função ord()";
    pulaLinha(0);
    echo "O código da letra A é " . org("A");
    pulaLinha(2);

    


      ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>