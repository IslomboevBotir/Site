<?php
    session_start();
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (empty($login) or empty($password)){
  show_page ("<div class=\"content\">"."<b>"."Вы ввели не всю информацию, вернитесь назад и заполните все поля!"."</b>"."</div>");
  	exit();
  }
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
$login = trim($login);
$password = trim($password);
include ("bd.php");
$result = mysqli_query($db,"SELECT * FROM users WHERE login='{$login}'"); 
$myrow = mysqli_fetch_array($result);
if (empty($myrow['password'])){
  show_page ("<div class=\"content\">"."<b>"."Извините, введённый вами login или пароль неверный"."</b>"."</div>");
  }
else{
  if ($myrow['password']==$password) {
	$_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
    echo "<div class=\"content\">"."<b>"."Вы успешно вошли на сайт! <a href='index.php'>Главная страница</a>"."</b>"."</div>";
    }
 else {
    show_page ("<div class=\"content\">"."<b>"."Извините, введённый вами login или пароль неверный"."</b>"."</div>");
    	}
   	}
function show_page($value){
	echo'<!DOCTYPE html>
<html>
<head>
	<title>Проверка регистрации</title>
	<link rel="stylesheet" type="text/css" href="testreg.css">
</head>
<body>
'.$value.'
</body>
</html>';
}

    ?>
