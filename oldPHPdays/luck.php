<?php
function lucky_sum($a, $b, $c){
	if($a==13){
		return "0";
	}
	elseif($b==13){
		return $a;
	}
	elseif($c==13){
		return $a+$b;
	}
	else{
		return $a+$b+$c;
	}
}
print lucky_sum(1, 2, 3);
print lucky_sum(1, 2, 13);
print lucky_sum(1, 13, 3); 
?>