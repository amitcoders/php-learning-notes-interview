<?php

$a = 16;
$b = 8;
$c = 10;
$d = 12;



if($a > $b && $a> $c && $a>$d ){
    echo "this is grater . $b";


}
    elseif($b>$a && $b>$c && $b>$d){
        echo "this is second greater . $b";
    }

    elseif($c>$a && $c>$d && $c>$a){
        echo "this is third greater . $c";
    }

    elseif($d>$a && $d>$c && $d>$d){
        echo "this is second greater . $d";
    }


// if($a>$b){
//     echo "$a is greater than $b";
// }
//     else{
//         echo "$b is smaller than $a";
//     }


?>