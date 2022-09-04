<?php
function numberisprime($number)
{
    if(!is_numeric($number))
        
        return false;
    
    for ($i = 2; $i < $number; $i++) {
        
        if (($number % $i) == 0) {
            
     // The number is not prime
            return false;

        }

    }


// the number is prime
    return true;
}
$number = 7;

if(numberisprime($number)){
    echo 'The number is prime';
}else{
    echo 'the number is not prime';
}
?>