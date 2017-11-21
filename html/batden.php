<?php
   echo "turn on pusher";
   exec('mosquitto_pub -d -u pusher -P 1 -t test -m "pusher on"');
?>
