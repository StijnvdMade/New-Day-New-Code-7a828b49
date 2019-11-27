<?php
$input = intval($argv[1]);
$wisselgeld = array(50, 20, 10, 5, 2 , 1 );
foreach ($wisselgeld as $moela) {
    $amount = floor($input/$moela);
    if ($amount != 0) {
        $input -=($amount * $moela);
        if ($moela >= 1){ 
            echo "$amount x  $moela euro \n ";
        }
    }
}

?>