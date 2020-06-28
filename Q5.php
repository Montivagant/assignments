<?php 
function length_rec($str, $i)     
{ 

    if ($i == strlength($str))  {
}  return 0; 
    else {
        return 1 + recLenght($str, $i + 1);
    }              
} 
    
#output
$str = "ThisIsAString"; 
echo (recLenght($str, 0)); 
  
?>