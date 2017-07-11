<?php
error_reporting(0);
function array123($nums){	
	for ($i=0;$i<count($nums);$i++){
		if (($nums[$i]==1)&&($nums[$i+1]==2)&&($nums[$i+2]==3)){
			return "true";
		}
	}
	return "false";	
}	
print array123([1, 1, 2, 3, 1]);
print array123([1, 1, 2, 4, 1]);
print array123([1, 1, 2, 1, 2, 3]); 

?>