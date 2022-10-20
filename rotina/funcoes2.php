<?php
//Funções em PHP

function escreva_texto2($qualquer_coisa){
    return $qualquer_coisa;
    }

function soma($num1, $num2){
        $total = $num1 + $num2;
        echo "<h4 style='text-align: center;'>A soma de $num1 + $num2 = $total </h4>";
        pulaLinha(0);
        return $total;
    }
    
function soma2(){
        $valores = func_get_args();//Pega os argumentos e devolve um array;
        $qtd1 = count($valores);
        $qtd2 = func_num_args();// Retorna um inteiro que representa a quantidade de argumentos;
        $total = 0;
        echo "<h4 style='text-align: center;'>A soma: ";
        for($i = 0; $i < $qtd1; $i++){
            $total += $valores[$i];// $total = $total + $i 
            echo $valores[$i] . ( $i == $qtd1 - 1 ? "=" : "+") ;
        }
        //echo "<h4 style='text-align: center;'>A soma é = $total </h4>";
        echo $total .";</h4>";
        pulaLinha(0);
        //15 + 78 + 55 + 1 = total
    }
    
function subtracao($num1, $num2){
        $total1 = $num1 - $num2;
        echo "<h4 style= 'text-align: center;>A subtração de $num1 - $num2 = $total </h4>";
        return $total;
        
    }
    
    function multiplicacao($num1, $num2){
        $total2 = $num1 * $num2;
        echo "<h4 style='text-align: center;'>A multiplicação de $num1 * $num2 = $total </h4>";
        pulaLinha(0);
        return $total2;
    }
    
    function divisao($num1, $num2){
        if($num2 == 0){
            echo "Não é possível dividir por zero...";
        } else {
            $total = $num1 / $num2;
            echo "<h4 style='text-align: center;>A divisão de $num1 / $num2 = $total </h4>";
        }
    }

    

