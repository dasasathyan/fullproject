<?php
function array_count9($nums){
	$count=0;
	(for $i=0;$i<=count($nums);$i++){
		if ($nums[$i])=9{
			$count++;
		}
	}
		return $count;
	}
print array_count9([1, 2, 9]);
print array_count9([1, 9, 9]);
print array_count9([1, 9, 9, 3, 9]);

?>