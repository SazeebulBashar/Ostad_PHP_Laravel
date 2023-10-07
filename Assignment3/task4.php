<?php
    $studentGrades = [[70,65,85], [80,81,75], [75,68,90]];

function avgGr($studentGrades){
    foreach($studentGrades as $item){
        $sum =0;
        foreach($item as $i){
            $sum+= $i;
        }
        echo $sum/3 . "\n";
        
    }
}

avgGr($studentGrades);

?>