<?php

$a =10;
$b = 7;
$c= 12;

if($a>$b)
    {
        
        echo "this is first condition <br />";
        echo  "<p style='color: red;'> this is first condition</p> <br />";
        echo "<h1 style='color: green;'>this is first condition </h1><br />";
        echo "<h2 style='color: blue'>this is first condition </h2><br />";
        echo "<h3 style='color:  black'>this is first condition </h3><br />";
        echo "<h4 style='color: green'>this is first condition </h4><br />";
        echo "<h5 style='color: silver'>this is first condition</h5> <br />";
        echo "<h6 style='color: golden'>this is first condition </h6><br />";
        echo "<i style='color: pink'>this is first condition </i><br />";
        echo "<b style='color: yellow'>this is first condition </b><br />";
    
    if($b>$c)
        {
            echo "this is nested condtion";
        }

        else{
            echo "false condition";
        }
    
    }
    else{
        echo "this is first flase condition";   
    }

?>