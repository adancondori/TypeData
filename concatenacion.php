<?php
function concatenar2Texto($texto)
{
   
    echo"Buenas tardes $texto";
}


function concatenarNumyText($numero,$texto)
{
    return "{$numero}{$texto}";
    

}
concatenar2Texto(" a todos");
echo "\n";
echo concatenarNumyText(5, " cinco");

?>
