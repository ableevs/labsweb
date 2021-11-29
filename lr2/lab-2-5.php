*<HTML>
<TITLE> Аблеев Шамиль</TITLE>
<BODY>
<TABLE>
<?php
$k = 0;

function te($n, $l) 
{
	for ($j = 0; $j <= 12; $j++) {
 		
 		$sum=$n+$l;
 		return $sum;
	}
}
$num = range(-100, 100);
shuffle($num);
$mass = array_slice($num, 0, 12);
echo 'Исходный массив P:<br>';
print_r($mass);
for ($i = 0; $i <= 5; $i++) { //Проверяем каждый элемент массива
	$sum[$k]=te($mass[$i], $mass[$i+6]);
	$k++;
	$sum[$k]=te($mass[$i], $mass[$i+5]);
	$k++;
	$sum[$k]=te($mass[$i], $mass[$i+4]);
	$k++;
	$sum[$k]=te($mass[$i], $mass[$i+3]);
	$k++;
	$sum[$k]=te($mass[$i], $mass[$i+2]);
	$k++;
	$sum[$k]=te($mass[$i], $mass[$i+1]);
	$k++;
	//
	$sum[$k]=te($mass[$i+1], $mass[$i+6]);
	$k++;
	$sum[$k]=te($mass[$i+1], $mass[$i+5]);
	$k++;
	$sum[$k]=te($mass[$i+1], $mass[$i+4]);
	$k++;
	$sum[$k]=te($mass[$i+1], $mass[$i+3]);
	$k++;
	$sum[$k]=te($mass[$i+1], $mass[$i+2]);
	$k++;
	$sum[$k]=te($mass[$i+1], $mass[$i]);
	$k++;
	//
	$sum[$k]=te($mass[$i+2], $mass[$i+6]);
	$k++;
	$sum[$k]=te($mass[$i+2], $mass[$i+5]);
	$k++;
	$sum[$k]=te($mass[$i+2], $mass[$i+4]);
	$k++;
	$sum[$k]=te($mass[$i+2], $mass[$i+3]);
	$k++;
	$sum[$k]=te($mass[$i+2], $mass[$i+1]);
	$k++;
	$sum[$k]=te($mass[$i+2], $mass[$i]);
	$k++;
	//
	$sum[$k]=te($mass[$i+3], $mass[$i+6]);
	$k++;
	$sum[$k]=te($mass[$i+3], $mass[$i+5]);
	$k++;
	$sum[$k]=te($mass[$i+3], $mass[$i+4]);
	$k++;
	$sum[$k]=te($mass[$i+3], $mass[$i+2]);
	$k++;
	$sum[$k]=te($mass[$i+3], $mass[$i+1]);
	$k++;
	$sum[$k]=te($mass[$i+3], $mass[$i]);
	$k++;
	//
	$sum[$k]=te($mass[$i+4], $mass[$i+6]);
	$k++;
	$sum[$k]=te($mass[$i+4], $mass[$i+5]);
	$k++;
	$sum[$k]=te($mass[$i+4], $mass[$i+3]);
	$k++;
	$sum[$k]=te($mass[$i+4], $mass[$i+2]);
	$k++;
	$sum[$k]=te($mass[$i+4], $mass[$i+1]);
	$k++;
	$sum[$k]=te($mass[$i+4], $mass[$i]);
	$k++;
	//
	$sum[$k]=te($mass[$i+5], $mass[$i+6]);
	$k++;
	$sum[$k]=te($mass[$i+5], $mass[$i+4]);
	$k++;
	$sum[$k]=te($mass[$i+5], $mass[$i+3]);
	$k++;
	$sum[$k]=te($mass[$i+5], $mass[$i+2]);
	$k++;
	$sum[$k]=te($mass[$i+5], $mass[$i+1]);
	$k++;
	$sum[$k]=te($mass[$i+5], $mass[$i]);
	$k++;
	//
	$sum[$k]=te($mass[$i+6], $mass[$i+5]);
	$k++;
	$sum[$k]=te($mass[$i+6], $mass[$i+4]);
	$k++;
	$sum[$k]=te($mass[$i+6], $mass[$i+3]);
	$k++;
	$sum[$k]=te($mass[$i+6], $mass[$i+2]);
	$k++;
	$sum[$k]=te($mass[$i+6], $mass[$i+1]);
	$k++;
	$sum[$k]=te($mass[$i+6], $mass[$i]);
	$k++;
}
for ($i = 0; $i < $k; $i++) { 
	for ($j = 0; $j <= 11; $j++) { 
		if (($sum[$i]<>$mass[$j]) && ($mass[$j]>0)){
			$n[$l] = $mass[$j];
			$l++;
		}
	} 
}
echo '<br> Мин. натуральное число, не представимое в виде суммы элементов массива Р: ';
print(min($n));
?>
</TABLE>
</BODY>
</HTML>