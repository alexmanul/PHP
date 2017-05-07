Max number of 3 your entered numbers:
<?php
$a = $_GET['number1'];
$b = $_GET['number2'];
$c = $_GET['number3'];

if (($a > $b) && ($b > $c)) {
    echo "$a ";

} elseif (($a == $b) && ($b == $c)) {
    echo "A == B == C";

} elseif (($a < $b) && ($b > $c)) {
    echo "$b ";

} elseif (($a == $b) && ($b > $c)) {
    echo "$a ";

} elseif (($a == $c) && ($b < $c)) {
    echo "$a ";

} elseif (($b == $c) && ($a < $b)) {
    echo "$b ";

} else
    echo "$c ";


