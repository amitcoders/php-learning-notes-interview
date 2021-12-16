<?php

$fees["sonam"]["php"] = 20;
$fees["amit"]["css"] = 30;
$fees["sumit"] ["java"] = 78;
$fees["pradeep"]["html"] = 67;

    foreach($fees as $values)
    {
        foreach($values as $data)
        {
            echo $data . "<br />";
        }
    }



?>