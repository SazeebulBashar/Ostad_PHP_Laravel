<?php
$grades = [85, 92, 78, 88, 95];

function revSort($grades){
    rsort($grades);
    print_r($grades);
}

revSort($grades);
?>