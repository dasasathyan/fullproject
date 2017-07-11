<?php 
function centered_average($nums){
	$min=min($nums);
	$max=max($nums);
	unset($max);
	return $nums;
}
print_r (centered_average([1, 2, 3, 4, 100]));
print_r (centered_average([1, 1, 5, 5, 10, 8, 7]));
print_r (centered_average([-10, -4, -2, -4, -2, 0])) ;
?>