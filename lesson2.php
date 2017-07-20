<?php

$x = rand(0,100);
echo "Число ".$x;

$var1 = 1;
$var2 = 1;
$var3 = 0;
for (;;){ 
	if ($var1 > $x){
	echo ' задуманное число НЕ входит в числовой ряд';
	break;
	}

	elseif ($var1 == $x) {
	echo " задуманное число входит в числовой ряд";
	break;
	}
	else {
	$var3 = $var1;
	$var1 += $var2;
	$var2 = $var3;
	}	
}
