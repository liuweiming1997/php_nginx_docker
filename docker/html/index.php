<?php 
	$one = 1;
	$date = '2018-8-9 14:20';
	echo(strtotime($date));
	echo("\n");
	$date = date('Y-m-d 00:00:00', strtotime($date));
	print($date);
	print("\n");
	$end_date = strtotime('now') - strtotime('now') % 60; // 获取分钟整数
	echo($end_date);
 ?>