<?php
function string_times($str, $n){
	$ret = '';
	for($i=0;$i<$n;$i++) {	
	$ret = $ret . $str;
	}
	return $ret;
}
print string_times('Hi', 2) . "<br/>";
print string_times('Hi', 3) . "<br/>";
print string_times('Hi', 1). "<br/>";
?>