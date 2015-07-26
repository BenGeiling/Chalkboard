<?php
	$content = $_POST['content']; //get posted data
	
	$File = "wall.txt"; 
	$Handle = fopen($File, 'w');
	fwrite($Handle, $content); 
	fclose($Handle); 

	echo 1;
?>
