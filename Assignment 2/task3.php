<?php


$first = 0;
$second = 1;

echo $first . ' ' . $second . ' ';

for ($i = 2; $i < 10; $i++) {
    $third = $first + $second;
    if ($third > 100){
        break;
    }
    echo $third . ' ';
    $first = $second;
    $second = $third;

}


?>