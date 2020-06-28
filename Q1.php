<?php

function Palindrome($number){   
    $temp = $number;   
    $new = 0;   
    #i used floor to roud the fractios down
    while (floor($temp)) {   
        $d = $temp % 10;   
        $new = $new * 10 + $d;   
        $temp = $temp/10;   
    }   
    if ($new == $number){   
        return 1;   
    } 
    else{ 
        return 0; 
    } 
}   
  
#Code output with random no.
$original = 2992;  
if (Palindrome($original)){   
    echo "True";   
}  
else {   
echo "False";   
} 

#output should be True
?>   