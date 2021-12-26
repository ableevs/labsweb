<html>
<head>
  <meta charset="utf-8" />
  <TITLE> Аблеев Ш.И.</TITLE>
</HEAD>
<BODY>
	<h2>  Задание 3.6.2 </h2>
<h2> Задание:</h2>2. Проверить, можно ли из букв, входящих в слово А, составить слово В
<FORM method="post" action="<?php print $PHP_SELF ?>">
 <p>Введите слово "А": <br>
 <INPUT type="text" name="a" size="30">
  <p>Введите слово "B": <br>
 <INPUT type="text" name="b" size="30"><br><br>
 <input type ="submit" value="Проверить">
 <input type ="reset" name="ochistit" value ="Очистить" >
</FORM>
<?php
$k=0;
$exA=array_unique (preg_split('//', $_POST['a'], -1, PREG_SPLIT_NO_EMPTY));
$exB=array_unique (preg_split('//', $_POST['b'], -1, PREG_SPLIT_NO_EMPTY));
for ($i = 0; $i <= array_pop( array_keys($exA)); $i++) {
    for ($j = 0; $j <= array_pop( array_keys($exB)); $j++) {
        if($exB[$j] == $exA[$i]){
            $k++;
        }
    }
}
if($k >= (count($exB))){
    $o='Можно';
    }   else {
        $o='Нельзя';
    }
$output ="
    <html>
    <head>
    <title>Проверка</title>
    </head>
    <body>
    Из букв, входящих в слово А, составить слово В - $o <br />
    <ul>";
    echo $output;
?>
</BODY> 
</HTML>