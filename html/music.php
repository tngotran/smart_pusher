<?php
	$q = $_REQUEST["q"];
	if($q == "musicOn"){
	      shell_exec('./mp3player');
	}else if($q == "musicOff"){
	     exec('sudo pkill -f play');
	}
?>
