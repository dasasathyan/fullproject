<?php
function round_sum($a, $b, $c){
	$t='';
	$t=$a+$b+$c;
	return round($t/10)*10;
}
print round_sum(16, 17, 18);
print round_sum(12, 13, 14);
print round_sum(6, 4, 4);
?>