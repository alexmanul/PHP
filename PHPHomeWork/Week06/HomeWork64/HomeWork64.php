<?php
$a = $_GET['number1'];
$b = $_GET['number2'];
$sum = 0;

// With cycle
if ($a < $b) {
    for ($i = $a; $i <= $b; $i++) {
        $sum = $sum + $i;
    }
    echo "$sum ";
}

// Without cycle
if ($a < $b) {
   $sum = ($b * ($b + 1))/2 - (($a-1)*(($a-1) + 1))/2;
}
echo "$sum ";

