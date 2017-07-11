<?php
function date_fashion($you, $date){
	if(($you>8)||($date>8)){
		echo "2";
	}
	elseif(($you<=2)||($date<=2)){
		echo "0";
	}
	else{
		echo "1";
	}
}
date_fashion(5, 10);
date_fashion(5, 2);
date_fashion(5, 5);
?>