<?php
	$count_my_page = ("hitcounter.txt");
	$hits = file($count_my_page);
	$hits[0] = $hits[0] + 1;
	$fp = fopen($count_my_page , "w");
	fputs($fp , "$hits[0]");
	fclose($fp);
	echo "<h2> Total page hits: $hits[0] </h2>";
	//echo $hits[0];
?>
