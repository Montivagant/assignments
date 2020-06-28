<?php
#using Iterative function 
function revers($num) 
{ 
    $rev_num = 0; 
    while($num > 1) 
    { 
        $rev_num = $rev_num * 10 +  
                        $num % 10; 
        $num = (int)$num / 10; 
    } 
    return $rev_num; 
} 
  
#using random no. to try out the output
$num = 324325; 
echo "This no. is reversed ",  
       revers($num); 
  
#output should be : 523423
?> 