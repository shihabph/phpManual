<?php
	$a = [1 => 'One', 2 => 'Two', 3 => 'Three', 4 => 'Four', 7 => 'Seven', 8 => 'Eight'];
	echo "<br>";
	foreach ($a as $key => $value) {

		if ($key % 2 == 0) {
			echo $value . ' ';
		}
	}
