<?php
error_reporting(0);
function has22($nums){
	for($i=0;$i<count($nums);$i++){
			if(($nums[$i]==2)&&($nums[$i+1]==2)){
			return "true";
		}	
	}
	return "false";	
}
print has22([1, 2, 2]);
print has22([1, 2, 1, 2]);
print has22([2, 1, 2]);
?>