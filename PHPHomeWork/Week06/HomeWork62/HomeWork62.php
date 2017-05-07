<?php
$a = $_GET['number1'];
$b = $_GET['number2'];

if ($a < $b) {
    for ($i = $a; $i <= $b; $i++) {
        print "$i ";
    }
}



