<?php
function getMenu($menu, $vertical=false){
	if($vertical)
		foreach ($menu as $link=>$href){
			echo "<p><a href=\"$href\">", $link, '</a></p>';
		}
	else
		foreach ($menu as $link=>$href){
			echo "<a href=\"$href\">", $link, '</a> ';
		}
}
function getTable($cols=10, $rows=10, $color="yellow"){
	static $count = 0;
	echo '<table border="1" align="center" width="100%">';
	for($tr=1; $tr<=$rows; $tr++){
		echo "<tr>";
		for($td=1; $td<=$cols; $td++){
			if($td==1 or $tr==1){
				echo "<th style='background-color:$color'>", $tr * $td, "</th>";
			}else{
				echo "<td>", $tr * $td, "</td>";
			}
		}	
		echo "</tr>";
	}
	echo '</table>';
	$count++;
	$GLOBALS["count"] = $count;
}
?>
