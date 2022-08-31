<?php
function pares($limite)
{
    
    for ( $num = 0; $num<= $limite; $num ++ )
    {
        $par=$num+1;
        if (($par % 2) == 0) 
        {
           
            echo "\n".$par;
        } 
    }
}
pares(26);
?>