<html>
<head>
<title>Регистрация</title>
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
</head>
<body>
<div class="content">
  <p id="reg"><b>Регистрация</b></p><br /><br />
 <form action="save_user.php" method="post">
    <p id="cen">
      <label><b>Ваш логин:</b><br /><br />
      </label>
      <input name="login" type="text" size="15" maxlength="15"><br /><br />
    </p>
    <p id="cen">
      <label><b>Ваш пароль:</b><br /><br />
      </label>
      <input name="password" type="password" size="15" maxlength="15"><br /><br />
    </p>
   <p id="cen">
      <input type="submit" name="submit" value="Зарегистрироваться">
    </p>
  </form>
</div>
</body>
</html>
