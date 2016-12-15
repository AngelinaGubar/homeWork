<?php

echo "Enter your scores!\n";

$handle = fopen ("php://stdin","r");
$number = fgets($handle);

if (($number>90) && ($number<=100)) {
	echo "5 excellent";
} elseif (($number>74) && ( $number<90)) {
	echo "4 good";
} elseif (($number>59) && ($number<75)) {
	echo "3 satisfactorily ";
} else echo "2 is a very bad :( ";

echo "\n";

?>