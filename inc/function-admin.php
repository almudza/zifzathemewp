<?php

/*

@package zifza theme
	=================================
				ADMIN PAGE
	==================================


*/

function zifza_add_admin_page(){

	//Generate zifza admin page
	add_menu_page( 'zifz theme options', 'Zifza', 'manage_options' , 'zifza', 'zifza_theme_create_page', /*get_template_directory_uri() . '/img/sunset-icon.png'*/ 'dashicons-admin-customizer', 110 );

	//generate sunset admin sub pages
	add_submenu_page('zifza','Zifza Theme Opstions','General', 'manage_options','zifza','zifza_theme_create_page');

	add_submenu_page('zifza','Zifza CSS Opstions','Custom CSS','manage_options','zifza_css','zifza_theme_settings_page');

	//Activate custom settings
	add_action('admin_init','zifza_custom_settings');
}

add_action( 'admin_menu', 'zifza_add_admin_page');

function zifza_custom_settings() {
	register_setting('zifza-settingd-group','first_name');
	add_settings_section('zifza-sidebar-options','Sidebar Opstions','zifza_sidebar_options','zifza');
}

function zifza_sidebar_options() {
	echo "Customize your sidebar informations";
}

function zifza_theme_create_page() {
	//generation of our admin page
	require_once( get_template_directory(). '/inc/templates/zifza-admin.php');

}

function zifza_theme_settings_page() {
	//generation of our admin page

}