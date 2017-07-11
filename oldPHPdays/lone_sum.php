<?php
function lone_sum($a, $b, $c){
		if(($a==$b)&&($b==$c)&&($c==$a)){
			return "0";
		}
		elseif($a==$b){
			return $c;
		}
		elseif($a==$c){
			return $b;
		}
		elseif($b==$c){
			return $a;
		}
		else{
			return $a+$b+$c;
		}
	
}
print lone_sum(1, 2, 3);
print lone_sum(3, 2, 3);
print lone_sum(3, 3, 3); 
?>