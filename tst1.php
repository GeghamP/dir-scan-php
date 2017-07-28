<?php
defined("MY_DIR") or define("MY_DIR","/");
function check($cur=__DIR__){
	$arr=scandir($cur);
	$arr=array_splice($arr,2);
	echo "<ul>";
	for($i=0;$i<count($arr);$i++){
		echo "<li><a href='#'>".basename($arr[$i])."<br>";
		if(is_dir($cur.MY_DIR.$arr[$i])){
			check ($cur.MY_DIR.$arr[$i]);
		}
		echo "</a></li>";
	}
	echo "</ul>";
}
check();

?>

