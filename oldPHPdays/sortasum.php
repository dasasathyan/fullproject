<?php
function sorta_sum($a, $b){
	if(($a+$b>=10)&&($a+$b<=19)){
		echo "20";
	}
	else{
		echo $a+$b;
	}
}
sorta_sum(3, 4) ;
sorta_sum(9, 4) ;
sorta_sum(10, 11);
?>	 