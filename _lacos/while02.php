<?php

$total = 150;
$desc = 0.9;

do {
	$total *= $desc;
} while ($total > 100); 

echo $total;

?>