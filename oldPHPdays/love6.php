<?php
function love6($a, $b){
	if(($a==6)||($b==6)||($a+$b==6)||(abs($a-$b)==6)){
		return "true";
	}
	else{
		return "false";
	}
}
print love6(6, 4);
print love6(4, 5);
print love6(1, 5);
?>