<?php
function no_teen_sum($a, $b, $c){
	if(($a>=13)&&($a<=19)){
			echo $b+$c;
		}
		elseif(($b>=13)&&($b<=19)){
			echo $a+$c;
		}
		elseif(($c>=13)&&($c<=19)){
			echo $a+$b;
		}
		else{
			return $a+$b+$c;
		}
	}
print no_teen_sum(1,2,3);
print no_teen_sum(2,13,1) ;
print no_teen_sum(2,1,14) ;
?>