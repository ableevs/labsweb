<p> PHP-скрипт, в котором вычисляется значение заданного выражения (42*c-(d/2)+1)/(a^2-b-5)
для случайных аргументов из интервала [-20, 20]:
<p>
<?php
 $a=rand(-20,20);
 $b=rand(-20,20);
 $d=rand(-20,20);
 $c=rand(-20,20);
 echo ('a ='.$a);
 echo ('<br> b ='.$b);
 echo ('<br> d ='.$d);
 echo ('<br> c ='.$c);
 echo ('<br> d ='.POW($d, 2));
 echo ('<br>');
 echo ('(42*c-(d/2)+1)/(a^2-b-5) ='. (42*$c-($d/2)+1)/(POW($a, 2)-$b-5).'<br>' );
?>