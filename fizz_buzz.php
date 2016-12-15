<?php

echo "Enter three numbers, please!\n";

$handle = fopen ("php://stdin","r");
$number = fgets($handle);

$result = explode(" ", $number);

for ($i=1; $i<=$result[2]; $i++) {

if (($i%$result[0]==0) && ($i%$result[1] == 0)) {
	echo "FB ";
} elseif ($i%$result[0]==0) {
	echo "F ";
} elseif ($i%$result[1]==0) {
	echo "B ";
} else {
	echo $i." ";
}
}

?>
