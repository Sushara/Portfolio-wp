<?php

function portfolio_script_enqueue(){
    wp_enqueue_style('customstyle',get_template_directory_uri() . '/css/portfolio.css', array(), '1.0.0', 'all');               //wp hook to call the stylesheet
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/portfolio.js', array(), '1.0.0', true); //the last boolean parameter is to devide whether the js should be printed in the end of the body or not for 'true' value it will get printed in the end of the body. default value is 'false'

}

add_action('wp_enqueue_scripts', 'portfolio_script_enqueue');  // this hook gives us the ability to connect wp execution process(when wp does something) with our custom functions

function porfolio_theme_setup(){
    add_theme_support('menus');

    register_nav_menu('primary','Primary header navigation');
    register_nav_menu('secondary','Footer navigation');
}

// add_action('after_setup_theme','porfolio_theme_setup');  //exectues after the theme setup

add_action('init','porfolio_theme_setup');  //exectues after the theme initialization