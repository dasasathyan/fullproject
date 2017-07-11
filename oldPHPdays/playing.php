<?php
//error_reporting(0);
function squirrel_play($temp, $is_summer){
	if(($temp>=60)&&($temp<=90)&&($is_summer==0)){
		echo "true";
	}
	elseif(($temp>=60)&&($temp<=100)&&($is_summer==1)) {
		echo "truewe";
	}
	else{
		echo "false";
	}
	return $temp;
}
squirrel_play(70, 0);
squirrel_play(95, 0) ;
squirrel_play(95, 1);
?>