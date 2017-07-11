<?php
function near_hundred($n){
	if(($n<100&& $n>=90)||($n<200&&$n>=190)){
	return "true";
}
	else{
		return "false";
	}
}
print near_hundred(93);
print near_hundred(90);
print near_hundred(89);
?>