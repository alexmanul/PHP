Max number of 2 your entered numbers:
<?php
$a = $_GET['number1'];
$b = $_GET['number2'];
if ($a > $b) {
    echo "$a ";

} elseif ($a < $b) {
    echo "$b ";

} else
    echo "A == B";

