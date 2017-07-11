<?php
function string_splosion($str){
	$ret = '';
	for($i=0;$i<=4;$i++) {	
	$ret += $str;
	}
	return $ret;
}
print string_splosion('Code');
print string_splosion('abc');
print string_splosion('ab');
?>