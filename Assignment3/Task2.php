<?php
$numbers = [1,2,3,4,5,6,7,8,9,10];


function evenRM($n){
    return $n % 2 != 0;
}
function evenRemover($n){
    $oddArr = array_filter($n, 'evenRM');
    print_r($oddArr);

}

evenRemover($numbers);
?>