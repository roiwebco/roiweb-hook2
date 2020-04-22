<?php
/*
Plugin Name: Custom Global JS & CSS Hook
Plugin URI: https://roiweb.co
Description: Custom global css & js per device | Hook 002
Author: ROIWEB.CO
Author URI: https://roiweb.co
Version: 1.0.0
*/
//Exit if accessed directly
if (!defined('ABSPATH'))exit;
//Global css
function rwch2_global_css(){	
	//Main CSS
	if(!is_admin()){
		//Main CSS
		wp_enqueue_style( 'main-global-css',
		plugins_url('assets/css/main-global.css', __FILE__ ),
		array(),'1.0');
		//Custom CSS
		wp_enqueue_style( 'custom-global-css',
		plugins_url('assets/css/custom-global.css', __FILE__ ),
		array(),'1.0');
		//Main JS
		wp_enqueue_style( 'main-global-js',
		plugins_url('assets/js/main-global.js', __FILE__ ),
		array(),'1.0');
		//Custom CSS
		wp_enqueue_style( 'custom-global-js',
		plugins_url('assets/js/custom-global.js', __FILE__ ),
		array(),'1.0');
	}
	if(!is_admin() && wp_is_mobile()){		
		//Mobile CSS
		wp_enqueue_style( 'mobile-global-css',
		plugins_url('assets/css/mobile-global.css', __FILE__ ),
		array(),'1.0');
		//Mobile JS
		wp_enqueue_script( 'mobile-global.js',
		plugins_url('assets/js/mobile-global.js', __FILE__ ),
		array(),'1.0');
	}else{		
		//Laptop CSS
		wp_enqueue_style( 'laptop-global-css',
		plugins_url('assets/css/laptop-global.css', __FILE__ ),
		array(),'1.0');
		//Laptop JS
		wp_enqueue_script( 'laptop-global-js',
		plugins_url('assets/js/laptop-global.js', __FILE__ ),
		array(),'1.0');
	}
}
add_action('wp_enqueue_scripts','rwch2_global_css');