<?php
	$q = $_REQUEST["q"];
	if($q == "lightOn"){
		exec('mosquitto_pub -d -u pusher -P 1 -t test -m "pusher on"');
	}else if($q == "lightOff"){
		exec('mosquitto_pub -d -u pusher -P 1 -t test -m "pusher off"');
	}

?>
