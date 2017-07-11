<html>
<head></head>
<body>
<?php
function sleepIn($weekday, $vacation){
if (! $weekday || $vacation) {
	return "true";
}
	else { 
		return "false"; 
}

}

print sleepIn(false, false);
print sleepIn(true, false);
print sleepIn(false, true);
?>
</body>