<?php
function PrintEvenNumbers($start, $end, $step) {
    for ($i = $start; $i <= $end; $i+=$step) {
        if($i%2 != 0){
            $i++;
        }

        echo $i . " ";
    }
}

PrintEvenNumbers(1,20,2);


// -------------------------------While Loop-------------------------------------------
$i = 2;
while ($i <= 20){
    echo $i . " ";
    $i+=2;
}
// ---------------------------------------Do While Loop --------------------------------
$x = 1;
do {
  echo  $x . " ";
  $x++;
} while ($x <= 5);

?>