<html>
	<head>
		<title>Rap</title>
		<link rel="stylesheet" href="styles.css" type="text/css">
	</head>
	<body>
	<div class="container">
		<div class="nav_bar">
			<?php require_once "menu.inc.php";
		?>
		</div>
		<div class="header">
		</div><br />
		<div class="content">
<?php
	require_once "lib.inc.php";
	$id = $_GET['id'];
	switch($id){
		case "Home":
			include "index.php";break;
		case "page1":
			include "Page1.php";break;
		case "page2":
			include "Page2.php";break;
		case "reg":
			include "reg.php";break;
		case "page4":
			include "Page4.php";break;
		case "vhod":
			include "vhod.php";break;	
	}
	echo $menu['page1'];
	if($id == $menu['page1']){
?>
		​	<p id="text_white"><b>EMINEM ВЫПУСТИЛ НОВУЮ ПЕСНЮ И ПРЕЗЕНТОВАЛ ОБЛОЖКУ «REVIVAL» НА ЗДАНИИ В РОДНОМ ГОРОДЕ</b></p>
			<p id="image_center"><img src="images/9523.jpg"></p>
			<p id="text_white"><b>ДО РЕЛИЗА ДОЛГОЖДАННОГО АЛЬБОМА ОТСАЁТСЯ ВСЁ МЕНЬШЕ ВРЕМЕНИ</b></p>
			<p><span id="red_row">Девятый</span> студийный альбом Eminem «Revival» выйдет ровно через неделю, а, значит, самое время для нового этапа промо-кампании. На этот раз нам представили сразу и новый сингл, и обложку пластинки. Новый сингл «Untouchable» – серьезное политическое высказывание, которое композиционно разделено на две части, абсолютно разные по настроению. После беглого прослушивания сказать можно лишь то, что по крайней мере в текстовом плане Эминем все еще на высоте.</p>
			<p><span id="red_row">А</span> вот так будет выглядеть обложка альбома «Revival», треклист которого вызвал неоднозначную реакцию у фанатов. Эминем представил ее в виде проекции на здании  в родном Детройте.</p>
			<p id="image_center"><img src="images/11766.jpg"></p>
			<p id="text_white"><b>ЭМИНЕМ ПОКАЗАЛ ТРЕКЛИСТ СВОЕГО НОВОГО АЛЬБОМА — И В НЁМ КУЧА ИМЕНИТЫХ ГОСТЕЙ</b></p>
			<p>Сегодня Эминем выложил в инстаграм треклист своего грядущего альбома «Revival», выход которого намечен на 15 декабря.</p>
			<p id="image_center"><img src="images/11738.JPG"></p>
<?php
		require "func.lib.php";
		define(@GUEST, "guest.txt");
		if($_SERVER['REQUEST_METHOD']=="POST" and  !empty($_POST["comment"]) and !empty($_POST["fname"])){
			$fname = filter($_POST["fname"]);
			$comment = filter($_POST["comment"]);
			$str = '<span id="p">'.$fname.'</span>'."<br />".$comment."<hr>"."\r\n";
			$f = fopen(GUEST, "a");
			fwrite($f, $str);
			fclose($f); 
			header("Location: ".$_SERVER['PHP_SELF']);
			exit();	
		}
?>
			<hr>
			<h2>Оставьте ваше мнение о нашем сайте.</h2>
			<form method="post">
				<p>Логин:</p> 
				<input type="text" name="fname" required>
				<br><br>
				<textarea name="comment" style="width:500px; height:150px;" required></textarea>
				<br><br>
				<input type="submit" value="Написать!">
				<hr>
			</form>
<?php
		if(file_exists(GUEST)){
			$people = file(GUEST);
			echo "<br>";
			$i=1;
			foreach($people as $person){
				echo $i++.") ".$person."<br>";	
			}
		}
	}
?>
			</div><br />
   			<div class="footer">
			</div>
		</div>
	</body>
</html>
