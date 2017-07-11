<?php
error_reporting(0);
function same_first_last($nums){
		if(($nums[0]==1)&&($nums[count($nums)-1]==$nums[0])){
			return "true";
		}
	return "false";	
	}
	
print same_first_last([1, 2, 3]);
print same_first_last([1, 2, 3, 1]);
print same_first_last([1, 2, 1]);
?>