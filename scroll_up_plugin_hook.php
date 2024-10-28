<?php 
/*
Plugin Name: Easy Scroll To Top
Plugin URI: http://wordpress.org/plugins/easy-scroll-to-top/
Description: Easily scroll up to the top of your website pages.
Author: Ariful Islam
Author URI: https://www.linkedin.com/in/ariful-islam-cse/
Version: 1.1
*/

// Calling latest jquery from wordpress.

function latest_jquery_from_wordpress(){
	wp_enqueue_script('jquery');
}
add_action('init','latest_jquery_from_wordpress');

//some set up

define('ES_TO_TOP_PLUGIN_PATH', WP_PLUGIN_URL. '/'. plugin_basename(dirname(__FILE__)).'/');

//Adding plugin javascript active files
wp_enqueue_script('es_to_top_easing', ES_TO_TOP_PLUGIN_PATH.'js/jquery.easing.js', array('jquery') );
wp_enqueue_script('es_to_top_main', ES_TO_TOP_PLUGIN_PATH.'js/jquery.scrollUp.min.js', array('jquery') );
wp_enqueue_script('es_to_top_active', ES_TO_TOP_PLUGIN_PATH.'js/active.js', array('jquery') );
wp_enqueue_style('es_to_top_style', ES_TO_TOP_PLUGIN_PATH.'css/style.css');
