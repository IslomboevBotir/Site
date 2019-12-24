<?php
 session_start();
?>
<html>
<head>
<title>Главная страница</title>
</head>
<style type="text/css">
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
#reg{
	margin-top:80px;
	font-size: 45px;	
	font-family: Gill Sans, sans-serif;
	text-align:center;
}
#cen{
	text-align:center;	
	font-size: 25px;
}
input[type="text"] {
	border-radius: 10px;
	outline: none;
	background: #ffffff !important;	
	height: 34px;
   	width: 180px;
	color: black;
   	font-size: 18px;
   	font-family: calibri;
}
input[type="password"] {
	border-radius: 10px;
	outline: none;
	background: #ffffff !important;	
	height: 34px;
   	width: 180px;
	color: black;
   	font-size: 18px;
   	font-family: calibri;
}
input[type="submit"] {
	border-radius: 10px;
	outline: none;
	background: #ffffff !important;	
	height: 34px;
   	width: 180px;
	color: black;
   	font-size: 18px;
   	font-family: calibri;
}
</style>
<body>

<form action="testreg.php" method="post">
  <p id="cen">
   <label><b>Ваш логин:</b></label><br /><br />
   <input name="login" type="text" size="15" maxlength="15"><br /><br />
  </p>
   <p id="cen">
   <label><b>Ваш пароль:</b></label><br /><br />
   <input name="password" type="password" size="15" maxlength="15"><br /><br />
  </p>
  <p id="cen">
   <input type="submit" name="submit" value="Войти">
   <br>
  </p></form>
<br>
<?php
 if (empty($_SESSION['login']) or empty($_SESSION['id'])){
    echo "<p id=\"cen\">"."Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>"."</b>"."</p>";
  }
 else{
    echo "<p id=\"cen\">"."Вы вошли на сайт, как ".$_SESSION['login']."<br><a  href='https://www.google.com'>Эта ссылка доступна только  зарегистрированным пользователям</a>"."</b>"."</p>";
  }
?>
</body>
</html>
