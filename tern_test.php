<?php
echo "Enter your scores!\n";

$handle = fopen ("php://stdin","r");
$number = fgets($handle);

echo ($number < 60) ? "You do not pass the test. Prepare to retake" : "You passed the test! Congratulations!";

echo "\n";

?>