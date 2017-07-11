<?php
function has23($nums){
	if(($nums[0]==2)||($nums[count($nums)-1]==3)){
		return "True";
	}
	return "false";
}
print has23([2, 5]);
print has23([4, 3]);
print has23([7,8]);
?>