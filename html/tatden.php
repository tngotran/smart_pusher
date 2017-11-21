<?php
	echo "pusher off";
	exec('mosquitto_pub -d -u pusher -P 1 -t test -m "push off"');
?>
