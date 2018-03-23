<?php
/*
Plugin Name: CleanFinalOutput.
Author: Fabio Vergani
*/

add_action('wp_head',function(){ob_start(function($buffer){return str_replace(' ','',$buffer);});},PHP_INT_MAX,0);
add_action('wp_footer',function(){ob_end_flush();},PHP_INT_MAX,0);
?>