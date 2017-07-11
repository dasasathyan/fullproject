<?php
error_reporting(0);
function double_char($str){
$ret='';
for ($i=0;$i<=strlen($str)-1;$i++) {
           $ret = $ret + substr($i);
           $ret = $ret + substr($i); }
           return $ret;
}
print double_char('The');
print double_char('AAbb');
print double_char('Hi-There') ;
?>