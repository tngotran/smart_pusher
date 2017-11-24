<?php
	$q = $_REQUEST["q"];
	if($q == "volumeUp"){
	      shell_exec('./vlUp');
	}else if($q == "volumeDown"){
	      shell_exec('./vlDown');
	}else if($q == "volumeMute")
	      shell_exec('./vlMute');
?>
