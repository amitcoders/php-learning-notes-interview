<?php

    $fees = array("amit"=>677, "sumit"=>878, "raju"=>878, "ravi"=>878);
    
    $keys = array_keys($fees);

    for($i=0; $i<3; $i++)
        {
            echo $keys[$i] . "<br />";
        }


  
?>