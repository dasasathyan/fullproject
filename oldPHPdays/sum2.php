<?php
function makes10($a, $b){
	if($a==10||$b==10||$a+$b==10){
		return "true";
	}
	else{
		return "false";
	}
}
print makes10(9, 10);
print makes10(9, 9);
print makes10(1, 9);
?>