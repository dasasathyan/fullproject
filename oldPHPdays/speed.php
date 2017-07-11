<?php
function caught_speeding($speed, $is_birthday){
	if($is_birthday==0){
	if($speed<=60){
		echo "0";
	}
	elseif(($speed>=61)&&($speed<=81)){
		echo "1";
	}
	else{
		echo "2";
	}
	return $speed;
}
	if($is_birthday==1){
		echo "0";
	}
}
caught_speeding(60, 0);
caught_speeding(65, 0);
caught_speeding(65, 1) ;
?>