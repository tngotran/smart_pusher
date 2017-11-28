# smart_pusher
sudo visudo
add this line to the very bottom

www-data ALL=NOPASSWD: ALL


>> ctrl + X
>> Y
>> enter


note 2: amixer scontrols 
run this command to know the name
error: amixer: Unable to find simple control 'Master', 0

etc/group
edit to audio:x:29:pi,pulse,www-data

note3: the install for MQTT to control remote plug or button pusher check this link
https://tngotran.wordpress.com/2017/11/14/wifi-button-pusher-by-esp8266/
