<?php
error_reporting(0);
function max_end3($nums){
	if($nums[count($nums)-1]>$nums[0]){
	$t=$nums[count($nums)-1];
	}
	else{
	$t=$nums[0];
	}
	return array_fill(0,count($nums),$t);
	//return $ret;
}
print_r (max_end3([1, 2, 3,4,6,9,8]));
print_r (max_end3([11, 5, 9,4,8,9,12,34]));
print_r (max_end3([9, 11, 3,56,7,9,0,3,0]));
?>