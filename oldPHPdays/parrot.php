<?php
function parrot_trouble($trouble,$h){
	if($h<7 || 20<$h){
		return "true";
	}
	else{
		return "false";
	}
}
print parrot_trouble(True, 6);	
print parrot_trouble(True, 7) ;
print parrot_trouble(False, 6);
?>