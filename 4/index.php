<?php

use maksim\Log;
include 'core/EquationInterface.php';
include 'core/LogInterface.php';
include 'core/LogAbstract.php';
include 'vanuta/MaksimException.php';
include 'vanuta/LinearEq.php';
include 'vanuta/QuadraticEq.php';
include 'vanuta/MyLog.php';

function entercheck($num,$letter)
{
    for (;;) {
        $num=readline("Enter $letter=");
        if(is_numeric($num))
        {
            return $num;
        }
        else {
            echo "Inappropriate symbols. Can only type numbers and dot \n";
        }
    }
    return;
}

$a=entercheck($a,'a');
$b=entercheck($b,'b');
$c=entercheck($c,'c'); 

echo "\n vars: $a,$b,$c \n";

try {
    $eq=new maksim\QuadraticEq();
    Log::log("Roots are ". implode(", ", ($eq->solve($a,$b,$c))));
} catch (maksim\MaksimException $e) {
    Log::log("Error: ".$e->getMessage());
}



Log::write();
