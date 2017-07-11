<?php
function array_front9($nums){	
	for ($i=0;$i<=3;$i++){
		if ($nums[$i]==9){
			return "true";
		}
	}
	return "false";	
}	
print array_front9([1, 2, 9, 3, 4]);
print array_front9([1, 2, 3, 4, 9]);
print array_front9([1, 2, 3, 4, 5]);

?>