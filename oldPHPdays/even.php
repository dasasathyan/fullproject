<?php
function count_evens($nums){
	$ret=0;
	for($i=0;$i<count($nums);$i++){
		if($nums[$i]%2==0)
		$ret++;
	}
	return $ret;
	
}
print count_evens([2, 1, 2, 3, 4]);
print count_evens([2, 2, 0]);
print count_evens([1, 3, 5]);
?>