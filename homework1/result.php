<?php
	$m = $_GET["input1"];
	$n = $_GET["input2"];

	echo "input1 is ：".$m."<br>";
	echo "input2 is ：".$n."<br>";
	echo "<table border=\"1\">";	
		for ($i=0; $i <= $m; $i++) { 
			echo "<tr>";
			for ($j=0; $j <= $n; $j++) { 
				echo "<td>";
				echo $i."*".$j."=".$i*$j."  ";
				echo "</td>";
			}
			echo "</tr>";
		}
	echo "</table>";
	
?>