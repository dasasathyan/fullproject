<?php
//error_reporting(0);
function cigar_party($cigars, $is_weekend){
	if(($cigars>=40)&&($cigars<=60)&&($is_weekend==1)){
		echo "true";
	}
	elseif(($cigars>=40)&&($is_weekend==0)) {
		echo "truewe";
	}
	else{
		echo "false";
	}
	return $cigars;
}
cigar_party(30, 0);
cigar_party(50, 0) ;
cigar_party(70, 1);
?>