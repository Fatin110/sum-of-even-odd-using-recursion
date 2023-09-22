<?php
//sum of even and odd number in a given range using recursion in php
function evenOdd($start, $end) {
	static $evenSum = 0;
	static $oddSum = 0;

	if ($start > $end) {
		echo "Even number sum is $evenSum\n";
		echo "Odd number sum is $oddSum\n";
		return;
	}

	if ($start % 2 == 0) {
		$evenSum = $evenSum + $start;
		evenOdd($start + 1, $end);
	} else {
		$oddSum = $oddSum + $start;
		evenOdd($start + 1, $end);
	}
}

evenOdd(1, 20);
