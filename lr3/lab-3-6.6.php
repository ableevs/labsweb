<html>
<head>
  <meta charset="utf-8" />
  <TITLE> Аблеев Ш.И.</TITLE>
</HEAD>
<BODY>
    <h2>  Задание 3.6.6 </h2>
<h2> Задание:</h2>6. Подсчитать число различных гласных, входящих в данный текст
<FORM method="post" action="<?php print $PHP_SELF ?>">
 <p>Произвольный текст: <br>
 <INPUT type="text" name="a" size="30"><br>
 <input type ="submit" value="Проверить">
 <input type ="reset" name="ochistit" value ="Очистить" >
</FORM>
<?php
print("a -".substr_count($_POST['a'],"а")."<br>" );
print("у -".substr_count($_POST['a'],"у")."<br>" );
print("о -".substr_count($_POST['a'],"о")."<br>" );
print("ы -".substr_count($_POST['a'],"ы")."<br>" );
print("и -".substr_count($_POST['a'],"и")."<br>" );
print("э -".substr_count($_POST['a'],"э")."<br>" );
print("я -".substr_count($_POST['a'],"я")."<br>" );
print("ю -".substr_count($_POST['a'],"ю")."<br>" );
print("е -".substr_count($_POST['a'],"е")."<br>" );
print("ё -".substr_count($_POST['a'],"ё")."<br>" );
?> 

</BODY> 
</HTML>