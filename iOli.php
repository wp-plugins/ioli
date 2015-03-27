<?php

/*
Plugin Name: iOli
Plugin URI: https://ioli.ru
Description: A plugin that replaces shared links with iOli short urls and gives you the option of placing a widget on your site that shows your popular or most recent iOlimarks, or the top results from a search of all currently popular iOli links.  Please visit the plug-in settings page to authorize your iOli account.  For the widget, please find 'iOli iOlimarks' under the Available Widgets area.
Version: 1.3
Author: iOli
Author URI: https://ioli.ru/v1/
*/
	include("iOli.class.php");

	if(is_admin()) {
		add_action('admin_menu', array('PUS_Short','admin_menu'));
		add_action('admin_init', array('PUS_Short','admin_setting'));
	 	add_action('admin_enqueue_scripts', array('PUS_Short','admin_css'));
	 	add_action('admin_enqueue_scripts', array('PUS_Short','admin_js'));
		register_activation_hook(__FILE__, array('PUS_Short','install'));	 	
		register_deactivation_hook(__FILE__, array('PUS_Short','uninstall')); 		
	}
	add_action('widgets_init', array('PUS_Short','register_widget'));			 	
	add_action('wp_enqueue_scripts', array('PUS_Short','js'));
	add_action('wp_enqueue_scripts', array('PUS_Short','css'));
	add_action( 'add_meta_boxes', array('PUS_Short','add_to_post'), 10, 2 );
	PUS_Short::start(get_option('shortener_settings'));