<?php
$age = array(
	"vimi" => array(1, 2, 3, 4),
	"jake" => array(1, 2, 3, "vimi"));

foreach($age as $i_value) {
	foreach ($i_value as $j_key => $j_value) {
		echo "$j_key" . ":" . "$j_value    ";
	}
	echo "\n";
}

