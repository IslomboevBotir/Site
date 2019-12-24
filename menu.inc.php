<?php
error_reporting(E_ERROR);
require_once "lib.inc.php";
$menu = array(
	"Главная"=>"index.php", 
	"Новости"=>"index.php?id=page1", 
	"Топ 20 русских альбомов"=>"index.php?id=page2", 
	"Регистрация"=>"index.php?id=reg", 
	"Вход"=>"index.php?id=vhod", 
)
?>
	  <?php
	  getMenu($menu);
	  ?>
