<?php

    $laptop[1][1] = "amit";
    $laptop[1][2] = "sumit"; 
    $laptop[2][0] = "raj";
    $laptop[2][1] = "zed";
    $laptop[2][2] = 30;


    for($i=0; $i<count($laptop); $i++)
    {
        for($j=0; $j<count($laptop[$i]); $j++)
        {
            echo $laptop[$i][$j] . "<br />";
        }
    }

    echo "<br />";


?>