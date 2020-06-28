<?php
 function checkShape($s1, $s2, $s3) {
    if($s1 + $s2 == $s3 || $s1 + $s2 == $s3 || $s1 + $s2 == $s3){
        return "Triangle";
    }
    else
    {
        return "Not Triangle";
        }
 }

 echo checkShape();

 function checkTriangletype($s1, $s2, $s3) {
     if ($s1 !== $s2 && $s1 !== $s3 && $s3 !== $s2){
     return "Scalane";
    }

     elseif ($s1 === $s2 && $s1 === $s3){
     return "Equilateral"
     }

     else {
     return "isosceles" }
 }

 echo checkTriangleType();
 ?>