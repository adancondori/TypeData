<?php
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
?>