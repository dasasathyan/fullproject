<?php
error_reporting(0);
function common_end($nums){
		if((($nums[0][0])==($numms[1][0]))||(($nums[0][count($nums)-1])==($nums[1][count($nums)-1]))){
			return "true";
		}
	return "false";	
	}
	
print common_end([1, 2, 3], [7, 3]);
print common_end([1, 2, 3], [7, 3, 2]);
print common_end([1, 2, 3], [1, 3]) ;
?>