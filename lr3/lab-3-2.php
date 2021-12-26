<DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
  <TITLE> Аблеев Ш.И.</TITLE>
</head>
<body>
    <h2> 3.2</h2>
<FORM method="post" action="<?php print $PHP_SELF ?>">
a: <INPUT type="text" name="a" size="3">
b: <INPUT type="text" name="b" size="3">
 <p><label for="font">Выбор действия: </label><select name="font" id="font">
      <option value="summation">+</option>
	  <option value="substraction">-</option>
	  <option value="division">/</option>
	  <option value="miltiply">*</option>
	</select>
   </p>
 <P> <INPUT type="submit" name="obr" value="Выполнить">
</FORM>
<?
$s2="Результат: ";
switch ($_POST["font"]) {
  case summation:
  $s1=$_POST["a"]+$_POST["b"];
  break;
  case substraction:
  $s1=$_POST["a"]-$_POST["b"];
  break;
  case division:
  $s1=$_POST["a"]/$_POST["b"];
  break;
  case miltiply:
  $s1=$_POST["a"]*$_POST["b"];
  break;
}
echo $s2 . $s1;
?>
 </body>
 </html>