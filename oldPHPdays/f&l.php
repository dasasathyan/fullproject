<?php
error_reporting(0);
function first_last6($nums){
		if(($nums[0]==6)||($nums[count($nums)-1]==6)){
			return "true";
		}
	return "false";	
	}
	
print first_last6([1, 2, 6]);
print first_last6([6, 1, 2, 3]);
print first_last6([13, 6, 1, 2, 3]);
?>