<html>
<head>
  <meta charset="utf-8" />
  <TITLE> Аблеев Ш.И.</TITLE>
</HEAD>
<BODY>
    <h2>  Задание 3.6.4 </h2>
<h2> Задание:</h2>4. Пользователем задается произвольный текст и два символа. В тексте заменить все вхождения первого символа на второй.
<FORM method="post" action="<?php print $PHP_SELF ?>">
 <p>Произвольный текст: <br>
 <INPUT type="text" name="a" size="30">
  <p>Первый символ : <br>
 <INPUT type="text" name="b1" size="5">
 <p>Второй символ : <br>
 <INPUT type="text" name="b2" size="5"><br><br>
 <input type ="submit" value="Проверить">
 <input type ="reset" name="ochistit" value ="Очистить" >
</FORM>
Исходный текст: <br />
<?php
$r1="";
print($_POST['a']."<br><br>" );
$str=str_replace($_POST['b1'],$_POST['b2'],$_POST['a']);
print("Строка, где все вхождения первого символа заменены на второй: <br /> ".$str);
?> 

</BODY> 
</HTML>