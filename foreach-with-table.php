<?php

$amit = array("amit","amit.cotocus@gmail.com","baricoperative", "ravi", "ravi@gmail.com", "chas", "amardeep", "amardeep@cotocus.com", "chas");

    echo "<table width='200' border='2'>";

    foreach($amit as $sumit){

    echo "<tr>";

        for($cols=1;$cols<3;$cols++){

        echo "<td>".$sumit."</td>";
        

        }   

    echo "<tr>";

    }

    echo "<table>";


?>