<?php
function f($n){
    if ($n == 0) return 0 ;
    if ($n == 1) return 1;
    return f($n-1) + f($n-2);
}

function PrintFibo($n){
    for ($i=0; $i<$n; $i++){
        echo f($i) . " ";
    }
}

PrintFibo(15);


?>