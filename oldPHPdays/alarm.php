<?php
function alarm_clock($day, $vacation){
	if(($day==0)||($day==6)){
		echo "10:00";
	}
	else{
		echo"7:00";
	}
}
alarm_clock(1, False);
alarm_clock(5, False) ;
alarm_clock(0, False) ;
?>	