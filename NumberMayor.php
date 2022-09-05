<?php
function getNumberMayor(int $num1, int $num2, int $num3)
{

    if (($num1 > $num2) or ($num1 > $num3))
    {
        return $num1;
    }
    elseif (($num2 > $num3) or ($num2 > $num3))
    {
        return $num2;
    }
    elseif (($num3 > $num2) or ($num3 > $num1))
    {
        return $num3;
    }

}

$num1 = 500;
$num2 = 66;
$num3 = 455;
if (getNumberMayor($num1, $num2, $num3))
{
    echo "$num1 is greater than $num2 y $num3";
}
elseif (getNumberMayor($num2, $num3))
{
    echo "$num2 is greater than $num1 y $num3";
}

else
{
    echo "$num3 is greater than $num2 y $num1";
}
