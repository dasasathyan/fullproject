<?php 
function big_diff($nums){
	$min=min($nums);
	$max=max($nums);
	echo $max-$min;
}
 big_diff([10, 3, 5, 6]);
 big_diff([7, 2, 10, 9]);
 big_diff([2, 10, 7, 2]);
?>