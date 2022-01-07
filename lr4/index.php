<!DOCTYPE html>
<html lang="en">
<div id="z">
      <div id="okno"><br>
        Администратор:<br>
        Логин - admin<br>
        Пароль - admin<br><br>
        Оператор:<br>
        Логин - shamil<br>
        Пароль - shamil<br>
        <a href="" class="close"><img src="http://cdn.onlinewebfonts.com/svg/img_127536.png" width="20" alt=""></a>
      </div>
    </div>
<adm> <a href="#z"><img src="https://99px.ru/sstorage/41/2016/09/image_411309160814048826585.jpg" width="70" alt=""></a></adm> 
<body align="center">
<style>
       #z {
        position: absolute;
        top: 25px; 
        right: 135px;
        display: none;
      }
      #okno {
        width: 120px;
        height: 150px;
        text-align: center;
        padding: 1em;
        border: 1px solid #CCC;
        border-radius: 1em;
        color: #000;
        position: absolute;
        top: -2px; 
        right: -2px;
        background: #fff;
        opacity: 1;
      }
      #z:target {display: block;}
      .close {
        position: absolute;
        right: 18.5px;
        top: 0.4px;
        width: 2px;
        height: 2px;
        }
    .close:hover {
    opacity: 0.5;
    
         
      }
            body {
              background-image: url('er.gif');
              background-repeat: no-repeat;
              background-size: 130%, 100%;
            }
            div {
              /* Определим размер и выравнивание */
              display: inline-block;
              text-align: center;
              opacity: 0.7;
              background: #fff;
              padding: 0.55em;
              border: 0.5px solid #CCC;
              border-radius: 1em;
            }
            adm {
              /* Определим размер и выравнивание */
              position: absolute;
              background-repeat: no-repeat;
              background-size: 100%, 100%;
              top: 5px; 
              right: 35px;
            }
</style>

<br>
<div >
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h2 align="center">Авторизация</h2>
    
    <p align="left">
    Введите Логин: <input type="text" size=21 name="user"> <br><br>
    Введите Пароль: <input type="password" name="pass"> <br></p>
   <p align="center"><input type="submit" name="come" value="Войти">
    <input type="reset" name="reset" value="Очистить"></p>
</form>
<?php
require_once 'connect1.php';
if (isset($_POST["come"])) {
    $link = mysqli_connect($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу" . mysqli_error($link));
    $user = $link->query("SELECT id_u, username, password, type FROM users");
    // Ввод
    $username = $_POST["user"];
    $password = $_POST["pass"];
    // Для индитификации входа
    $errFlag = false;
    // Проверка вводимых данных
    while ($data = mysqli_fetch_array($user)) {
        $usernameBD = $data['username'];
        $passwordBD = $data['password'];
        $typeBD = $data['type'];
        $idUserBD = $data['id_u'];

        if ($username === $usernameBD && md5($password) === $passwordBD) {
            $errFlag = true;
            session_start();
            $_SESSION['type'] = $typeBD;
            $_SESSION['id_u'] = $idUserBD;
            break;
        } else
            $errFlag = false;
    }

    if ($errFlag && $_SESSION['type'] == 1)
        header("Refresh:0; url=film.php");
    elseif ($errFlag && $_SESSION['type'] == 2)
        header("Refresh:0; url=filmAdm.php");
    else
        echo "Логин или пароль введен не верно";

}
?>
<br>
</body>
</html>