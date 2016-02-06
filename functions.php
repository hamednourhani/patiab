<?php
add_action( 'wp_enqueue_scripts', 'enqueue_nuvo_child_theme_styles');
function enqueue_nuvo_child_theme_styles() {
    wp_enqueue_style('nuvo-chill-style', get_stylesheet_uri());
}

add_action( 'admin_enqueue_scripts','patiab_rtl_editor' );
function patiab_rtl_editor(){
	
	wp_enqueue_style('rtl-editor',get_stylesheet_directory_uri().'/css/editor-rtl.css');
}
if(function_exists("vc_set_template_dir")){
	vc_set_template_dir(get_stylesheet_directory()."/vc_templates/");
}
