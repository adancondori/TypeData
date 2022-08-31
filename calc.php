<?php
class Calc {

// Concatenar dos textos - Jonathan

function concatenarTexto($texto)
{
  
echo"Buenas tardes $texto";
}


function concatenarNumyText($numero,$texto)
{
    return "{$numero}{$texto}";
}
concatenarTexto(" a todos");
echo "\n";
echo concatenarNumyText(5, " cinco");

// Suma y resta de dos numeros - Nahely
 
function sumadosnumeros($x, $y)
{
  $num1 = $x;
  $num2 = $y;
  $result = $x + $y;
 return $result;
}

print(sumadosnumeros (5, 6))

function restadosnumeros($x, $y)
{
    $num1 = $x;
    $num2 = $y;
    $result = $x - $y;
    return $result;
    }
    print(restadosnumeros (5, 6))

suma de dos numeros - yadira

function suma($number1, $number2)
{
    $result=$number1+$number2;
    echo  "El resultado de la suma es:".$result;
}
function resta($number1, $number2)
{
    $result=$number1-$number2;
    echo  "El resultado de la resta es:".$result;
}
  sumar(25.5, 14.3); 
  echo "\n";
  resta(25.5, 14.3);
}

?>