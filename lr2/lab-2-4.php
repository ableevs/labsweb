<HTML>
<TITLE>Аблеев Шамиль</TITLE>
<BODY>
<TABLE>
<?php
$num = range(-100, 100);
shuffle($num);
$j =0;
$k =0;
$s =0;
$mass = array_slice($num, 0, 100);
echo 'Исходный массив:<br>';
print_r($mass);
for ($i = 0; $i <= 99; $i++) { //Проверяем каждый элемент массива
	if ($mass[$i] < 0){
   		$massO[$j] = $mass[$i];
   		$j++;	
	}
}
for ($i = 0; $i <= 99; $i++) { //Проверяем каждый элемент массива
	if ($mass[$i] == 0){
   		$massO[$j] = $mass[$i];
   		$j++;	
	}
}
for ($i = 0; $i <= 99; $i++) { //Проверяем каждый элемент массива
	if ($mass[$i] > 0){
   		$massO[$j] = $mass[$i];
   		$j++;	
	}
}
echo '<br>Массив с перегруппированными элементами (отрицательные; нулевые; положительные):<br>';
print_r($massO);
?>
</TABLE>
</BODY>
</HTML>