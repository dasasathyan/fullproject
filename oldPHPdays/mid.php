<?php
function middle_way($a, $b){
	
		return [$a[1],$b[1]];
	
	
}
print_r (middle_way([1, 2, 3], [4, 5, 6]));
print_r (middle_way([7, 7, 7], [3, 8, 0]));
print_r (middle_way([5, 2, 9], [1, 4, 5]));
?>