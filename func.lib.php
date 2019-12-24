<?php
function filter($post, $num=false){
	if($num==true){
	return 1*(strip_tags(trim($post)));
}	else{
	return strip_tags(trim($post));
	}
}
?>
