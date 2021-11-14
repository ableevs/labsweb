<HTML>
<TITLE> Аблеев Ш.И. ПИ-323 - Задача № 1-3 - Вариант 7</TITLE>
<BODY>
<TABLE>
<?php
	$N = rand(1, 499);
	echo 'N = ' . $N . '<br>';
		for ($i = 1; pow($i, 2) <= $N; $i++) {
    		for ($j = 1; pow($j, 2) <= $N; $j++) {
    			for ($k = 1; pow($k, 2) <= $N; $k++) {
       				if (pow($i, 2) + pow($j, 2) + pow($k, 2) == $N) {
            				echo 'Можно представить в виде суммы квадратов ' . $i . '^2, ' . $j . '^2 '. $k . '^2' ;
            				return true;
        			}
        		}
    		}
		}

	echo 'Число ' . $N . ' невозможно представить в виде суммы квадратов трёх целых чисел';
return false;
?>
</TABLE>
</BODY>
</HTML>