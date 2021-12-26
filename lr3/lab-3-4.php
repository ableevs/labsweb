<DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <TITLE> Аблеев Ш.И.</TITLE>
</head>
<body>
      <h2> 3.4</h2>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 
 Введите логин:
    <INPUT type="text" name="a" size="25">
	<INPUT type="hidden" name="h" value="guest">
	<INPUT type="hidden" name="b" value="root">
    <INPUT type="hidden" name="n" value="usatu">
  <P> введите "guest" если вы гость
  <P> <INPUT type="submit" name="obr" value="Продолжить">
</FORM>
<?
if (isset($_POST["obr"])) {
if ($_POST["a"]==$_POST["h"]) { echo ("Гость!");
 }else {
if ($_POST["a"]==$_POST["b"]) { echo ("Суперпользователь !");
 }else {
if ($_POST["a"]==$_POST["n"]) { echo ("Студент УГАТУ");}}}}
?>
  </body>
 </html>