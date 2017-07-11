<?php
function pos_neg ($a,$b,$negative){
	if(($a<0||$a>0)&&($b<0||$b>0)){
		return "true";
	}
	else{
		return "false";
	}
}
print pos_neg(1, -1, False);
print pos_neg(-1, 1, False);
print pos_neg(-4, -5, True);
?>