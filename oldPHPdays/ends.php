<?php
error_reporting(0);
function make_ends($nums){
return [$nums[0],$nums[count($nums)-1]];
}
print_r (make_ends([1, 2, 3])); 
print_r (make_ends([1, 2, 3, 4]));
print_r (make_ends([7, 4, 6, 2]));
?>