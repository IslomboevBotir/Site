<style>
*{
	margin: 0px;
	padding: 0px;	
}
body {
	background-image: url(images/nDg4grt8Ycc.jpg);
	background-repeat: no-repeat;
	-moz-background-size: 100%;
    -webkit-background-size: 100%;
    -o-background-size: 100%;
    background-size: 100%;
}
.content {
	background-color: gray;
	height: 30px;
	width: 720px;
	margin:0 auto;
	opacity: 0.7;
	color: white;
	font-size:20px;
	text-align:center;
}
a{
	text-decoration:none;
	color: white;
}
#acent{
	text-align:center;
}
</style>
<?php
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (empty($login) or empty($password)){
    exit ("<div class=\"content\">"."<b>"."Вы ввели не всю информацию, вернитесь назад и заполните все поля!"."</b>"."</div>");
  }
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
$login = trim($login);
$password = trim($password);
include ("bd.php");
$sql = mysqli_query($db, "SELECT * FROM users WHERE login='$login'");
$result = mysqli_fetch_array($sql);
if ($result) {
  exit ("<div class=\"content\">"."<b>"."Извините, введённый вами логин уже зарегистрирован. Введите другой логин."."</b>"."</div>");
  }
$result2 = mysqli_query ($db, "INSERT INTO users (login,password) VALUES('$login','$password')");
if ($result2=='TRUE'){
  echo "<div class=\"content\">"."<b>"."Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <br /><br /><p id=\"acent\"><a href='index.php'>Перейти на главную страницу</a></p>"."</b>"."</div>";
  }
else {
  echo "<div class=\"content\">"."<b>"."Ошибка! Вы не зарегистрированы."."</b>"."</div>";
  }
?>
