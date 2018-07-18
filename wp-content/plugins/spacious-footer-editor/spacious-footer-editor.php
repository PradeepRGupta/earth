<?php
/*
* Plugin Name: Spacious Footer Editor
* Plugin URI: https://sangams.com.np/toolbox/spacious-footer-editor/
* Description: A simple plugin to remove and modify Spacious (ThemeGrill) Theme footer credit text.
* Version: 2.1
* Author: Sangam Shrestha
* Author URI:  https://sangams.com.np
*/


defined('ABSPATH') or die('No script kiddies please!');

if (! function_exists('spacious_custom_credits')) {
	
	add_action('init','remove_spacious_default_credits');
	function remove_spacious_default_credits(){		
		remove_action('spacious_footer_copyright','spacious_footer_copyright');
	}
	
	add_filter('spacious_footer_copyright', 'spacious_custom_credits',10);
	function spacious_custom_credits(){
		$credit_value = '<div class="copyright">Copyright &copy; ' . date('Y') . ' <a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" ><span>' . get_bloginfo( 'name', 'display' ) . '.</span></a> ' .get_option('spacious_custom_credits'). '</div>';
		echo $credit_value;
	}
	
}



if (! function_exists('spacious_custom_options')) {
	
	add_action('customize_register', 'spacious_custom_options', 100, 1);
	function spacious_custom_options( $wp_customize ) {
		
		$wp_customize->add_section('spacious_footer_options', array(
		'capabitity' => 'edit_theme_options',
		//'priority' => 0,
		'title' => __('Footer', 'spacious')
		));
	  
		$wp_customize->add_setting( 'spacious_custom_credits' , array(
		'default'     => '<br/>Configure in Appearance => Customize => Footer',
		'transport'   => 'refresh',
		'capability' => 'edit_theme_options',
		'type'        => 'option',
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'spacious_custom_credits', array(
		'label'        => __( 'Footer Text', 'spacious' ),
		'section' => 'spacious_footer_options',
		'settings'   => 'spacious_custom_credits',
		) ) );
	}
	
}
?>
