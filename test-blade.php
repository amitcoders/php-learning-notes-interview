<?php


for($am=1; $am<=5; $am++)

    {
        
        // echo "this is for loop: $am <br />";
        echo  "<p style='color: red;'> first loop: $am <br />";
        if($am==4){
            break;
        }
            
    
    for($ac=1; $ac<=5; $ac++)
    {
        echo  "<p style='color: green;'> this is nested: $ac <br />";
        
        if($am==5){
            break;
        }
    }
    }





?>