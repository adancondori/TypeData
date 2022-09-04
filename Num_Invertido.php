<?php
function reverseNumber(int $num1) 
{
    $num1=(string)$num1;
    $result="";

    for($i=strlen($num1)-1;$i>=0;$i--)
    {
        $result.=$num1[$i];
    }
    return (int)$result;
}
//Ejemplo
$num1=12345;
$invertido=reverseNumber($num1); 
echo "El número ingresado es: $num1";
echo "\n";
echo "El número invertido es: $invertido";

?>